<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProjectProperties;

class ProjectPropertyItems extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function project_property()
    {
        return $this->belongsTo(ProjectProperties::class, 'project_property_id');
    }
}
