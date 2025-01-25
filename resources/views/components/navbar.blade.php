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
                    <li class="nav-item">
                    <a class="nav-link @if(Request::is('chisiamo')) active fw-bold @endif" href="{{route ('chisiamo')}}">Chi Siamo</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link @if(Request::is('contatti')) active fw-bold @endif" href="{{route ('contatti')}}">Contatti</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>