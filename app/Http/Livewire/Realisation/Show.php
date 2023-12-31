<?php

namespace App\Http\Livewire\Realisation;

use App\Models\Realisation;
use Livewire\Component;

class Show extends Component
{

    public $realisations ;

    public function mount(){
        $this->realisations = Realisation::all() ;
    }



    public function deleteRealisation($id){
        try{

            $rea = Realisation::find($id); 

            // Delete the gallery images of the realisation
            $gallery = $rea->images ; 
            foreach($gallery as $img){
                $img->delete(); 
            }

            // Delete the realisation
            $this->realisation->delete(); 

            session()->flash('success', "La réalisation a bien été supprimé");
            redirect()->route('admin.realisation.index');


        }catch(\Exception $error){
            session()->flash('error', "Un problème est survenu lors de la suppression. Contactez les developpeurs");
        }
    }


    public function render()
    {
        return view('livewire.realisation.show');
    }
}
