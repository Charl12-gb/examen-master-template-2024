<div id="modal-{{ $id }}" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="NotificationModalbtn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                        colors="primary:#f7b84b,secondary:#f06548"
                        style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>{{ $title }}</h4>
                        <p class="text-muted mx-4 mb-0">{{ $description }}</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    @if($data)
                        @if (isset($data['action']) && !empty($data['action']))
                            <form method="{{ $data['method'] }}" action="{{ $data['action'] }}">
                                @csrf
                                <button type="submit" class="btn w-sm btn-light">Oui</button>
                            </form>
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Fermer</button>
                        @endif
                        @if (isset($data['link']) && !empty($data['link']))
                            <a href="{{ $data }}" class="btn btn-primary">Continuer</a>
                        @endif
                    @else
                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Fermer</button>
                    @endif
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
