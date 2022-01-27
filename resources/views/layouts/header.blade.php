<nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid d-flex flex-nowrap">
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
            <i class="fas fa-bars"></i>
        </button>
        <form style="width: 100%;" class="mx-2">
            <input class="form-control" type="text" placeholder="Zoek naar bedrijven...">
        </form>
        <div class="dropdown">
            <a type="button" id="profileDropdownBtn" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="data:image/svg+xml;base64,PHN2ZyB4bWxuczpkYz0iaHR0cDovL3B1cmwub3JnL2RjL2VsZW1lbnRzLzEuMS8iIHhtbG5zOmNjPSJodHRwOi8vY3JlYXRpdmVjb21tb25zLm9yZy9ucyMiIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyIgeG1sbnM6c3ZnPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgMSAxIj48bWV0YWRhdGE+PHJkZjpSREY+PGNjOldvcms+PGRjOmZvcm1hdD5pbWFnZS9zdmcreG1sPC9kYzpmb3JtYXQ+PGRjOnR5cGUgcmRmOnJlc291cmNlPSJodHRwOi8vcHVybC5vcmcvZGMvZGNtaXR5cGUvU3RpbGxJbWFnZSIvPjxkYzp0aXRsZT5Jbml0aWFsczwvZGM6dGl0bGU+PGRjOmNyZWF0b3I+PGNjOkFnZW50PjxkYzp0aXRsZT5GbG9yaWFuIEvDtnJuZXI8L2RjOnRpdGxlPjwvY2M6QWdlbnQ+PC9kYzpjcmVhdG9yPjxkYzpzb3VyY2U+aHR0cHM6Ly9naXRodWIuY29tL2RpY2ViZWFyL2RpY2ViZWFyPC9kYzpzb3VyY2U+PGNjOmxpY2Vuc2UgcmRmOnJlc291cmNlPSJodHRwczovL2NyZWF0aXZlY29tbW9ucy5vcmcvcHVibGljZG9tYWluL3plcm8vMS4wLyIvPjwvY2M6V29yaz48Y2M6TGljZW5zZSByZGY6YWJvdXQ9Imh0dHBzOi8vY3JlYXRpdmVjb21tb25zLm9yZy9wdWJsaWNkb21haW4vemVyby8xLjAvIj48Y2M6cGVybWl0cyByZGY6cmVzb3VyY2U9Imh0dHBzOi8vY3JlYXRpdmVjb21tb25zLm9yZy9ucyNSZXByb2R1Y3Rpb24iLz48Y2M6cGVybWl0cyByZGY6cmVzb3VyY2U9Imh0dHBzOi8vY3JlYXRpdmVjb21tb25zLm9yZy9ucyNEaXN0cmlidXRpb24iLz48Y2M6cGVybWl0cyByZGY6cmVzb3VyY2U9Imh0dHBzOi8vY3JlYXRpdmVjb21tb25zLm9yZy9ucyNEZXJpdmF0aXZlV29ya3MiLz48L2NjOkxpY2Vuc2U+PC9yZGY6UkRGPjwvbWV0YWRhdGE+PG1hc2sgaWQ9ImF2YXRhcnNSYWRpdXNNYXNrIj48cmVjdCB3aWR0aD0iMSIgaGVpZ2h0PSIxIiByeD0iMCIgcnk9IjAiIHg9IjAiIHk9IjAiIGZpbGw9IiNmZmYiLz48L21hc2s+PGcgbWFzaz0idXJsKCNhdmF0YXJzUmFkaXVzTWFzaykiPjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0wLjAxNSAtMC4wMTUpIHNjYWxlKDEuMDMpIj48cmVjdCB3aWR0aD0iMSIgaGVpZ2h0PSIxIiBmaWxsPSIjQzBDQTMzIi8+PHRleHQgeD0iNTAlIiB5PSI1MCUiIHN0eWxlPSIgZm9udC1mYW1pbHk6IEFyaWFsLHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMC4zNHB4IiBmaWxsPSIjRkZGIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBkeT0iMC4xMjEiPlJXPC90ZXh0PjwvZz48L2c+PC9zdmc+"
                    class="rounded-circle" width="40" height="40" />
            </a>
            <ul class="dropdown-menu" style="right: 0; left: unset;" aria-labelledby="profileDropdownBtn">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="offcanvas offcanvas-start" id="demo">
    <div class="offcanvas-header">
        <h1 class="offcanvas-title">Menu</h1>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
            @endguest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('company') }}">Bedrijven</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Contact</a>
            </li>
            <li class="nav-item">
                {{-- <a class="nav-link" href="{{ route('stageplek') }}">Stageplek</a> --}}
            </li>
            <li class="nav-item">
                {{-- <a class="nav-link" href="{{ route('user') }}">User</a> --}}
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('college') }}">College</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('privacy') }}">Privacy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('voorwaarden') }}">Voorwaarden</a>
            </li>
        </ul>
    </div>
</div>
