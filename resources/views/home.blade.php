

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
    
    <meta name="description" content="Descubre los secretos del ramen con el chef japonés más famoso del mundo. Con más de 20 años de experiencia en la cocina, este chef ha perfeccionado la receta del ramen y ha creado algunos de los platos más deliciosos que jamás hayas probado.">
    <meta name="keywords" content="ramen, Okamoto K1do, cocinero, recetario japones">
    <meta name="author" content="Isaac Navajas">


    </head>
  <body>
    @include('layout.header')

    <div class="container-fluid ">
        <div class="row">
            <div class="col-12" id="cabeceraInicio">
                <h1 class="tituloPresentacion">
                    K<spam style="color:#f54545" class="tituloPresentacion">1</spam>do
                </h1>

                <a class="nav-link" href="{{ route('contacto') }}">
                    <button type="button" class="botonNegroCentral" >Contáctame</button>
                </a>
            </div>
        </div>
    </div>

        <div class="fondoNegro">
            <div class="container">
                <div class="row d-md-flex flex-md-row-reverse">
                    
                    <div class="col-12 col-lg-6 ">
                        <img src="{{asset('/images/web/mi-historia.png')}}" alt="portada de la home de la web de Okamoto Kido" class="imagenBloque">
                    </div>

                    <div class="col-12 col-lg-6">
                        <h2 class="titulo-japon-oscuro bloqueRecetasTexto">Recetas</h2>
                        <br>
                        <p class="bloqueRecetasTexto"> La cocina japonesa es muy variada y rica en sabores y texturas. Algunos de los platos más populares son el ramen, el sushi, el yakitori, el okonomiyaki y el tataki. Mi especialidad es el ramen, es un plato japonés muy popular que se compone de fideos en un caldo de carne o pescado con diferentes ingredientes como huevos, cebolla, setas y algas1. Hay muchas recetas diferentes para hacer ramen, pero una de las más populares es la receta de ramen de cerdo casero. Para hacer esta receta necesitarás panceta de cerdo, huevos marinados y caldo de cerdo. También puedes probar la receta fácil de ramen que se hace con fideos frescos de ramen, setas shiitake y salsa de soja. ¿Te gustaría probar todas estas recetas? Entra en nuestro apartado de recetas para empezar a cocinar como un verdadero itamae. </p>
                            <a class="nav-link" href="{{ route('recipe') }}">
                                <button type="button" class="botonNegro bloqueRecetasTexto" >Ir a recetas</button>
                            </a>

                    </div>

                </div>
            </div>
        </div>  
    

        <div class="fondoBlanco">
            <div class="container">
                <div class="row">
                    
                        <div class="col-12 col-lg-6 ">
                            <img src="{{asset('/images/web/historia.png')}}" alt="imagen de historia" class="imagenBloque">
                        </div>

                        <div class="col-12 col-lg-6 ">
                            <h2 class="bloqueRecetasTexto titulo-japon-blanco ">Mi historia</h2>
                            <br>
                            <p class="bloqueRecetasTexto">A los 18 años, Okamoto decidió estudiar gastronomía en una de las mejores escuelas de cocina de Japón. Después de graduarse, trabajó en varios restaurantes en Japón y se convirtió en uno de los chefs más reconocidos del país. En 1990, abrió su propio restaurante llamado “K1do” en Tokio. El restaurante se convirtió rápidamente en uno de los más populares de la ciudad gracias a la habilidad culinaria de Okamoto y su equipo. Hoy en día, Okamoto Kido mantiene esta web como recetario/consejos de cocina y sigue siendo uno de los chefs más famosos y respetados de Japón.</p>
                                <a class="nav-link" href="{{ route('historia') }}">
                                    <button type="button" class="botonBlanco bloqueRecetasTexto" >Ir a mi historia</button>
                                </a>
                        </div>
                </div>
            </div>
        </div>  

        <div class="container-fluid ">
            <div class="col-12">
                <div class="row filtro-gris">
       
                        <img src="{{asset('/images/web/comida-banner-1.jpg')}}" alt="imagen de muestra de receta de shushi" class="imagenAdaptable col-12 col-lg-4">
               
                        <img src="{{asset('/images/web/comida-banner-2.jpg')}}" alt="imagen de muestra de receta de ramen" class="imagenAdaptable col-12 col-lg-4">
    
                        <img src="{{asset('/images/web/comida-banner-3.jpg')}}" alt="imagen de muestra de receta de croquetas japonesas" class="imagenAdaptable col-12 col-lg-4">
    
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
                                <p>Hemos creado una aplicación de usuarios para que puedas acceder a tus recetas favoritas rapidamente.</p>
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

