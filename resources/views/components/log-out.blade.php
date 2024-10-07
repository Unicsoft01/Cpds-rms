<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>
<a class="dropdown-item text-danger" href="#" wire:click="logout">
    <i class="bx bx-log-out fs-18 align-middle me-1"></i><span class="align-middle">Logout</span>
</a>
