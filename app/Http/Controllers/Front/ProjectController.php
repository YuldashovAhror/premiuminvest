<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session()->get('locale') == ''){
            session()->put('locale', 'ru');
            app()->setLocale('ru');
        }else{
            app()->setLocale(session()->get('locale'));
        }  
        $lang = session()->get('locale');

        $projects = Project::all();

        $left_employees = Employee::where('type', 1)->get();
        $right_employees = Employee::where('type', 2)->get();

        return view('front.index',[
            'projects' => $projects,
            'lang' => $lang,
            'left_employees' => $left_employees,
            'right_employees' => $right_employees,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(session()->get('locale') == ''){
            session()->put('locale', 'ru');
            app()->setLocale('ru');
        }else{
            app()->setLocale(session()->get('locale'));
        }  
        $lang = session()->get('locale');
        $project = Project::find($id);

        // dd($project->projectProperties[1]->projectPropertyItems);
        return view('front.single',[
            'project' => $project,
            'lang' => $lang
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
