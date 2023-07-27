<?php

namespace App\Http\Livewire\Reference;

use Livewire\Component;

class Details extends Component
{


    public $reference; 



    public function deleteReference(){
        try{
            $this->reference->delete(); 

            session()->flash('success', "La reference a bien été supprimée");
            redirect()->route('admin.reference.index');
        }catch(\Exception $error){
            session()->flash('error', 'Un problème est survenu, contactez les developpeurs') ; 
        }
    }


    public function render()
    {
        return view('livewire.reference.details');
    }
}
