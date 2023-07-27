<?php

namespace App\Http\Livewire\Realisation;

use App\Models\Gallery;
use App\Models\Realisation;
use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
 
    public $photo;
    public $services;
    public $gallery = []; 
    public $content ; 

    public Realisation $realisation ;
 
    // public function updatedPhoto()
    // {
    //     $this->validate([
    //         'photo' => 'image',
    //     ]);
    // }


    public function mount(){
        $this->services = Service::all(); 
        $this->realisation = new Realisation(); 
    }



    // Rules validation
    protected $rules = [

        // Model validation
        "realisation.name" => "required|string|max:30",
        "realisation.desc" => "required|string|max:255",
        "realisation.service_id" => "required|string",

        // Files validation
        "photo" => "required|image:jpg,jpeg,png,svg",
        "gallery" => "required",
        "gallery.*" => "required|image:jpg,jpeg,png,svg",

        // Properties validation
        "content" => "required|string"
    ];

    // Event listeners
    protected $listeners = [
        'addRealisation' => "addRealisation"
    ];


    // Event handling function
    public function addRealisation(){
        $this->validate(); 
        try{


            // process the realisation.content
            $this->realisation->content = $this->content;

            // process the thumbnail image
            $thumb_url = $this->photo->store('realisations');
            $this->realisation->thumb = $thumb_url ;

            // save the realisation in the DB
            $rea = $this->realisation->save();


            // process the gallery
            foreach($this->gallery as $image) {
                // Save the images in the public folder 
                $url = $image->store('gallery'); 
                Gallery::create([
                    'image' => $url,
                    "realisation_id" => $this->realisation->id
                ]);
            }


            session()->flash(
                'success', "La réalisation a bien été ajouté"
            );  


        }catch(\Exception $error){
            session()->flash(
                'error', "Un probléme est survenu. Contactez les developpeurs"
            );
        }
    }








    public function render()
    {
        return view('livewire.realisation.create');
    }


}
