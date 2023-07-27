<?php

namespace App\Http\Livewire\Services;

use Livewire\Component;

class Details extends Component
{


    public $service ; 



    public function deleteService(){
        try{
            // Delete all the realisation associated
            foreach ($this->service->realisations as $rea) {
                $rea->delete() ;
            }


            $this->service->delete() ;
            session()->flash('success' ,"Le service a bien été supprimer");
            redirect()->route('admin.services.index'); 
        }catch(\Exception $error){
            session()->flash('error' ,"Un probleme est survenu. Contactez les developpeurs");
        }
    }


    public function render()
    {
        return view('livewire.services.details');
    }
}
