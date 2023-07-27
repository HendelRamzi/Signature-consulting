<?php

namespace App\Http\Livewire\Realisation;

use App\Models\Service;
use Livewire\Component;

class Edit extends Component
{

    public $realisation; 
    public $services ;
    public $content;

    public  $gallery, $old_gallery, $urls = [] ; 
    public $thumb, $old_thumb ; 
    protected $rules = [
        'realisation.name' => "required|string|max:30",
        "realisation.desc" => "required|string|max:255", 
        "realisation.service_id" => "required",
        "realisation.content" => "required|string",
    ];


    protected $listeners = [
        "updateRealisation" => "updateRealisation",
    ];

    public function updateRealisation(){
        dd($this->urls);
    }

    public function mount(){
        $this->services = Service::all(); 
        $this->content = $this->realisation->content ; 
        $this->gallery = $this->realisation->images;

        foreach ($this->gallery as $image) {
            array_push($this->urls, explode("/", $image->image )[1]   );
        }
    }

    public function render()
    {
        return view('livewire.realisation.edit');
    }
}
