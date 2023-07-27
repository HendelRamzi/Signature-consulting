<?php

namespace App\Http\Livewire\Reference;

use App\Models\Reference;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Livewire\Component;

class Show extends Component
{



    public $references; 


    public function mount(){
        $this->references = Reference::all(); 
    }


    protected $listeners = [
        'deleteReference' => "deleteReference",
    ]; 

    public function deleteReference($id){
        try{
            $ref = Reference::find($id) ; 
            $ref->delete(); 

            session()->flash('success', "La reference a bien été supprimée");
        }catch(ModelNotFoundException $error){
            session()->flash('error', 'Réference non trouvée !') ;
            redirect()->route('admin.reference.index') ;
        }catch(\Exception $error){
            session()->flash('error', 'Un problème est survenu, contactez les developpeurs') ; 
            redirect()->route('admin.reference.index') ;
        }
    }


    public function render()
    {
        return view('livewire.reference.show');
    }
}
