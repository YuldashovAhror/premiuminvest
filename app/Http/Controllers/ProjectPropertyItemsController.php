<?php

namespace App\Http\Controllers;

use App\Models\ProjectProperties;
use App\Models\ProjectPropertyItems;
use Illuminate\Http\Request;

class ProjectPropertyItemsController extends Controller
{
    public function index()
    {
        $projects_property = ProjectProperties::orderBy('id')->get();
        $projects_property_items = ProjectPropertyItems::orderBy('id')->get();

        return view('admin.project.project-property-item', ['projects_property' => $projects_property, 'projects_property_items' => $projects_property_items]);
    }

    public function store(Request $request)
    {
        ProjectPropertyItems::create($request->all());
        return back();
    }

    public function update(Request $request, $id)
    {
        ProjectPropertyItems::find($id)->update($request->all());
        return back();
    }

    public function destroy($id)
    {
        ProjectPropertyItems::find($id)->delete();
        return back();
    }
}
