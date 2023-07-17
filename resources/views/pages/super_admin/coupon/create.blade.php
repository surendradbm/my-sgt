<x-default-layout>
    <!--begin::Image input placeholder-->
    <style>
        .form-check input {
            width: 60px !important;
        }
    </style>
    <!--end::Image input placeholder-->
    <!--begin::Tables widget 16-->
    <div class="row mb-5 mt-5">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <h1 class="page-heading d-flex text-bg fw-bold fs-3 flex-column justify-content-center my-0">
                            Create Coupon</h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="#" class="text-muted text-hover-primary">Coupon</a>
                            </li>
                            <li class="breadcrumb-item text-muted"> > </li>
                            <li class="breadcrumb-item text-bg">Create Coupon</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form>
                <div class="card card-flush shadow-sm mt-5">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title" class="required form-label">Coupon Title</label><br>
                                    <input type="text" class="form-control form-control-solid" name="title"
                                        id="title" aria-describedby="emailHelp" placeholder="Enter Coupon title">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="coupon_code" class="required form-label">Coupon Code</label><br>
                                    <input type="text" class="form-control form-control-solid" name="coupon_code"
                                        id="coupon_code" aria-describedby="emailHelp"
                                        placeholder="Generate Coupon Code">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">&nbsp;</label>
                                    <button type="button" class="btn btn-primary" style="margin-top: 28px;"
                                        onclick="generateCode()">Generate Code</button>
                                </div>
                            </div>
                            <div class="col-md-6 mt-5">
                                <div class="form-group">
                                    <label for="maximum_shift" class="required form-label">Discount Type</label><br>
                                    <select class="form-select form-select-solid" id="maximum_shift"
                                        name="maximum_shift" aria-label="Floating label select example"
                                        onchange="toggleDiscountSection()">
                                        <option value="Zero">Please Select Discount Type</option>
                                        <option value="Amount">Amount</option>
                                        <option value="Percentage">Percentage</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mt-5" id="amountSection" style="display: none;">
                                <div class="form-group">
                                    <label for="discount" class="required form-label">Discount Amount</label><br>
                                    <input type="text" class="form-control form-control-solid" name="discount"
                                        id="discount" aria-describedby="emailHelp" placeholder="Enter Discount Amount">
                                </div>
                            </div>
                            <div id="percentageSection" style="display: none;" class="col-md-6 mt-5">
                                <div class="form-group">
                                    <label for="discount" class="required form-label">Discount
                                        Percentage</label><br>
                                    <input type="text" class="form-control form-control-solid" name="discount"
                                        id="discount" aria-describedby="emailHelp"
                                        placeholder="Enter Discount Percentage">
                                </div>
                            </div>
                            <div>
                                <div class="col-md-6 mt-5">
                                    <div class="form-group">
                                        <label for="expire_at" class="required form-label">Expires At</label><br>
                                        <input type="date" class="form-control form-control-solid" name="expire_at"
                                            id="expire_at" aria-describedby="emailHelp">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-5">
                                <label for="subscription_type" class="required form-label">Subscription
                                    Type</label><br>
                                <span id="free_trial_help" class="form-text text-muted">Select Subscription type for
                                    which the Coupon Code will be applicable</span>
                                <select class="form-select form-select form-select-solid" id="subscription_type"
                                    name="subscription_type" aria-label="Floating label select example">
                                    <option value="No">Please Select the Subscription Type</option>
                                    <option value="No">Basic</option>
                                    <option value="No">Premium</option>
                                    <option value="Yes">Advance</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-5">
                                <div class="form-group">
                                    <label for="expire_at" class="form-label"></label><br>
                                    <div class="form-check form-switch form-check-custom form-check-solid" style="
                                    padding: 25px;
                                ">
                                        <label class="form-label" for="flexSwitchChecked">
                                            Status :&nbsp; &nbsp;
                                        </label>
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexSwitchChecked"/>
                                    </div>
                                </div>
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
    function toggleDiscountSection() {
        var selectedValue = document.getElementById("maximum_shift").value;
        var amountSection = document.getElementById("amountSection");
        var percentageSection = document.getElementById("percentageSection");

        if (selectedValue === "Amount") {
            amountSection.style.display = "block";
            percentageSection.style.display = "none";
        } else if (selectedValue === "Percentage") {
            amountSection.style.display = "none";
            percentageSection.style.display = "block";
        } else if (selectedValue === "Zero") {
            amountSection.style.display = "none";
            percentageSection.style.display = "none";
        }
    }
</script>
<script>
    function generateCode() {
        // Generate random alphanumeric code
        var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        var codeLength = 10;
        var randomCode = '';
        for (var i = 0; i < codeLength; i++) {
            randomCode += characters.charAt(Math.floor(Math.random() * characters.length));
        }

        // Fill the input tag with the generated code
        document.getElementById('coupon_code').value = randomCode;
    }
</script>
