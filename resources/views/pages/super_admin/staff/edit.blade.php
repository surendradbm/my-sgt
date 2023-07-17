<x-default-layout>
    <style>
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0;
        }
    </style>
    {{-- Remove Arrrow from inout fields --}}
    <div class="row mb-5 mt-5">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <h1 class="page-heading d-flex text-bg fw-bold fs-3 flex-column justify-content-center my-0">
                            Create Staff</h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="#" class="text-muted">Staff</a>
                            </li>
                            <li class="breadcrumb-item text-muted"> > </li>
                            <li class="breadcrumb-item text-bg text-hover-primary">Create Staff</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('superadmin.staffcontroller.index') }}" method="POST">
                <div class="card card-flush shadow-sm">
                    <div class="card-body py-5">
                        <div class="col-md-12 d-flex flex-stack">
                            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                                <h5
                                    class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                                    Create a New Staff</h5>
                                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <style>
                                    .image-input-placeholder {
                                        background-image: url('svg/avatars/blank.svg');
                                    }

                                    [data-bs-theme="dark"] .image-input-placeholder {
                                        background-image: url('svg/avatars/blank-dark.svg');
                                    }
                                </style>
                                <div class="image-input image-input-circle" data-kt-image-input="true"
                                    style="background-image: url(/assets/media/svg/avatars/blank.svg)">
                                    <!--begin::Edit button-->
                                    <label data-bs-dismiss="click">
                                        <span class="btn btn-primary style="color: #244B8A;">Upload Photo</span>
                                        <!--begin::Inputs-->
                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="avatar_remove" />
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Edit button-->
                                    <!--begin::Image preview wrapper-->
                                    <div class="image-input-wrapper w-125px h-125px"
                                        style="border: 1px solid #a1a5b7; background-image: url(http://127.0.0.1:8000/assets/media/features-logos/yarn.png)">
                                    </div>
                                    <!--end::Image preview wrapper-->
                                    <!--end::Remove button-->
                                </div>
                            </div>
                        </div>
                        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                            <h5
                                class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            </h5>
                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                <li class="breadcrumb-item text-muted">
                                    <p class="text-muted"></p>
                                </li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="col-md-6  mt-5">
                                <div class="form-group">
                                    <label class="required form-label" for="maximum_guards">Staff Name</label><br>
                                    <input type="text" class="form-control form-control-solid" name="maximum_guards"
                                        id="maximum_guards" aria-describedby="emailHelp"  value="Aman Singh"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6  mt-5">
                                <div class="form-group">
                                    <label class="required form-label" for="messenger">Assign Role</label><br>
                                    <select class="form-select form-select-solid" id="messenger" name="messenger"
                                        aria-label="Floating label select example" required>
                                        <option value="Role 1">Role 1</option>
                                        <option value="">Role 2</option>
                                        <option value="">Role 3</option>
                                        <option value="">Role 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6  mt-5">
                                <div class="form-group">
                                    <label class="required form-label" for="messenger">Gender</label><br>
                                    <select class="form-select form-select-solid" id="messenger" name="messenger"
                                        aria-label="Floating label select example" required>
                                        <option value="Male">Male</option>
                                        <option value="">Female</option>
                                        <option value="">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6  mt-5">
                                <div class="form-group"id="kt_td_picker_localization" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                    <label class="required form-label" for="maximum_guards">Date Of Birth</label><br>
                                    <input class="form-control" placeholder="Pick a date" id="kt_datepicker_1" value="2023-07-05"/>
                                </div>
                            </div>
                            <div class="col-md-6  mt-5">
                                <div class="form-group">
                                    <label class="required form-label" for="maximum_guards">Email</label><br>
                                    <input type="email" class="form-control form-control-solid" name="maximum_guards"
                                        id="maximum_guards" aria-describedby="emailHelp"
                                        placeholder="Enter email address" value="myidofsgt@gmailcom	" required>
                                </div>
                            </div>
                            <div class="col-md-6  mt-5">
                                <div class="form-group">
                                    <label class="required form-label" for="maximum_guards">Mobile Number</label><br>
                                    <input type="number" class="form-control form-control-solid"
                                        name="maximum_guards" id="maximum_guards" aria-describedby="emailHelp"
                                        placeholder="Enter mobile number" value="8840709472" required>
                                </div>
                            </div>
                            <div class="col-md-6  mt-5">
                                <div class="form-group">
                                    <label class="required form-label" for="maximum_guards">Password</label><br>
                                    <input type="password" class="form-control form-control-solid" value="dknfkdnfdkdnc"
                                        name="maximum_guards" id="maximum_guards" aria-describedby="emailHelp"
                                        required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-flush shadow-sm mt-5">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 text-end">
                                <button type="submit" class="submit_btn">Save</button>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--end::Tables widget 16-->
</x-default-layout>
<script>
    $('#free_trial').on('change', function() {
        $("#hide_trial_days").css('display', (this.value == '') ? 'block' : 'none');
        $("#hide_row").css('display', (this.value == 'No') ? 'block' : 'none');
        $("#hide_trial_days").css('display', (this.value == 'No') ? 'none' : 'block');
    });
</script>
<script>
    $('#kt_docs_maxlength_basic').maxlength({
        warningClass: "badge badge-warning",
        limitReachedClass: "badge badge-success"
    });
</script>
<script>
    $('#kt_docs_maxlength_textarea').maxlength({
        warningClass: "badge badge-warning",
        limitReachedClass: "badge badge-success"
    });
</script>
<script>
    function toggleSwitch() {
        // var checkboxes = document.getElementsByClassName("form-check-input");
        var checkboxes = document.querySelectorAll(".body-toggle");
        for (var i = 0; i < checkboxes.length; i++) {
            var checkbox = checkboxes[i];
            var label = checkbox.nextElementSibling;

            if (checkbox.checked) {
                label.textContent = "Active Status";
            } else {
                label.textContent = "Inactive Status";
            }
        }
    }
</script>
<script>
$("#kt_datepicker_1").flatpickr();

$("#kt_datepicker_2").flatpickr();
</script>