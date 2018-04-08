<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <a href="{{ route('contato.index') }}" class="btn btn-outline-success"><i class="fa fa-edit"></i> Contatos</a>
    <div class="container">
        @if (session('aviso'))
            <div class="alert alert-success">
                {{ session('aviso') }}
            </div>
        @endif
        <div class="page-header">
            <h1>{{ $title }}</h1>
        </div>

        @yield('content')
    </div>

</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>