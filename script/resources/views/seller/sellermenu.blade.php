<li class="menu-header">{{ __('Dashboard') }}</li>
<li class="{{ Request::is('seller/dashboard*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ url('/seller/dashboard') }}">
        <i class="fas fa-tachometer-alt"></i>
        <span>{{ __('Dashboard') }}</span>
    </a>
</li>
<li class="menu-header">{{ __('Website Management') }}</li>
<li class="{{ Request::is('seller/page*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ url('/seller/page') }}">
        <i class="fas fa-file"></i>
        <span>{{ __('Pages') }}</span>
    </a>
</li>
<li class="{{ Request::is('seller/blog*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ url('/seller/blog') }}">
        <i class="fas fa-blog"></i>
        <span>{{ __('Blogs') }}</span>
    </a>
</li>
