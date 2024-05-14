@extends('app')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col">

                    <div class="h-100">
                        <div class="row mb-3 pb-1">
                            <div class="col-12">
                                <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                    <div class="flex-grow-1">
                                        <h4 class="fs-16 mb-1">Bienvenue</h4>
                                        <p class="text-muted mb-0">Here's what's happening with your store
                                            today.</p>
                                    </div>
                                    <div class="mt-3 mt-lg-0">
                                        <form action="javascript:void(0);">
                                            <div class="row g-3 mb-0 align-items-center">
                                                <div class="col-auto">
                                                    <a href="{{ route('add') }}" type="button" class="btn btn-soft-primary"><i
                                                            class="ri-add-circle-line align-middle me-1"></i>
                                                        Add Product</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Recent Orders</h4>
                                    </div>

                                    <div class="card-body">
                                        <div class="table-responsive table-card">
                                            <table
                                                class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                                <thead class="text-muted table-light">
                                                    <tr>
                                                        <th scope="col">Order ID</th>
                                                        <th scope="col">Customer</th>
                                                        <th scope="col">Product</th>
                                                        <th scope="col">Amount</th>
                                                        <th scope="col">Vendor</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Rating</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="apps-ecommerce-order-details.html"
                                                                class="fw-medium link-primary">#VZ2112</a>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <img src="assets/images/users/avatar-1.jpg"
                                                                        alt=""
                                                                        class="avatar-xs rounded-circle" />
                                                                </div>
                                                                <div class="flex-grow-1">Alex Smith</div>
                                                            </div>
                                                        </td>
                                                        <td>Clothes</td>
                                                        <td>
                                                            <span class="text-success">$109.00</span>
                                                        </td>
                                                        <td>Zoetic Fashion</td>
                                                        <td>
                                                            <span class="badge badge-soft-success">Paid</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14 fw-medium mb-0">5.0<span
                                                                    class="text-muted fs-11 ms-1">(61
                                                                    votes)</span></h5>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown d-inline-block">
                                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="ri-more-fill align-middle"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                    <li>
                                                                        <a class="dropdown-item remove-item-btn">
                                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <td>
                                                            <a href="apps-ecommerce-order-details.html"
                                                                class="fw-medium link-primary">#VZ2111</a>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <img src="assets/images/users/avatar-2.jpg"
                                                                        alt=""
                                                                        class="avatar-xs" />
                                                                </div>
                                                                <div class="flex-grow-1">Jansh Brown</div>
                                                            </div>
                                                        </td>
                                                        <td>Kitchen Storage</td>
                                                        <td>
                                                            <span class="text-success">$149.00</span>
                                                        </td>
                                                        <td>Micro Design</td>
                                                        <td>
                                                            <span
                                                                class="badge badge-soft-warning">Pending</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14 fw-medium mb-0">4.5<span
                                                                    class="text-muted fs-11 ms-1">(61
                                                                    votes)</span></h5>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown d-inline-block">
                                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="ri-more-fill align-middle"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                    <li>
                                                                        <a class="dropdown-item remove-item-btn">
                                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <td>
                                                            <a href="apps-ecommerce-order-details.html"
                                                                class="fw-medium link-primary">#VZ2109</a>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <img src="assets/images/users/avatar-3.jpg"
                                                                        alt=""
                                                                        class="avatar-xs rounded-circle" />
                                                                </div>
                                                                <div class="flex-grow-1">Ayaan Bowen</div>
                                                            </div>
                                                        </td>
                                                        <td>Bike Accessories</td>
                                                        <td>
                                                            <span class="text-success">$215.00</span>
                                                        </td>
                                                        <td>Nesta Technologies</td>
                                                        <td>
                                                            <span class="badge badge-soft-success">Paid</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14 fw-medium mb-0">4.9<span
                                                                    class="text-muted fs-11 ms-1">(89
                                                                    votes)</span></h5>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown d-inline-block">
                                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="ri-more-fill align-middle"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                    <li>
                                                                        <a class="dropdown-item remove-item-btn">
                                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <td>
                                                            <a href="apps-ecommerce-order-details.html"
                                                                class="fw-medium link-primary">#VZ2108</a>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <img src="assets/images/users/avatar-4.jpg"
                                                                        alt=""
                                                                        class="avatar-xs rounded-circle" />
                                                                </div>
                                                                <div class="flex-grow-1">Prezy Mark</div>
                                                            </div>
                                                        </td>
                                                        <td>Furniture</td>
                                                        <td>
                                                            <span class="text-success">$199.00</span>
                                                        </td>
                                                        <td>Syntyce Solutions</td>
                                                        <td>
                                                            <span
                                                                class="badge badge-soft-danger">Unpaid</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14 fw-medium mb-0">4.3<span
                                                                    class="text-muted fs-11 ms-1">(47
                                                                    votes)</span></h5>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown d-inline-block">
                                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="ri-more-fill align-middle"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                    <li>
                                                                        <a class="dropdown-item remove-item-btn">
                                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                    <tr>
                                                        <td>
                                                            <a href="apps-ecommerce-order-details.html"
                                                                class="fw-medium link-primary">#VZ2107</a>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0 me-2">
                                                                    <img src="assets/images/users/avatar-6.jpg"
                                                                        alt=""
                                                                        class="avatar-xs rounded-circle" />
                                                                </div>
                                                                <div class="flex-grow-1">Vihan Hudda</div>
                                                            </div>
                                                        </td>
                                                        <td>Bags and Wallets</td>
                                                        <td>
                                                            <span class="text-success">$330.00</span>
                                                        </td>
                                                        <td>iTest Factory</td>
                                                        <td>
                                                            <span class="badge badge-soft-success">Paid</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="fs-14 fw-medium mb-0">4.7<span
                                                                    class="text-muted fs-11 ms-1">(161
                                                                    votes)</span></h5>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown d-inline-block">
                                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="ri-more-fill align-middle"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                    <li>
                                                                        <a class="dropdown-item remove-item-btn">
                                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr><!-- end tr -->
                                                </tbody><!-- end tbody -->
                                            </table><!-- end table -->
                                        </div>
                                    </div>
                                </div> <!-- .card-->
                            </div> 
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Basic Datatables</h5>
                                    </div>
                                    <div class="card-body">
                                        <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="width: 10px;">
                                                        <div class="form-check">
                                                            <input class="form-check-input fs-15" type="checkbox" id="checkAll" value="option">
                                                        </div>
                                                    </th>
                                                    <th data-ordering="false">SR No.</th>
                                                    <th data-ordering="false">ID</th>
                                                    <th data-ordering="false">Purchase ID</th>
                                                    <th data-ordering="false">Title</th>
                                                    <th data-ordering="false">User</th>
                                                    <th>Assigned To</th>
                                                    <th>Created By</th>
                                                    <th>Create Date</th>
                                                    <th>Status</th>
                                                    <th>Priority</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                                        </div>
                                                    </th>
                                                    <td>01</td>
                                                    <td>VLZ-452</td>
                                                    <td>VLZ1400087402</td>
                                                    <td><a href="#!">Post launch reminder/ post list</a></td>
                                                    <td>Joseph Parker</td>
                                                    <td>Alexis Clarke</td>
                                                    <td>Joseph Parker</td>
                                                    <td>03 Oct, 2021</td>
                                                    <td><span class="badge badge-soft-info">Re-open</span></td>
                                                    <td><span class="badge bg-danger">High</span></td>
                                                    <td>
                                                        <div class="dropdown d-inline-block">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                                <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                <li>
                                                                    <a class="dropdown-item remove-item-btn">
                                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                                        </div>
                                                    </th>
                                                    <td>02</td>
                                                    <td>VLZ-453</td>
                                                    <td>VLZ1400087425</td>
                                                    <td><a href="#!">Additional Calendar</a></td>
                                                    <td>Diana Kohler</td>
                                                    <td>Admin</td>
                                                    <td>Mary Rucker</td>
                                                    <td>05 Oct, 2021</td>
                                                    <td><span class="badge badge-soft-secondary">On-Hold</span></td>
                                                    <td><span class="badge bg-info">Medium</span></td>
                                                    <td>
                                                        <div class="dropdown d-inline-block">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                                <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                <li>
                                                                    <a class="dropdown-item remove-item-btn">
                                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                                        </div>
                                                    </th>
                                                    <td>03</td>
                                                    <td>VLZ-454</td>
                                                    <td>VLZ1400087438</td>
                                                    <td><a href="#!">Make a creating an account profile</a></td>
                                                    <td>Tonya Noble</td>
                                                    <td>Admin</td>
                                                    <td>Tonya Noble</td>
                                                    <td>27 April, 2022</td>
                                                    <td><span class="badge badge-soft-danger">Closed</span></td>
                                                    <td><span class="badge bg-success">Low</span></td>
                                                    <td>
                                                        <div class="dropdown d-inline-block">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                                <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                <li>
                                                                    <a class="dropdown-item remove-item-btn">
                                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                                        </div>
                                                    </th>
                                                    <td>04</td>
                                                    <td>VLZ-455</td>
                                                    <td>VLZ1400087748</td>
                                                    <td><a href="#!">Apologize for shopping Error!</a></td>
                                                    <td>Joseph Parker</td>
                                                    <td>Alexis Clarke</td>
                                                    <td>Joseph Parker</td>
                                                    <td>14 June, 2021</td>
                                                    <td><span class="badge badge-soft-warning">Inprogress</span></td>
                                                    <td><span class="badge bg-info">Medium</span></td>
                                                    <td>
                                                        <div class="dropdown d-inline-block">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                                <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                <li>
                                                                    <a class="dropdown-item remove-item-btn">
                                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                                        </div>
                                                    </th>
                                                    <td>05</td>
                                                    <td>VLZ-456</td>
                                                    <td>VLZ1400087547</td>
                                                    <td><a href="#!">Support for theme</a></td>
                                                    <td>Donald Palmer</td>
                                                    <td>Admin</td>
                                                    <td>Donald Palmer</td>
                                                    <td>25 June, 2021</td>
                                                    <td><span class="badge badge-soft-danger">Closed</span></td>
                                                    <td><span class="badge bg-success">Low</span></td>
                                                    <td>
                                                        <div class="dropdown d-inline-block">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                                <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                <li>
                                                                    <a class="dropdown-item remove-item-btn">
                                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                                        </div>
                                                    </th>
                                                    <td>06</td>
                                                    <td>VLZ-457</td>
                                                    <td>VLZ1400087245</td>
                                                    <td><a href="#!">Benner design for FB & Twitter</a></td>
                                                    <td>Mary Rucker</td>
                                                    <td>Jennifer Carter</td>
                                                    <td>Mary Rucker</td>
                                                    <td>14 Aug, 2021</td>
                                                    <td><span class="badge badge-soft-warning">Inprogress</span></td>
                                                    <td><span class="badge bg-info">Medium</span></td>
                                                    <td>
                                                        <div class="dropdown d-inline-block">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                                <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                <li>
                                                                    <a class="dropdown-item remove-item-btn">
                                                                        <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row-->

                    </div> <!-- end .h-100-->

                </div>
            </div>

        </div>
        <!-- container-fluid -->
    </div>
@endsection
