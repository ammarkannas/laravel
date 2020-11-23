<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-labelledby="modal-label-{{ $id }}" aria-hidden="true">
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="modal-label-{{ $id }}">{{ $title }}</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                {{ $slot }}
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light btn-sm" data-dismiss="modal">{{ __('close') }}</button>
                {{ $footer }}
            </div>
        </div>
    </div>
</div>
