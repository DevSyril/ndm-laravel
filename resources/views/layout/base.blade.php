<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ isset($title) ? $title : 'Accueil-Nourriture du monde' }}</title>

    <!-- Importation des feuilles de style et frameworks css -->
    <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/mainStyle.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/js/slick-1.8.1/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/css/bootstrap.min.css') }}">
</head>

<body>

    @yield('content')


    <!-- Imporation des fichiers javascript -->
    <script src="{{ URL::asset('assets/js/main.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery-1.11.0.min.js.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/slick-1.8.1/slick/slick.min.js') }}"></script>

</body>

</html>
