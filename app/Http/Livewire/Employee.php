<?php

namespace App\Http\Livewire;

use App\Models\Employee as ModelsEmployee;
use Livewire\Component;

class Employee extends Component
{
    public $employees, $employeeId, $a = 'aas';

    public function add(){
        dd('added');
    }
    public function deleteModal($id)
    {
        dd($id);
        $this->employeeId = $id;
    }

    public function render()
    {
        $this->employees = ModelsEmployee::all();
        return view('livewire.employee')->layout('layouts.admin');
    }
}
