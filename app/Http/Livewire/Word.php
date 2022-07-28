<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Words;

class Word extends Component
{
    public $key, $ru, $uz, $en;

    public function render()
    {
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
}
