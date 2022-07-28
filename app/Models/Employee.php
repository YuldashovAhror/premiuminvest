<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EmployeeCompany;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_uz',
        'name_ru',
        'name_en',
        'type',
    ];

    public function employeeCompany()
    {
        return $this->hasMany(EmployeeCompany::class);
    }
}
