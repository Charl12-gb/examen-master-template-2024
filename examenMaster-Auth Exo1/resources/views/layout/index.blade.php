@extends('app')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="h-100">
                        <div class="row mb-3 pb-1">
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
                            <div class="col-12">
                                <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                    <div class="flex-grow-1">
                                        <h4 class="fs-16 mb-1">Liste des médias</h4>
                                    </div>
                                    <div class="mt-3 mt-lg-0">
                                        <form action="javascript:void(0);">
                                            <div class="row g-3 mb-0 align-items-center">
                                                <div class="col-auto">
                                                    <a href="{{ route('media-form') }}" type="button" class="btn btn-soft-primary"><i
                                                            class="ri-add-circle-line align-middle me-1"></i>
                                                        Ajouter une vidéo</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row text-end">
                            <div class="col-12 text-end">
                                <div class="card p-4">
                                    <form class="row" action="{{ route('home') }}">
                                        <div class="col-6"><input class="form-control" name="search" placeholder="Rechercher"></div>
                                        <div class="col-4">
                                            <select class="form-select" name="category_id">
                                                <option value="all">Toutes les vidéos</option>
                                                @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-success" type="submit">Filtrer</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            @if(count($medias) > 0)
                                @foreach ($medias as $media )
                                    <div class="col-6">
                                        <div class="card">
                                            <div class="ratio ratio-1x1">
                                                <iframe src="{{ asset('storage/' . $media->file) }}"  alt="{{ $media->name }}" allowfullscreen></iframe>
                                            </div>
                                            <div class="card-body">
                                                <h4 class="card-title mb-2">{{ $media->name }}</h4>
                                                <p class="card-text text-muted">
                                                    <span class="badge text-bg-success">{{ $media->category->name }}</span>
                                                </p>
                                                <p class="card-text">
                                                    {{ $media->created_at }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                            <div class="alert alert-secondary alert-dismissible" role="alert">
                                <div class="alert-icon">
                                    <i class="far fa-fw fa-bell"></i>
                                </div>
                                <div class="alert-message">
                                    Aucun média trouvé
                                </div>
                            </div>
                            @endif
                        </div> <!-- end row-->

                    </div> <!-- end .h-100-->

                </div>
            </div>

        </div>
        <!-- container-fluid -->
    </div>
@endsection
