<div class="app-navbar flex-shrink-0">
    <!--begin::Search-->
    <div class="app-navbar-item ms-1 ms-md-4">
        <div class="timer">
            <h1>02:15:23</h1>
        </div>
    </div>

    <!--begin::Timer-->
    <div class="app-navbar-item ms-1 ms-md-4">
        <div class="dropdown">
            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Config::get('languages')[App::getLocale()] }}
            </button>
            <ul class="dropdown-menu">
                @foreach (Config::get('languages') as $lang => $language)
                    @if ($lang != App::getLocale())
                        <li><a class="dropdown-item" href="{{ route('lang.switch', $lang) }}">{{ $language }}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>

    <!--begin::Notifications-->
    <div class="app-navbar-item ms-1 ms-md-4">
        <div class="btn btn-icon btn-custom btn-icon-muted w-30px h-30px w-md-40px h-md-40px position-relative me-5"
            data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
            data-kt-menu-placement="bottom-end" id="kt_menu_item_wow">
            <i class="bi bi-bell-fill fs-2 text-bg"></i>
            <span class="position-absolute top-0 start-100 translate-middle badge badge-circle badge-info">5</span>
        </div>
        @include('partials/menus/_notifications-menu')
    </div>

    <!--begin::User menu-->
    <div class="app-navbar-item ms-1 ms-md-4" id="kt_header_user_menu_toggle">
        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
            data-kt-menu-placement="bottom-end" class="header-user-profile">
            <div class="symbol symbol-30px symbol-md-40px rounded-circle overflow-hidden">
                <img src="{{ image('avatars/300-1.jpg') }}" alt="user" />
            </div>
            <h6 class="name">John Fix</h6>
            <i class="fas fa-chevron-down"></i>
        </div>

        @include('partials/menus/_user-account-menu')
    </div>
</div>



 <style>

.app-navbar .app-navbar-item .timer{
    display: block;
}
@media only screen and (max-width: 991.98px) and (min-width: 320px) {
    .app-navbar .app-navbar-item .timer{
        display: none!important;
    }

}
 </style>
