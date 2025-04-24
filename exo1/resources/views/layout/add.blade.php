use App\Http\Controllers\DocumentController;
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
                                        <h4 class="fs-16 mb-1">Ajouter</h4>
                                        <p class="text-muted mb-0">Remplissez le formulaire ci-dessous.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="live-preview">
                                            <form action="{{ route('store') }}" enctype="multipart/form-data" method="POST">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="numero" class="form-label">Numero</label>
                                                            <input type="text" class="form-control" placeholder="Entrez le numero" id="numero" name="numero" value="{{ old('numero') }}">
                                                            <x-input-error :messages="$errors->get('numero')" class="mt-2" />
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="date" class="form-label">Date</label>
                                                            <input type="date" class="form-control" placeholder="Entrez la date" id="date" name="date" value="{{ old('date') }}">
                                                            <x-input-error :messages="$errors->get('date')" class="mt-2" />
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="objet" class="form-label">Objet</label>
                                                            <input type="text" class="form-control" placeholder="Entrez l'objet" id="objet" name="objet" value="{{ old('objet') }}">
                                                            <x-input-error :messages="$errors->get('objet')" class="mt-2" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <div class="card-header">
                                                                <h4 class="card-title mb-0">File</h4>
                                                            </div><!-- end card header -->

                                                            <div class="card-body">
                                                                <p class="text-muted">FilePond is a JavaScript library that
                                                                    optimizes multiple images for faster uploads and offers a great, accessible, silky
                                                                    smooth user experience.</p>
                                                                <input type="file" class="filepond filepond-input-multiple" name="filepond" data-allow-reorder="true" data-max-file-size="3MB" data-max-files="3">
                                                                <x-input-error :messages="$errors->get('filepond')" class="mt-2" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-12">
                                                        <div class="text-end">
                                                            <button type="submit" class="btn btn-primary">Envoyer</button>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
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
