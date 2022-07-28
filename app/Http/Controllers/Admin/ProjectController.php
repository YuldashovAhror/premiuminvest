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
            $request->file('photo')->move(public_path('/images/photo'), $img_name);
            $project->photo = '/images/photo/'.$img_name;
        }
        $project->name = $request->name;
        $project->less_description_uz = $request->less_description_uz;
        $project->less_description_ru = $request->less_description_uz;
        $project->less_description_en = $request->less_description_en;
        $project->description_uz = $request->description_uz;
        $project->description_ru = $request->description_ru;
        $project->description_en = $request->description_en;
        $project->date_from_to = $request->date_from_to;
        $project->roi = $request->roi;
        $project->profit = $request->profit;
        $project->profitability = $request->profitability;
        $project->apart_qty = $request->apart_qty;
        $project->floors = $request->floors;
        $project->apart_size = $request->apart_size;
        $project->commerce_size = $request->commerce_size;
        $project->fin_income = $request->fin_income;
        $project->fin_earth = $request->fin_earth;
        $project->fin_cmr = $request->fin_cmr;
        $project->fin_overhead = $request->fin_overhead;
        $project->fin_profit_before_tax = $request->fin_profit_before_tax;
        $project->fin_profitability_before_tax = $request->fin_profitability_before_tax;
        $project->fin_profit_after_tax = $request->fin_profit_after_tax;
        $project->fin_profitability_after_tax = $request->fin_profitability_after_tax;
        $project->fin_investments = $request->fin_investments;
        $project->fin_roi_before_tax = $request->fin_roi_before_tax;
        $project->fin_roi_after_tax = $request->fin_roi_after_tax;
        $project->fin_land_plot = $request->fin_land_plot;
        $project->end_date = $request->end_date;
        $project->area = $request->area;
        $project->realizable_area = $request->realizable_area;
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
        $project->less_description_uz = $request->less_description_uz;
        $project->less_description_ru = $request->less_description_uz;
        $project->less_description_en = $request->less_description_en;
        $project->description_uz = $request->description_uz;
        $project->description_ru = $request->description_ru;
        $project->description_en = $request->description_en;
        $project->date_from_to = $request->date_from_to;
        $project->roi = $request->roi;
        $project->profit = $request->profit;
        $project->profitability = $request->profitability;
        $project->apart_qty = $request->apart_qty;
        $project->floors = $request->floors;
        $project->apart_size = $request->apart_size;
        $project->commerce_size = $request->commerce_size;
        $project->fin_income = $request->fin_income;
        $project->fin_earth = $request->fin_earth;
        $project->fin_cmr = $request->fin_cmr;
        $project->fin_overhead = $request->fin_overhead;
        $project->fin_profit_before_tax = $request->fin_profit_before_tax;
        $project->fin_profitability_before_tax = $request->fin_profitability_before_tax;
        $project->fin_profit_after_tax = $request->fin_profit_after_tax;
        $project->fin_profitability_after_tax = $request->fin_profitability_after_tax;
        $project->fin_investments = $request->fin_investments;
        $project->fin_roi_before_tax = $request->fin_roi_before_tax;
        $project->fin_roi_after_tax = $request->fin_roi_after_tax;
        $project->fin_land_plot = $request->fin_land_plot;
        $project->end_date = $request->end_date;
        $project->area = $request->area;
        $project->realizable_area = $request->realizable_area;
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
