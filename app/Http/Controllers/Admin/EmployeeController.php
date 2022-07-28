<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        dd($request->all());
        return view('admin.employee.create');
    }
}
