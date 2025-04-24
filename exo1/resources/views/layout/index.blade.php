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
                                                        <th scope="col">Numero</th>
                                                        <th scope="col">Objet</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Fichier</th>
                                                        <th scope="col">Vendor</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($documents as $document)
                                                        <tr>
                                                            <td>
                                                                <a href="apps-ecommerce-order-details.html"
                                                                    class="fw-medium link-primary">{{ $document->numero }}</a>
                                                            </td>
                                                            <td>{{ $document->objet }}</td>
                                                            <td>{{ $document->date }}</td>
                                                            <td>
                                                                <a href="{{ asset('storage/' . $document->file) }}" target="_blank">
                                                                    {{ basename($document->file) }}
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <div class="dropdown d-inline-block">
                                                                    <button class="btn btn-soft-secondary btn-sm dropdown"
                                                                        type="button" data-bs-toggle="dropdown"
                                                                        aria-expanded="false">
                                                                        <i class="ri-more-fill align-middle"></i>
                                                                    </button>
                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                        <li><a href="#!"
                                                                                class="dropdown-item"><i
                                                                                    class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                                        <li><a class="dropdown-item edit-item-btn"><i
                                                                                    class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                        <li>
                                                                            <a class="dropdown-item remove-item-btn">
                                                                                <i
                                                                                    class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody><!-- end tbody -->
                                            </table><!-- end table -->
                                        </div>
                                    </div>
                                </div> <!-- .card-->
                            </div> 
                        </div> <!-- end row-->

                    </div> <!-- end .h-100-->

                </div>
            </div>

        </div>
        <!-- container-fluid -->
    </div>
@endsection
