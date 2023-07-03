<?php

namespace App\Http\Controllers;

use App\Mail\NewVendorMail;
use App\Models\Company;
use App\Models\Request as ModelsRequest;
use App\Models\User;
use App\Models\Vendor;
use App\Models\VendorCompany;
use App\Models\VendorRequest;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

class VendorController extends Controller
{
    function create()
    {
        // return "Hello World";
        return view('public.pages.register.vendor-register');
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
                'user_id' => $user->id,
                'preference_category' => $req->preference_category,
                'preference_region' => $req->preference_region,
                'vendor_type' => $req->vendor_type,
                // 'logo' => $req->logo->originalName,
            ]);
        } catch (QueryException $exc) {
            return redirect()->route('vendor.create')->with('error', $exc . 'duplicate entry found for vendor')->withInput();
        }

        if ($user instanceof User) {
            $domain = request()->getHost();
            $company = Company::where('web_url', $domain)->first();
            $r = ModelsRequest::create([
                'vendor_id' => $user->vendor->id,
                'company_id' => $company->id
            ]);

            if ($r instanceof ModelsRequest)
                Mail::to($company->user->email)->send(new NewVendorMail($user));
            return redirect()->route('vendor.create')->with('success', 'your vendor Account Created Successfully');
        } else {
            return redirect()->route('vendor.create')->with('error', 'Something Went Wrong');
        }
    }


    function login()
    {
        return view('public.pages.login.vendor-login');
    }

    function login_process(Request $req)
    {
        $data = $req->only('username', 'password');

        if (Auth::attempt($data)) return redirect()->route('vendor.dashboard');

        return redirect()->back()->with('error', 'Username or password is wrong');
    }

    function dashboard()
    {
        return "vendor Dashboad ";
    }


}
