<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="{{env('APP_URL') ?? 'https://alpana.org'}}">
            <img class="navbar-brand-full" src="{{env('APP_LOGO') ?? 'https://res.cloudinary.com/debjit/image/upload/v1598972041/149_50_logo_uas3uf.png'}}" width="118" height="46" alt="{{ trans('config.site_name') }}">
        </a>
    </div>
    @if(Auth::user()->is_admin)
    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="{{-- route("admin.dashboard") --}}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('dashboard') }}
            </a>
        </li>
        
        <li class="c-sidebar-nav-dropdown {{ request()->is("admin.usermanager*") ? "c-show" : "" }}">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                </i>
                {{ trans('usermanager') }}
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a href="{{ route("admin.usermanager.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/usermanager") || request()->is("admin/usermanager/*") ? "c-active" : "" }}">
                        <i class="fa-fw fas fa-th-list c-sidebar-nav-icon">

                        </i>
                        {{ trans('usermanager_index') }}
                    </a>
                </li>
                
                <li class="c-sidebar-nav-item">
                    <a href="{{ route("admin.usermanager.create") }}" class="c-sidebar-nav-link {{ request()->is("admin/usermanager") || request()->is("admin/usermanager/*") ? "c-active" : "" }}">
                        <i class="fa-fw fas fa-user-plus c-sidebar-nav-icon">

                        </i>
                        {{ trans('usermanager_create') }}
                    </a>
                </li>
            </ul>
        </li>
        
        <li class="c-sidebar-nav-dropdown {{ request()->is("admin.requisition*") ? "c-show" : "" }}">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa-fw fas fa-file-prescription c-sidebar-nav-icon">

                </i>
                {{ trans('requisition') }}
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a href="{{-- route("admin.requisition.index") --}}" class="c-sidebar-nav-link {{ request()->is("admin/requisition") || request()->is("admin/requisition/*") ? "c-active" : "" }}">
                        <i class="fa-fw fas fa-file-medical c-sidebar-nav-icon">

                        </i>
                        {{ trans('requisition_index') }}
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a href="{{-- route("admin.requisition.create") --}}" class="c-sidebar-nav-link {{ request()->is("admin/requisition") || request()->is("admin/requisition/*") ? "c-active" : "" }}">
                        <i class="fa-fw fas fa-file-medical c-sidebar-nav-icon">

                        </i>
                        {{ trans('requisition_create') }}
                    </a>
                </li>
            </ul>
        </li>
        <li class="c-sidebar-nav-dropdown {{ request()->is("admin.donation*") ? "c-show" : "" }}">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa-fw fas fa-medkit c-sidebar-nav-icon">

                </i>
                {{ trans('donation_title') }}
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a href="{{-- route("admin.donation.index") --}}" class="c-sidebar-nav-link {{ request()->is("admin/donation") || request()->is("admin/donation/*") ? "c-active" : "" }}">
                        <i class="fa-fw fas fa-th-list c-sidebar-nav-icon">

                        </i>
                        {{ trans('donation_index') }}
                    </a>
                </li>
            </ul>
        </li>
        <li class="c-sidebar-nav-dropdown {{ request()->is("admin.donor*") ? "c-show" : "" }}">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa-fw fas fa-tint c-sidebar-nav-icon">

                </i>
                {{ trans('donor') }}
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a href="{{-- route("admin.donor.index") --}}" class="c-sidebar-nav-link {{ request()->is("admin/donor") || request()->is("admin/donor/*") ? "c-active" : "" }}">
                        <i class="fa-fw fas fa-th-list c-sidebar-nav-icon">

                        </i>
                        {{ trans('donor_index') }}
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
                    <a href="{{-- route("admin.details.edit") --}}" class="c-sidebar-nav-link {{ request()->is("admin/details") || request()->is("admin/details/*") ? "c-active" : "" }}">
                        <i class="fa-fw fas fa-cog c-sidebar-nav-icon">

                        </i>
                        {{ trans('settings_site_details') }}
                    </a>
                </li>
            </ul>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-dropdown">
                    <a href="#" class="c-sidebar-nav-dropdown-toggle">
                        <i class="fa-fw fas fa-file-text c-sidebar-nav-icon">
                        </i>
                        {{ trans('pages_title') }}
                    </a>
                    <ul class="c-sidebar-nav-dropdown-items">
                        <li class="c-sidebar-nav-item">
                            <a href="{{-- route('admin.page.edit',['home']) --}}" class="c-sidebar-nav-link {{ request()->is("admin/page") || request()->is("admin/page/home/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-home c-sidebar-nav-icon">

                                </i>
                                {{ trans('pages_home') }}
                            </a>
                        </li>
                        <li class="c-sidebar-nav-item">
                            <a href="{{-- route("admin.page.edit",['about']) --}}" class="c-sidebar-nav-link {{ request()->is("admin/page") || request()->is("admin/page/about/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-file-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('pages_about') }}
                            </a>
                        </li>
                        <li class="c-sidebar-nav-item">
                            <a href="{{-- route("admin.page.edit",['contact']) --}}" class="c-sidebar-nav-link {{ request()->is("admin/page") || request()->is("admin/page/contact/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-id-badge c-sidebar-nav-icon">

                                </i>
                                {{ trans('pages_contact') }}
                            </a>
                        </li>
                        {{--
                            <li class="c-sidebar-nav-item">
                                <a href="{{ route('admin.page.edit',['blog']) }}" class="c-sidebar-nav-link {{ request()->is("admin/page") || request()->is("admin/page/blog/*") ? "c-active" : "" }}">
                                    <i class="fa-fw fas fa-people-carry c-sidebar-nav-icon">

                                    </i>
                                    {{ trans('pages_blog') }}
                                </a>
                            </li>
                            
                            <li class="c-sidebar-nav-item">
                                <a href="{{ route('admin.page.edit',['faq']) }}" class="c-sidebar-nav-link {{ request()->is("admin/pincode") || request()->is("admin/page/*") ? "c-active" : "" }}">
                                    <i class="fa-fw fas fa-question-circle c-sidebar-nav-icon">

                                    </i>
                                    {{ trans('pages_faq') }}
                                </a>
                            </li>
                            --}}
                        </ul>
                    </li>
                </ul>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item">
                        <a href="{{-- route("admin.certificate") --}}" class="c-sidebar-nav-link {{ request()->is("admin/certificate") || request()->is("admin/certificate/*") ? "c-active" : "" }}">
                            <i class="fa-fw fas fa-certificate c-sidebar-nav-icon">

                            </i>
                            {{ trans('certificate_title') }}
                        </a>
                    </li>
                </ul>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-dropdown">
                        <a href="#" class="c-sidebar-nav-dropdown-toggle">
                            <i class="fa-fw fas fa-language c-sidebar-nav-icon">

                            </i>
                            {{ trans('settings_language') }} [{{ strtoupper(app()->getLocale()) }}]
                        </a>
                        @foreach(['en'=>'English','bn'=>'বাংলা'] as $langLocale => $langName)
                        <ul class="c-sidebar-nav-dropdown-items">
                            <li class="c-sidebar-nav-item">
                                <a class="c-sidebar-nav-link" href="{{ url()->current() }}?change_language={{ $langLocale }}"><i class="fa-fw fas Example of chevron-circle-right fa-chevron-circle-right c-sidebar-nav-icon">

                                </i> {{ $langName }} <span class="badge badge-danger">{{ strtoupper($langLocale) }}</span></a>
                            </li>
                        </ul>
                        @endforeach

                    </li>
                </ul>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-dropdown">
                        <a href="#" class="c-sidebar-nav-dropdown-toggle">
                            <i class="fa-fw fas fa-map-marked-alt c-sidebar-nav-icon">

                            </i>
                            {{ trans('pincode') }}
                        </a>
                        <ul class="c-sidebar-nav-dropdown-items">
                            <li class="c-sidebar-nav-item">
                                <a href="{{-- route("admin.pincode.index") --}}" class="c-sidebar-nav-link {{ request()->is("admin/donor") || request()->is("admin/pincode/*") ? "c-active" : "" }}">
                                    <i class="fa-fw fas fa-map-marker-alt c-sidebar-nav-icon">

                                    </i>
                                    {{ trans('pincode_index') }}
                                </a>
                            </li>
                            <li class="c-sidebar-nav-item">
                                <a href="{{-- route("admin.pincode.create") --}}" class="c-sidebar-nav-link {{ request()->is("admin/pincode") || request()->is("admin/pincode/*") ? "c-active" : "" }}">
                                    <i class="fa-fw fas fa-map-pin c-sidebar-nav-icon">

                                    </i>
                                    {{ trans('pincode_create') }}
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            @endif
            
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