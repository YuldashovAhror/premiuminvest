<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Data;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
//        dd('aaa');
        $data = Data::all();
        return view('admin.usindex')->layout('layouts.admin');
    }
}
