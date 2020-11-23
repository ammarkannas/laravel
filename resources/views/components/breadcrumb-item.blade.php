@if($active)
    <span {{ $attributes->merge(['class' => 'breadcrumb-item active']) }}>{{ $text }}</span>
@else
    <a href="{{ $href }}" {{ $attributes->merge(['class' => 'breadcrumb-item']) }}>{{ $text }}</a>
@endif
