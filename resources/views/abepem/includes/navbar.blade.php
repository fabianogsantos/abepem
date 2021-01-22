    <nav class="navbar navbar-expand-sm navbar-custom">
    <a class="navbar-brand" href="#">ABEPEM</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('abepem')}}">Quem somos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('abepem.estatuto')}}">Estatuto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('abepem.diretoria')}}">Diretoria</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('abepem.conselho')}}">Conselho</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('abepem.associe-se')}}">Associe-se</a>
            </li>
        </ul>
        @include('includes.form_pesquisa')
    </div>
</nav>
<br>
