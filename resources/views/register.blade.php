










<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi historia - Okamoto Kido</title>
    <link href="{{ asset('resources/css/app.css') }}"  rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/responsive.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
   <script src="https://www.google.com/recaptcha/api.js" async defer></script>
 
    <link rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}">
           
    <meta name="description" content="Registraté aquí ara conseguir un usuario y obtener el acceso a la palicación de favoritos del chef okamoto en K1do.">
    <meta name="keywords" content="ramen, Okamoto K1do, cocinero, recetario japones">
    <meta name="author" content="Isaac Navajas">


    </head>
  <body>
    @include('layout.header')

    <div class="container-fluid ">
        <div class="row">
            <div class="col-12" id="cabeceraPaginaLogin">
                <h1 class="tituloPresentacionCabeceras">
                    Registro
                </h1>

            </div>
        </div>
    </div>

        <div class="fondoNegro">
            <div class="container">
                <div class="row">
                    <h2 class="titulo-japon-oscuro bloqueRecetasTexto">Registrar usuario</h2>
                        <div class="col-12 col-lg-6">
                            
                            <br>
                            <br>
                            <p class="bloqueRecetasTexto"> Registrarse en nuestra página web es una excelente manera de mantenerse actualizado sobre nuestras últimas recetas. Además, al registrarse en nuestra página web, también tendrá acceso a una opción para poder elegir tus recetas favoritas y acceder directamente.</p>
                            <br>
                            <p class="bloqueRecetasTexto">Si eres un amante de la cocina japonesa o simplemente estás buscando una experiencia gastronómica auténtica y deliciosa, no busques más allá de nuestra página web. Con toda la información que necesitas para ponerte en contacto con nuestro chef principal y aprender más sobre la cocina japonesa, estamos seguros de que encontrarás todo lo que necesitas aquí.</p>
                            <br>


                        </div>
                        <div class="col-12 col-lg-6">
                            <br>
                            <br>
                                <div class="bloqueRecetasTexto">


                                    <form method="POST" action="{{route('validar-registro')}}">
                                        @csrf
                                        <div class="mb-3"> 
                                        <label for="userInput">Nombre</label>
                                        <input type="text" id="userInput" name="name" class="form-control" required autocomplete="disable">
                                        </div>
                                        <div class="mb-3">
                                        <label for="emailInput">Email</label>
                                        <input type="email" id="emailInput" name="email" class="form-control" required autocomplete="disable">
                                        </div>
                                        <div class="mb-3">
                                        <label for="passwordInput">Contraseña</label>
                                        <input type="password" class="form-control" id="passwordInput" name="password" required>
                                        </div> 
                                         <div class="g-recaptcha" data-sitekey="6Ler-7QlAAAAAFKLkrsWAEcuawvZ93HvEkUIuU7B"></div>
                                        <p>¿Ya tienes una cuenta? <a href="{{route('login')}}" style="color:#f54545;">
                                            Acceder</a></p>
                                        <div class="mb-3">
                                        <button type="submit" class="botonNegro">Registrarse</button>
                                        </div>

                                        <!--mostrar los errores que hemos escrito en el controlador-->
                                        @if (count($errors) > 0)
                                            <div class="alert alert-danger">
                                                <p>Corrige los siguientes errores:</p>
                                                <ul>
                                                    @foreach ($errors->all() as $message)
                                                        <li>{{ $message }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                
                                
                                    </form>

                                </div>
                    </div>
                </div>
            </div>
        </div>  




        <div class="fondoBlanco">
            <div class="container">
                <div class="row">

                    <div class="col-12 col-lg-6">
                        <img src="{{asset('/images/web/historia.png')}}" alt="imagen de historia" class="imagenBloque">
                    </div>

                    <div class="col-12 col-lg-6">
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
                <div class="row filtro-gris" id="parallax-editar">
    
                </div>
            </div>
        </div>




        <div class="fondoNegro">
            <div class="container">
                <div class="row">
                    <div class="col-12 centrarTexto">
                
                        <h2 class="titulo-japon-oscuro">Recetas</h2>
                        <br>
                        <p>Okamoto Kido es uno de los mejores cocineros de ramen. Con las mejores recetas en el arte japones.</p>

                        <a class="nav-link" href="{{ route('recipe') }}">
                            <button type="button" class="botonNegroCentral" >Ir a mis recetas</button>
                        </a>

                    </div>
                </div>
            </div>
        </div>  




        @include('layout.footer')
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>





