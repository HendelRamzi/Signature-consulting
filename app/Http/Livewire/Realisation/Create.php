<?php

namespace App\Http\Livewire\Realisation;

use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
 
    public $photo;
    public $gallery = []; 
 
    public function updatedPhoto()
    {
        $this->validate([
            'photo' => 'image',
        ]);
    }


    public function save()
    {

        dd($this->gallery); 

        $url = $this->photo->store('public/realisation');


    }
 


    public function render()
    {
        return view('livewire.realisation.create');
    }


}
