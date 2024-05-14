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
                                        <p class="text-muted mb-0">MES NOTATIONS</p>
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
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <div class="alert-icon">
                                    <i class="far fa-fw fa-bell"></i>
                                </div>
                                <div class="alert-message">
                                    <strong>Alert !</strong>  {{ session('message') }}
                                </div>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header text-center bg-dark text-light">
                                        <h5 class="card-title mb-0">MES NOTATIONS ({{ $evaluations->count() }})</h5>
                                    </div>
                                    <div class="card-body">
                                        <table id="example" class="table dt-responsive nowrap table-striped align-middle" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th data-ordering="false">Date</th>
                                                    <th data-ordering="false">Matricule</th>
                                                    <th data-ordering="false">Nom & Prénoms</th>
                                                    <th data-ordering="false">Trimestre</th>
                                                    <th data-ordering="false">Note</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($evaluations as $evaluation)
                                                <tr>
                                                    <td>{{ $evaluation->created_at }}</td>
                                                    <td>{{ $evaluation->user->matricule }}</td>
                                                    <td>{{ $evaluation->user->last_name }} {{ $evaluation->user->first_name }}</td>
                                                    <td>{{ $evaluation->trimestre }}</td>
                                                    <td>{{ $evaluation->moyen_total }}</td>
                                                    <td>
                                                        <a href="#!"><i class="ri-eye-fill align-bottom me-2 text-muted"></i></a>
                                                        <a href="#!"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i></a>
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
