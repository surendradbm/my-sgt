<x-default-layout>
    {{-- Remove Arrrow from inout fields --}}
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
                            {{__('messages.Create_Subscription')}}</h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="#" class="text-muted text-hover-primary">Subscription</a>
                            </li>
                            <li class="breadcrumb-item text-muted"> > </li>
                            <li class="breadcrumb-item text-bg">Create Subscription</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form>
                <div class="card card-flush shadow-sm">
                    <div class="card-body py-5">

                        <div class="col-md-12 d-flex flex-stack">
                            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                                <h5
                                    class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                                    Create a New Subscription</h5>
                                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                    <li class="breadcrumb-item text-muted">
                                        <p class="text-muted">Fill out the necessary details to create the Subscription
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input body-toggle" type="checkbox" role="switch"
                                    id="flexSwitchCheckDefault" onchange="toggleSwitch()">
                                <b>
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Inactive Status</label>
                                </b>
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
                                        <span class="btn btn-primary style="color: #244B8A;">Upload Thumbnail</span>
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
                        <div class="row mt-5">
                            <div class="mb-10">
                                <div class="form-group">
                                    <b><label class="required form-label" for="title">Subscription
                                            Title</label><br></b>
                                    <input type="text" class="form-control form-control-solid" name="title"
                                        id="kt_docs_maxlength_basic" aria-describedby="emailHelp"
                                        placeholder="Enter subscription title" maxlength="42" required>
                                </div>
                            </div>
                            <div class="mb-10">
                                <div class="form-group">
                                    <b><label class="form-label" for="description">Description
                                            (Optional)</label><br></b>
                                    <textarea type="text" class="form-control form-control-solid" name="description" id="kt_docs_maxlength_textarea"
                                        maxlength="120" placeholder="Enter Description" rows="6"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-flush shadow-sm mt-5">
                    <div class="card-body py-5">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="free_trial" class="required form-label">Free Trial</label><br>
                                    <span id="free_trial_help" class="form-text text-muted">Choose whether this
                                        subscription will be Paid or Free Trail Basis</span>
                                    <select class="form-select form-select-solid" id="free_trial" name="free_trial"
                                        aria-label="Floating label select example" required>
                                        <option value="">Choose Subscription Type</option>
                                        <option value="Yes">Free Subscription</option>
                                        <option value="No">Paid Subscription</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6" id="hide_trial_days">
                                <div class="form-group">
                                    <label for="trial_days" class="required form-label">Trial Days</label><br>
                                    <span id="trial_days_help" class="form-text text-muted">Enter yearly price days for
                                        the
                                        subscription</span>
                                    <input type="number" class="form-control form-control-solid" name="trial_days"
                                        id="trial_days" aria-describedby="emailHelp"
                                        placeholder="Enter Yearly Price Days" required>
                                </div>
                            </div>
                        </div>
                        <div id="hide_row" style='display:none;'>
                            <div class="mt-5 row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="monthly_price" class="required form-label">Monthly
                                            Price</label><br>
                                        <span id="monthly_price_help" class="form-text text-muted">Enter monthly price
                                            days for the
                                            subscription</span>
                                        <input type="number" class="form-control form-control-solid"
                                            name="monthly_price" id="monthly_price" aria-describedby="emailHelp"
                                            placeholder="Enter Monthly Price Days" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="yearly_price" class="required form-label">Yearly
                                            Price</label><br>
                                        <span id="trial_days_help" class="form-text text-muted">Enter yearly price
                                            days for the
                                            subscription</span>
                                        <input type="number" class="form-control form-control-solid"
                                            name="yearly_price" id="yearly_price" aria-describedby="emailHelp"
                                            placeholder="Enter Yearly Price Days" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-flush shadow-sm mt-5">
                    <div class="card-body">
                        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                            <h5
                                class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                                Subscription Features</h5>
                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                <li class="breadcrumb-item text-muted">
                                    <p class="text-muted">Configure below features as per the subscription type</p>
                                </li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="required form-label" for="maximum_property">Maximum
                                        Property</label><br>
                                    <input type="number" class="form-control form-control-solid"
                                        name="maximum_property" id="maximum_properties" aria-describedby="emailHelp"
                                        placeholder="Enter maximum property" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="required form-label" for="maximum_shift">Maximum Shift</label><br>
                                    <input type="number" class="form-control form-control-solid"
                                        name="maximum_shift" id="maximum_shifts" aria-describedby="emailHelp"
                                        placeholder="Enter maximum shift" required>
                                </div>
                            </div>
                            <div class="col-md-6 mt-5">
                                <div class="form-group">
                                    <label class="required form-label" for="maximum_checkpoint">Maximum
                                        Checkpoint</label><br>
                                    <input type="number" class="form-control form-control-solid"
                                        name="maximum_checkpoint" id="maximum_checkpoints"
                                        aria-describedby="emailHelp" placeholder="Enter maximum checkpoint" required>
                                </div>
                            </div>
                            <div class="col-md-6  mt-5">
                                <div class="form-group">
                                    <label class="required form-label" for="maximum_guards">Maximum Guards</label><br>
                                    <input type="number" class="form-control form-control-solid"
                                        name="maximum_guards" id="maximum_guards" aria-describedby="emailHelp"
                                        placeholder="Enter maximum guards" required>
                                </div>
                            </div>
                            <div class="col-md-6  mt-5">
                                <div class="form-group">
                                    <label class="required form-label" for="messenger">Messenger</label><br>
                                    <select class="form-select form-select-solid" id="messenger" name="messenger"
                                        aria-label="Floating label select example" required>
                                        <option value="">Enable Messenger Feature</option>
                                        <option value="">Disable Messenger Feature</option>
                                    </select>
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
