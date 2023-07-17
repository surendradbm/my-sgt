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
                            >
                            Guard</h1>
                        <div class="row">
                            <div class="col-md-2">
                                <a href="javascript:void(0);" class="card shadow-sm">
                                    <div class="card-body d-flex align-items">
                                        <span class="svg-icon fs-1">
                                            <i class="bi bi-person-check-fill font_size_color"></i>
                                        </span>
                                        <span class="ms-3 text-gray-700 fw-bold">
                                            Total Guards
                                        </span>
                                        <span class="ms-3 text-gray-700 fw-bold">
                                            56
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="javascript:void(0);" class="card shadow-sm">
                                    <div class="card-body d-flex align-items">
                                        <span class="svg-icon fs-1">
                                            <i class="bi bi-toggle-on font_size_color"></i>
                                        </span>
                                        <span class="ms-3 text-gray-700 fw-bold">
                                            Active Guards
                                        </span>
                                        <span class="ms-3 text-gray-700 fw-bold">
                                            556
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="javascript:void(0);" class="card shadow-sm">
                                    <div class="card-body d-flex align-items">
                                        <span class="svg-icon fs-1">
                                            <i class="bi bi-toggle-off font_size_color"></i>
                                        </span>
                                        <span class="ms-3 text-gray-700 fw-bold">
                                            Inactive Guards
                                        </span>
                                        <span class="ms-3 text-gray-700 fw-bold">
                                            526
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="javascript:void(0);" class="card shadow-sm">
                                    <div class="card-body d-flex align-items">
                                        <span class="svg-icon fs-1">
                                            <i class="bi bi-bar-chart-steps font_size_color"></i>
                                        </span>

                                        <span class="ms-3 text-gray-700 fw-bold">
                                            Guard On Duty
                                        </span>
                                        <span class="ms-3 text-gray-700 fw-bold">
                                            1356
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
                                <p>All the Data Will be lost. Do you want to delete Guard ?
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
                        {{-- Filter, Export  Starts --}}
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-theame float_right" id="aman"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                    >
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
                        {{-- Filter, Export  Ends --}}
                        {{-- Table Starts --}}
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
                                        <th>Sr No.</th>
                                        <th>Guard Name </th>
                                        <th>Position</th>
                                        <th>Gender</th>
                                        <th>Country</th>
                                        <th>State</th>
                                        <th>City</th>
                                        <th>Emails</th>
                                        <th>Phone No.</th>
                                        <th>Account Created Date</th>
                                        <th>Property Assigned</th>
                                        <th>Shift Completed</th>
                                        <th>Missed Shifts</th>
                                        <th>Reports</th>
                                        <th>Total Leaves</th>
                                        <th>Last Log In</th>
                                        <th>Status</th>
                                        <th>Action</th>
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
                                        <td>1</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-30px symbol-md-40px me-3">
                                                    <img src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg"
                                                        alt="">
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    {{-- <label class="fw-bold mb-1 fs-6">Kimberly Mastrangelo</label> --}}
                                                    <label class="mb-1 fs-6">Kimberly Mastrangelo</label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Supervisor</td>
                                        <td>Male</td>
                                        <td>India</td>
                                        <td>Uttar Pradesh</td>
                                        <td>Lucknow</td>
                                        <td>s.t.sharkey@outlook.com</td>
                                        <td>(215) 424-7763</td>
                                        <td>May 28, 2023</td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td>Jun 3, 2023 3:56 pm</td>
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
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        View Guard ID
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Edit Details
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                        data-bs-target="#deleteConfirmationModal">
                                                        Delete Guard
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
                                        <td>2</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-30px symbol-md-40px me-3">
                                                    <img src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg"
                                                        alt="">
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    {{-- <label class="fw-bold mb-1 fs-6">Kimberly Mastrangelo</label> --}}
                                                    <label class="mb-1 fs-6">Kimberly Mastrangelo</label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Supervisor</td>
                                        <td>Male</td>
                                        <td>India</td>
                                        <td>Uttar Pradesh</td>
                                        <td>Lucknow</td>
                                        <td>s.t.sharkey@outlook.com</td>
                                        <td>(215) 424-7763</td>
                                        <td>May 28, 2023</td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td>Jun 3, 2023 3:56 pm</td>
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
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        View Guard ID
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Edit Details
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                        data-bs-target="#deleteConfirmationModal">
                                                        Delete Guard
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
                                        <td>3</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-30px symbol-md-40px me-3">
                                                    <img src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg"
                                                        alt="">
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    {{-- <label class="fw-bold mb-1 fs-6">Kimberly Mastrangelo</label> --}}
                                                    <label class="mb-1 fs-6">Kimberly Mastrangelo</label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Supervisor</td>
                                        <td>Male</td>
                                        <td>India</td>
                                        <td>Uttar Pradesh</td>
                                        <td>Lucknow</td>
                                        <td>s.t.sharkey@outlook.com</td>
                                        <td>(215) 424-7763</td>
                                        <td>May 28, 2023</td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td>Jun 3, 2023 3:56 pm</td>
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
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        View Guard ID
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Edit Details
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                        data-bs-target="#deleteConfirmationModal">
                                                        Delete Guard
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
                                        <td>4</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-30px symbol-md-40px me-3">
                                                    <img src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg"
                                                        alt="">
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    {{-- <label class="fw-bold mb-1 fs-6">Kimberly Mastrangelo</label> --}}
                                                    <label class="mb-1 fs-6">Kimberly Mastrangelo</label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Supervisor</td>
                                        <td>Male</td>
                                        <td>India</td>
                                        <td>Uttar Pradesh</td>
                                        <td>Lucknow</td>
                                        <td>s.t.sharkey@outlook.com</td>
                                        <td>(215) 424-7763</td>
                                        <td>May 28, 2023</td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td>Jun 3, 2023 3:56 pm</td>
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
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        View Guard ID
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Edit Details
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                        data-bs-target="#deleteConfirmationModal">
                                                        Delete Guard
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
                                        <td>5</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-30px symbol-md-40px me-3">
                                                    <img src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg"
                                                        alt="">
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    {{-- <label class="fw-bold mb-1 fs-6">Kimberly Mastrangelo</label> --}}
                                                    <label class="mb-1 fs-6">Kimberly Mastrangelo</label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Supervisor</td>
                                        <td>Male</td>
                                        <td>India</td>
                                        <td>Uttar Pradesh</td>
                                        <td>Lucknow</td>
                                        <td>s.t.sharkey@outlook.com</td>
                                        <td>(215) 424-7763</td>
                                        <td>May 28, 2023</td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td>Jun 3, 2023 3:56 pm</td>
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
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        View Guard ID
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Edit Details
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                        data-bs-target="#deleteConfirmationModal">
                                                        Delete Guard
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
                                        <td>6</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-30px symbol-md-40px me-3">
                                                    <img src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg"
                                                        alt="">
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    {{-- <label class="fw-bold mb-1 fs-6">Kimberly Mastrangelo</label> --}}
                                                    <label class="mb-1 fs-6">Kimberly Mastrangelo</label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Supervisor</td>
                                        <td>Male</td>
                                        <td>India</td>
                                        <td>Uttar Pradesh</td>
                                        <td>Lucknow</td>
                                        <td>s.t.sharkey@outlook.com</td>
                                        <td>(215) 424-7763</td>
                                        <td>May 28, 2023</td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td>Jun 3, 2023 3:56 pm</td>
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
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        View Guard ID
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Edit Details
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                        data-bs-target="#deleteConfirmationModal">
                                                        Delete Guard
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
                                        <td>7</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-30px symbol-md-40px me-3">
                                                    <img src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg"
                                                        alt="">
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    {{-- <label class="fw-bold mb-1 fs-6">Kimberly Mastrangelo</label> --}}
                                                    <label class="mb-1 fs-6">Kimberly Mastrangelo</label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Supervisor</td>
                                        <td>Male</td>
                                        <td>India</td>
                                        <td>Uttar Pradesh</td>
                                        <td>Lucknow</td>
                                        <td>s.t.sharkey@outlook.com</td>
                                        <td>(215) 424-7763</td>
                                        <td>May 28, 2023</td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td>Jun 3, 2023 3:56 pm</td>
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
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        View Guard ID
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Edit Details
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                        data-bs-target="#deleteConfirmationModal">
                                                        Delete Guard
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
                                        <td>8</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-30px symbol-md-40px me-3">
                                                    <img src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg"
                                                        alt="">
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    {{-- <label class="fw-bold mb-1 fs-6">Kimberly Mastrangelo</label> --}}
                                                    <label class="mb-1 fs-6">Kimberly Mastrangelo</label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Supervisor</td>
                                        <td>Male</td>
                                        <td>India</td>
                                        <td>Uttar Pradesh</td>
                                        <td>Lucknow</td>
                                        <td>s.t.sharkey@outlook.com</td>
                                        <td>(215) 424-7763</td>
                                        <td>May 28, 2023</td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td>Jun 3, 2023 3:56 pm</td>
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
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        View Guard ID
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Edit Details
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                        data-bs-target="#deleteConfirmationModal">
                                                        Delete Guard
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
                                        <td>9</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-30px symbol-md-40px me-3">
                                                    <img src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg"
                                                        alt="">
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    {{-- <label class="fw-bold mb-1 fs-6">Kimberly Mastrangelo</label> --}}
                                                    <label class="mb-1 fs-6">Kimberly Mastrangelo</label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Supervisor</td>
                                        <td>Male</td>
                                        <td>India</td>
                                        <td>Uttar Pradesh</td>
                                        <td>Lucknow</td>
                                        <td>s.t.sharkey@outlook.com</td>
                                        <td>(215) 424-7763</td>
                                        <td>May 28, 2023</td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td>Jun 3, 2023 3:56 pm</td>
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
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        View Guard ID
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Edit Details
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                        data-bs-target="#deleteConfirmationModal">
                                                        Delete Guard
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
                                        <td>10</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-30px symbol-md-40px me-3">
                                                    <img src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg"
                                                        alt="">
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    {{-- <label class="fw-bold mb-1 fs-6">Kimberly Mastrangelo</label> --}}
                                                    <label class="mb-1 fs-6">Kimberly Mastrangelo</label>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Supervisor</td>
                                        <td>Male</td>
                                        <td>India</td>
                                        <td>Uttar Pradesh</td>
                                        <td>Lucknow</td>
                                        <td>s.t.sharkey@outlook.com</td>
                                        <td>(215) 424-7763</td>
                                        <td>May 28, 2023</td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td><u class="text-hover-primary">23</u></td>
                                        <td>Jun 3, 2023 3:56 pm</td>
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
                                                data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        View Guard ID
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                        Edit Details
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                        data-bs-target="#deleteConfirmationModal">
                                                        Delete Guard
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                            </div>
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
<script>
    "use strict";

    // Class definition
    var KTDatatablesExample = function() {
        // Shared variables
        var table;
        var datatable;

        // Private functions
        var initDatatable = function() {
            // Set date data order
            const tableRows = table.querySelectorAll('tbody tr');

            tableRows.forEach(row => {
                const dateRow = row.querySelectorAll('td');
                const realDate = moment(dateRow[3].innerHTML, "DD MMM YYYY, LT")
                    .format(); // select date from 4th column in table
                dateRow[3].setAttribute('data-order', realDate);
            });

            // Init datatable --- more info on datatables: https://datatables.net/manual/
            datatable = $(table).DataTable({
                "info": false,
                'order': [],
                'pageLength': 10,
            });
        }

        // Hook export buttons
        var exportButtons = () => {
            const documentTitle = 'Customer Orders Report';
            var buttons = new $.fn.dataTable.Buttons(table, {
                buttons: [{
                        extend: 'copyHtml5',
                        title: documentTitle
                    },
                    {
                        extend: 'excelHtml5',
                        title: documentTitle
                    },
                    {
                        extend: 'csvHtml5',
                        title: documentTitle
                    },
                    {
                        extend: 'pdfHtml5',
                        title: documentTitle
                    }
                ]
            }).container().appendTo($('#kt_datatable_example_buttons'));

            // Hook dropdown menu click event to datatable export buttons
            const exportButtons = document.querySelectorAll(
                '#kt_datatable_example_export_menu [data-kt-export]');
            exportButtons.forEach(exportButton => {
                exportButton.addEventListener('click', e => {
                    e.preventDefault();

                    // Get clicked export value
                    const exportValue = e.target.getAttribute('data-kt-export');
                    const target = document.querySelector('.dt-buttons .buttons-' +
                        exportValue);

                    // Trigger click event on hidden datatable export buttons
                    target.click();
                });
            });
        }

        // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
        var handleSearchDatatable = () => {
            const filterSearch = document.querySelector('[data-kt-filter="search"]');
            filterSearch.addEventListener('keyup', function(e) {
                datatable.search(e.target.value).draw();
            });
        }

        // Public methods
        return {
            init: function() {
                table = document.querySelector('#kt_datatable_example');

                if (!table) {
                    return;
                }

                initDatatable();
                exportButtons();
                handleSearchDatatable();
            }
        };
    }();

    // On document ready
    KTUtil.onDOMContentLoaded(function() {
        KTDatatablesExample.init();
    });
</script>
