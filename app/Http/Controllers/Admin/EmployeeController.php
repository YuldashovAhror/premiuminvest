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
        $employees = Employee::all();
        return view('admin.employee.index', compact('employees'));
    }
    
    public function create()
    {
        return view('admin.employee.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            // 'name_*' => 'required',
            'type' => 'required',
            // 'companies' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

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

        session()->flash('employee-store','Employee added successfully.');

        return redirect()->route('admin.employee'); 
    }

    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('admin.employee.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
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

        session()->flash('employee','Employee updated successfully.');

        return redirect()->route('admin.employee');
    }

    public function deleteImg($id){
        $company = EmployeeCompany::find($id);
        $company->delete();
        if(file_exists($company->photo)) {
            unlink($company->photo);
        }

        session()->flash('delete-img','Image deleted successfully.');

        return redirect()->back();
    }

    public function destroy($id)
    {
        $employee = Employee::find($id);
        
        if($employee->employeeCompany){
            foreach($employee->employeeCompany as $company){
                $company->delete();
                if(file_exists($company->photo)) {
                    unlink($company->photo);
                }
            }
        }
        
        $employee->delete();

        session()->flash('employee-delete','Employee deleted successfully.');

        return redirect()->route('admin.employee');
    }
}
