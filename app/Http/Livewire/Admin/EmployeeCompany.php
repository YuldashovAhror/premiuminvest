<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\EmployeeCompany as Company;
use Livewire\WithFileUploads;

class EmployeeCompany extends Component
{
    use WithFileUploads;

    public $photo, $companoise, $company_id;

    public function addCompany(){
        // $this->validate([
        //     'photo' => 'image|max:1024', // 1MB Max
        // ]);
        
        $company = New Company();
        $this->photo->store('photo');
        $company->photo = $this->photo;
    }

    public function mount(){
        $this->companoise = Company::all();
    } 

    public function render()
    {
        return view('livewire.admin.employee-company');
    }
}
