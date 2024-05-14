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
                                <form action="{{ route('store') }}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <div class="card p-0 m-0">
                                        <div class="card-header text-center bg-dark text-light">
                                            <h5 class="card-title mb-0">NOTATION D'UN COLLABORATEUR</h5>
                                        </div>
                                        <div class="card-body m-0 p-0">
                                            <div class="card mt-2">
                                                <div class="card-header text-center bg-dark text-light">
                                                    <h5 class="card-title mb-0">Identification de l'argent</h5>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row mb-3">
                                                        <div class="col-lg-3">
                                                            <label for="nameInput" class="form-label">Identité</label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <select class="form-select" id="userSelect" name="user_id" required>
                                                                <option value="">Veillez sélectionner un agent</option>
                                                                @foreach ($users as $user)
                                                                    <option value="{{ $user->id }}"
                                                                            data-matricule="{{ $user->matricule }}"
                                                                            data-last_name="{{ $user->last_name }}"
                                                                            data-first_name="{{ $user->first_name }}"
                                                                            data-grade="{{ $user->grade }}">
                                                                        {{ $user->last_name }} {{ $user->first_name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-lg-3">
                                                            <label for="matricule" class="form-label">Matricule</label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <input type="text" class="form-control" id="matricule" name="matricule" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-lg-3">
                                                            <label for="last_name" class="form-label">Nom</label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <input type="text" class="form-control" id="last_name" name="last_name" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-lg-3">
                                                            <label for="first_name" class="form-label">Prénom(s)</label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <input type="text" class="form-control" id="first_name" name="first_name" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-lg-3">
                                                            <label for="grade" class="form-label">Grade</label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <input type="text" class="form-control" id="grade" name="grade" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mt-2">
                                                <div class="card-header text-center bg-dark text-light">
                                                    <h5 class="card-title mb-0">Notation</h5>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row mb-3">
                                                        <div class="col-lg-3">
                                                            <label for="is_note" class="form-label">Agent a été noté ?</label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" checked type="radio" name="is_note" id="inlineRadio1" value="oui">
                                                                <label class="form-check-label" for="inlineRadio1">Oui</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="is_note" id="inlineRadio2" value="non">
                                                                <label class="form-check-label" for="inlineRadio2">Non</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-lg-3">
                                                            <label for="evaluation_year" class="form-label">Année concernée</label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <input type="number" class="form-control" min="1" id="evaluation_year" name="evaluation_year" required>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-lg-3">
                                                            <label for="last_name" class="form-label">Trimestre</label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <select class="form-select" name="moment" required>
                                                                <option value="">Veuillez selectionner un trimestre</option>
                                                                <option value="Trimestre 1">Trimestre 1</option>
                                                                <option value="Trimestre 2">Trimestre 2</option>
                                                                <option value="Trimestre 3">Trimestre 3</option>
                                                                <option value="Trimestre 4">Trimestre 4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-lg-3">
                                                            <label for="number_miss_day" class="form-label">Nombre de jours d'absence non justifié</label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <input type="number" min="0" class="form-control" id="number_miss_day" name="number_miss_day" value="0" required>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-lg-3">
                                                            <label for="number_working_days" class="form-label">Nombre total de jour de travail effectué</label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <input type="number" min="0" class="form-control" id="number_working_days" name="number_working_days" value="0" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mt-2">
                                                <div class="card-body">
                                                    <div class="row bg-secondary p-2">
                                                        <div class="col-lg-3">
                                                            <label for="is_note" class="form-label">N° d'ordre</label>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label for="is_note" class="form-label">Critère de notation</label>
                                                        </div>
                                                        <div class="col-lg-5">
                                                            <label for="is_note" class="form-label">Note</label>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-lg-3 text-center">
                                                            <label class="form-label">1</label>
                                                        </div>
                                                        <div class="col-lg-4 text-center">
                                                            <label for="skills" class="form-label">Compétences professionnelle</label>
                                                        </div>
                                                        <div class="col-lg-5">
                                                            <input type="number" class="form-control" min="0" id="skills" name="skills" value="0" required>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-lg-3 text-center">
                                                            <label class="form-label">2</label>
                                                        </div>
                                                        <div class="col-lg-4 text-center">
                                                            <label for="pontualite" class="form-label">Pontualité</label>
                                                        </div>
                                                        <div class="col-lg-5">
                                                            <input type="number" class="form-control" min="0" id="pontualite" name="pontualite" value="0" required>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-lg-3 text-center">
                                                            <label class="form-label">3</label>
                                                        </div>
                                                        <div class="col-lg-4 text-center">
                                                            <label for="assiduite" class="form-label">Assiduité</label>
                                                        </div>
                                                        <div class="col-lg-5">
                                                            <input type="number" class="form-control" min="0" id="assiduite" name="assiduite" value="0" required>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-lg-3 text-center">
                                                            <label class="form-label">4</label>
                                                        </div>
                                                        <div class="col-lg-4 text-center">
                                                            <label for="respect" class="form-label">Respect de l'hierachie</label>
                                                        </div>
                                                        <div class="col-lg-5">
                                                            <input type="number" class="form-control" min="0" id="respect" name="respect" value="0" required>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-lg-3 text-center">
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <span class="form-label">Note total</span>
                                                        </div>
                                                        <div class="col-lg-5">
                                                            <strong id="noteTotal">0 /20</strong>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row mb-4">
                                                        <div class="col-lg-2 text-center">
                                                        </div>
                                                        <div class="col-lg-3 text-center">
                                                            <label for="appreciations" class="form-label">Appréciations</label>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <textarea class="form-control" id="appreciations" name="appreciations" rows="3" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-lg-2 text-center">
                                                        </div>
                                                        <div class="col-lg-3 text-center">
                                                            <label for="file" class="form-label">Rapport PDF</label>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <input type="file" class="form-control" min="0" id="file" name="file" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-12 text-center">
                                                    <a href="{{ route('home') }}" class="btn btn-warning">Retour</a>
                                                    <button type="submit" class="btn btn-success">Enregistrer</button>
                                                </div>
                                            </div>
                                        </div>
                                </form>
                            </div> <!-- .card-->
                        </div> <!-- .col-->
                    </div> <!-- end row-->

                </div> <!-- end .h-100-->

            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var userSelect = document.getElementById('userSelect');

        userSelect.addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            var matricule = document.getElementById('matricule');
            var lastName = document.getElementById('last_name');
            var firstName = document.getElementById('first_name');
            var grade = document.getElementById('grade');

            if (selectedOption.value === "") {
                matricule.value = '';
                lastName.value = '';
                firstName.value = '';
                grade.value = '';
            } else {
                matricule.value = selectedOption.getAttribute('data-matricule');
                lastName.value = selectedOption.getAttribute('data-last_name');
                firstName.value = selectedOption.getAttribute('data-first_name');
                grade.value = selectedOption.getAttribute('data-grade');
            }
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        // Récupération des éléments input
        var skillsInput = document.getElementById('skills');
        var pontualiteInput = document.getElementById('pontualite');
        var assiduiteInput = document.getElementById('assiduite');
        var respectInput = document.getElementById('respect');
        var noteTotal = document.getElementById('noteTotal');

        // Fonction pour mettre à jour la moyenne totale
        function updateTotal() {
            var skills = parseFloat(skillsInput.value) || 0;
            var pontualite = parseFloat(pontualiteInput.value) || 0;
            var assiduite = parseFloat(assiduiteInput.value) || 0;
            var respect = parseFloat(respectInput.value) || 0;

            var moyenne = (skills + pontualite + assiduite + respect) / 4;
            noteTotal.textContent = moyenne.toFixed(2) + " /20";
        }

        // Ajouter des écouteurs d'événements pour les changements
        [skillsInput, pontualiteInput, assiduiteInput, respectInput].forEach(function(input) {
            input.addEventListener('input', updateTotal);
        });

        // Initialiser avec une mise à jour immédiate
        updateTotal();
    });

    // JS méthode deux: 
        // document.addEventListener('DOMContentLoaded', function() {
        //     var usersData = @json($users);  // Assurez-vous que cette ligne est placée ici si elle n'est pas déjà dans une autre partie de votre HTML

        //     var userSelect = document.getElementById('userSelect');
        //     userSelect.addEventListener('change', function() {
        //         var userId = this.value;
        //         updateUserFields(userId);
        //     });
        // });

        // function updateUserFields(userId) {
        //     var user = usersData.find(user => user.id.toString() === userId);
        //     var matricule = document.getElementById('matricule');
        //     var lastName = document.getElementById('last_name');
        //     var firstName = document.getElementById('first_name');
        //     var grade = document.getElementById('grade');

        //     if (user) {
        //         matricule.value = user.matricule || '';
        //         lastName.value = user.last_name || '';
        //         firstName.value = user.first_name || '';
        //         grade.value = user.grade || '';
        //     } else {
        //         matricule.value = '';
        //         lastName.value = '';
        //         firstName.value = '';
        //         grade.value = '';
        //     }
        // }
    </script>
@endsection
