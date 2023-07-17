<x-default-layout>

{{-- First Section Starts --}}
<div class="card shadow-sm guard-header">
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-lg-6 col-md-4 col-12">
                <div class="title">All Properties</div>
            </div>
            <div class="col-lg-6 col-md-4 col-12 text-end">
                <a href="{{ route('superadmin.properties.create') }}" class="btn btn-primary inverse ">+ ADD NEW PROPERTY</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12 mb-3">
                <figure class="info-card card">
                    <div class="card-body p-4">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                <path d="M9 13.2857H5.4V21.2857H9V13.2857Z" fill="#244B8A"/>
                                <path d="M16.8 13.2857H13.2V21.2857H16.8V13.2857Z" fill="#244B8A"/>
                                <path d="M27 23.5714H3V27H27V23.5714Z" fill="#244B8A"/>
                                <path d="M24.6 13.2857H21V21.2857H24.6V13.2857Z" fill="#244B8A"/>
                                <path d="M15 3L3 8.71429V11H27V8.71429L15 3Z" fill="#244B8A"/>
                            </svg>
                            <label>All<br>Properties</label>
                        </div>
                        <div>
                            <h2 class="count">112</h2>
                        </div>
                    </div>
                </figure>
            </div>

            <div class="col-lg-3 col-md-4 col-12 mb-3">
                <figure class="info-card card">
                    <div class="card-body p-4">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                <path d="M9.54545 22C7.72727 22 6.18182 21.3681 4.90909 20.1042C3.63636 18.8403 3 17.3056 3 15.5C3 13.6944 3.63636 12.1597 4.90909 10.8958C6.18182 9.63194 7.72727 9 9.54545 9H20.4545C22.2727 9 23.8182 9.63194 25.0909 10.8958C26.3636 12.1597 27 13.6944 27 15.5C27 17.3056 26.3636 18.8403 25.0909 20.1042C23.8182 21.3681 22.2727 22 20.4545 22H9.54545ZM9.54545 19.8333H20.4545C21.6545 19.8333 22.6818 19.409 23.5364 18.5604C24.3909 17.7118 24.8182 16.6917 24.8182 15.5C24.8182 14.3083 24.3909 13.2882 23.5364 12.4396C22.6818 11.591 21.6545 11.1667 20.4545 11.1667H9.54545C8.34545 11.1667 7.31818 11.591 6.46364 12.4396C5.60909 13.2882 5.18182 14.3083 5.18182 15.5C5.18182 16.6917 5.60909 17.7118 6.46364 18.5604C7.31818 19.409 8.34545 19.8333 9.54545 19.8333ZM20.4545 18.75C21.3636 18.75 22.1364 18.434 22.7727 17.8021C23.4091 17.1701 23.7273 16.4028 23.7273 15.5C23.7273 14.5972 23.4091 13.8299 22.7727 13.1979C22.1364 12.566 21.3636 12.25 20.4545 12.25C19.5455 12.25 18.7727 12.566 18.1364 13.1979C17.5 13.8299 17.1818 14.5972 17.1818 15.5C17.1818 16.4028 17.5 17.1701 18.1364 17.8021C18.7727 18.434 19.5455 18.75 20.4545 18.75Z" fill="#244B8A"/>
                            </svg>
                            <label>active<br>Properties</label>
                        </div>
                        <div>
                            <h2 class="count">108</h2>
                        </div>
                    </div>
                </figure>
            </div>

            <div class="col-lg-3 col-md-4 col-12 mb-3">
                <figure class="info-card card">
                    <div class="card-body p-4">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                <path d="M20.4545 21C22.2727 21 23.8182 20.3681 25.0909 19.1042C26.3636 17.8403 27 16.3056 27 14.5C27 12.6944 26.3636 11.1597 25.0909 9.89583C23.8182 8.63194 22.2727 8 20.4545 8H9.54545C7.72727 8 6.18182 8.63194 4.90909 9.89583C3.63636 11.1597 3 12.6944 3 14.5C3 16.3056 3.63636 17.8403 4.90909 19.1042C6.18182 20.3681 7.72727 21 9.54545 21H20.4545ZM20.4545 18.8333H9.54545C8.34545 18.8333 7.31818 18.409 6.46363 17.5604C5.60909 16.7118 5.18182 15.6917 5.18182 14.5C5.18182 13.3083 5.60909 12.2882 6.46363 11.4396C7.31818 10.591 8.34545 10.1667 9.54545 10.1667H20.4545C21.6545 10.1667 22.6818 10.591 23.5364 11.4396C24.3909 12.2882 24.8182 13.3083 24.8182 14.5C24.8182 15.6917 24.3909 16.7118 23.5364 17.5604C22.6818 18.409 21.6545 18.8333 20.4545 18.8333ZM9.54545 17.75C8.63636 17.75 7.86364 17.434 7.22727 16.8021C6.59091 16.1701 6.27273 15.4028 6.27273 14.5C6.27273 13.5972 6.59091 12.8299 7.22727 12.1979C7.86364 11.566 8.63636 11.25 9.54545 11.25C10.4545 11.25 11.2273 11.566 11.8636 12.1979C12.5 12.8299 12.8182 13.5972 12.8182 14.5C12.8182 15.4028 12.5 16.1701 11.8636 16.8021C11.2273 17.434 10.4545 17.75 9.54545 17.75Z" fill="#244B8A"/>
                            </svg>
                            <label>Inactive<br>Properties</label>
                        </div>
                        <div>
                            <h2 class="count">4</h2>
                        </div>
                    </div>
                </figure>
            </div>

            <div class="col-lg-3 col-md-4 col-12 mb-3">
                <figure class="info-card card">
                    <div class="card-body p-4">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                <path d="M10 24C9.45 24 8.97917 23.8042 8.5875 23.4125C8.19583 23.0208 8 22.55 8 22V9H7V7H12V6H18V7H23V9H22V22C22 22.55 21.8042 23.0208 21.4125 23.4125C21.0208 23.8042 20.55 24 20 24H10ZM20 9H10V22H20V9ZM12 20H14V11H12V20ZM16 20H18V11H16V20Z" fill="#244B8A"/>
                            </svg>
                            <label>Deleted<br>Properties</label>
                        </div>
                        <div>
                            <h2 class="count">4</h2>
                        </div>
                    </div>
                </figure>
            </div>
        </div>
    </div>
</div>
{{-- First Section Ends --}}

{{-- Main Contant Start--}}
<div class="card card-flush shadow-sm mt-5">
    <div class="card-body py-5">
        {{-- SearchBar, Filter, Export Starts --}}
        <div class="flex-grow-1">
            <div class="d-flex flex-stack flex-wrap">
                <div class="col-lg-3 col-md-4 col-12">
                    {{-- Search Keyword Start --}}
                    <input type="text" class="form-control" placeholder="Search by name...">
                    {{-- Search Keyword End --}}
                </div>
                <div class="col-lg-6 col-md-4 col-12 text-end">
                    {{-- Filter button Start --}}
                    <button id="filterButton" type="button" class="btn btn-primary me-3 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ki-duotone ki-filter fs-2"><span class="path1"></span><span class="path2"></span></i>
                        Filter
                    </button>
                    <div id="filterDropdown" class="dropdown-menu filter_dropdown">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="dropdown-item">
                                    <label for="columns">Columns:</label>
                                    <select id="columns" class="form-control">
                                        <option value="column1">Select Filter</option>
                                        <option value="column1">Property Name</option>
                                        <option value="column2">Shift Name</option>
                                        <option value="column3">Created By</option>
                                        <option value="column3">Created On</option>
                                        <option value="column3">Assign To</option>
                                        <option value="column3">Shift Date</option>
                                        <option value="column3">Routes</option>
                                        <option value="column3">Checkpoints</option>
                                        <option value="column3">Shift Status</option>
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
                    {{-- Filter button End --}}

                    {{-- Export button Start --}}
                    <button id="aman" type="button" class="btn btn-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                        <i class="ki-duotone ki-exit-down fs-2"><span class="path1"></span><span class="path2"></span></i>
                        Export Report
                    </button>
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 fw-semibold w-200px p-3" data-kt-menu="true">
                        <div class="menu-item"><a href="#" class="menu-link" data-kt-export="csv">Export as CSV</a></div>
                        <div class="menu-item"><a href="#" class="menu-link" data-kt-export="pdf">Export as PDF</a></div>
                    </div>
                    {{-- Export button End --}}

                </div>
            </div>

        </div>
        {{-- SearchBar, Filter, Export  Ends --}}

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
                        <th>Property Name</th>
                        <th>Property Type</th>
                        <th>Owner Name</th>
                        <th>Created At</th>
                        <th>Status</th>
                        <th>Total Shifts</th>
                        <th>Total Route</th>
                        <th>Total Checkpoint</th>
                        <th>Total Guards</th>
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
                        <td ><u class="text-hover-primary">Cala Foods</u></td>
                        <td ><u class="text-hover-primary">Residential Property</u></td>
                        <td ><u class="text-hover-primary">Sameer</u></td>
                        <td>01/11/2083</td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input body-toggle" type="checkbox"
                                    role="switch" id="flexSwitchCheckDefault" onchange="toggleSwitch()">
                                <label class="form-check-label"
                                    for="flexSwitchCheckDefault">Inactive</label>
                            </div>
                        </td>
                        <td ><u class="text-hover-primary">37</u></td>
                        <td ><u class="text-hover-primary">65</u></td>
                        <td ><u class="text-hover-primary">65</u></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-active-icon-primary btn-text-primary"
                                data-bs-toggle="modal" data-bs-target="#ManageConfirmationModal">
                                <i class="fa fa-pen"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-active-icon-danger btn-text-danger"
                                data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input body-checkbox" type="checkbox"
                                    value="" id="checkbox2">
                                <label class="form-check-label" for="checkbox2">
                                </label>
                            </div>
                        </td>
                        <td>2</td>
                        <td ><u class="text-hover-primary">Giant</u></td>
                        <td ><u class="text-hover-primary">Commercial Property</u></td>
                        <td ><u class="text-hover-primary">Meera</u>
                        </td>
                        <td>19/11/2070
                        </td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input body-toggle" type="checkbox"
                                    role="switch" id="flexSwitchCheckDefault" onchange="toggleSwitch()">
                                <label class="form-check-label"
                                    for="flexSwitchCheckDefault">Inactive</label>
                            </div>
                        </td>
                        <td ><u class="text-hover-primary">24</u></td>
                        <td ><u class="text-hover-primary">24</u></td>
                        <td ><u class="text-hover-primary">24</u></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-active-icon-primary btn-text-primary"
                                data-bs-toggle="modal" data-bs-target="#ManageConfirmationModal">
                                <i class="fa fa-pen"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-active-icon-danger btn-text-danger"
                                data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input body-checkbox" type="checkbox"
                                    value="" id="checkbox3">
                                <label class="form-check-label" for="checkbox3">
                                </label>
                            </div>
                        </td>
                        <td>3</td>
                        <td ><u class="text-hover-primary">Electronic Geek</u></td>
                        <td ><u class="text-hover-primary">Healthcare Property</u></td>
                        <td ><u class="text-hover-primary">Rahul</u>
                        </td>
                        <td>12/06/2093
                        </td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input body-toggle" type="checkbox"
                                    role="switch" id="flexSwitchCheckDefault" onchange="toggleSwitch()">
                                <label class="form-check-label"
                                    for="flexSwitchCheckDefault">Inactive</label>
                            </div>
                        </td>
                        <td ><u class="text-hover-primary">46</u></td>
                        <td ><u class="text-hover-primary">46</u></td>
                        <td ><u class="text-hover-primary">46</u></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-active-icon-primary btn-text-primary"
                                data-bs-toggle="modal" data-bs-target="#ManageConfirmationModal">
                                <i class="fa fa-pen"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-active-icon-danger btn-text-danger"
                                data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input body-checkbox" type="checkbox"
                                    value="" id="checkbox4">
                                <label class="form-check-label" for="checkbox4">
                                </label>
                            </div>
                        </td>
                        <td>4</td>
                        <td ><u class="text-hover-primary">Cut Rite Lawn Care</u></td>
                        <td ><u class="text-hover-primary">Educational Property</u></td>
                        <td ><u class="text-hover-primary">Rahul</u></td>
                        <td>2011/04/25</td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input body-toggle" type="checkbox"
                                    role="switch" id="flexSwitchCheckDefault" onchange="toggleSwitch()">
                                <label class="form-check-label"
                                    for="flexSwitchCheckDefault">Inactive</label>
                            </div>
                        </td>
                        <td ><u class="text-hover-primary">65</u></td>
                        <td ><u class="text-hover-primary">65</u></td>
                        <td ><u class="text-hover-primary">65</u></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-active-icon-primary btn-text-primary"
                                data-bs-toggle="modal" data-bs-target="#ManageConfirmationModal">
                                <i class="fa fa-pen"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-active-icon-danger btn-text-danger"
                                data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input body-checkbox" type="checkbox"
                                    value="" id="checkbox5">
                                <label class="form-check-label" for="checkbox5">
                                </label>
                            </div>
                        </td>
                        <td>5</td>
                        <td ><u class="text-hover-primary">Auto Works</u></td>
                        <td ><u class="text-hover-primary">Edinburgh</u></td>
                        <td ><u class="text-hover-primary">Rahul</u></td>
                        <td>2011/04/25</td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input body-toggle" type="checkbox"
                                    role="switch" id="flexSwitchCheckDefault" onchange="toggleSwitch()">
                                <label class="form-check-label"
                                    for="flexSwitchCheckDefault">Inactive</label>
                            </div>
                        </td>
                        <td ><u class="text-hover-primary">65</u></td>
                        <td ><u class="text-hover-primary">65</u></td>
                        <td ><u class="text-hover-primary">65</u></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-active-icon-primary btn-text-primary"
                                data-bs-toggle="modal" data-bs-target="#ManageConfirmationModal">
                                <i class="fa fa-pen"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-active-icon-danger btn-text-danger"
                                data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input body-checkbox" type="checkbox"
                                    value="" id="checkbox6">
                                <label class="form-check-label" for="checkbox6">
                                </label>
                            </div>
                        </td>
                        <td>6</td>
                        <td ><u class="text-hover-primary">Magna Architectural Design</u></td>
                        <td ><u class="text-hover-primary">Edinburgh</u></td>
                        <td ><u class="text-hover-primary">Rahul</u></td>
                        <td>2011/04/25</td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input body-toggle" type="checkbox"
                                    role="switch" id="flexSwitchCheckDefault" onchange="toggleSwitch()">
                                <label class="form-check-label"
                                    for="flexSwitchCheckDefault">Inactive</label>
                            </div>
                        </td>
                        <td ><u class="text-hover-primary">65</u></td>
                        <td ><u class="text-hover-primary">65</u></td>
                        <td ><u class="text-hover-primary">65</u></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-active-icon-primary btn-text-primary"
                                data-bs-toggle="modal" data-bs-target="#ManageConfirmationModal">
                                <i class="fa fa-pen"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-active-icon-danger btn-text-danger"
                                data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input body-checkbox" type="checkbox"
                                    value="" id="checkbox7">
                                <label class="form-check-label" for="checkbox7">
                                </label>
                            </div>
                        </td>
                        <td>7</td>
                        <td ><u class="text-hover-primary">Total Network Development</u></td>
                        <td ><u class="text-hover-primary">Edinburgh</u></td>
                        <td ><u class="text-hover-primary">Rahul</u></td>
                        <td>2011/04/25</td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input body-toggle" type="checkbox"
                                    role="switch" id="flexSwitchCheckDefault" onchange="toggleSwitch()">
                                <label class="form-check-label"
                                    for="flexSwitchCheckDefault">Inactive</label>
                            </div>
                        </td>
                        <td ><u class="text-hover-primary">65</u></td>
                        <td ><u class="text-hover-primary">65</u></td>
                        <td ><u class="text-hover-primary">65</u></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-active-icon-primary btn-text-primary"
                                data-bs-toggle="modal" data-bs-target="#ManageConfirmationModal">
                                <i class="fa fa-pen"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-active-icon-danger btn-text-danger"
                                data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input body-checkbox" type="checkbox"
                                    value="" id="checkbox8">
                                <label class="form-check-label" for="checkbox8">
                                </label>
                            </div>
                        </td>
                        <td>8</td>
                        <td ><u class="text-hover-primary">Western Auto</u></td>
                        <td ><u class="text-hover-primary">Edinburgh</u></td>
                        <td ><u class="text-hover-primary">Rahul</u></td>
                        <td>2011/04/25</td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input body-toggle" type="checkbox"
                                    role="switch" id="flexSwitchCheckDefault" onchange="toggleSwitch()">
                                <label class="form-check-label"
                                    for="flexSwitchCheckDefault">Inactive</label>
                            </div>
                        </td>
                        <td ><u class="text-hover-primary">65</u></td>
                        <td ><u class="text-hover-primary">65</u></td>
                        <td ><u class="text-hover-primary">65</u></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-active-icon-primary btn-text-primary"
                                data-bs-toggle="modal" data-bs-target="#ManageConfirmationModal">
                                <i class="fa fa-pen"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-active-icon-danger btn-text-danger"
                                data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input body-checkbox" type="checkbox"
                                    value="" id="checkbox9">
                                <label class="form-check-label" for="checkbox9">
                                </label>
                            </div>
                        </td>
                        <td>9</td>
                        <td ><u class="text-hover-primary">Cut Rite Lawn Care</u></td>
                        <td ><u class="text-hover-primary">Edinburgh</u></td>
                        <td ><u class="text-hover-primary">Rahul</u></td>
                        <td>2011/04/25</td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input body-toggle" type="checkbox"
                                    role="switch" id="flexSwitchCheckDefault" onchange="toggleSwitch()">
                                <label class="form-check-label"
                                    for="flexSwitchCheckDefault">Inactive</label>
                            </div>
                        </td>
                        <td ><u class="text-hover-primary">65</u></td>
                        <td ><u class="text-hover-primary">65</u></td>
                        <td ><u class="text-hover-primary">65</u></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-active-icon-primary btn-text-primary"
                                data-bs-toggle="modal" data-bs-target="#ManageConfirmationModal">
                                <i class="fa fa-pen"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-active-icon-danger btn-text-danger"
                                data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input body-checkbox" type="checkbox"
                                    value="" id="checkbox10">
                                <label class="form-check-label" for="checkbox10">
                                </label>
                            </div>
                        </td>
                        <td>10</td>
                        <td ><u class="text-hover-primary">Finast</u></td>
                        <td ><u class="text-hover-primary">Edinburgh</u></td>
                        <td ><u class="text-hover-primary">Rahul</u></td>
                        <td>2011/04/25</td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input body-toggle" type="checkbox"
                                    role="switch" id="flexSwitchCheckDefault" onchange="toggleSwitch()">
                                <label class="form-check-label"
                                    for="flexSwitchCheckDefault">Inactive</label>
                            </div>
                        </td>
                        <td ><u class="text-hover-primary">65</u></td>
                        <td ><u class="text-hover-primary">65</u></td>
                        <td ><u class="text-hover-primary">65</u></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-active-icon-primary btn-text-primary"
                                data-bs-toggle="modal" data-bs-target="#ManageConfirmationModal">
                                <i class="fa fa-pen"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-active-icon-danger btn-text-danger"
                                data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        {{-- Table Ends --}}
    </div>
</div>
{{-- Main Contant End--}}

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
                <p>Are you sure, you want to delete this property?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Delete</button>
            </div>
        </div>
    </div>
</div>
{{-- Delete Modal Ends --}}

{{-- Manage Modal Starts --}}
<div class="modal fade" id="ManageConfirmationModal" tabindex="-1"
    aria-labelledby="ManageConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ManageConfirmationModalLabel">Manage Confirmation
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Do you really want to manage property ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal">No</button>
                <button type="button" class="btn btn-primary">Yes</button>
            </div>
        </div>
    </div>
</div>
{{-- Manage Modal Ends --}}


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
