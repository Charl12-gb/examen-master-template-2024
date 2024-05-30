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
                                        <p class="text-muted mb-0">Liste des missions</p>
                                    </div>
                                    <div class="mt-3 mt-lg-0">
                                        <form action="javascript:void(0);">
                                            <div class="row g-3 mb-0 align-items-center">
                                                <div class="col-auto">
                                                    <a href="{{ route('add') }}" type="button" class="btn btn-soft-primary"><i
                                                            class="ri-add-circle-line align-middle me-1"></i>
                                                        Ajouter une mission</a>
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
                                    <div class="card-body">
                                        <div>
                                            <table class="table dt-responsive nowrap table-striped align-middle" style="width:100%">
                                                <thead class="text-muted table-light">
                                                    <tr>
                                                        <th scope="col">AUTEUR</th>
                                                        <th scope="col">MISSIONS</th>
                                                        <th scope="col">NOMBRE DE CANDIDAT</th>
                                                        <th scope="col">STATUS</th>
                                                        <th scope="col">TEMPS</th>
                                                        <th scope="col">ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($missions as $mission)
                                                        <tr>
                                                            <td>
                                                                <div class="align-items-center text-center">
                                                                    <div class="flex-shrink-0 me-2">
                                                                        <img src="{{ asset('storage/' . $mission->image) }}"
                                                                            alt=""
                                                                            class="avatar-xs" />
                                                                    </div>
                                                                    <div class="flex-grow-1">{{ $mission->user->name }}</div>
                                                                </div>
                                                            </td>
                                                            <td>{{ $mission->description }}
                                                            <br>{{ $mission->lieu }}</td>
                                                            <td>
                                                                <span class="text-success">5</span>
                                                            </td>
                                                            <td>
                                                                En cours
                                                            </td>
                                                            <td>
                                                                {{ $mission->number_day }}
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
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
