<x-default-layout>
    <style>
        .item_card{
            border: 1px solid #244b8a;
            border-radius: 5px;
        }
        .item_card .card-body{
            padding: 20px;
        }
        .text-blue{
            color: #244b8a;
        }
    </style>
    {{-- First Section Starts --}}
    <div class="row mb-5 mt-5">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <h1 class="page-heading d-flex text-bg fw-bold fs-3 flex-column justify-content-center my-0">
                            Transactions & Invoice</h1>
                        <div class="row">
                            <div class="col-md-2">
                                <a href="#" class="card item_card">
                                    <div class="card-body d-flex align-items">
                                        <span class="ki-duotone text-blue ki-bi bi-credit-card-2-back-fill xyz fs-1"></span>
                                        <span class="ms-3 text-blue fs-6 fw-bold">All Transactions </span>
                                        <span class="ms-3 text-blue fs-4 fw-bold">112 </span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="card item_card">
                                    <div class="card-body d-flex align-items">
                                        <span class="ki-duotone text-blue ki-bi bi-credit-card-2-back-fill xyz fs-1"></span>
                                        <span class="ms-3 text-blue fs-6 fw-bold">Active Customers </span>
                                        <span class="ms-3 text-blue fs-4 fw-bold">112 </span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="card item_card">
                                    <div class="card-body d-flex align-items">
                                        <span class="ki-duotone text-blue ki-bi bi-credit-card-2-back-fill xyz fs-1"></span>
                                        <span class="ms-3 text-blue fs-6 fw-bold">Inactive Customers </span>
                                        <span class="ms-3 text-blue fs-4 fw-bold">45 </span>
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
                <div class="card card-flush shadow-sm">
                    <div class="card-body py-5">
                        {{-- SearchBar, Filter, Export Starts --}}
                        <div id="kt_docs_search_handler_basic" data-kt-search-keypress="true"
                            data-kt-search-min-length="2" data-kt-search-enter="true" data-kt-search-layout="inline">

                            <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Search by name...">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="row" style="justify-content: end;">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <select class="form-select"
                                                        aria-label="Floating label select example">
                                                        <option selected>Filter</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <select class="form-select"
                                                        aria-label="Floating label select example">
                                                        <option selected>Export</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                        {{-- SearchBar, Filter, Export  Ends --}}
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
                                        <th>S.No.</th>
                                        <th>Transaction ID</th>
                                        <th>Customer</th>
                                        <th>Email</th>
                                        <th>Amount</th>
                                        <th>Date & Time</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($x = 1; $x <= 10; $x++) { ?>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input body-checkbox" type="checkbox"
                                                    value="" id="checkbox1">
                                                <label class="form-check-label" for="checkbox1">
                                                </label>
                                            </div>
                                        </td>
                                        <th><?php echo $x; ?></th>
                                        <td>4643210568</td>
                                        <td>Karamveer Singh</td>
                                        <td>patricia651@outlook.com</td>
                                        <td>$8</td>
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
                                            <a href="{{route('superadmin.transaction_and_invoice.view_details')}}" class="btn btn-sm btn-active-icon-primary btn-text-primary">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="javacript:void(0);" class="btn btn-sm btn-active-icon-primary btn-text-primary" data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal">
                                                <i class="fa fa-download"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php } ?>

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

