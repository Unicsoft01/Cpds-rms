<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <h2 class="fw-bold fs-24">Welcome Back</h2>

    <p class="text-muted mt-1 mb-4">Enter your email address and password to access
        admin panel.</p>

    <div class="mb-5">
        <form wire:submit="login" class="authentication-form" novalidate>
            {{-- email --}}
            <div class="mb-3">
                <x-forms.text-input name="form.email" label="Email" wire:model.blur="form.email" type="email"
                    placeholder="Enter your email" required autofocus autocomplete="email" />

                @error('form.email')
                    <div id="email" class="text-danger mt-1">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- password --}}
            <div class="mb-3">
                <a href="#" class="float-end text-muted text-unline-dashed ms-1">Forgot Password?</a>
                <x-forms.text-input name="form.password" label="Email" wire:model.blur="form.password" type="password"
                    placeholder="Enter your password" required autocomplete="current-password" />

                @error('form.password')
                    <div id="email" class="text-danger mt-1">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input wire:model="form.remember" id="remember" type="checkbox" class="form-check-input" name="remember">
                    <label class="form-check-label" for="remember">Remember
                        me</label>
                </div>
            </div>

            <div class="mb-1 text-center d-grid">
                <button class="btn btn-soft-primary" type="submit">Sign In</button>
            </div>
        </form>

        <p class="mt-3 fw-semibold no-span">OR sign with</p>

        <div class="d-grid gap-2">
            <a href="javascript:void(0);" class="btn btn-soft-dark"><i class="bx bxl-google fs-20 me-1"></i> Sign in
                with Google</a>
            <a href="javascript:void(0);" class="btn btn-soft-primary"><i class="bx bxl-facebook fs-20 me-1"></i> Sign
                in with Facebook</a>
        </div>
    </div>

    <p class="text-danger text-center">Don't have an account? <a href="{{ route('register') }}"
            class="text-dark fw-bold ms-1" wire:navigate>
            Sign Up
        </a>
    </p>

</div>
