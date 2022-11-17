<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css'])
    <title>{{ $title ?? '' }}</title>
</head>
<body class="antialiased bg-slate-100 dark:bg-slate-700">
    <x-layouts.nav/>
    @if (session('status'))
    <div>
        {{session('status')}}
    </div>
    @endif
    {{ $slot }}
</body>
</html>
