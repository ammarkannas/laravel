<form {{ $attributes->merge(['action' => $action, 'method' => $method]) }}>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
    {{ $methodField }}
    @csrf
    {{ $slot }}
</form>
