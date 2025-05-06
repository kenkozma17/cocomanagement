<!doctype html>
<html lang="{{ $page->short_locale }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $page->title ?? $page->name }}</title>

    @vite(['resources/js/site.js', 'resources/css/site.css'])
</head>
<body class="font-sans leading-normal">
    <x-navigation-bar :context="$__data" />
    <div class="mx-auto bg-slate-600 min-h-screen">
        @yield('template_content')
    </div>
    <x-footer :context="$__data" />
</body>
</html>
