<div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route ('welcome')}}">BlogProva</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route ('welcome')}}">HomePage</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link @if(Request::is('articoli*')) active fw-bold @endif" href="{{route ('articoli')}}">Articoli</a>
                    </li>
                    
                </ul>

                <!-- Sezione Con Riconoscimento dell'utente -->
                @auth
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         {{ auth()->user()->email }}
                        </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="{{route ('index')}}">Gestisci Articoli</a></li>
                    <li><a class="dropdown-item" href="{{route ('categories.index')}}">Gestisci Categorie</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="/logout" method="POST" class="mx-3">
                            @csrf
                            <button type="submit" class="btn btn-primary">Esci</button>
                        </form>
                    </li>
                </ul>
                </li>
            </ul>
            @else
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/register">Registrati</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Accedi</a>
                </li>
            </ul>
            @endauth
            </div>
        </div>
    </nav>
</div>
