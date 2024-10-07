<li class="nav-item">
    <a class="nav-link" href="{{ route( $route ) }}" wire:navigate>
        <span class="nav-icon">
            <iconify-icon icon="{{ $icon  }}"></iconify-icon>
        </span>
        <span class="nav-text"> {{ $page }} </span>
    </a>
</li>
