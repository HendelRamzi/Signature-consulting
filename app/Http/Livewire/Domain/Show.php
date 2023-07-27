<?php

namespace App\Http\Livewire\Domain;

use App\Models\Domain;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Livewire\Component;

class Show extends Component
{

    public $domains; 



    public function mount(){
        $this->domains = Domain::all(); 
    }



    public function deleteDomain($id){
        try{
            $dm = Domain::find($id);
            $dm->delete(); 
            session()->flash('success', "Le domain a bien été supprimé");
            redirect()->route('admin.domain.index');
        }catch(ModelNotFoundException $error){
            session()->flash('error', "Le domain n'a pas été trouvé.");
        }catch(\Exception $error){
            session()->flash('error', "une erreur est survenu. Contactez les developpeurs");
        }
    }



    public function render()
    {
        return view('livewire.domain.show');
    }
}
