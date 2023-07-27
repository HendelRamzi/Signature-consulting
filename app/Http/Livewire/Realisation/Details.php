<?php

namespace App\Http\Livewire\Realisation;

use Livewire\Component;

class Details extends Component
{

    public $realisation ;
    public $content ; 
    public function mount(){
        $this->content = $this->realisation->content;
    }




    public function deleteRealisation(){
        try{
            // Delete the gallery images of the realisation
            $gallery = $this->realisation->images ; 
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
        return view('livewire.realisation.details');
    }
}
