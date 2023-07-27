<?php

namespace App\Http\Livewire\Domain;

use App\Models\Domain;
use Livewire\Component;
use Livewire\WithFileUploads;


class Create extends Component
{

    use WithFileUploads;

    public $content, $icon ;  

    public Domain $domain ; 


    public function mount(){
        $this->domain = new Domain(); 
    }



    // Rules validation
    protected $rules = [
        'domain.name' => "required|string|max:30",
        "domain.desc" => "required|string|max:255",
        "icon" => "required|image",
        "content" => "required|string",
    ];

    protected $listeners = [
        'addDomain' => "addDomain",
    ];


    public function addDomain(){
        $this->validate(); 
        try{

            // get the content from $this->content
            $this->domain->content = $this->content;

            // Handle the images saving process
            $url = $this->icon->store('domains');
            $this->domain->icon = $url ;

            // Store the service in the DB
            $this->domain->save(); 

            session()->flash(
                'success', "Le domain a bien été ajouté"
            );

        }catch(\Exception $error){
            
            /**
             * ! IMPORTANT : Uncomment this juste in developement or maintenance.
             * * session()->flash( 'error', $error->getMessage());
             */
            
            session()->flash(
                'error', "Une erreur est survenu. Contactez les developpeurs"
            );
        }
    }

    public function render()
    {
        return view('livewire.domain.create');
    }
}
