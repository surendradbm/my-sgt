<x-default-layout>
    {{-- First Section Starts --}}
    <div class="row mb-5 mt-5">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <h1 class="page-heading d-flex text-bg fw-bold fs-3 flex-column justify-content-center my-0">
                            Manage Subscription</h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="/" class="text-muted text-hover-primary">Subscription</a>
                            </li>
                            <li class="breadcrumb-item text-muted"> > </li>
                            <li class="breadcrumb-item text-bg">Manage Subscription</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- First Section Ends --}}
    <div class="row">
        <div class="col-md-12">
            <form>
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
                                <button id="filterButton" type="button" class="btn btn-theame me-3 float_right"
                                    >
                                    <i class="ki-duotone ki-filter fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    Filter
                                </button>
                                <div id="filterDropdown" class="dropdown-menu filter_dropdown">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="dropdown-item">
                                                <label for="columns">Columns:</label>
                                                <select id="columns" class="form-control">
                                                    <option value="column1">Select Filter</option>
                                                    <option value="column1">Title</option>
                                                    <option value="column2">Monthly Price</option>
                                                    <option value="column3">Yearly Price</option>
                                                    <option value="column3">Trial Days</option>
                                                    <option value="column3">Created By</option>
                                                    <option value="column3">Creation Date & Time</option>
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
                        {{-- Filter, Export  Ends --}}
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
                                        <p>Are you sure you want to delete this item?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-theame">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Delete Modal Ends --}}
                        {{-- Table Starts --}}
                        <div class="table-responsive mt-5">
                            <table class="table table-hover display responsive table-rounded border gy-7 gs-7"
                                id="dataTable">
                                <thead>
                                    <tr class="fw-semibold fs-6 border-bottom-2 border-gray-200">
                                        <th class="table_head">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="headCheckbox" onchange="toggleAllCheckboxes()">
                                                <label class="form-check-label" for="headCheckbox">
                                                </label>
                                            </div>
                                        </th>
                                        <th>S.No.</th>
                                        <th>Icon</th>
                                        <th>Title</th>
                                        <th>Monthly Price</th>
                                        <th>Yearly Price</th>
                                        <th>Trial Days</th>
                                        <th>Created By</th>
                                        <th>Creation Date & Time</th>
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
                                        <th></th>
                                        <td>
                                            <img src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg" class="image_table"
                                                alt="user">
                                        </td>
                                        <td>Silver</td>
                                        <td>$8</td>
                                        <td>$16</td>
                                        <td>N/A</td>
                                        <td>Aman Singh</td>
                                        <td>22/05/2023, 11:23 PM</td>
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
                                            <a href="{{route('superadmin.subscription.edit')}}"
                                                class="btn btn-sm btn-active-icon-primary btn-text-primary">
                                                <i class="fa fa-pen"></i>
                                            </a>
                                            <a href="#"
                                                class="btn btn-sm btn-active-icon-danger btn-text-danger"
                                                data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">
                                                <i class="fa fa-trash"></i>
                                            </a>
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
                                        <th></th>
                                        <td>
                                            <img src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg" class="image_table"
                                                alt="user">
                                        </td>
                                        <td>Aman</td>
                                        <td>$8</td>
                                        <td>$16</td>
                                        <td>N/A</td>
                                        <td> Singh</td>
                                        <td>22/05/2023, 11:23 PM</td>
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
                                            <a href="{{route('superadmin.subscription.edit')}}"
                                                class="btn btn-sm btn-active-icon-primary btn-text-primary">
                                                <i class="fa fa-pen"></i>
                                            </a>
                                            <a href="#"
                                                class="btn btn-sm btn-active-icon-danger btn-text-danger"
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
