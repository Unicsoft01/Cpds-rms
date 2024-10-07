<?php

namespace App\Livewire\Livewire;

use Livewire\Component;

class Navlink extends Component
{
    public $page;
    public $icon;
    public $route;

    public function mount($page  = 'Dashboard', $icon = 'solar:widget-5-bold-duotone', $route = 'dashboard')
    {
        $this->page = $page;
        $this->icon = $icon ;
        $this->route = $route ;
    }
    public function isActive(): bool

    {
        return $this->route === $this->route();
    }

    public function render()
    {
        return view('livewire.navlink');
    }
}