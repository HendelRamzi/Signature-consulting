<?php

namespace App\Http\Livewire\Domain;

use Livewire\Component;

class Details extends Component
{


    public $domain ; 

    public function deleteDomain(){
        try{
            $this->domain->delete() ;
            session()->flash('success' ,"Le domain a bien été supprimer");
            redirect()->route('admin.domain.index'); 
        }catch(\Exception $error){
            session()->flash('error' ,"Un probleme est survenu. Contactez les developpeurs");
        }
    }

    public function render()
    {
        return view('livewire.domain.details');
    }
}
