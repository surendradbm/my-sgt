<x-default-layout>
    <style>
        .item_card {
            border: 1px solid #244b8a;
            border-radius: 5px;
        }

        .item_card .card-body {
            padding: 20px;
        }

        .text-blue {
            color: #244b8a;
        }


        #transection .profile img {
            width: 100px;
            height: auto;
        }

        #transection .profile i {
            background: #f2ebeb;
            padding: 8px;
            font-size: 40px;
            color: #244b8a;
            border-radius: 5px;
        }

        #transection .boxx {
            padding: 20px !important;
        }

        #transection .border_gray {
            border: 1px solid #b8c3d5;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 10px;
        }

        #transection .payment_crad_img {
            width: 35px;
            margin-right: 5px;
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
                                        <span
                                            class="ki-duotone text-blue ki-bi bi-credit-card-2-back-fill xyz fs-1"></span>
                                        <span class="ms-3 text-blue fs-6 fw-bold">All Transactions </span>
                                        <span class="ms-3 text-blue fs-4 fw-bold">112 </span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="card item_card">
                                    <div class="card-body d-flex align-items">
                                        <span
                                            class="ki-duotone text-blue ki-bi bi-credit-card-2-back-fill xyz fs-1"></span>
                                        <span class="ms-3 text-blue fs-6 fw-bold">Active Customers </span>
                                        <span class="ms-3 text-blue fs-4 fw-bold">112 </span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-2">
                                <a href="#" class="card item_card">
                                    <div class="card-body d-flex align-items">
                                        <span
                                            class="ki-duotone text-blue ki-bi bi-credit-card-2-back-fill xyz fs-1"></span>
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

    <div class="card shadow-sm" id="transection">
        <div class="card-body d-flex flex-column">

            <div class="row mb-5 mt-5">
                <div class="col-md-12">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <h1 class="page-heading d-flex text-bg fw-bold fs-3 flex-column justify-content-center my-0">
                            Transaction Detail Of Madhav Prasad</h1>
                        <div class="row" style="margin-left: 0px;">
                            <div class="col-md-12">
                                <div class="row mb-5 mt-5">
                                    <!--begin::Col-->
                                    <div class="col-md-2">
                                        <div class="d-flex align-items-center">
                                            <!--begin::Symbol-->
                                            <div class="profile symbol me-3">
                                                <img src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg"
                                                    alt="">
                                            </div>
                                            <!--end::Symbol-->
                                        </div>
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-md-2 boxx">
                                        <div class="profile d-flex align-items-center">
                                            <!--begin::Symbol-->
                                            <i class="bi bi-gear-wide-connected me-3"></i>
                                            <!--end::Symbol-->

                                            <!--begin::Title-->
                                            <div class="">
                                                <label class="fs-5 text-dark fw-bold">Basic Plan</label>
                                                <div class="fs-7 text-gray-600 fw-bold">Active Plan</div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-md-2">
                                        <div class="d-flex align-items-center">
                                            <!--begin::Title-->
                                            <div class="boxx">
                                                <label class="fs-3 text-bg fw-bold">$35.00</label>
                                                <div class="fs-7 text-gray-600 fw-bold">Monthly</div>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                    </div>
                                    <!--end::Col-->


                                </div>
                            </div>

                            <div class="row mb-5 mt-5">
                                <div class="col-md-6 border_gray">
                                    <div class="flex-grow-1">
                                        <div class="d-flex flex-stack flex-wrap">
                                            <p class="text-dark fs-5 fw-bold">Customer Name:</p>
                                            <p class="text-gray-600 fs-5 fw-bold"> Madhav Prasad</p>
                                        </div>
                                        <div class="d-flex flex-stack flex-wrap">
                                            <p class="text-dark fs-5 fw-bold">Email Address:</p>
                                            <p class="text-gray-600 fs-5 fw-bold"> madhavprasad@gmail.com</p>
                                        </div>
                                        <div class="d-flex flex-stack flex-wrap">
                                            <p class="text-dark fs-5 fw-bold">Last Payment Day:</p>
                                            <p class="text-gray-600 fs-5 fw-bold"> Monday</p>
                                        </div>
                                        <div class="d-flex flex-stack flex-wrap">
                                            <p class="text-dark fs-5 fw-bold">Last Payment Date:</p>
                                            <p class="text-gray-600 fs-5 fw-bold"> 12/06/2022</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="border_gray flex-grow-1">
                                                <div class="d-flex flex-stack flex-wrap">
                                                    <p class="text-dark fs-5 fw-bold">Transaction ID:</p>
                                                    <p class="text-gray-600 fs-5 fw-bold"> 4643210568</p>
                                                </div>
                                                <div class="d-flex flex-stack flex-wrap">
                                                    <p class="text-dark fs-5 fw-bold">Plan Expiration Date & Time:</p>
                                                    <p class="text-gray-600 fs-5 fw-bold"> 12/07/2022, 11:59 PM</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="border_gray flex-grow-1">
                                                <div class="d-flex flex-stack flex-wrap">
                                                    <p class="text-dark fs-5 fw-bold">Payment Method</p>
                                                </div>
                                                <div class="d-flex flex-stack flex-wrap">
                                                    <p class="text-dark fs-5 fw-bold">Card:</p>
                                                    <p class="text-gray-600 fs-5 fw-bold">
                                                        <img class="payment_crad_img"
                                                            src="http://127.0.0.1:8000/assets/media/svg/card-logos/mastercard-dark.svg"
                                                            alt="Card Image">
                                                        XXXX XXXX 7678
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>




            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <h1 class="page-heading d-flex text-bg fw-bold fs-3 flex-column justify-content-center my-0">
                            Transaction History</h1>
                        <div class="row">
                            <div class="col-md-12">
                                {{-- Table Starts --}}
                                <div class="table-responsive mt-5">
                                    <table class="table table-hover table-rounded border gy-7 gs-7" id="dataTable">
                                        <thead>
                                            <tr class="fw-semibold fs-6 border-bottom-2 border-gray-200">
                                                <th style="background: #244b8a; color: white;">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="headCheckbox"
                                                            onchange="toggleAllCheckboxes()">
                                                        <label class="form-check-label" for="headCheckbox">
                                                        </label>
                                                    </div>
                                                </th>
                                                <th>S.No.</th>
                                                <th>Transaction ID</th>
                                                <th>Payment Method</th>
                                                <th>Amount</th>
                                                <th>Payment Date</th>
                                                <th>Invoive</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($x = 1; $x <= 5; $x++) { ?>
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
                                                <td>
                                                    <p class="text-gray-600 fs-5 fw-bold">
                                                        <img class="payment_crad_img"
                                                            src="http://127.0.0.1:8000/assets/media/svg/card-logos/mastercard-dark.svg"
                                                            alt="Card Image">
                                                        XXXX XXXX 7678
                                                    </p>
                                                </td>
                                                <td>$80</td>
                                                <td>May 04, 2023</td>
                                                <td>
                                                    <a href="{{ route('superadmin.transaction_and_invoice.view_invoice') }}"
                                                        class="btn btn-sm btn-active-icon-primary btn-text-primary">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <a href="javacript:void(0);"
                                                        class="btn btn-sm btn-active-icon-primary btn-text-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#deleteConfirmationModal">
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
                    </div>
                </div>
            </div>

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
