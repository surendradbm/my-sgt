<x-default-layout>
    <style>
        .item_card{
            border: 2px solid #244b8a;
            border-radius: 5px;
        }
        .item_card .card-body{
            padding: 20px;
        }
        .text-blue{
            color: #244b8a;
        }
        .item_card .ki-duotone{
            margin-top: -5px;
        }
        .item_card .ki-duotone::before {
            font-size: 35px;
        }
    </style>
    {{-- Top Section Start --}}
    <div class="card shadow-sm mt-5">
        <div class="card-body">
            <div id="kt_app_toolbar_container" class="d-flex flex-stack ">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                    <h1 class="page-heading d-flex text-bg fw-bold fs-3 flex-column justify-content-center my-0">
                        Feedback
                    </h1>
                </div>
                {{-- <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <a href="{{route('superadmin.coupon.create')}}" class="btn btn-sm fw-bold btn-primary"> Create Feedback </a>
                </div> --}}
            </div>
            <div class="d-flex">
                <a href="javascript:void(0);" class="card item_card me-3">
                    <div class="card-body d-flex">
                        <span class="ki-duotone text-blue ki-bi bi-person-check xyz fs-1"></span>
                        <span class="ms-3 text-blue fs-5 fw-bold">Total Feedbacks</span>
                        <span class="ms-3 text-blue fs-2 fw-bold">112 </span>
                    </div>
                </a>
                <a href="javascript:void(0);" class="card item_card me-3">
                    <div class="card-body d-flex">
                        <span class="ki-duotone text-blue ki-bi bi-emoji-smile xyz fs-1"></span>
                        <span class="ms-3 text-blue fs-5 fw-bold">Nice Level </span>
                        <span class="ms-3 text-blue fs-2 fw-bold">45 </span>
                    </div>
                </a>
                <a href="javascript:void(0);" class="card item_card me-3">
                    <div class="card-body d-flex">
                        <span class="ki-duotone text-blue ki-bi bi-emoji-heart-eyes xyz fs-1"></span>
                        <span class="ms-3 text-blue fs-5 fw-bold">Extremely Likely Level </span>
                        <span class="ms-3 text-blue fs-2 fw-bold">45 </span>
                    </div>
                </a>
                <a href="javascript:void(0);" class="card item_card me-3">
                    <div class="card-body d-flex">
                        <span class="ki-duotone text-blue ki-bi bi-emoji-laughing xyz fs-1"></span>
                        <span class="ms-3 text-blue fs-5 fw-bold">Average Level </span>
                        <span class="ms-3 text-blue fs-2 fw-bold">45 </span>
                    </div>
                </a>
                <a href="javascript:void(0);" class="card item_card me-3">
                    <div class="card-body d-flex">
                        <span class="ki-duotone text-blue ki-bi bi-emoji-frown xyz fs-1"></span>
                        <span class="ms-3 text-blue fs-5 fw-bold">Not At All Level </span>
                        <span class="ms-3 text-blue fs-2 fw-bold">112 </span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    {{-- Top Section End --}}

    {{-- Container Start --}}
    <div class="card shadow-sm mt-5">
        <div class="card-body">
            {{-- SearchBar, Filter, Export Starts --}}
            <div id="kt_docs_search_handler_basic" data-kt-search-keypress="true" data-kt-search-min-length="2"
                data-kt-search-enter="true" data-kt-search-layout="inline">

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
                                        <select class="form-select" aria-label="Floating label select example">
                                            <option selected>Filter</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select class="form-select" aria-label="Floating label select example">
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

            {{-- Table Starts --}}
            <div class="table-responsive mt-5">
                <table class="table table-hover table-rounded border gy-7 gs-7" id="dataTable">
                    <thead>
                        <tr class="fw-semibold fs-6 border-bottom-2 border-gray-200">
                            <th>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="headCheckbox"
                                        onchange="toggleAllCheckboxes()">
                                    <label class="form-check-label" for="headCheckbox">
                                    </label>
                                </div>
                            </th>
                            <th>S.No.</th>
                            <th>Feedback Level</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Given By</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input body-checkbox" type="checkbox" value=""
                                        id="checkbox1">
                                    <label class="form-check-label" for="checkbox1">
                                    </label>
                                </div>
                            </td>
                            <td>1</td>
                            <td><label class="text-blue fw-bold fs-6">Likely</label></td>
                            <td>A new Refunded request...</td>
                            <td>01/11/2083</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-30px symbol-md-40px me-3">
                                        <img src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg" alt="">
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        Paula Mora
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-active-icon-primary btn-text-primary" data-bs-toggle="modal" data-bs-target="#viewModal">
                                    <i class="fa fa-eye"></i>
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
                                    <input class="form-check-input body-checkbox" type="checkbox" value=""
                                        id="checkbox1">
                                    <label class="form-check-label" for="checkbox1">
                                    </label>
                                </div>
                            </td>
                            <td>2</td>
                            <td><label class="text-blue fw-bold fs-6">Nice</label></td>
                            <td>A new Refunded request...</td>
                            <td>01/11/2083</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-30px symbol-md-40px me-3">
                                        <img src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg" alt="">
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        Paula Mora
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-active-icon-primary btn-text-primary" data-bs-toggle="modal" data-bs-target="#viewModal">
                                    <i class="fa fa-eye"></i>
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
                                    <input class="form-check-input body-checkbox" type="checkbox" value=""
                                        id="checkbox1">
                                    <label class="form-check-label" for="checkbox1">
                                    </label>
                                </div>
                            </td>
                            <td>3</td>
                            <td><label class="text-blue fw-bold fs-6">Likely</label></td>
                            <td>A new Refunded request...</td>
                            <td>01/11/2083</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-30px symbol-md-40px me-3">
                                        <img src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg" alt="">
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        Paula Mora
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-active-icon-primary btn-text-primary" data-bs-toggle="modal" data-bs-target="#viewModal">
                                    <i class="fa fa-eye"></i>
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
                                    <input class="form-check-input body-checkbox" type="checkbox" value=""
                                        id="checkbox1">
                                    <label class="form-check-label" for="checkbox1">
                                    </label>
                                </div>
                            </td>
                            <td>4</td>
                            <td><label class="text-blue fw-bold fs-6">Nice</label></td>
                            <td>A new Refunded request...</td>
                            <td>01/11/2083</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-30px symbol-md-40px me-3">
                                        <img src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg" alt="">
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        Paula Mora
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-active-icon-primary btn-text-primary" data-bs-toggle="modal" data-bs-target="#viewModal">
                                    <i class="fa fa-eye"></i>
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
                                    <input class="form-check-input body-checkbox" type="checkbox" value=""
                                        id="checkbox1">
                                    <label class="form-check-label" for="checkbox1">
                                    </label>
                                </div>
                            </td>
                            <td>5</td>
                            <td><label class="text-blue fw-bold fs-6">Not at all</label></td>
                            <td>A new Refunded request...</td>
                            <td>01/11/2083</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-30px symbol-md-40px me-3">
                                        <img src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg" alt="">
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        Paula Mora
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-active-icon-primary btn-text-primary" data-bs-toggle="modal" data-bs-target="#viewModal">
                                    <i class="fa fa-eye"></i>
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
                                    <input class="form-check-input body-checkbox" type="checkbox" value=""
                                        id="checkbox1">
                                    <label class="form-check-label" for="checkbox1">
                                    </label>
                                </div>
                            </td>
                            <td>6</td>
                            <td><label class="text-blue fw-bold fs-6">Average</label></td>
                            <td>A new Refunded request...</td>
                            <td>01/11/2083</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-30px symbol-md-40px me-3">
                                        <img src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg" alt="">
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        Paula Mora
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-active-icon-primary btn-text-primary" data-bs-toggle="modal" data-bs-target="#viewModal">
                                    <i class="fa fa-eye"></i>
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
                                    <input class="form-check-input body-checkbox" type="checkbox" value=""
                                        id="checkbox1">
                                    <label class="form-check-label" for="checkbox1">
                                    </label>
                                </div>
                            </td>
                            <td>7</td>
                            <td><label class="text-blue fw-bold fs-6">Not at all</label></td>
                            <td>A new Refunded request...</td>
                            <td>01/11/2083</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-30px symbol-md-40px me-3">
                                        <img src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg" alt="">
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        Paula Mora
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-active-icon-primary btn-text-primary" data-bs-toggle="modal" data-bs-target="#viewModal">
                                    <i class="fa fa-eye"></i>
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
                                    <input class="form-check-input body-checkbox" type="checkbox" value=""
                                        id="checkbox1">
                                    <label class="form-check-label" for="checkbox1">
                                    </label>
                                </div>
                            </td>
                            <td>8</td>
                            <td><label class="text-blue fw-bold fs-6">Nice</label></td>
                            <td>A new Refunded request...</td>
                            <td>01/11/2083</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-30px symbol-md-40px me-3">
                                        <img src="http://127.0.0.1:8000/assets/media/avatars/300-1.jpg" alt="">
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        Paula Mora
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-active-icon-primary btn-text-primary" data-bs-toggle="modal" data-bs-target="#viewModal">
                                    <i class="fa fa-eye"></i>
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
        </div>
    </div>
    {{-- Container Start --}}

    {{-- View Modal Starts --}}
    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewModalLabel">Feedback
                    </h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="feedback_lavel">Feedback Level</label>
                                <input type="text" class="form-control" name="feedback_lavel" id="feedback_lavel" placeholder="Not at all">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea type="text" class="form-control" name="description" id="description" rows="5" placeholder="Gorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-theame" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- View Modal Ends --}}

    {{-- Delete Modal Starts --}}
    <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteConfirmationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteConfirmationModalLabel">Do you want to delete this feedback.
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row text-center">
                        <div class="col-md 12"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-theame">Delete</button></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- Delete Modal Ends --}}



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