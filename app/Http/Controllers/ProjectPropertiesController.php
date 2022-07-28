<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectProperties;
use Illuminate\Http\Request;

class ProjectPropertiesController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('id')->get();
        $projects_property = ProjectProperties::orderBy('id')->get();

        return view('admin.project.project-property', ['projects' => $projects,'projects_property' => $projects_property]);
    }

    public function store(Request $request)
    {
        ProjectProperties::create($request->all());
        return back();
    }

    public function update(Request $request, $id)
    {
        ProjectProperties::find($id)->update($request->all());
        return back();
    }

    public function destroy($id)
    {
        ProjectProperties::find($id)->delete();
        return back();
    }
}
