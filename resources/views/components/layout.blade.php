<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>{{ $title ?? config('app.name') }}</title>

    <link
        rel="icon"
        href="{{ asset('icon.svg') }}"
        type="image/svg+xml"
    >

    @vite('resources/css/app.css')

    <script
        defer
        src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
    ></script>
</head>

<body @class([App::environment(), 'debug' => config('app.debug')])>
    <header class="relative z-30 flex items-center gap-8 p-4">
        <a href="/">
            <img
                src="{{ asset('icon.svg') }}"
                class="h-20"
            >
        </a>
        <nav class="flex flex-wrap items-center gap-2">
            <x-navlink routeName="home">{{ config('app.name') }}</x-navlink>
        </nav>
    </header>
    {{ $slot }}
</body>

</html>
