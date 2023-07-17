<x-default-layout>
    <style>
        .btn.btn-danger {
            background-color: #244b8a;
        }

        .sss {
            left: 513px;
        }
    </style>
    {{-- First Section Starts --}}
    <div class="row mb-5 mt-5">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <h1 class="page-heading d-flex text-bg fw-bold fs-3 flex-column justify-content-center my-0"
                            style="color: #244b8a;">
                            Shifts</h1>
                        <div class="row">
                            <div class="col-md-2">
                                <a href="javascript:void(0);" class="card shadow-sm">
                                    <div class="card-body d-flex align-items">
                                        <span class="svg-icon fs-1">
                                            <i class="bi bi-person-check-fill"
                                                style="font-size: 26px; color: #244b8a;"></i>
                                        </span>

                                        <span class="ms-3 text-gray-700 fs-6 fw-bold">
                                            Total Shifts
                                        </span>
                                        <span class="ms-3 text-gray-700 fs-6 fw-bold">
                                            56
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="javascript:void(0);" class="card shadow-sm">
                                    <div class="card-body d-flex align-items">
                                        <span class="svg-icon fs-1">
                                            <i class="bi bi-pie-chart-fill"
                                                style="font-size: 26px; color: #244b8a;"></i>
                                        </span>

                                        <span class="ms-3 text-gray-700 fs-6 fw-bold">
                                            Active Shifts
                                        </span>
                                        <span class="ms-3 text-gray-700 fs-6 fw-bold">
                                            556
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="javascript:void(0);" class="card shadow-sm">
                                    <div class="card-body d-flex align-items">
                                        <span class="svg-icon fs-1">
                                            <i class="bi bi-people-fill" style="font-size: 26px; color: #244b8a;"></i>
                                        </span>

                                        <span class="ms-3 text-gray-700 fs-6 fw-bold">
                                            In-Progress Shifts
                                        </span>
                                        <span class="ms-3 text-gray-700 fs-6 fw-bold">
                                            526
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="javascript:void(0);" class="card shadow-sm">
                                    <div class="card-body d-flex align-items">
                                        <span class="svg-icon fs-1">
                                            <i class="bi bi-bezier2" style="font-size: 26px; color: #244b8a;"></i>
                                        </span>

                                        <span class="ms-3 text-gray-700 fs-6 fw-bold">
                                            Missed Shifts
                                        </span>
                                        <span class="ms-3 text-gray-700 fs-6 fw-bold">
                                            356
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- First Section Ends --}}
    <div class="row">
        <div class="col-md-12">
            <form>
                {{-- Delete Modal Starts --}}
                <div class="modal fade" id="deleteConfirmationModal" tabindex="-1"
                    aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteConfirmationModalLabel">Delete Confirmation
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>All the Data Will be lost. Do you want to delete Shift ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Delete Modal Ends --}}
                <div class="card card-flush shadow-sm">
                    <div class="card-body py-5">
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-theame" id="aman"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                    style="float: right;">
                                    <i class="ki-duotone ki-exit-down fs-2"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    Export Report
                                </button>
                                <div id="kt_datatable_example_export_menu"
                                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-export="csv">
                                            Export as CSV
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-export="pdf">
                                            Export as PDF
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                            </div>
                        </div>
                        {{-- Table Starts --}}
                        <div class="table-responsive mt-5">
                            <table class="table table-hover table-rounded border gy-7 gs-7" id="dataTable">
                                <thead>
                                    <tr class="fw-semibold fs-6 border-bottom-2 border-gray-200">
                                        <th style="background: #244b8a; color: white;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="headCheckbox" onchange="toggleAllCheckboxes()">
                                                <label class="form-check-label" for="headCheckbox">
                                                </label>
                                            </div>
                                        </th>
                                        <th style="background: #244b8a; color: white;">S.No.</th>
                                        <th style="background: #244b8a; color: white;">Shift Name</th>
                                        <th style="background: #244b8a; color: white;">Property Name</th>
                                        <th style="background: #244b8a; color: white;">Clock-In & Clock-out</th>
                                        <th style="background: #244b8a; color: white;">Created By</th>
                                        <th style="background: #244b8a; color: white;">created On</th>
                                        <th style="background: #244b8a; color: white;">Shift Statuss</th>
                                        <th style="background: #244b8a; color: white;">Active/Inactive</th>
                                        <th style="background: #244b8a; color: white;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input body-checkbox" type="checkbox"
                                                    value="" id="checkbox1">
                                                <label class="form-check-label" for="checkbox1">
                                                </label>
                                            </div>
                                        </td>
                                        <td style="background: white;">1</td>
                                        <td>Hallway Shift 4</td>
                                        <td><u style="color: #244b8a">Rivi Properties</u></td>
                                        <td>08:00 AM - 02:00 PM</td>
                                        <td><u style="color: #244b8a">Helter Staff</u></td>
                                        <td>On 21/02/2023</td>
                                        <td>Completed</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input body-toggle" type="checkbox"
                                                    role="switch" id="flexSwitchCheckDefault"
                                                    onchange="toggleSwitch()">
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
                                                data-kt-menu="true" style="">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Edit shift
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
                                                        data-bs-target="#deleteConfirmationModal">
                                                        Delete Shift
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input body-checkbox" type="checkbox"
                                                    value="" id="checkbox1">
                                                <label class="form-check-label" for="checkbox1">
                                                </label>
                                            </div>
                                        </td>
                                        <td style="background: white;">2</td>
                                        <td>Shift 2</td>
                                        <td><u style="color: #244b8a">Rivi Properties</u></td>
                                        <td>08:00 AM - 02:00 PM</td>
                                        <td><u style="color: #244b8a">Helter Staff</u></td>
                                        <td>On 21/02/2023</td>
                                        <td>Upcoming</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input body-toggle" type="checkbox"
                                                    role="switch" id="flexSwitchCheckDefault"
                                                    onchange="toggleSwitch()">
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
                                                data-kt-menu="true" style="">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Edit shift
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
                                                        data-bs-target="#deleteConfirmationModal">
                                                        Delete Shift
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input body-checkbox" type="checkbox"
                                                    value="" id="checkbox1">
                                                <label class="form-check-label" for="checkbox1">
                                                </label>
                                            </div>
                                        </td>
                                        <td style="background: white;">3</td>
                                        <td>Hallway Shift 3</td>
                                        <td><u style="color: #244b8a">Rivi Properties</u></td>
                                        <td>08:00 AM - 02:00 PM</td>
                                        <td><u style="color: #244b8a">Petersburg and nancarrow St...</u></td>
                                        <td>On 21/02/2023</td>
                                        <td>Inprogress</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input body-toggle" type="checkbox"
                                                    role="switch" id="flexSwitchCheckDefault"
                                                    onchange="toggleSwitch()">
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
                                                data-kt-menu="true" style="">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Edit shift
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
                                                        data-bs-target="#deleteConfirmationModal">
                                                        Delete Shift
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input body-checkbox" type="checkbox"
                                                    value="" id="checkbox1">
                                                <label class="form-check-label" for="checkbox1">
                                                </label>
                                            </div>
                                        </td>
                                        <td style="background: white;">4</td>
                                        <td>Hallway Shift 4</td>
                                        <td><u style="color: #244b8a">Rivi Properties</u></td>
                                        <td>08:00 AM - 02:00 PM</td>
                                        <td><u style="color: #244b8a">Helter Staff</u></td>
                                        <td>On 21/02/2023</td>
                                        <td>Completed</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input body-toggle" type="checkbox"
                                                    role="switch" id="flexSwitchCheckDefault"
                                                    onchange="toggleSwitch()">
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
                                                data-kt-menu="true" style="">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Edit shift
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
                                                        data-bs-target="#deleteConfirmationModal">
                                                        Delete Shift
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input body-checkbox" type="checkbox"
                                                    value="" id="checkbox1">
                                                <label class="form-check-label" for="checkbox1">
                                                </label>
                                            </div>
                                        </td>
                                        <td style="background: white;">5</td>
                                        <td>Hallway Shift 4</td>
                                        <td><u style="color: #244b8a">Rivi Properties</u></td>
                                        <td>08:00 AM - 02:00 PM</td>
                                        <td><u style="color: #244b8a">Helter Staff</u></td>
                                        <td>On 21/02/2023</td>
                                        <td>Completed</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input body-toggle" type="checkbox"
                                                    role="switch" id="flexSwitchCheckDefault"
                                                    onchange="toggleSwitch()">
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
                                                data-kt-menu="true" style="">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Edit shift
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
                                                        data-bs-target="#deleteConfirmationModal">
                                                        Delete Shift
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input body-checkbox" type="checkbox"
                                                    value="" id="checkbox1">
                                                <label class="form-check-label" for="checkbox1">
                                                </label>
                                            </div>
                                        </td>
                                        <td style="background: white;">6</td>
                                        <td>Hallway Shift 4</td>
                                        <td><u style="color: #244b8a">Rivi Properties</u></td>
                                        <td>08:00 AM - 02:00 PM</td>
                                        <td><u style="color: #244b8a">Helter Staff</u></td>
                                        <td>On 21/02/2023</td>
                                        <td>Completed</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input body-toggle" type="checkbox"
                                                    role="switch" id="flexSwitchCheckDefault"
                                                    onchange="toggleSwitch()">
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
                                                data-kt-menu="true" style="">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Edit shift
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
                                                        data-bs-target="#deleteConfirmationModal">
                                                        Delete Shift
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input body-checkbox" type="checkbox"
                                                    value="" id="checkbox1">
                                                <label class="form-check-label" for="checkbox1">
                                                </label>
                                            </div>
                                        </td>
                                        <td style="background: white;">7</td>
                                        <td>Hallway Shift 4</td>
                                        <td><u style="color: #244b8a">Rivi Properties</u></td>
                                        <td>08:00 AM - 02:00 PM</td>
                                        <td><u style="color: #244b8a">Helter Staff</u></td>
                                        <td>On 21/02/2023</td>
                                        <td>Completed</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input body-toggle" type="checkbox"
                                                    role="switch" id="flexSwitchCheckDefault"
                                                    onchange="toggleSwitch()">
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
                                                data-kt-menu="true" style="">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Edit shift
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
                                                        data-bs-target="#deleteConfirmationModal">
                                                        Delete Shift
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input body-checkbox" type="checkbox"
                                                    value="" id="checkbox1">
                                                <label class="form-check-label" for="checkbox1">
                                                </label>
                                            </div>
                                        </td>
                                        <td style="background: white;">8</td>
                                        <td>Hallway Shift 4</td>
                                        <td><u style="color: #244b8a">Rivi Properties</u></td>
                                        <td>08:00 AM - 02:00 PM</td>
                                        <td><u style="color: #244b8a">Helter Staff</u></td>
                                        <td>On 21/02/2023</td>
                                        <td>Completed</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input body-toggle" type="checkbox"
                                                    role="switch" id="flexSwitchCheckDefault"
                                                    onchange="toggleSwitch()">
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
                                                data-kt-menu="true" style="">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Edit shift
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
                                                        data-bs-target="#deleteConfirmationModal">
                                                        Delete Shift
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input body-checkbox" type="checkbox"
                                                    value="" id="checkbox1">
                                                <label class="form-check-label" for="checkbox1">
                                                </label>
                                            </div>
                                        </td>
                                        <td style="background: white;">9</td>
                                        <td>Hallway Shift 4</td>
                                        <td><u style="color: #244b8a">Rivi Properties</u></td>
                                        <td>08:00 AM - 02:00 PM</td>
                                        <td><u style="color: #244b8a">Helter Staff</u></td>
                                        <td>On 21/02/2023</td>
                                        <td>Completed</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input body-toggle" type="checkbox"
                                                    role="switch" id="flexSwitchCheckDefault"
                                                    onchange="toggleSwitch()">
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
                                                data-kt-menu="true" style="">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Edit shift
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
                                                        data-bs-target="#deleteConfirmationModal">
                                                        Delete Shift
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input body-checkbox" type="checkbox"
                                                    value="" id="checkbox1">
                                                <label class="form-check-label" for="checkbox1">
                                                </label>
                                            </div>
                                        </td>
                                        <td style="background: white;">10</td>
                                        <td>Hallway Shift 4</td>
                                        <td><u style="color: #244b8a">Rivi Properties</u></td>
                                        <td>08:00 AM - 02:00 PM</td>
                                        <td><u style="color: #244b8a">Helter Staff</u></td>
                                        <td>On 21/02/2023</td>
                                        <td>Completed</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input body-toggle" type="checkbox"
                                                    role="switch" id="flexSwitchCheckDefault"
                                                    onchange="toggleSwitch()">
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
                                                data-kt-menu="true" style="">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Edit shift
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
                                                        data-bs-target="#deleteConfirmationModal">
                                                        Delete Shift
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- Table Ends --}}
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- Toggle Active Inactive --}}
    <script>
        function toggleSwitch() {
            // var checkboxes = document.getElementsByClassName("form-check-input");
            var checkboxes = document.querySelectorAll(".body-toggle");
            for (var i = 0; i < checkboxes.length; i++) {
                var checkbox = checkboxes[i];
                var label = checkbox.nextElementSibling;

                if (checkbox.checked) {
                    label.textContent = "Active";
                } else {
                    label.textContent = "Inactive";
                }
            }
        }
    </script>
    {{-- Toggle Active Inactive Ends --}}

    {{-- Checkbox --}}
    <script>
        function toggleAllCheckboxes() {
            var headCheckbox = document.getElementById("headCheckbox");
            // var checkboxes = document.querySelectorAll("tbody input[type='checkbox']");
            var checkboxes = document.querySelectorAll(".body-checkbox");

            for (var i = 0; i < checkboxes.length; i++) {
                checkboxes[i].checked = headCheckbox.checked;
            }
        }
    </script>
    {{-- Checkbox Ends --}}

</x-default-layout>
