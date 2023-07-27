<?php

namespace App\Http\Livewire\Reference;

use App\Models\Reference;
use Livewire\Component;
use Livewire\WithFileUploads;
class Creation extends Component
{
    use WithFileUploads;

    public Reference $ref ;
    public $photo ;  

    public function mount(){
        $this->ref = new Reference(); 
    }



    protected $rules = [
        'ref.name' => "required|string|max:30",
        "ref.desc" => "required|string|max:255",
        // "ref.logo" => "required|string",
        "photo" => "required|image:jpg,jpeg,png,svg",
    ]; 


    protected $listeners = [
        'addReference' => "addReference"
    ];


    public function addReference(){
        // Add the reference into the DB 

        // Validate the data here
        $this->validate(); 

        try{
            // Process the logo image
                // Store the image into the public folder
                $url = $this->photo->store('references'); 
                $this->ref->logo = $url ;




                // store the model in the DB 
                $this->ref->save(); 
            
            session()->flash('success', "La réference a bien été créé."); 
        }catch(\Exception $error){
            session()->flash('error', "Un problème est survenu. Contactez les développeurs"); 

        }

    }



    public function render()
    {   
        return view('livewire.reference.creation');
    }
}
