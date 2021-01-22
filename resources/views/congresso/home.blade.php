<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABEPEM</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/congresso.css') }}">
</head>
<body>


    <main role="main">
        {{-- @include('includes.jumbotron') --}}
        @include('includes.topo')
        @include('congresso.includes.navbar')

        <div class="container">
            @yield('conteudo')
        </div>
    </main>

    @include('includes.footer')

    <script src="{{ asset('js/jquery-3.5.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}" ></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>





