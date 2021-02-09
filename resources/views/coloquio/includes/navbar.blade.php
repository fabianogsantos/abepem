    <nav class="navbar navbar-expand-sm navbar-custom">
    <a class="navbar-brand" href="#">Colóquio de Moda</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('coloquio')}}">O Evento</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Edições
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('coloquio.2005')}}">1ª Edição</a>
                    <a class="dropdown-item" href="{{route('coloquio.2006')}}">2ª Edição</a>
                    <a class="dropdown-item" href="{{route('coloquio.2007')}}">3ª Edição</a>
                    <a class="dropdown-item" href="{{route('coloquio.2008')}}">4ª Edição</a>
                    <a class="dropdown-item" href="{{route('coloquio.2009')}}">5ª Edição</a>
                    <a class="dropdown-item" href="{{route('coloquio.2010')}}">6ª Edição</a>
                    <a class="dropdown-item" href="{{route('coloquio.2011')}}">7ª Edição</a>
                    <a class="dropdown-item" href="{{route('coloquio.2012')}}">8ª Edição</a>
                    <a class="dropdown-item" href="{{route('coloquio.2013')}}">9ª Edição</a>
                    <a class="dropdown-item" href="{{route('coloquio.2014')}}">10ª Edição</a>
                    <a class="dropdown-item" href="{{route('coloquio.2015')}}">11ª Edição</a>
                    <a class="dropdown-item" href="{{route('coloquio.2016')}}">12ª Edição</a>
                    <a class="dropdown-item" href="{{route('coloquio.2017')}}">13ª Edição</a>
                    <a class="dropdown-item" href="{{route('coloquio.2018')}}">14ª Edição</a>
                    {{--<a class="dropdown-item" href="{{route('coloquio.2019')}}">15ª Edição</a>
                    <a class="dropdown-item" href="{{route('coloquio.2020')}}">16ª Edição</a> --}}
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('coloquio.diretoria')}}">Diretoria</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('coloquio.comitecientifico')}}">Comitê científico</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('coloquio.grupos')}}">Grupos temáticos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('coloquio.anais')}}">Anais</a>
            </li>
        </ul>
        @include('includes.form_pesquisa')
    </div>
</nav>
<br>
