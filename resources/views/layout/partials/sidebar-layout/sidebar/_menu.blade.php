<!--begin::sidebar menu-->
<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
    <!--begin::Menu wrapper-->
    <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
        <!--begin::Menu-->
        <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">

            <!--begin:Dashboard Menu-->
            <div class="menu-item">
                <a class="menu-link" href="{{ route('dashboard.index') }}">
                    <span class="menu-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM12 16.5C9.51 16.5 7.5 14.49 7.5 12C7.5 9.51 9.51 7.5 12 7.5C14.49 7.5 16.5 9.51 16.5 12C16.5 14.49 14.49 16.5 12 16.5ZM12 11C11.45 11 11 11.45 11 12C11 12.55 11.45 13 12 13C12.55 13 13 12.55 13 12C13 11.45 12.55 11 12 11Z"/>
                        </svg>
                    </span>
                    <span class="menu-title">{{ __('sidebar.Dashboards') }}</span>
                </a>
            </div>

            <!--begin:Subscription Menu-->
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                <span class="menu-link">
                    <span class="menu-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 6.3C0 5.30589 0.814027 4.5 1.81818 4.5H18.1818C19.186 4.5 20 5.30589 20 6.3V16.2C20 17.1941 19.186 18 18.1818 18H1.81818C0.814027 18 0 17.1941 0 16.2V6.3ZM7.76199 7.3017C8.06265 7.14675 8.42545 7.17025 8.70318 7.36272L13.2486 10.5127C13.4916 10.6811 13.6364 10.9563 13.6364 11.25C13.6364 11.5437 13.4916 11.8189 13.2486 11.9873L8.70318 15.1373C8.42545 15.3298 8.06265 15.3533 7.76199 15.1983C7.46133 15.0433 7.27273 14.7356 7.27273 14.4V8.1C7.27273 7.76439 7.46133 7.45668 7.76199 7.3017Z"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.2727 4.05H2.72727V2.25H17.2727V4.05Z"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.4545 1.8H4.54545V0H15.4545V1.8Z"/>
                        </svg>
                    </span>
                    <span class="menu-title">{{ __('sidebar.Subscription') }}</span>
                    <span class="menu-arrow"></span>
                </span>
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('superadmin.subscription.create') }}">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">{{ __('sidebar.Create') }} {{ __('sidebar.Subscription') }}</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('superadmin.subscription.manage') }}">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">{{ __('sidebar.Manage') }} {{ __('sidebar.Subscription') }}</span>
                        </a>
                    </div>
                </div>

            </div>

            <!--begin:Customers Menu-->
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                <span class="menu-link">
                    <span class="menu-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 14C14.7571 14 16.9921 11.3137 16.9921 8C16.9921 4.68629 14.7571 2 12 2C9.24297 2 7.00794 4.68629 7.00794 8C7.00794 11.3137 9.24297 14 12 14Z"/>
                            <path d="M21.7845 19.1C20.8859 17.3 19.1886 15.8 16.9921 14.9C16.393 14.7 15.6941 14.7 15.1949 15C14.1965 15.6 13.1981 15.9 12 15.9C10.8019 15.9 9.80348 15.6 8.80506 15C8.30585 14.8 7.60696 14.7 7.00791 15C4.81139 15.9 3.11408 17.4 2.2155 19.2C1.51661 20.5 2.61487 22 4.1125 22H19.8875C21.3851 22 22.4834 20.5 21.7845 19.1Z"/>
                        </svg>
                    </span>
                    <span class="menu-title">{{ __('sidebar.Customers') }}</span>
                    <span class="menu-arrow"></span>
                </span>
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('superadmin.customer') }}">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">Customer List</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('superadmin.customer') }}">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">Add Customer</span>
                        </a>
                    </div>
                </div>

            </div>

            <!--begin:Properties Menu-->
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                <span class="menu-link">
                    <span class="menu-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 10.5714H4V17.2381H7V10.5714Z"/>
                            <path d="M13.5 10.5714H10.5V17.2381H13.5V10.5714Z"/>
                            <path d="M22 19.1429H2V22H22V19.1429Z"/>
                            <path d="M20 10.5714H17V17.2381H20V10.5714Z"/>
                            <path d="M12 2L2 6.7619V8.66667H22V6.7619L12 2Z"/>
                        </svg>
                    </span>
                    <span class="menu-title">{{ __('sidebar.Properties') }}</span>
                    <span class="menu-arrow"></span>
                </span>
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('superadmin.properties') }}">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">{{ __('sidebar.All') }} {{ __('sidebar.Properties') }}</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('superadmin.properties.create') }}">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">Add New Property</span>
                        </a>
                    </div>
                </div>
                <!--end:Menu sub-->
            </div>

            <!--begin:Guard Menu-->
            <div class="menu-item">
                <a class="menu-link" href="{{ route('superadmin.guard.index') }}">
                    <span class="menu-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 4H14.82C14.4 2.84 13.3 2 12 2C10.7 2 9.6 2.84 9.18 4H5C3.9 4 3 4.9 3 6V20C3 21.1 3.9 22 5 22H19C20.1 22 21 21.1 21 20V6C21 4.9 20.1 4 19 4ZM12 4C12.55 4 13 4.45 13 5C13 5.55 12.55 6 12 6C11.45 6 11 5.55 11 5C11 4.45 11.45 4 12 4ZM12 8C13.66 8 15 9.34 15 11C15 12.66 13.66 14 12 14C10.34 14 9 12.66 9 11C9 9.34 10.34 8 12 8ZM18 20H6V18.6C6 16.6 10 15.5 12 15.5C14 15.5 18 16.6 18 18.6V20Z"/>
                        </svg>
                    </span>
                    <span class="menu-title">{{ __('sidebar.Guard') }}</span>
                </a>
            </div>

            <!--begin:Reports Menu-->
            <div class="menu-item">
                <a class="menu-link" href="{{ route('superadmin.reports') }}">
                    <span class="menu-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 9.16V2C6 2.5 2 6.79 2 12C2 17.21 6 21.5 11 22V14.84C10 14.43 9 13.32 9 12C9 10.68 10 9.57 11 9.16ZM14.86 11H22C21.52 6.25 18 2.47 13 2V9.16C14 9.46 14.52 10.14 14.86 11ZM13 14.84V22C18 21.53 21.52 17.75 22 13H14.86C14.52 13.86 14 14.54 13 14.84Z"/>
                        </svg>
                    </span>
                    <span class="menu-title">{{ __('sidebar.Reports') }}</span>
                </a>
            </div>

            <!--begin:Shifts Menu-->
            <div class="menu-item">
                <a class="menu-link" href="{{ route('superadmin.reports') }}">
                    <span class="menu-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 22 20" fill="none">
                            <path d="M8.8 14.4444V13.3333H1.111L1.1 17.7778C1.1 19.0111 2.079 20 3.3 20H18.7C19.921 20 20.9 19.0111 20.9 17.7778V13.3333H13.2V14.4444H8.8ZM19.8 4.44444H15.389V2.22222L13.189 0H8.789L6.589 2.22222V4.44444H2.2C0.99 4.44444 0 5.44444 0 6.66667V10C0 11.2333 0.979 12.2222 2.2 12.2222H8.8V10H13.2V12.2222H19.8C21.01 12.2222 22 11.2222 22 10V6.66667C22 5.44444 21.01 4.44444 19.8 4.44444ZM13.2 4.44444H8.8V2.22222H13.2V4.44444Z"/>
                        </svg>
                    </span>
                    <span class="menu-title">{{ __('sidebar.Shifts') }}</span>
                </a>
            </div>

            <!--begin:Roles & Permissions Menu-->
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                <span class="menu-link">
                    <span class="menu-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2L6.5 11H17.5L12 2Z"/>
                            <path d="M16.5 22C18.9853 22 21 19.9853 21 17.5C21 15.0147 18.9853 13 16.5 13C14.0147 13 12 15.0147 12 17.5C12 19.9853 14.0147 22 16.5 22Z"/>
                            <path d="M3 14H11V22H3V14Z"/>
                        </svg>
                    </span>
                    <span class="menu-title">Roles & Permissions</span>
                    <span class="menu-arrow"></span>
                </span>
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('superadmin.roles_and_permissions.create') }}">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">Create</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('superadmin.roles_and_permissions.manage') }}">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">Manage</span>
                        </a>
                    </div>
                </div>

            </div>

            <!--begin:Staff Menu-->
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                <span class="menu-link">
                    <span class="menu-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.6364 9.62637C17.1455 9.62637 18.3545 8.36981 18.3545 6.81318C18.3545 5.25656 17.1455 4 15.6364 4C14.1273 4 12.9091 5.25656 12.9091 6.81318C12.9091 8.36981 14.1273 9.62637 15.6364 9.62637ZM8.36364 9.62637C9.87273 9.62637 11.0818 8.36981 11.0818 6.81318C11.0818 5.25656 9.87273 4 8.36364 4C6.85455 4 5.63636 5.25656 5.63636 6.81318C5.63636 8.36981 6.85455 9.62637 8.36364 9.62637ZM8.36364 11.5018C6.24545 11.5018 2 12.599 2 14.7839V20H14.7273V14.7839C14.7273 12.599 10.4818 11.5018 8.36364 11.5018ZM15.6364 11.5018C15.3727 11.5018 15.0727 11.5206 14.7545 11.5487C15.8091 12.3364 16.5455 13.396 16.5455 14.7839V20H22V14.7839C22 12.599 17.7545 11.5018 15.6364 11.5018Z"/>
                        </svg>
                    </span>
                    <span class="menu-title">{{ __('sidebar.Staff') }}</span>
                    <span class="menu-arrow"></span>
                </span>
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('superadmin.staffcontroller.index') }}">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">{{ __('sidebar.Create') }} {{ __('sidebar.Staff') }}</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('superadmin.staffcontroller.manage') }}">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">{{ __('sidebar.Manage') }} {{ __('sidebar.Staff') }}</span>
                        </a>
                    </div>
                </div>

            </div>

            <!--begin:Coupons Menu-->
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                <span class="menu-link">
                    <span class="menu-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M9.2 16L12 13.9L14.75 16L13.7 12.6L16.5 10.4H13.1L12 7L10.9 10.4H7.5L10.25 12.6L9.2 16ZM4 20C3.45 20 2.97917 19.8042 2.5875 19.4125C2.19583 19.0208 2 18.55 2 18V14.625C2 14.4417 2.05833 14.2833 2.175 14.15C2.29167 14.0167 2.44167 13.9333 2.625 13.9C3.025 13.7667 3.35417 13.525 3.6125 13.175C3.87083 12.825 4 12.4333 4 12C4 11.5667 3.87083 11.175 3.6125 10.825C3.35417 10.475 3.025 10.2333 2.625 10.1C2.44167 10.0667 2.29167 9.98333 2.175 9.85C2.05833 9.71667 2 9.55833 2 9.375V6C2 5.45 2.19583 4.97917 2.5875 4.5875C2.97917 4.19583 3.45 4 4 4H20C20.55 4 21.0208 4.19583 21.4125 4.5875C21.8042 4.97917 22 5.45 22 6V9.375C22 9.55833 21.9417 9.71667 21.825 9.85C21.7083 9.98333 21.5583 10.0667 21.375 10.1C20.975 10.2333 20.6458 10.475 20.3875 10.825C20.1292 11.175 20 11.5667 20 12C20 12.4333 20.1292 12.825 20.3875 13.175C20.6458 13.525 20.975 13.7667 21.375 13.9C21.5583 13.9333 21.7083 14.0167 21.825 14.15C21.9417 14.2833 22 14.4417 22 14.625V18C22 18.55 21.8042 19.0208 21.4125 19.4125C21.0208 19.8042 20.55 20 20 20H4Z"/>
                        </svg>
                    </span>
                    <span class="menu-title">Coupons</span>
                    <span class="menu-arrow"></span>
                </span>
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('superadmin.coupon.create') }}">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">Create Coupon</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('superadmin.coupon.manage') }}">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">Manage Coupon</span>
                        </a>
                    </div>
                </div>

            </div>

            <!--begin:Notifications Menu-->
            <div class="menu-item">
                <a class="menu-link" href="{{ route('superadmin.recycle_bin') }}">
                    <span class="menu-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 16 20" fill="none">
                            <path d="M0 17V15H2V8C2 6.61667 2.41667 5.3875 3.25 4.3125C4.08333 3.2375 5.16667 2.53333 6.5 2.2V1.5C6.5 1.08333 6.64583 0.729167 6.9375 0.4375C7.22917 0.145833 7.58333 0 8 0C8.41667 0 8.77083 0.145833 9.0625 0.4375C9.35417 0.729167 9.5 1.08333 9.5 1.5V2.2C10.8333 2.53333 11.9167 3.2375 12.75 4.3125C13.5833 5.3875 14 6.61667 14 8V15H16V17H0ZM8 20C7.45 20 6.97917 19.8042 6.5875 19.4125C6.19583 19.0208 6 18.55 6 18H10C10 18.55 9.80417 19.0208 9.4125 19.4125C9.02083 19.8042 8.55 20 8 20Z"/>
                        </svg>
                    </span>
                    <span class="menu-title">Notifications</span>
                </a>
            </div>

            <!--begin:Announcements Menu-->
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                <span class="menu-link">
                    <span class="menu-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16" fill="none">
                            <path d="M16 9V7H20V9H16ZM17.2 16L14 13.6L15.2 12L18.4 14.4L17.2 16ZM15.2 4L14 2.4L17.2 0L18.4 1.6L15.2 4ZM3 15V11H2C1.45 11 0.979167 10.8042 0.5875 10.4125C0.195833 10.0208 0 9.55 0 9V7C0 6.45 0.195833 5.97917 0.5875 5.5875C0.979167 5.19583 1.45 5 2 5H6L11 2V14L6 11H5V15H3ZM12 11.35V4.65C12.45 5.05 12.8125 5.5375 13.0875 6.1125C13.3625 6.6875 13.5 7.31667 13.5 8C13.5 8.68333 13.3625 9.3125 13.0875 9.8875C12.8125 10.4625 12.45 10.95 12 11.35Z"/>
                        </svg>
                    </span>
                    <span class="menu-title">Announcements</span>
                    <span class="menu-arrow"></span>
                </span>
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                        <a class="menu-link" href="#">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">All Announcements</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="#">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">New Announcements</span>
                        </a>
                    </div>
                </div>

            </div>

            <!--begin:Language Manager Menu-->
            <div class="menu-item">
                <a class="menu-link" href="#">
                    <span class="menu-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12.2361 15.07L9.78795 12.56L9.81687 12.53C11.4498 10.6471 12.6698 8.41925 13.3928 6H16.2169V4H9.46988V2H7.54217V4H2V6H11.5614C10.9157 7.92 9.89398 9.75 8.50602 11.35C7.60964 10.32 6.86747 9.19 6.27952 8H4.35181C5.05542 9.63 6.01928 11.17 7.2241 12.56L2.31807 17.58L3.68675 19L8.50602 14L11.5036 17.11L12.2361 15.07ZM17.6626 10H15.7349L11.3976 22H13.3253L14.4048 19H18.9831L20.0723 22H22L17.6626 10ZM15.1373 17L16.6988 12.67L18.2602 17H15.1373Z"/>
                        </svg>
                    </span>
                    <span class="menu-title">Language Manager</span>
                </a>
            </div>

            <!--begin:Feedback Menu-->
            <div class="menu-item">
                <a class="menu-link" href="#">
                    <span class="menu-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M0 20L1.85714 13.619C1.55556 12.9683 1.32937 12.3016 1.17857 11.619C1.02778 10.9365 0.952381 10.2381 0.952381 9.52381C0.952381 8.20635 1.20238 6.96825 1.70238 5.80952C2.20238 4.65079 2.88095 3.64286 3.7381 2.78571C4.59524 1.92857 5.60317 1.25 6.7619 0.75C7.92063 0.25 9.15873 0 10.4762 0C11.7937 0 13.0317 0.25 14.1905 0.75C15.3492 1.25 16.3571 1.92857 17.2143 2.78571C18.0714 3.64286 18.75 4.65079 19.25 5.80952C19.75 6.96825 20 8.20635 20 9.52381C20 10.8413 19.75 12.0794 19.25 13.2381C18.75 14.3968 18.0714 15.4048 17.2143 16.2619C16.3571 17.119 15.3492 17.7976 14.1905 18.2976C13.0317 18.7976 11.7937 19.0476 10.4762 19.0476C9.7619 19.0476 9.06349 18.9722 8.38095 18.8214C7.69841 18.6706 7.03175 18.4444 6.38095 18.1429L0 20ZM9.52381 13.3333H11.4286V10.4762H14.2857V8.57143H11.4286V5.71429H9.52381V8.57143H6.66667V10.4762H9.52381V13.3333Z"/>
                        </svg>
                    </span>
                    <span class="menu-title">Feedback</span>
                </a>
            </div>

            <!--begin:Transactions & Invoice Menu-->
            <div class="menu-item">
                <a class="menu-link" href="#">
                    <span class="menu-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M4 20C3.45 20 2.97917 19.8042 2.5875 19.4125C2.19583 19.0208 2 18.55 2 18V6C2 5.45 2.19583 4.97917 2.5875 4.5875C2.97917 4.19583 3.45 4 4 4H20C20.55 4 21.0208 4.19583 21.4125 4.5875C21.8042 4.97917 22 5.45 22 6V18C22 18.55 21.8042 19.0208 21.4125 19.4125C21.0208 19.8042 20.55 20 20 20H4ZM4 12H20V8H4V12Z" fill="#244B8A"/>
                        </svg>
                    </span>
                    <span class="menu-title">Transactions & Invoice</span>
                </a>
            </div>

            <!--begin:Settings Menu-->
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                <span class="menu-link">
                    <span class="menu-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.0734 9.07339V4.92661H14.9266L12 2L9.07339 4.92661H4.92661V9.07339L2 12L4.92661 14.9266V19.0734H9.07339L12 22L14.9266 19.0734H19.0734V14.9266L22 12L19.0734 9.07339ZM12 17.305C9.07339 17.305 6.69496 14.9266 6.69496 12C6.69496 9.07339 9.07339 6.69496 12 6.69496C14.9266 6.69496 17.305 9.07339 17.305 12C17.305 14.9266 14.9266 17.305 12 17.305ZM12 8.46331C10.046 8.46331 8.46331 10.046 8.46331 12C8.46331 13.954 10.046 15.5367 12 15.5367C13.954 15.5367 15.5367 13.954 15.5367 12C15.5367 10.046 13.954 8.46331 12 8.46331Z"/>
                        </svg>
                    </span>
                    <span class="menu-title">{{ __('sidebar.Settings') }}</span>
                    <span class="menu-arrow"></span>
                </span>
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('superadmin.setting.general.company_details') }}">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">{{ __('sidebar.General') }} {{ __('sidebar.Settings') }}</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('superadmin.setting.config') }}">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">{{ __('sidebar.System_Configuration_Settings') }}</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('superadmin.setting.backup') }}">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">{{ __('sidebar.Database_Backup') }}</span>
                        </a>
                    </div>
                </div>

            </div>

            <!--begin:CMS Menu-->
            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                <span class="menu-link">
                    <span class="menu-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 16 20" fill="none">
                            <path d="M8 0L0 3V9.09C0 14.14 3.41 18.85 8 20C12.59 18.85 16 14.14 16 9.09V3L8 0ZM6.94 13.54L3.4 10L4.81 8.59L6.93 10.71L11.17 6.47L12.58 7.88L6.94 13.54Z"/>
                        </svg>
                    </span>
                    <span class="menu-title">CMS</span>
                    <span class="menu-arrow"></span>
                </span>
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                        <a class="menu-link" href="#">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">About Us</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="#">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">Terms & Conditions</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="#">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">Privacy Policy</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="#">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">Contact Us</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="#">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                            <span class="menu-title">FAQs</span>
                        </a>
                    </div>
                </div>

            </div>

            <!--begin:Support Menu-->
            <div class="menu-item">
                <a class="menu-link" href="#">
                    <span class="menu-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" viewBox="0 0 20 14" fill="none">
                            <path d="M18 7C18 7.55 18.1958 8.02083 18.5875 8.4125C18.7284 8.55337 18.8795 8.66891 19.0408 8.75911C19.5229 9.02861 20 9.44772 20 10V12C20 12.55 19.8042 13.0208 19.4125 13.4125C19.0208 13.8042 18.55 14 18 14H2C1.45 14 0.979167 13.8042 0.5875 13.4125C0.195833 13.0208 0 12.55 0 12V10C0 9.44771 0.477093 9.02861 0.959161 8.75911C1.12052 8.66891 1.27163 8.55337 1.4125 8.4125C1.80417 8.02083 2 7.55 2 7C2 6.45 1.80417 5.97917 1.4125 5.5875C1.27163 5.44663 1.12052 5.33109 0.959161 5.24089C0.477093 4.97139 0 4.55228 0 4V2C0 1.45 0.195833 0.979166 0.5875 0.5875C0.979167 0.195833 1.45 0 2 0L18 0C18.55 0 19.0208 0.195833 19.4125 0.5875C19.8042 0.979166 20 1.45 20 2V4C20 4.55228 19.5229 4.97139 19.0408 5.24089C18.8795 5.33109 18.7284 5.44663 18.5875 5.5875C18.1958 5.97917 18 6.45 18 7ZM16 7C16 6.28333 16.1792 5.62083 16.5375 5.0125C16.8958 4.40417 17.3833 3.91667 18 3.55V2H2V3.55C2.61667 3.91667 3.10417 4.40417 3.4625 5.0125C3.82083 5.62083 4 6.28333 4 7C4 7.71667 3.82083 8.37917 3.4625 8.9875C3.10417 9.59583 2.61667 10.0833 2 10.45V12H18V10.45C17.3833 10.0833 16.8958 9.59583 16.5375 8.9875C16.1792 8.37917 16 7.71667 16 7Z"/>
                        </svg>
                    </span>
                    <span class="menu-title">Support</span>
                </a>
            </div>

            <!--begin:Activity Log Menu-->
            <div class="menu-item">
                <a class="menu-link" href="#">
                    <span class="menu-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 22C4.16667 22 3.45833 21.7083 2.875 21.125C2.29167 20.5417 2 19.8333 2 19C2 18.35 2.1875 17.7708 2.5625 17.2625C2.9375 16.7542 3.41667 16.3917 4 16.175V7.825C3.41667 7.60833 2.9375 7.24583 2.5625 6.7375C2.1875 6.22917 2 5.65 2 5C2 4.16667 2.29167 3.45833 2.875 2.875C3.45833 2.29167 4.16667 2 5 2C5.65 2 6.22917 2.1875 6.7375 2.5625C7.24583 2.9375 7.60833 3.41667 7.825 4H16.175C16.375 3.41667 16.7292 2.9375 17.2375 2.5625C17.7458 2.1875 18.3333 2 19 2C19.8333 2 20.5417 2.29167 21.125 2.875C21.7083 3.45833 22 4.16667 22 5C22 5.66667 21.8125 6.25417 21.4375 6.7625C21.0625 7.27083 20.5833 7.625 20 7.825V16.175C20.5833 16.3917 21.0625 16.7542 21.4375 17.2625C21.8125 17.7708 22 18.35 22 19C22 19.8333 21.7083 20.5417 21.125 21.125C20.5417 21.7083 19.8333 22 19 22C18.35 22 17.7708 21.8125 17.2625 21.4375C16.7542 21.0625 16.3917 20.5833 16.175 20H7.825C7.60833 20.5833 7.24583 21.0625 6.7375 21.4375C6.22917 21.8125 5.65 22 5 22ZM7.825 18H16.175C16.325 17.5667 16.5583 17.1917 16.875 16.875C17.1917 16.5583 17.5667 16.325 18 16.175V7.825C17.5667 7.675 17.1917 7.44167 16.875 7.125C16.5583 6.80833 16.325 6.43333 16.175 6H7.825C7.675 6.43333 7.44167 6.80833 7.125 7.125C6.80833 7.44167 6.43333 7.675 6 7.825V16.175C6.43333 16.325 6.80833 16.5583 7.125 16.875C7.44167 17.1917 7.675 17.5667 7.825 18Z"/>
                        </svg>
                    </span>
                    <span class="menu-title">{{ __('sidebar.Activity_Log') }}</span>
                </a>
            </div>

            <!--begin:Recycle Bin Menu-->
            <div class="menu-item">
                <a class="menu-link" href="{{ route('superadmin.recycle_bin') }}">
                    <span class="menu-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.71775 2.79671C9.17348 2.29868 9.81149 2 10.4977 2H13.5023C14.1885 2 14.8265 2.29868 15.2822 2.79671C15.7353 3.29187 15.9765 3.94608 15.9765 4.61183V6.10454H20.0282C20.5682 6.10454 21 6.54213 21 7.07455C21 7.60698 20.5682 8.04457 20.0282 8.04457H19.4977V19.3882C19.4977 20.0539 19.2565 20.7081 18.8034 21.2033C18.3477 21.7013 17.7096 22 17.0235 22H6.97653C6.29036 22 5.65235 21.7013 5.19663 21.2033C4.74353 20.7081 4.50235 20.0539 4.50235 19.3882V8.04457H3.97183C3.43176 8.04457 3 7.60698 3 7.07455C3 6.54213 3.43176 6.10454 3.97183 6.10454H8.02347V4.61183C8.02347 3.94608 8.26466 3.29187 8.71775 2.79671ZM9.42857 11.6331C9.42857 11.1484 9.80938 10.75 10.2857 10.75C10.7621 10.75 11.1429 11.1484 11.1429 11.6331V16.1169C11.1429 16.6016 10.7621 17 10.2857 17C9.80938 17 9.42857 16.6016 9.42857 16.1169V11.6331ZM12.8571 11.6331C12.8571 11.1484 13.238 10.75 13.7143 10.75C14.1906 10.75 14.5714 11.1484 14.5714 11.6331V16.1169C14.5714 16.6016 14.1906 17 13.7143 17C13.238 17 12.8571 16.6016 12.8571 16.1169V11.6331ZM9.66357 3.44062C9.79968 3.3048 9.95928 3.25 10.0996 3.25H13.9004C14.0407 3.25 14.2003 3.30479 14.3364 3.44062C14.4762 3.58005 14.5714 3.78913 14.5714 4.02593V5.75H9.42857V4.02593C9.42857 3.78913 9.52384 3.58005 9.66357 3.44062Z"/>
                        </svg>
                    </span>
                    <span class="menu-title">{{ __('sidebar.Recycle_Bin') }}</span>
                </a>
            </div>
            <!--end:Menu item-->



        </div>
        <!--end::Menu-->
    </div>
    <!--end::Menu wrapper-->
</div>
<!--end::sidebar menu-->
