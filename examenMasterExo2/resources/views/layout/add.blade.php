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
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="description" class="form-label">Description</label>
                                                            <textarea class="form-control" id="description" name="description" rows="2" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="start_date" class="form-label">Date de début</label>
                                                            <input type="date" class="form-control" placeholder="Date de début" id="start_date" name="start_date" required>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="time" class="form-label">Heure et minute</label>
                                                            <input type="time" class="form-control" name="time" id="time" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="end_date" class="form-label">Date de fin</label>
                                                            <input type="date" class="form-control" placeholder="Date de fin" id="end_date" name="end_date" required>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="taux" class="form-label">Taux horaire (CFA)</label>
                                                            <input type="number" min="0" class="form-control" name="taux" id="taux" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="choices-multiple-remove-button" class="form-label text-muted">Liste des compétences requises</label>
                                                            <select class="form-control" id="choices-multiple-remove-button" data-choices data-choices-removeItem multiple name="compentence_ids[]" required>
                                                                @foreach ($competences as $competence)
                                                                    <option value="{{ $competence->id }}">{{ $competence->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="lieu" class="form-label">Lieu</label>
                                                            <textarea class="form-control" id="lieu" name="lieu" rows="2" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <div class="dropzone" id="dropzone">
                                                                <label for="fileInput" class="fallback">
                                                                    <input id="fileInput" name="file" type="file" required accept="image/*">
                                                                    <div class="dz-message needsclick" style="margin-top: 70px;">
                                                                        <h4>Glissez pour sélectionner une image.</h4>
                                                                    </div>
                                                                </label>
                                                                <div class="file-name" id="fileName"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-12">
                                                        <div class="text-center">
                                                            <button type="submit" class="btn btn-primary">ENVOYER</button>
                                                            <button type="submit" class="btn btn-success">ENREGISTRER</button>
                                                            <button type="reset" class="btn btn-warning">ANNULER</button>
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
    <style>
        .dropzone {
            border: 2px dashed #ccc;
            border-radius: 5px;
            padding: 20px;
            margin: 20px auto;
            text-align: center;
        }

        /* Cacher l'input */
        .fallback input {
            display: none;
        }

        /* Style pour le nom de l'image */
        .file-name {
            margin-top: 10px;
            font-size: 14px;
            color: #666;
        }
    </style>
    <script>
        document.getElementById('fileInput').addEventListener('change', function() {
            var fileName = this.files[0].name;
            document.getElementById('fileName').textContent = fileName;
        });

        var dropzone = document.getElementById('dropzone');
        dropzone.addEventListener('dragover', function(event) {
            event.preventDefault();
        });
        dropzone.addEventListener('drop', function(event) {
            event.preventDefault();
            var file = event.dataTransfer.files[0];
            document.getElementById('fileName').textContent = file.name;
        });
    </script>
@endsection
