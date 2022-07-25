<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.project.index',[
            'projects' => $projects
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Project();
        
        if(!empty($request->file('photo'))){
            
            $img_name = Str::random(10).'.'.$request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->move(public_path('/images/type'), $img_name);
            $project->photo = '/images/type/'.$img_name;
        }
        $project->name = $request->name;
        $project->less_description = $request->less_description;
        $project->description = $request->description;
        $project->investing_uz	= $request->investing_uz;
        $project->investing_ru	= $request->investing_ru;
        $project->investing_en	= $request->investing_en;
        $project->roi = $request->roi;
        $project->profit = $request->profit;
        $project->area = $request->area;
        $project->realizable_area = $request->realizable_area;
        $project->save();

        return redirect()->route('admin.project');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        return view('admin.project.edit',[
            'project' => $project
        ]);
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
        $project = Project::find($id);
        
        if(!empty($request->file('photo'))){
            
            $img_name = Str::random(10).'.'.$request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->move(public_path('/images/type'), $img_name);
            $project->photo = '/images/type/'.$img_name;
        }
        $project->name = $request->name;
        $project->less_description = $request->less_description;
        $project->description = $request->description;
        $project->investing_uz	= $request->investing_uz;
        $project->investing_ru	= $request->investing_ru;
        $project->investing_en	= $request->investing_en;
        $project->roi = $request->roi;
        $project->profit = $request->profit;
        $project->area = $request->area;
        $project->realizable_area = $request->realizable_area;
        $project->save();

        return redirect()->route('admin.project');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect()->route('admin.project');
    }
}
