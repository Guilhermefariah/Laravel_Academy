<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link {{ $current == 'home' ? 'active' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $current == 'alunos' ? 'active' : '' }}" href="/alunos">Alunos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $current == 'cursos' ? 'active' : '' }}" href="/cursos">Cursos</a>
            </li>
        </ul>
    </div>
</nav>
