<?php

namespace App\Livewire\Livewire\Forms;

use App\Livewire\Forms\LoginForm;
use Livewire\Component;

class AuthTextInput extends Component
{
    public LoginForm $form;
    public function render()
    {
        return view('livewire.forms.text-input');
    }
}