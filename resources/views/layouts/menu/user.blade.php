<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="{{env('APP_URL') ?? 'https://alpana.org'}}">
            <img class="navbar-brand-full" src="{{env('APP_LOGO') ?? 'https://res.cloudinary.com/debjit/image/upload/v1598972041/149_50_logo_uas3uf.png'}}" width="118" height="46" alt="{{ trans('config.site_name') }}">
        </a>
    </div>
    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="{{ route("user.dashboard") }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('dashboard') }}
            </a>
        </li>
        
        <li class="c-sidebar-nav-dropdown {{ request()->is("user.requisition*") ? "c-show" : "" }}">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa-fw fas fa-file-prescription c-sidebar-nav-icon">

                </i>
                {{ trans('requisition') }}
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a href="{{-- route("user.requisition.index") }--}" class="c-sidebar-nav-link {{ request()->is("user/requisition") || request()->is("user/requisition/*") ? "c-active" : "" }}">
                        <i class="fa-fw fas fa-file-medical c-sidebar-nav-icon">

                        </i>
                        {{ trans('requisition_index') }}
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a href="{{-- route("user.requisition.create") --}}" class="c-sidebar-nav-link {{ request()->is("user/requisition") || request()->is("user/requisition/*") ? "c-active" : "" }}">
                        <i class="fa-fw fas fa-file-medical c-sidebar-nav-icon">

                        </i>
                        {{ trans('requisition_create') }}
                    </a>
                </li>
            </ul>
        </li>
        <li class="c-sidebar-nav-dropdown {{ request()->is("user.donation*") ? "c-show" : "" }}">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa-fw fas fa-medkit c-sidebar-nav-icon">

                </i>
                {{ trans('donation_title') }}
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a href="{{-- route("user.donation.index") --}}" class="c-sidebar-nav-link {{ request()->is("user/donation") || request()->is("user/donation/*") ? "c-active" : "" }}">
                        <i class="fa-fw fas fa-th-list c-sidebar-nav-icon">

                        </i>
                        {{ trans('donation_index') }}
                    </a>
                </li>
            </ul>
        </li>

        <li class="c-sidebar-nav-dropdown {{ request()->is("admin.details*") ? "c-show" : "" }}">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                </i>
                {{ trans('settings') }}
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a href="{{-- route("user.details.edit") --}}" class="c-sidebar-nav-link {{ request()->is("user/details") || request()->is("user/details/*") ? "c-active" : "" }}">
                        <i class="fa-fw fas fa-cog c-sidebar-nav-icon">

                        </i>
                        {{ trans('user_details') }}
                    </a>
                </li>
            </ul>
            
            @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            @can('profile_password_edit')
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}" href="{{ route('profile.password.edit') }}">
                    <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                    </i>
                    {{ trans('change_password') }}
                </a>
            </li>
            @endcan
            @endif
            <li class="c-sidebar-nav-item">
                <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">
                    </i>
                    {{ trans('logout') }}
                </a>
            </li>
        </ul>

    </div>