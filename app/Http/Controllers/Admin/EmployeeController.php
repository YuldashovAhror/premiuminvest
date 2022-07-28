<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\EmployeeCompany;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('admin.employee.index');
    }
    
    public function create()
    {
        return view('admin.employee.create');
    }
    
    public function store(Request $request)
    {
        $employee = New Employee();
        $employee->type = $request->type;
        $employee->name_uz = $request->name_uz;
        $employee->name_ru = $request->name_ru;
        $employee->name_en = $request->name_en;
        $employee->save();

        if($request->companies){
            foreach($request->companies as $req_company){
                $company = New EmployeeCompany();
                $company->employee_id = $employee->id;
                $imageName = Str::random(10).'.'.$req_company->extension();
                $req_company->move(public_path('images/employee'), $imageName);
                $company->photo = 'images/employee/'.$imageName;
                $company->save();
            }
        }

        return view('admin.employee.index');
    }
}
