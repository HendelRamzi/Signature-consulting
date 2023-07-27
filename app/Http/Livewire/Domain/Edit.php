<?php

namespace App\Http\Livewire\Domain;

use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{

    use WithFileUploads;

    public $domain ; 
    public $content, $url ; 
    public $icon, $old_icon ; 

    public function mount($domain){
        $this->content = $domain->content ; 
        $this->url = $domain->icon ; 
    }




    protected $rules = [
        'domain.name' => "required|string",
        "domain.desc" => "required|string",

        "icon" => "image:jpg,jpeg,png,svg|nullable",
        "old_icon" => "required|string",
        "content" => "required",
    ];


    protected $listeners = [
        'updateDomain' => "updateDomain"
    ];

    public function updateDomain(){
        $url = explode('/', $this->domain->icon);
        $this->validate(); 
        try{
            if($this->old_icon != $url[1]){
                
                // get the content from $this->content
                $this->domain->content = $this->content;
    
                // Handle the images saving process
                $url = $this->icon->store('services');
                $this->domain->icon = $url ;
    
                // Update the service model 
                $this->domain->save(); 
    
    
           }else{
                $this->domain->content = $this->content; 
    
                // Update the service model 
                $this->domain->save(); 
            }

            session()->flash('success', "Le domain a bien été modifier");

        }catch(\Exception $error){
            session()->flash('error', "Un problème est survenu. Contactez les developpeurs");

        }
    }




    public function render()
    {
        return view('livewire.domain.edit');
    }
}
