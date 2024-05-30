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
                                        @if(isset($model))
                                            <h4 class="fs-16 mb-1">Modifier</h4>
                                            <p class="text-muted mb-0">Remplissez le formulaire ci-dessous.</p>
                                        @else
                                            <h4 class="fs-16 mb-1">Ajouter</h4>
                                            <p class="text-muted mb-0">Remplissez le formulaire ci-dessous.</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="live-preview">
                                            @if(isset($model))
                                                <form action="{{ route('update', $model->id) }}" enctype="multipart/form-data" method="POST">
                                            @else
                                                <form action="{{ route('store') }}" enctype="multipart/form-data" method="POST">
                                            @endif
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="name" class="form-label">Name</label>
                                                            <input type="text" class="form-control" placeholder="Entrez le nom" id="name" name="name" value="{{ old('name', isset($model)? $model->name : '') }}">
                                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="description" class="form-label">Description</label>
                                                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                                                                <div class="snow-editor" style="height: 300px;">
                                                                    {!! old('description', isset($model) ? $model->description : '') !!}
                                                                </div>
                                                            <input type="hidden" class="description_hidden" name="description" value="{{ old('description', isset($model)? $model->description : '') }}">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            @if (isset($model))
                                                            <button type="submit" class="btn btn-primary">Modifier</button>
                                                            @else
                                                            <button type="submit" class="btn btn-primary">Ajouter</button>
                                                            @endif
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var editors = document.querySelectorAll('.ql-editor');
            var hiddenInputs = document.querySelectorAll('.description_hidden');

            // Fonction pour mettre à jour les champs cachés avec le contenu de l'éditeur correspondant
            function updateHiddenInput(index) {
                hiddenInputs[index].value = editors[index].innerHTML;
            }

            // Mettre à jour les champs cachés pour chaque éditeur
            editors.forEach(function(editor, index) {
                editor.addEventListener('input', function() {
                    updateHiddenInput(index);
                });
            });

            // Assurez-vous également de mettre à jour les champs cachés lorsque le formulaire est soumis
            var form = document.querySelector('form');
            form.addEventListener('submit', function() {
                editors.forEach(function(editor, index) {
                    updateHiddenInput(index);
                });
            });
        });
    </script>

@endsection
