<?php

namespace App\Jobs;

use App\Models\Bid;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class SubmitBidJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    private $req;
    private $vendorId;
    public function __construct($request, $vendorId)
    {
        //
        $this->req = $request;
        $this->vendorId = $vendorId;

        // dd($this->req['event_id']);
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $bid = Bid::create([
            'event_id' => $this->req['event_id'],
            'item_id' => $this->req['item_id'],
            'item_r_p_u_model_id' => $this->req['item_rpu_id'],
            'bidding_price' => $this->req['bidding_price'],
            'capping_price' => $this->req['capping_price'] ?? 0,
            'region_id' => $this->req['region_id'] ?? 0,
            'vendor_id' =>  $this->vendorId
        ]);
        auth()->user()->vendor->bids()->attach($bid->id);

        $totalBids = Bid::where(['event_id' => $this->req['event_id'], 'item_id' => $this->req['item_id'], 'item_r_p_u_model_id' => $this->req['item_rpu_id']])->orderBy('bidding_price', 'asc')->get();
        $bidsWithCappingPrice = Bid::where(['event_id' => $this->req['event_id'], 'item_id' => $this->req['item_id'], 'item_r_p_u_model_id' => $this->req['item_rpu_id']])->orderBy('bidding_price', 'asc')->orderBy('capping_price', 'asc')->where('capping_price', '!=', '0')->get();
        $bidsWithoutCappingPrice = Bid::where(['event_id' => $this->req['event_id'], 'item_id' => $this->req['item_id'], 'item_r_p_u_model_id' => $this->req['item_rpu_id']])->orderBy('bidding_price', 'asc')->orderBy('capping_price', 'asc')->where('capping_price', '=', '0')->get();

        $bidsWithCappingPriceCount = count($bidsWithCappingPrice);
        $bidsWithoutCappingPriceCount = count($bidsWithoutCappingPrice);

        $leasStatusValue = 1;
        if ($bidsWithCappingPriceCount > 0) {
            $leasStatusValue = 1;
            foreach ($bidsWithCappingPrice as $key => $bid) {
                $bid->update(['least_status' =>  $leasStatusValue]);
                $leasStatusValue += 1;
            }
        }

        if ($bidsWithoutCappingPriceCount > 0) {
            foreach ($bidsWithoutCappingPrice as $key => $bid) {
                $bid->update(['least_status' =>  $leasStatusValue]);
                $leasStatusValue += 1;
            }
        }
    }
}
