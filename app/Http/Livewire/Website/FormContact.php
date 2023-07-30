<?php

namespace App\Http\Livewire\Website;

use App\Models\Formulaire;
use Livewire\Component;

class FormContact extends Component
{

    public Formulaire $form ; 

    public function mount(){
        $this->form = new Formulaire() ; 
    }

    protected $rules = [
        'form.name' => "required|string|max:100",
        "form.email" => "required|email",
        "form.subject" => "required|string",
        "form.message" => "required|string|max:255"
    ];


    private function sanitize(){
        $this->form->name = strip_tags($this->form->name); 
        $this->form->email = strip_tags($this->form->email); 
        $this->form->subject = strip_tags($this->form->subject); 
        $this->form->message = strip_tags($this->form->message); 
    }

    public function sendForm(){
        // Validate the data 
        $this->validate();
        // Sanitize the data 
        $this->sanitize(); 

        try{
            // Send the form
            $this->form->save(); 


            session()->flash('success', 'Le message a bien été envoyé. Merci !');
            dd('send !'); 
        }catch(\Exception $error){
            session()->flash('error', "Le message n'a pas pue etre envoyé.");
            // Send notification problème.
            dd($error->getMessage());
        }
    }


    public function render()
    {
        return view('livewire.website.form-contact');
    }
}
