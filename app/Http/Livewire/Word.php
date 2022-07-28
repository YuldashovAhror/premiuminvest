<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Words;

class Word extends Component
{
    public $words;
    public $edit=0;
    public $key, $ru, $uz, $en;
    public $Key, $Ru, $Uz, $En;

    public function render()
    {
        $this->words = Words::orderBy('id')->get();
        return view('livewire.word');
    }

    public function store()
    {
        Words::create([
            'key' => $this->key,
            'ru' => $this->ru,
            'uz' => $this->uz,
            'en' => $this->en,
        ]);
        $this->key = ' ';
        $this->ru = ' ';
        $this->uz = ' ';
        $this->en = ' ';
    }

    public function edit($id)
    {
        $this->edit = $id;
        $this->Key = Words::find($id)->key;
        $this->Ru = Words::find($id)->ru;
        $this->Uz = Words::find($id)->uz;
        $this->En = Words::find($id)->en;
    }

    public function update($id)
    {
        Words::find($id)->update([
            'key'=>$this->Key,
            'ru'=>$this->Ru,
            'uz'=>$this->Uz,
            'en'=>$this->En,
        ]);
        $this->edit = 0;
    }
}
