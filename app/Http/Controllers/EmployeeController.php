<?php

namespace App\Http\Controllers;

use App\Helpers\CompanyHelper;
use App\Helpers\DepartmentHelper;
use App\Models\Department;
use App\Models\Employee;
use App\Models\EmployeeCategory;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use RoleHelper;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $employees = DB::table('employees')
            ->select('employees.id', 'roles.name as role', 'employees.employee_id', 'employees.designation', 'departments.name as department', 'users.name', 'users.phone', 'users.email', 'users.password')
            ->join('users', 'users.id', '=', 'employees.emp_user_id')
            ->join('roles', 'roles.id', '=', 'employees.role_id')
            ->join('departments', 'departments.id', '=', 'employees.department_id')
            ->get();
        return view('admin.pages.settings.organization.employee.list', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::where('user_id', Auth::user()->id)->get();
        $departments = Department::where('company_id', CompanyHelper::getCompanyFromHost()->id)->get();
        // dd($departments);
        return view(
            'admin.pages.settings.organization.employee.create',
            compact('roles', 'departments')
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        if (
            !DepartmentHelper::departmentExist()
            || !RoleHelper::roleExists()
            || !CompanyHelper::companyExist()
        ) {
            return redirect()->back()->with('error', 'Please add departments and Role details first !');
        }

        $name = $req->name;
        $email = $req->email;
        $username = $req->username;
        $password = $req->password;
        $phone = $req->phone;
        $role_id = $req->role_id;
        $department_id = $req->department_id;
        $designation = $req->designation;
        $emp_id = $req->employee_id;
        $cat_ids = $req->cat_ids;

        try {
            $user = User::create(['name' => $name, 'email' => $email, 'username' => $username, 'password' => Hash::make($password), 'phone' => $phone, 'role_id' => $role_id, 'user_type' => USER_TYPES[2]]);
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'email or username is already  in use , please try another'.$e)->withInput();
        }
        $emp = Employee::create([
            'role_id' => $role_id,
            'department_id' => $department_id,
            'designation' => $designation,
            'employee_id' => $emp_id,
            'user_id' => Auth::user()->id,
            'company_id' => CompanyHelper::getCompany()->id,
            'emp_user_id' => $user->id,
        ]);

        foreach ($cat_ids  as $cat) {
            EmployeeCategory::create([
                'category_id' => $cat,
                'employee_id' => $emp->id,
                'company_id' => CompanyHelper::getCompany()->id,
            ]);
        }
        return redirect()->route('employee.list')->with('success', 'Employee has been created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
