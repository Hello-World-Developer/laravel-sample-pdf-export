<!DOCTYPE html>
<html lang="en">

<head>
    <meta
        name="csrf-token"
        content="{{ csrf_token() }}"
    />
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    >
    <title>Home</title>
    @yield('styles')
    @vite('resources/css/app.css')
</head>

<body
    data-editor="ClassicEditor"
    data-collaboration="false"
    data-revision-history="false"
>
    {{ $slot }}
    @vite([
    'resources/js/app.js',
    'resources/js/front/common.js',
    'resources/js/front/editor-create.js',
    'resources/js/front/form.js'
    ])
</body>

</html>
