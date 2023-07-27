<?php

namespace App\Http\Livewire\Services;

use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $service ; 
    public $content, $url ; 
    public $icon, $old_icon ; 


    protected $rules = [
        'service.name' => "required|string",
        "service.desc" => "required|string",

        "icon" => "image:jpg,jpeg,png,svg|nullable",
        "old_icon" => "required|string",
        "content" => "required",
    ];



    protected $listeners = [
        'updateService' => "updateService"
    ];

    // Function handle event
    public function updateService(){
        $url = explode('/', $this->service->icon);
        $this->validate(); 
        try{
            if($this->old_icon != $url[1]){
                
                // get the content from $this->content
                $this->service->content = $this->content;
    
                // Handle the images saving process
                $url = $this->icon->store('services');
                $this->service->icon = $url ;
    
                // Update the service model 
                $this->service->save(); 
    
    
           }else{
                $this->service->content = $this->content; 
    
                // Update the service model 
                $this->service->save(); 
            }

            session()->flash('success', "Le service a bien été modifier");

        }catch(\Exception $error){
            session()->flash('error', "Un problème est survenu. Contactez les developpeurs");

        }
    }



    public function mount($service){
        $this->content = $service->content ; 
        $this->url = $service->icon ; 
    }


    public function test(){
        dd($this->service);
    }

    public function render()
    {
        return view('livewire.services.edit');
    }
}
