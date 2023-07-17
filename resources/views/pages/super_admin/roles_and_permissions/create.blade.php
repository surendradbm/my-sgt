<x-default-layout>
    <!--begin::Image input placeholder-->
    <!--end::Image input placeholder-->
    <!--begin::Tables widget 16-->
    <div class="row mb-5 mt-5">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <h1 class="page-heading d-flex text-bg fw-bold fs-3 flex-column justify-content-center my-0">
                            Create Roles</h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="#" class="text-muted text-hover-primary">Roles</a>
                            </li>
                            <li class="breadcrumb-item text-muted"> > </li>
                            <li class="breadcrumb-item text-bg">Create Roles</li>
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
                        <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                            <div class="row">
                                <div class="col-md-4">
                                    <h5 class="text-bg"><label for="maximum_property">Add Role</label></h5>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter Role Name...">
                                    </div>
                                </div>

                            </div>
                        </form>

                        {{-- Table Starts --}}
                        <div class="table-responsive mt-5">
                            <table class="table table-hover table-rounded border gy-7 gs-7" id="dataTable">
                                <thead>
                                    <tr class="fw-semibold fs-6 border-bottom-2 border-gray-200">
                                        <th style="background: #244b8a; color: white;">S.No.</th>
                                        <th style="background: #244b8a; color: white;">Permissions</th>
                                        <th style="background: #244b8a; color: white;">Read</th>
                                        <th style="background: #244b8a; color: white;">Edit</th>
                                        <th style="background: #244b8a; color: white;">Update</th>
                                        <th style="background: #244b8a; color: white;">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($x = 1; $x <= 10; $x++) { ?>
                                        <tr>
                                            <td style="background: white;"><?php echo $x; ?></td>
                                            <td>Roles and Permission</td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input body-checkbox" type="checkbox"
                                                        value="" id="checkbox1">
                                                    <label class="form-check-label" for="checkbox1">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input body-checkbox" type="checkbox"
                                                        value="" id="checkbox1">
                                                    <label class="form-check-label" for="checkbox1">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input body-checkbox" type="checkbox"
                                                        value="" id="checkbox1">
                                                    <label class="form-check-label" for="checkbox1">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input body-checkbox" type="checkbox"
                                                        value="" id="checkbox1">
                                                    <label class="form-check-label" for="checkbox1">
                                                    </label>
                                                </div>
                                            </td>


                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                        {{-- Table Ends --}}
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

