<?php

namespace App\Http\Livewire;

use App\Notification;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;
    public $info;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
        'info' => 'present'
    ];

    protected $messages = [
        'name.required' => 'Naam veld is verplicht',
        'email.required' => 'Email veld is verplicht',
        'email.email' => 'Voer een geldig emailadres in',
        'message.required' => 'Bericht veld is verplicht'
    ];

    public function render()
    {
        return view('website.contact.contact-form');
    }

    public function send()
    {
        $this->validate();
        $this->checkSpam();

        Notification::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message
        ]);

        $this->reset();

        session()->flash('success', 'Uw bericht is verzonden');
    }

    protected function checkSpam()
    {
        abort_if(! is_null($this->info), 422, 'spam detected');
    }
}
