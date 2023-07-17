<x-default-layout>
    <style>
        .btn.btn-danger {
            background-color: #244b8a;
        }
        .sss {
            left: 513px;
        }
        .text-blue{
            color: #244b8a;
        }
    </style>
    {{-- First Section Starts --}}

    <div class="card shadow-sm mt-5">
        <div class="card-body">
            <div id="kt_app_toolbar_container" class="d-flex flex-stack ">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                    <h1 class="page-heading d-flex text-bg fw-bold fs-3 flex-column justify-content-center my-0">
                    All Customers
                    </h1>
                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <a href="#" class="btn btn-sm fw-bold btn-primary"> Create Customer </a>
                </div>
            </div>
            <div class="d-flex">
                <a href="javascript:void(0);" class="card item_card me-3">
                    <div class="card-body d-flex">
                        <span class="ki-duotone text-blue ki-bi bi-person-check-fill xyz fs-1"></span>
                        <span class="ms-3 text-blue fs-3 fw-bold">Total Customer</span>
                        <span class="ms-3 text-blue fs-2 fw-bold">112 </span>
                    </div>
                </a>
                <a href="javascript:void(0);" class="card item_card me-3">
                    <div class="card-body d-flex">
                        <span class="ki-duotone text-blue ki-bi bi-person-check-fill xyz fs-1""></span>
                        <span class="ms-3 text-blue fs-3 fw-bold">Active Customer </span>
                        <span class="ms-3 text-blue fs-2 fw-bold">112 </span>
                    </div>
                </a>
                <a href="javascript:void(0);" class="card item_card me-3">
                    <div class="card-body d-flex">
                        <span class="ki-duotone text-blue ki-bi bi-people-fill xyz fs-1"></span>
                        <span class="ms-3 text-blue fs-3 fw-bold">Inactive Customer </span>
                        <span class="ms-3 text-blue fs-2 fw-bold">45 </span>
                    </div>
                </a>
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
                                <p>All the Data Will be lost. Do you want to delete This Customer ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-danger">Continue</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Delete Modal Ends --}}
                <div class="card card-flush shadow-sm">
                    <div class="card-body py-5">
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
                                <button id="filterButton" type="button" class="btn float_right btn-theame me-3"
                                    >
                                    <i class="ki-duotone ki-filter fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    Filter
                                </button>
                                <div id="filterDropdown" class="dropdown-menu filter_dropdown"
                                    >
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="dropdown-item">
                                                <label for="columns">Columns:</label>
                                                <select id="columns" class="form-control">
                                                    <option value="column1">Select Filter</option>
                                                    <option value="column2">Positon </option>
                                                    <option value="column3">Gender</option>
                                                    <option value="column3">country</option>
                                                    <option value="column3">state</option>
                                                    <option value="column3">City</option>
                                                    <option value="column3">Account Cration</option>
                                                    <option value="column3">Property Assign</option>
                                                    <option value="column3">Missed Shift</option>
                                                    <option value="column3">Reports</option>
                                                    <option value="column3">Toltal Leaves</option>
                                                    <option value="column3">Last Login</option>
                                                    <option value="column3">Status</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="dropdown-item">
                                                <label for="operator">Operator:</label>
                                                <select id="operator" class="form-control">
                                                    <option value="equal">Select Filter</option>
                                                    <option value="equal">Contains</option>
                                                    <option value="equal">Equal</option>
                                                    <option value="equal">Starts with</option>
                                                    <option value="notEqual">Ends with</option>
                                                    <option value="greaterThan">Is empty</option>
                                                    <option value="lessThan">Is not empty</option>
                                                    <option value="lessThan">Is any of</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="dropdown-item">
                                                <label for="value">Value:</label>
                                                <input type="text" id="value" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                        <th>S.No.</th>
                                        <th>Customer Name</th>
                                        <th>Email</th>
                                        <th>Mobile Number</th>
                                        <th>Subscription Type</th>
                                        <th>Purchage Date</th>
                                        <th>Expiry Date</th>
                                        <th>Total Properties</th>
                                        <th>Registered on</th>
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
                                        <td>Angela Shaw</td>
                                        <td><u class="text-hover-primary">jery787@gmail.com</u></td>
                                        <td>88852525252</td>
                                        <td><u class="text-hover-primary">Silver</u></td>
                                        <td>On 21/02/2023</td>
                                        <td>23/08/2023</td>
                                        <td>87</td>
                                        <td>28/01/2023</td>
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
                                                        Edit Customer Profile
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3">
                                                       View Details
                                                    </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                        data-bs-target="#deleteConfirmationModal">
                                                        Delete Customer
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
                                        <td>Angela Shaw</td>
                                        <td><u class="text-hover-primary">jery787@gmail.com</u></td>
                                        <td>88852525252</td>
                                        <td><u class="text-hover-primary">Silver</u></td>
                                        <td>On 21/02/2023</td>
                                        <td>23/08/2023</td>
                                        <td>87</td>
                                        <td>28/01/2023</td>
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
                                        <td>3</td>
                                        <td>Angela Shaw</td>
                                        <td><u class="text-hover-primary">jery787@gmail.com</u></td>
                                        <td>88852525252</td>
                                        <td><u class="text-hover-primary">Silver</u></td>
                                        <td>On 21/02/2023</td>
                                        <td>23/08/2023</td>
                                        <td>87</td>
                                        <td>28/01/2023</td>
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
                                        <td>4</td>
                                        <td>Angela Shaw</td>
                                        <td><u class="text-hover-primary">jery787@gmail.com</u></td>
                                        <td>88852525252</td>
                                        <td><u class="text-hover-primary">Silver</u></td>
                                        <td>On 21/02/2023</td>
                                        <td>23/08/2023</td>
                                        <td>87</td>
                                        <td>28/01/2023</td>
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
                                        <td>5</td>
                                        <td>Angela Shaw</td>
                                        <td><u class="text-hover-primary">jery787@gmail.com</u></td>
                                        <td>88852525252</td>
                                        <td><u class="text-hover-primary">Silver</u></td>
                                        <td>On 21/02/2023</td>
                                        <td>23/08/2023</td>
                                        <td>87</td>
                                        <td>28/01/2023</td>
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
                                        <td>6</td>
                                        <td>Angela Shaw</td>
                                        <td><u class="text-hover-primary">jery787@gmail.com</u></td>
                                        <td>88852525252</td>
                                        <td><u class="text-hover-primary">Silver</u></td>
                                        <td>On 21/02/2023</td>
                                        <td>23/08/2023</td>
                                        <td>87</td>
                                        <td>28/01/2023</td>
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
                                        <td>7</td>
                                        <td>Angela Shaw</td>
                                        <td><u class="text-hover-primary">jery787@gmail.com</u></td>
                                        <td>88852525252</td>
                                        <td><u class="text-hover-primary">Silver</u></td>
                                        <td>On 21/02/2023</td>
                                        <td>23/08/2023</td>
                                        <td>87</td>
                                        <td>28/01/2023</td>
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
                                        <td>8</td>
                                        <td>Angela Shaw</td>
                                        <td><u class="text-hover-primary">jery787@gmail.com</u></td>
                                        <td>88852525252</td>
                                        <td><u class="text-hover-primary">Silver</u></td>
                                        <td>On 21/02/2023</td>
                                        <td>23/08/2023</td>
                                        <td>87</td>
                                        <td>28/01/2023</td>
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
                                        <td>9</td>
                                        <td>Angela Shaw</td>
                                        <td><u class="text-hover-primary">jery787@gmail.com</u></td>
                                        <td>88852525252</td>
                                        <td><u class="text-hover-primary">Silver</u></td>
                                        <td>On 21/02/2023</td>
                                        <td>23/08/2023</td>
                                        <td>87</td>
                                        <td>28/01/2023</td>
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
                                        <td>10</td>
                                        <td>Angela Shaw</td>
                                        <td><u class="text-hover-primary">jery787@gmail.com</u></td>
                                        <td>88852525252</td>
                                        <td><u class="text-hover-primary">Silver</u></td>
                                        <td>On 21/02/2023</td>
                                        <td>23/08/2023</td>
                                        <td>87</td>
                                        <td>28/01/2023</td>
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
    <script>
        const filterButton = document.getElementById('filterButton');
        const filterDropdown = document.getElementById('filterDropdown');

        filterButton.addEventListener('click', () => {
            filterDropdown.classList.toggle('show');
        });
    </script>
</x-default-layout>
