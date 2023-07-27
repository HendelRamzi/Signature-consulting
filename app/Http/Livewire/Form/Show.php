<?php

namespace App\Http\Livewire\Form;

use App\Models\Formulaire;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Livewire\Component;

class Show extends Component
{

    public $forms ; 


    public function mount(){
        $this->forms = Formulaire::all(); 
    }


    public function deleteForm($id){
        try{
            $f = Formulaire::find($id);
            $f->delete(); 

            session()->flash('success', "Le formulaire a bien été supprimé.");
        }catch(ModelNotFoundException $error){
            session()->flash('error', "Le formulaire n'a pas été trouvé.");
        }catch(\Exception $error){
            session()->flash('error', "Un problème est survenu. Contactez les développeurs");
        }
    }


    public function render()
    {
        return view('livewire.form.show');
    }
}
