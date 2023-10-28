<nav class="navbar navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand titulo-japon" href="#">Offcanvas navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">K1do</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

            <center>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('recipe') }}">Historia de Okamoto</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('recipe') }}">Recetas</a>
            </li>

            






            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('mi-cuenta') }}">
                                <button type="button" class="btn btn-primary col-12">Mi cuenta</button>
                            </a>
                        </li>
                    @else
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">
                                <button type="button" class="btn btn-primary col-12">Acceder</button>
                            </a>
                        </li>

                    @endauth
                </div>
            @endif


        </center>
              <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>

        </div>
      </div>
    </div>
  </nav>