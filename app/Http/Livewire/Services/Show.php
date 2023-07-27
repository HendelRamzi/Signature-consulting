<?php

namespace App\Http\Livewire\Services;

use App\Models\Service;
use Livewire\Component;

class Show extends Component
{

    public $services ; 

    public function mount(){
        $this->services = Service::all(); 
    }




    public function deleteService($id){
        try{

            // Get the service for the DB
            $service = Service::find($id); 

            // Delete all the realisation associated
            foreach ($service->realisations as $rea) {
                $rea->delete() ;
            }


            $service->delete() ;
            session()->flash('success' ,"Le service a bien été supprimer");
            redirect()->route('admin.services.index'); 

        }catch(\Exception $error){
            session()->flash('error' ,"Un probleme est survenu. Contactez les developpeurs");
            redirect()->route('admin.services.index'); 
        }
    }



    public function render()
    {
        return view('livewire.services.show');
    }
}
