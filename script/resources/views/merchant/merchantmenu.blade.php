<li class="menu-header">{{ __('Dashboard') }}</li>
<li class="{{ Request::is('partner/dashboard') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('merchant.dashboard') }}">
        <i class="fas fa-tachometer-alt"></i>
        <span>{{ __('Dashboard') }}</span>
    </a>
</li>
<li class="menu-header">{{ __('Website Management') }}</li>
<li class="{{ Request::is('partner/domain*') ? 'active' : '' }}">
    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
        <i class="fas fa-store"></i>
        <span>{{ __('My Website') }}</span>
    </a>
    <ul class="dropdown-menu">
        <li><a class="nav-link" href="{{ route('merchant.domain.list') }}">{{ __('My Websites') }}</a></li>
    </ul>
</li>
