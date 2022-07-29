<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProjectProperties;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function projectProperties()
    {
        return $this->hasMany(ProjectProperties::class);
    }

}
