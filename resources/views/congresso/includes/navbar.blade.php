    <nav class="navbar navbar-expand-sm navbar-custom">
    <a class="navbar-brand" href="#">Congresso</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('congresso')}}">O Evento</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Edições
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">1ª Edição</a>
                    <a class="dropdown-item" href="#">2ª Edição</a>
                    <a class="dropdown-item" href="#">3ª Edição</a>
                    <a class="dropdown-item" href="#">4ª Edição</a>
                    <a class="dropdown-item" href="#">5ª Edição</a>
                    <a class="dropdown-item" href="#">6ª Edição</a>
                    <a class="dropdown-item" href="#">7ª Edição</a>
                    <a class="dropdown-item" href="#">8ª Edição</a>
                    <a class="dropdown-item" href="#">9ª Edição</a>
                    <a class="dropdown-item" href="#">10ª Edição</a>
                    <a class="dropdown-item" href="#">11ª Edição</a>
                    <a class="dropdown-item" href="#">12ª Edição</a>
                    <a class="dropdown-item" href="#">13ª Edição</a>
                    <a class="dropdown-item" href="#">14ª Edição</a>
                    <a class="dropdown-item" href="#">15ª Edição</a>
                    <a class="dropdown-item" href="#">16ª Edição</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('congresso.diretoria')}}">Diretoria</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('congresso.comitecientifico')}}">Comitê científico</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('congresso.grupos')}}">Grupos temáticos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('congresso.anais')}}">Anais</a>
            </li>
        </ul>
        @include('includes.form_pesquisa')
    </div>
</nav>
<br>
