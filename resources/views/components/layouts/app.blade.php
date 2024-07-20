<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <script src="https://kit.fontawesome.com/187a0c0ba5.js" crossorigin="anonymous"></script>
  <title>{{ $title ?? 'Page Title' }}</title>
</head>
<body>
<livewire:componentes.navbar.navbar />
{{ $slot }}
</body>
</html>
