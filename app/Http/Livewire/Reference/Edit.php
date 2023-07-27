<?php

namespace App\Http\Livewire\Reference;

use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{

    use WithFileUploads ;

    public $reference ; 
    public $icon, $old_icon ; 

    public function mount(){

    }


    protected $rules = [
        'reference.name' => "required|string",
        "reference.desc" => "required|string",

        "icon" => "image:jpg,jpeg,png,svg|nullable",
        "old_icon" => "required|string",
    ];


    protected $listeners  = [
        "updateReference" => "updateReference", 
    ];



    public function updateReference(){
        $url = explode('/', $this->reference->logo);
        $this->validate(); 
        try{
            if($this->old_icon != $url[1]){
    
                // Handle the images saving process
                $url = $this->icon->store('references');
                $this->reference->logo = $url ;
    
                // Update the reference model 
                $this->reference->save(); 
       
           }else{
                // Update the reference model 
                $this->reference->save(); 
            }

            session()->flash('success', "La reference a bien été modifier");

        }catch(\Exception $error){
            session()->flash('error', "Un problème est survenu. Contactez les developpeurs");

        }
    }


    public function render()
    {
        return view('livewire.reference.edit');
    }
}
