
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio - Okamoto Kido</title>
    <link href="{{ asset('resources/css/app.css') }}"  rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/responsive.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}">
       
        
    <meta name="description" content="Descubre el auténtico sabor del ramen con el chef japones más famoso del mundo. Con más de 30 años de experiencia en la cocina, este chef ha perfeccionado la receta del ramen y ha creado algunos de los platos más deliciosos que jamás hayas probado. En esta página, encontrarás sus mejores recetas de ramen y consejos para cocinar el plato perfecto. Aprende a cocinar como un verdadero chef japones y sorprende a tus amigos y familiares con tus habilidades culinarias!">
    <meta name="keywords" content="ramen, Okamoto K1do, cocinero, recetario japones">
    <meta name="author" content="Isaac Navajas">


    </head>
  <body>
    @include('layout.header')

    <div class="container-fluid ">
        <div class="row">
            <div class="col-12" id="cabeceraPaginaReceta" style="
            background-image:linear-gradient(
                to bottom,
                rgba(66, 61, 61, 0.652),
                rgba(66, 61, 61, 0.652)
              ),url({{URL::asset('/images/recipes/' . $recipe->imagen) }}) !important;"
              >
                <h1 class="tituloPresentacionCabeceras" >
                    
                    {{$recipe->titulo}}
                
                </h1>

                @if (auth()->user() && !auth()->user()->admin) 
                    @auth
                        @if (!$favorite)
                                    <!--Para pulsar como favorito-->
                                    <form action="{{ route('favorite', $recipe->id) }}" method="POST">
                                        @method('POST')
                                        @csrf

                                        <input type="submit" value="pulsar como favorito" class="botonNegroCentral">
                                    </form>

                        @elseif ($favorite)
                                    <!--Para pulsar como favorito-->
                                    <form action="{{ route('delete.favorite', $recipe->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf

                                        <input type="submit" value="quitar como favorito" class="botonNegroCentral">
                                    </form>
                            
                                @endif

                        @else
                            <p>no va</p>

                        @endauth
                @endif


            </div>
        </div>
    </div>



        <div class="fondoBlancoRecetas">
            <div class="container">
                <div class="row">

                    <div class="container col-12">

                        <p class="bloqueRecetaSlugTexto">{!!nl2br($recipe->contenido) !!}</p>

                    </div>

                </div>
            </div>
        </div>  
    




        <div class="fondoNegro">
            <div class="container">
                <div class="row">
                    <div class="col-12 centrarTexto">

                        @if (Route::has('login'))
                            @auth
                                <h2 class="titulo-japon-oscuro">Favoritos</h2>
                                <br>
                                <p>Accede a la aplicacion de "Mi cuenta" para acceder a tus recetas favoritas.</p>
                                <a class="nav-link" href="{{ route('mi-cuenta') }}">
                                    <button type="button" class="botonNegroCentral" >Ir a Favoritos</button>
                                </a>
                            @else

                                <h2 class="titulo-japon-oscuro">Favoritos</h2>
                                <br>
                                <p>Hemos creado una aplicaci贸n de usuarios para que puedas acceder a tus recetas favoritas rapidamente.</p>
                                <p>Crea un nuevo usuario y disfruta de tus recetas favoritas.</p>
                                <a class="nav-link" href="{{ route('login') }}">
                                    <button type="button" class="botonNegroCentral" >Ir a registro</button>
                                </a>

                            @endauth
                        </div>
                    @endif
        

                    </div>
                </div>
            </div>
        </div>  





        @include('layout.footer')



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>




















