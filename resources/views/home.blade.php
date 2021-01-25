<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABEPEM 2021</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <a href="{{ route('abepem') }}"><img class="img-fluid" src="{{ asset('imagens/logo_abepem.png')}}" alt="Logo da Abepem"></a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('coloquio') }}"><img class="img-fluid" src="{{ asset('imagens/logo_coloquio.png')}}" alt="Logo colóquio"></a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('congresso') }}"><img class="img-fluid" src="{{ asset('imagens/logo_congresso.png')}}" alt="Logo congresso de iniciação científica"></a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('forum') }}"><img class="img-fluid" src="{{ asset('imagens/logo_forum.png')}}" alt="Logo fórum"></a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <img src="{{asset('imagens/imagem_teste.png')}}" alt="Imagem da capa" class="img-fluid mx-auto d-block">
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}" ></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
