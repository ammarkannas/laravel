@if($dismissible)
    <div {{ $attributes->merge(['class' => "alert alert-{$type} alert-dismissible fade show", 'role' => 'alert']) }}>
        <!-- I begin to speak only when I am certain what I will say is not better left unsaid - Cato the Younger -->
        {{ $slot }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@else
    <div {{ $attributes->merge(['class' => "alert alert-{$type}", 'role' => 'alert']) }}>
        <!-- I begin to speak only when I am certain what I will say is not better left unsaid - Cato the Younger -->
        {{ $slot }}
    </div>
@endif
