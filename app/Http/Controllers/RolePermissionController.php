<?php

namespace App\Http\Controllers;

use App\Helpers\CompanyHelper;
use App\Models\Permission;
use App\Models\Role;
use App\Models\RolePermission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RolePermissionController extends Controller
{
    function index()
    {
        $rolePermissions = Role::where('company_id', CompanyHelper::getCompanyFromHost()->id)->orderBy('created_at', 'desc')->get();
        return view('admin.pages.settings.organization.permissions.list', compact('rolePermissions'));
    }

    public function create()
    {
        $permissions = Permission::all();
        return view('admin.pages.settings.organization.permissions.create', ['permissions' => $permissions]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        if (empty($req->permission)) {
            return redirect()->back()->with('error', 'Please select atleast one permission');
        }

        $role_data = [
            'name' => $req->name,
            'description' => $req->description,
            'user_id' =>  Auth::user()->id,
            'company_id' => CompanyHelper::getCompanyFromHost()->id
        ];

        $role = Role::create($role_data);

        if ($role instanceof Role) {
            foreach ($req->permission as $key => $p) {
                RolePermission::create([
                    'role_id' => $role->id,
                    'permission_id' => $p,
                    'user_id' => Auth::user()->id,
                    'company_id' => CompanyHelper::getCompanyFromHost()->id
                ]);
            }
            return redirect()->route('permission_role.list')->with('success', 'Role added successfully');
        } else {
            return redirect()->back()->with('error', 'Role creation failed');
        }
    }
}
