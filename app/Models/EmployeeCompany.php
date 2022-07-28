<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeCompany extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'photo',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
