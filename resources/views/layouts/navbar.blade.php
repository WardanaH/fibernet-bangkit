<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand d-block d-md-inline-block" href="{{ route('dashboard') }}">
            <img src="{{ asset('storage/images/logo.png') }}" alt="logo" style="height:75px !important; width:auto !important;" class="img-fluid"/>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">
                        <i class="bi bi-house-door">Home</i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
