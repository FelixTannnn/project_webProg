<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container">
    <a class="navbar-brand text-white" href="/">Movie List</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($active === 'home')? 'active' : '' }} text-white" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === 'movies')? 'active' : '' }} text-white" href="/movies">Movies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === 'actors')? 'active' : '' }} text-white" href="/actors">Actors</a>
        </li>
        
      </ul>

      <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item dropdown light">
          <a class="nav-link dropdown-toggle light " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome Back, {{ auth()->user()->username }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">My Dashboard</a></li>
            
            <li>
              
              <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="dropdown-item">Logout</button>
              </form>

              
            </li>
          </ul>
        </li>
        @else
        <li class="nav-item">
            <a href="/register" class="nav-link btn btn-success text-white">Register</a>
        </li>
        <li class="nav-item">
          <a href="/login" class="nav-link btn btn-primary ms-3 text-white">Login</a>
      </li>

      @endauth
    </ul>

   

    </div>
  </div>
</nav>