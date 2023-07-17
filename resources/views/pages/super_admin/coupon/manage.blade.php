<x-default-layout>
    <style>
        .item_card {
            border: 2px solid #244b8a;
            border-radius: 5px;
        }

        .item_card .card-body {
            padding: 20px;
        }

        .text-blue {
            color: #244b8a;
        }

        .item_card .ki-duotone {
            margin-top: -5px;
        }

        .item_card .ki-duotone::before {
            font-size: 35px;
        }
    </style>
    {{-- First Section Starts --}}
    <div class="row mb-5 mt-5">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <h1 class="page-heading d-flex text-bg fw-bold fs-3 flex-column justify-content-center my-0">
                            Coupons</h1>
                        <div class="row">
                            <div class="col-md-2 properties_container">
                                <i class="bi bi-ticket-fill"></i>
                                <span class="coupoun_style">Total
                                    Coupons</span>
                                <span class="sss sus112">112</span>
                            </div>
                            <div class="col-md-2 properties_container">
                                <i class="bi bi-ticket-fill"></i>
                                <span class="active_coupoun">active
                                    Coupons</span>
                                <span class="sss sus108">108</span>
                            </div>
                            <div class="col-md-2 properties_container">
                                <i class="bi bi-ticket-fill"></i>
                                <span class="inactive_coupoun">Inactive
                                    Coupons</span>
                                <span class="sss sus4">4</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- First Section Ends --}}
    <div class="card shadow-sm mt-5">
        <div class="card-body">
            <div id="kt_app_toolbar_container" class="d-flex flex-stack ">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                    <h1 class="page-heading d-flex text-bg fw-bold fs-3 flex-column justify-content-center my-0">
                        Coupon
                    </h1>
                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <a href="{{ route('superadmin.coupon.create') }}" class="btn btn-sm fw-bold btn-primary"> Create
                        Coupon </a>
                </div>
            </div>
            <div class="d-flex">
                <a href="javascript:void(0);" class="card item_card me-3">
                    <div class="card-body d-flex">
                        <span class="ki-duotone text-blue ki-bi bi-ticket-fill xyz fs-1"></span>
                        <span class="ms-3 text-blue fs-5 fw-bold">Total Coupons</span>
                        <span class="ms-3 text-blue fs-2 fw-bold">112 </span>
                    </div>
                </a>
                <a href="javascript:void(0);" class="card item_card me-3">
                    <div class="card-body d-flex">
                        <span class="ki-duotone text-blue ki-bi bi-ticket-detailed-fill xyz fs-1"></span>
                        <span class="ms-3 text-blue fs-5 fw-bold">Active Coupons </span>
                        <span class="ms-3 text-blue fs-2 fw-bold">112 </span>
                    </div>
                </a>
                <a href="javascript:void(0);" class="card item_card me-3">
                    <div class="card-body d-flex">
                        <span class="ki-duotone text-blue ki-bi bi-ticket xyz fs-1"></span>
                        <span class="ms-3 text-blue fs-5 fw-bold">Inactive Coupons </span>
                        <span class="ms-3 text-blue fs-2 fw-bold">45 </span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    {{-- Top Section End --}}
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
