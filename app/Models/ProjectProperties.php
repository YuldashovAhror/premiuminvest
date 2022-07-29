<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;
use App\Models\ProjectPropertyItems;

class ProjectProperties extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }

    public function projectPropertyItems()
    {
        return $this->hasMany(ProjectPropertyItems::class, 'project_property_id');
    }
}
