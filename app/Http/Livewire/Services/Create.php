<?php

namespace App\Http\Livewire\Services;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;


    public Service $service;
    public $icon, $content ; 
    public function mount(){
        $this->service = new Service();
    }





    // Rules validation
    protected $rules = [
        'service.name' => "required|string|max:30",
        "service.desc" => "required|string|max:255",
        "icon" => "required|image",
        "content" => "required|string",
    ];

    // Event listeners
    protected $listeners = [
        'addService' => "addService",
    ];



    // Event handling function
    public function addService(){
        $this->validate(); 
        try{

            // get the content from $this->content
            $this->service->content = $this->content;

            // Handle the images saving process
            $url = $this->icon->store('services');
            $this->service->icon = $url ;

            // Store the service in the DB
            $this->service->save(); 

            session()->flash(
                'success', "Le service a bien été ajouté"
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
        return view('livewire.services.create');
    }
}
