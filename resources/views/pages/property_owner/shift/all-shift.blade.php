<x-default-layout>

    <div class="modal fade" id="delete-shift-modal" tabindex="-1" aria-labelledby="delete-shift-modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <p>All the Data Will be lost. Do you want to <br> delete this shift?</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary ms-3">Continue</button>
                </div>
            </div>
        </div>
    </div>


    <section class="property-section">

        {{-- Top Header (Start) --}}
        <div class="guard-header card mt-lg-7 rounded-0">
            <div class="card-body p-5 pb-3">
                <div class="row">
                    <div class="col-lg-10 col-12">
                        <h1 class="title mb-5">Shifts</h1>


                        <a href="{{ route('property_owner.shift.create-guard') }}" class="text-decro">
                            Add New Shift
                        </a>


                        <div class="row mt-5">
                            <div class="col-lg-3 col-md-4 col-12 mb-3">
                                <figure class="info-card card">
                                    <div class="card-body p-4">
                                        <div>
                                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M11.25 21.25L15 17.575C14.5125 17.525 14.15 17.5 13.75 17.5C10.4125 17.5 3.75 19.175 3.75 22.5V25H15L11.25 21.25ZM13.75 15C16.5125 15 18.75 12.7625 18.75 10C18.75 7.2375 16.5125 5 13.75 5C10.9875 5 8.75 7.2375 8.75 10C8.75 12.7625 10.9875 15 13.75 15Z"
                                                    fill="#244B8A" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M19.3375 25.625L15 21.25L16.75 19.4875L19.3375 22.0875L25.75 15.625L27.5 17.3875L19.3375 25.625Z"
                                                    fill="#244B8A" />
                                            </svg>
                                            <a href="/shift/edit">
                                                <label>Total <br>
                                                    Shifts
                                                </label>
                                        </div>
                                        <div>
                                            <h2 class="count">56</h2>
                                        </div>
                                        </a>
                                    </div>
                                </figure>
                            </div>

                            <div class="col-lg-3 col-md-4 col-12 mb-3">
                                <figure class="info-card card">
                                    <div class="card-body p-4">
                                        <div>
                                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M14.15 11.5488V1.88281C7.4 2.55781 2 8.34931 2 15.3828C2 22.4163 7.4 28.2078 14.15 28.8828V19.2168C12.8 18.6633 11.45 17.1648 11.45 15.3828C11.45 13.6008 12.8 12.1023 14.15 11.5488ZM19.361 14.0328H29C28.352 7.62031 23.6 2.51731 16.85 1.88281V11.5488C18.2 11.9538 18.902 12.8718 19.361 14.0328ZM16.85 19.2168V28.8828C23.6 28.2483 28.352 23.1453 29 16.7328H19.361C18.902 17.8938 18.2 18.8118 16.85 19.2168Z"
                                                    fill="#244B8A" />
                                            </svg>

                                            <label>Active <br>
                                                Shifts</label>
                                        </div>
                                        <div>
                                            <h2 class="count">541</h2>
                                        </div>
                                        </a>
                                    </div>
                                </figure>
                            </div>

                            <div class="col-lg-3 col-md-4 col-12 mb-3">
                                <figure class="info-card card">
                                    <div class="card-body p-4">
                                        <div>
                                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M20.8375 16.4124C22.55 17.5749 23.75 19.1499 23.75 21.2499V24.9999H28.75V21.2499C28.75 18.5249 24.2875 16.9124 20.8375 16.4124Z"
                                                    fill="#244B8A" />
                                                <path
                                                    d="M11.25 15C14.0114 15 16.25 12.7614 16.25 10C16.25 7.23858 14.0114 5 11.25 5C8.48858 5 6.25 7.23858 6.25 10C6.25 12.7614 8.48858 15 11.25 15Z"
                                                    fill="#244B8A" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M18.75 15C21.5125 15 23.75 12.7625 23.75 10C23.75 7.2375 21.5125 5 18.75 5C18.1625 5 17.6125 5.125 17.0875 5.3C18.125 6.5875 18.75 8.225 18.75 10C18.75 11.775 18.125 13.4125 17.0875 14.7C17.6125 14.875 18.1625 15 18.75 15Z"
                                                    fill="#244B8A" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M11.25 16.25C7.9125 16.25 1.25 17.925 1.25 21.25V25H21.25V21.25C21.25 17.925 14.5875 16.25 11.25 16.25Z"
                                                    fill="#244B8A" />
                                            </svg>
                                            <a href="/shift/checkpoint/edit/">
                                                <label>In-progress <br>
                                                    Shifts</label>
                                        </div>
                                        <div>
                                            <h2 class="count">2345</h2>
                                        </div>
                                        </a>
                                    </div>
                                </figure>
                            </div>

                            <div class="col-lg-3 col-md-4 col-12 mb-3">
                                <figure class="info-card card">
                                    <div class="card-body p-4">
                                        <div>
                                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M27.5 13.75V3.75H18.75V7.5H11.25V3.75H2.5V13.75H11.25V10H13.75V22.5H18.75V26.25H27.5V16.25H18.75V20H16.25V10H18.75V13.75H27.5Z"
                                                    fill="#244B8A" />
                                            </svg>
                                            <label>Missed <br>
                                                Shifts</label>
                                        </div>
                                        <div>
                                            <h2 class="count">6751</h2>
                                        </div>
                                    </div>
                                </figure>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        {{-- Top Header (End) --}}

        {{-- Section Content (Start) --}}
        <div class="p-7">

            <div class="card table-card">
                {{-- <div class="card-body p-5 border-bottom">
                    <div class="row w-100">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-control search-box">
                                <i class="fas fa-search"></i>
                                <input type="search" placeholder="Search by location, job role,..." class="py-1" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 text-lg-end pe-0">
                                <select class="form-select">
                                    <option value="Filter">Filter</option>
                                </select>
                                <select class="form-select">
                                    <option value="Export">Export</option>
                                </select>
                        </div>
                    </div>
                </div> --}}

                <div class="table-responsive mt-5">
                    <table class="table table-hover table-rounded border gy-7 gs-7" id="dataTable">
                        <thead>
                            <tr class="fw-semibold fs-6 border-bottom-2 border-gray-200">
                                <th>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="headCheckbox" onchange="toggleAllCheckboxes()">
                                        <label class="form-check-label" for="headCheckbox">
                                        </label>
                                    </div>
                                </th>
                                <th>S.No.</th>
                                <th>Property Name</th>
                                <th>Shift Name</th>
                                <th>Clock-In & Clock-out</th>
                                <th>Created By</th>
                                <th>Created On</th>
                                <th>Assign To</th>
                                <th>Total Routes</th>
                                <th>Shift Status</th>
                                <th>Active/Inactive</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 1; $i <= 10; $i++)
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input body-checkbox" type="checkbox"
                                                value="" id="checkbox1">
                                            <label class="form-check-label" for="checkbox1">
                                            </label>
                                        </div>
                                    </td>
                                    <td>{{ $i }}</td>
                                    <td>Rivi Properties </td>
                                    <td>Hallway Shift 4</td>
                                    <td>08:00 AM - 02:00 PM</td>
                                    <td><a href="#" class="link text-decoration-underline">Helter Staff</a></td>
                                    <td>On 21/02/2023</td>
                                    <td><u class="text-hover-primary">10 Guards<< /u>
                                    </td>
                                    <td><u class="text-hover-primary">2</u></td>
                                    <td>Completed</td>
                                    <td>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input body-toggle" type="checkbox"
                                                role="switch" id="flexSwitchCheckDefault" onchange="toggleSwitch()">
                                            <label class="form-check-label"
                                                for="flexSwitchCheckDefault">Inactive</label>
                                        </div>
                                    </td>
                                    <td>
                                        <button
                                            class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                            data-kt-menu-overflow="true">
                                            <i class="bi bi-three-dots-vertical"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i>
                                        </button>
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('property_owner.shift.create-guard') }}"
                                                    class="menu-link px-3">
                                                    Edit Shift
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Download QR
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                    data-bs-target="#delete-shift-modal">
                                                    Delete Shift
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                        </div>
                                    </td>
                                    {{-- <td></td> --}}
                                </tr>
                            @endfor

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        {{-- Section Content (End) --}}

    </section>
</x-default-layout>

<script>
    function toggleDropdown() {
        var dropdownMenu = document.querySelector('.dropdown-menu');
        if (dropdownMenu.style.display === 'none') {
            dropdownMenu.style.display = 'block';
        } else {
            dropdownMenu.style.display = 'none';
        }
    }
</script>
