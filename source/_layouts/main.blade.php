<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ $page->baseUrl }}{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ $page->baseUrl }}{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>
    <body class="text-gray-700 bg-gray-200 font-sans antialiased">
        @yield('body')
    </body>
</html>
