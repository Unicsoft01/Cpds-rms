<div>
    <div class="logo-box">
        <a href="{{ route('welcome') }}" wire:navigate class="logo-dark">
            <img src="{{ url('/') }}/assets/images/logo-sm.png" class="logo-sm" alt="logo sm">
            <img src="{{ url('/') }}/assets/images/logo-dark.png" class="logo-lg" alt="logo dark">
        </a>
    
        <a href="{{ route('welcome') }}" wire:navigate class="logo-light">
            <img src="{{ url('/') }}/assets/images/logo-sm.png" class="logo-sm" alt="logo sm">
            <img src="{{ url('/') }}/assets/images/logo-light.png" class="logo-lg" alt="logo light">
        </a>
    </div>
    
    <!-- Menu Toggle Button (sm-hover) -->
    <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
        <iconify-icon icon="solar:double-alt-arrow-right-bold-duotone" class="button-sm-hover-icon"></iconify-icon>
    </button>
</div>
