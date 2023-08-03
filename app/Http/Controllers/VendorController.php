<?php

namespace App\Http\Controllers;

use App\Helpers\BidHelper;
use App\Helpers\CategoryHelper;
use App\Helpers\CompanyHelper;
use App\Helpers\EventHelper;
use App\Helpers\UploadHelper;
use App\Mail\NewVendorMail;
use App\Models\Category;
use App\Models\Company;
use App\Models\Country;
use App\Models\Event;
use App\Models\ItemRPUModel;
use App\Models\Notice;
use App\Models\Participant;
use App\Models\Region;
use App\Models\Request as VendorRequest;
use App\Models\State;
use App\Models\User;
use App\Models\Vendor;
use App\Models\VendorCompany;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use stdClass;

class VendorController extends Controller
{
    function create()
    {
        $countries = Country::where(['company_id' => CompanyHelper::getCompanyFromHost()->id])->get();
        $categories = CategoryHelper::getCategories();
        $regions = Region::all();
        // return view('public.pages.register.vendor-register', compact('countries', 'categories', 'regions'));
        return view('public.pages.register.vendor-register', compact('countries', 'categories', 'regions'));
    }


    function updateToAll()
    {
        return view('admin.pages.vendor.update-to-all');
    }

    function store(Request $req)
    {
        try {
            $user =  User::create([
                'username' => $req->username,
                'password' => Hash::make($req->password),
                'email' => $req->email,
                'phone' => $req->phone,
                'landline' => $req->landline,
                'fax_number' => $req->fax_number,
                'registered_address' => $req->registered_address,
                'country_id' => $req->country_id,
                'state_id' => $req->state_id,
                'city' => $req->city,
                'pin_code' => $req->pin_code,
                'user_type' => USER_TYPES[1],

            ]);

            $user->vendor()->create([
                'company_type' => $req->company_type,
                'company_name' => $req->company_name,
                'contact_person' => $req->contact_person,
                'GSTIN' => $req->GSTIN,
                'establish_year' => $req->establish_year,
                'establish_year' => $req->establish_year,
                'mse_registration_number' => $req->mse_registration_number,
                'pan_tan' => $req->pan_tan,
                'user_id' => $user->id,
                'preference_category' => $req->preference_category[0],
                'preference_region' => $req->preference_region[0],
                'vendor_type' => $req->vendor_type,
                // 'logo' => $req->logo->originalName,
            ]);

            $user->vendor->categories()->attach($req->preference_category);
            $user->vendor->regions()->attach($req->preference_region);
        } catch (QueryException $exc) {
            return redirect()->route('vendor.create')->with('error',   'Username or email you are submiting is already exist try another')->withInput();
        }
        UploadHelper::uploadFile($req, $user->vendor->id);

        if ($user instanceof User) {
            $domain = request()->getHost();
            $company = Company::where('web_url', $domain)->first();
            $r = VendorRequest::create([
                'vendor_id' => $user->vendor->id,
                'company_id' => $company->id,
                'category_id' => $req->preference_category[0],
            ]);


            if ($r instanceof VendorRequest)
                Mail::to($company->user->email)->send(new NewVendorMail($user));
            return redirect()->route('vendor.create')->with('success', 'Your vendor Account Created Successfully');
        } else {
            return redirect()->route('vendor.create')->with('error', 'Something Went Wrong');
        }
    }

    function dashboard()
    {
        $upcomingEvents = Event::where(['company_id' => CompanyHelper::getCompanyFromHost()->id, 'status' => EVENT_STATUS[0]])->get()->count();

        $runningEvents = Event::where(['company_id' => CompanyHelper::getCompanyFromHost()->id, 'status' => EVENT_STATUS[1]])->get()->count();

        return view('vendor.pages.dashboard',  ['upcomingEvents' => $upcomingEvents,   'runningEvents' => $runningEvents,]);
    }

    function profile($id)
    {
        $v = Vendor::find($id);
        return view('admin.pages.vendor.profile', compact('v'));
    }


    public function getVendorsFromCategoryId(Request $req)
    {
        $cat_id = $req->cat_id;
        $vendors = Category::find($cat_id)->vendors;
        // $requests = VendorRequest::where(['category_id' => $cat_id, 'status' => REQUEST_STATUS[0]])->get();
        $vendorArray = [];
        foreach ($vendors  as $key => $vendor) {
            // dd($vendor->user);
            $vendorObj = new stdClass;
            $vendorObj->id = $vendor->id;
            $vendorObj->company_name = $vendor->company_name;
            $vendorObj->username =  $vendor->user->username;
            $vendorObj->phone =  $vendor->user->phone;
            $vendorObj->email =  $vendor->user->email;
            $vendorObj->profileUrl = route('vendor.profile', $vendor->id);

            array_push($vendorArray, $vendorObj);
        }
        return response()->json(['vendors' => $vendorArray, 'status' => true]);
    }

    public function upCommingEvents()
    {
        $events =  Auth::user()->vendor->events;
        return view('vendor.pages.upcomming-events', compact('events'));
    }
    public function runningEvents()
    {
        $events =  Auth::user()->vendor->events;
        return view('vendor.pages.running-events', compact('events'));
    }

    public function postedEventInfo($eId)
    {
        $event = Event::find($eId);
        $participates = Participant::where(['event_id' => $eId, 'vendor_id' => Auth::user()->vendor->id])->get();
        return view('vendor.pages.post-event-info', compact('participates', 'event'));
    }

    public function noticeNews()
    {
        $notices = Notice::all();
        return view('vendor.pages.notice-news', compact('notices'));
    }
    public function detailNews($id)
    {
        $notice = Notice::find($id);
        return view('vendor.pages.news-details', compact('notice'));
    }

    public function helpSupport()
    {
        return view('vendor.pages.help-support');
    }

    public function liveAuction($eventId)
    {
        $event = Event::where('id', $eventId)->first();
        // dd($event->items);
        return view('vendor.pages.live-auction', compact('event'));
    }
    public function liveAuctionFilterByRegion(Request $r)
    {
    }
}
