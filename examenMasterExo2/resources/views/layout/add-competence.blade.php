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
                                        <h4 class="fs-16 mb-1">Ajouter une compétence</h4>
                                        <p class="text-muted mb-0">Remplissez le formulaire ci-dessous  pour ajouter un compétence.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="live-preview">
                                            <form action="{{ route('store-competence') }}" enctype="multipart/form-data" method="POST">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="nameinput" class="form-label">Nom *</label>
                                                            <input type="text" class="form-control" placeholder="Nom" id="nameinput" name="name" required>
                                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                                                    </div>
                                                </div>
                                                <!--end row-->
                                            </form>
                                        </div>
                                    </div>
                                </div> <!-- .card-->
                            </div> <!-- .col-->
                        </div> <!-- end row-->

                    </div> <!-- end .h-100-->

                </div>
            </div>

        </div>
        <!-- container-fluid -->
    </div>
@endsection