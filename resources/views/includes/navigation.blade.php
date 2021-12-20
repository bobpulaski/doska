<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Ваш Парк</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('tdpk') ? 'active' : '' }}" aria-current="page" href="{{ route('tdpk') }}">Террасная доска</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('fasaddpk') ? 'active' : '' }}" aria-current="page" href="{{ route('fasaddpk') }}">Фасадная облицовка</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('periladpk') ? 'active' : '' }}" aria-current="page" href="{{ route('periladpk') }}">Перила</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Ограждения</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Садовый паркет</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Термодерево</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
