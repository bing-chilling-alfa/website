<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
    <div class="container-fluid">
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
            <i class="fas fa-bars"></i>
        </button>
        <a class="navbar-brand" href="{{ route('home') }}">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="mynavbar">
            <form class="d-flex" style="width:50%;">
                <i class="fas fa-search" style="position:absolute; left:30%; top:20px;"></i>
                <input class="form-control" type="text" placeholder="Zoeken naar een stagebedrijf." style="text-indent: 5%;">
            </form>
        </div>
        <div class="dropdown">
        <a class="navbar-brand justify-content-end rounded-pill" href="#" style="background-color:red;" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
         <img src="" style="width:40px;"> 
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
        <li><b>Naam</b></li>
        <li><b>Rol</b></li>
        <hr/>
        <li><a class="dropdown-item" href="#">Dashboard</a></li>
        <li><a class="dropdown-item" href="#">Uitloggen</a></li>
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
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('privacy') }}">Privacy</a>
            </li>
        </ul>
    </div>
</div>
