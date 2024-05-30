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
                                                    <a href="{{ route('add') }}" type="button" class="btn btn-soft-primary"><i class="ri-add-circle-line align-middle me-1"></i>Ajouter</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <div class="alert-icon">
                                    <i class="far fa-fw fa-bell"></i>
                                </div>
                                <div class="alert-message">
                                    {{ session('msg') }}
                                </div>
                            </div>
                            @endif
                            @if (session('error'))
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <div class="alert-icon">
                                    <i class="far fa-fw fa-bell"></i>
                                </div>
                                <div class="alert-message">
                                    {{ session('msg') }}
                                </div>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table id="example" class="table dt-responsive nowrap table-striped align-middle" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th data-ordering="false">No.</th>
                                                    <th>Nom</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($myModels as $model)
                                                <tr>
                                                    <td># {{ $loop->iteration }}</td>
                                                    <td>{{ $model->name }}</td>
                                                    <td>
                                                        <div class="dropdown d-inline-block">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a href="{{ route('show', ['id' => $model->id]) }}" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-primary"></i> View</a></li>
                                                                <li><a href="{{ route('edit', ['id' => $model->id]) }}" class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-warning"></i> Edit</a></li>
                                                                <li>
                                                                    <form action="{{ route('destroy', ['id' => $model->id]) }}" method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button class="dropdown-item remove-item-btn"> <i class="ri-delete-bin-fill align-bottom me-2 text-danger"></i> Delete</button>
                                                                    </form>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
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
