<?php

namespace App\Http\Livewire\Realisation;

use App\Models\Gallery;
use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $realisation; 
    public $services ;
    public $content;

    public  $gallery = [], $old_gallery, $urls = [] ; 
    public $photo ; 
    protected $rules = [
        'realisation.name' => "required|string|max:30",
        "realisation.desc" => "required|string|max:255", 
        "realisation.service_id" => "required",

        "content" => "required|string",
        "gallery" => "nullable",
        "gallery.*" => "nullable|image:jpg,jpeg,png,svg",
        "old_gallery" => "required",
    ];


    protected $listeners = [
        "updateRealisation" => "updateRealisation",
    ];

    public function updateRealisation(){


        // update the content
        $this->realisation->content = $this->content ; 


        //  Prosses images in Gallery 

        // Check if old files are removed or not 
        if(count($this->old_gallery) < count($this->realisation->images) ){
            // Files where removed from the filepond

            $x = [] ; 
            foreach($this->realisation->images->pluck("image")->toArray() as $i){
                array_push($x, explode("/",$i)[1] ); 
            }

            // get the files removed
            $removed_files = array_diff( $x  , $this->old_gallery);

            // delete the removed file from the gallery
            foreach($removed_files as $r){
                Gallery::where('image', $r)->delete(); 
            }
        }

  
        // Check if new files are added or not
        if(! is_null($this->gallery)){
            // New file added
            foreach($this->gallery as $image) {
                // store in the public directory
                $url = $image->store('gallery');
                // dd($url); 
                // Store in the DB 
                Gallery::create([
                    "image" => $url ,
                    "realisation_id" => $this->realisation->id
                ]);
            }
            
        }
        

        // Process Thumbnail image
        if(! is_null($this->photo)){
            // new thumbnail
            $url  = $this->photo->store('realisations');
            $this->realisation->thumb = $url ; 
        }



        // Update the realisation
        $this->realisation->save();

        session()->flash('success', "la réalisation a bien été modifier");

    }

    public function mount(){
        $this->services = Service::all(); 
        $this->content = $this->realisation->content ; 

        foreach ($this->realisation->images as $image) {
            array_push($this->urls, explode("/", $image->image )[1]   );
        }
    }

    public function render()
    {
        return view('livewire.realisation.edit');
    }
}
