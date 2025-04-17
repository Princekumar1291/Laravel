<div>
    <h1>About Page</h1>

    {{-- get the current full url --}}
    <h2>Current URL: {{ URL::current() }}</h2>
    <h2>Current full URL: {{ URL::full() }}</h2>
    {{-- or --}}
    <h2>Current full URL: {{ url()->current() }}</h2>
    <h2>Current full URL: {{ url()->full() }}</h2>

    {{-- get the previous url --}}
    <h2>Previous URL: {{ URL::previous() }}</h2>

    {{-- if name is send --}}
    @if (isset($name))
        <h1>Hello {{ $name }}</h1>
    @endif
</div>
