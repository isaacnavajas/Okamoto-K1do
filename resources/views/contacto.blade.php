

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

    <meta name="description" content="Descubre los secretos del ramen con el chef japonés más famoso del mundo. Con más de 20 años de experiencia en la cocina, este chef ha perfeccionado la receta del ramen y ha creado algunos de los platos más deliciosos que jamás hayas probado.">
    <meta name="keywords" content="ramen, Okamoto K1do, cocinero, recetario japones">
    <meta name="author" content="Isaac Navajas">




    </head>
  <body>
    @include('layout.header')

    <div class="container-fluid ">
        <div class="row">
            <div class="col-12" id="cabeceraPaginaContacto">
                <h1 class="tituloPresentacionCabeceras">
                    Contacto
                </h1>

            </div>
        </div>
    </div>

        <div class="fondoNegro">
            <div class="container">
                <div class="row">
                    <h2 class="titulo-japon-oscuro bloqueRecetasTexto">Datos</h2>
                        <div class="col-12 col-lg-6">
                            
                            <br>
                            <p class="bloqueRecetasTexto"> Si tienes alguna pregunta sobre nuestra comida o nuestros servicios, no dudes en ponerte en contacto con nosotros. Puedes enviarnos un correo electrónico o llamarnos directamente para hablar con uno de nuestros representantes de servicio al cliente. Estamos aquí para ayudarte y responder a cualquier pregunta que puedas tener.</p>
                            <br>
                            <p class="bloqueRecetasTexto"> Además, si estás interesado en aprender más sobre la cocina japonesa o el ramen auténtico, Okamoto Kido ofrece clases de cocina y talleres para aquellos que quieran aprender más sobre la preparación de platos japoneses tradicionales. Si estás interesado en asistir a una de estas clases o talleres, por favor ponte en contacto con nosotros para obtener más información.</p>
                            <br>
                            <ul class="bloqueRecetasTexto">
                                <li>4-9-8, Roppongi, Minato 106-0032 Prefectura de Tokio.</li>
                                <li>Akasaka, Roppongi A 0,1 km de Roppongi District.</li>
                                <li><a href="tel:050-3503-3119" style="color:#f8f9fa">050-3503-3119</a></li>
                                <li><a href="mailto:info@okamotokido.com" style="color:#f8f9fa">info@okamotokido.com</a></li>
                            </ul>

                        </div>
                        <div class="col-12 col-lg-6">
                            <br>
                                <div class="bloqueRecetasTexto">
                                    <form method="POST" action="{{route("formulario-contacto")}}">

                                        @csrf
                                        <div class="mb-3">
                                        <label for="nombreInput"class="form-label">Nombre:</label>
                                        <input type="text" class="form-control" id="nombreInput" name="Nombre" required>
                                        </div>
                                        <div class="mb-3">
                                        <label for="contsulta"class="form-label">Consulta:</label>
                                        <textarea rows="10"  class="form-control" id="consulta" name="Consulta" required></textarea>
                                        
                                        </div>
                                        <!--imagen-->
                                        <div class="g-recaptcha" data-sitekey="6Ler-7QlAAAAAFKLkrsWAEcuawvZ93HvEkUIuU7B"></div>
                                        <button type="submit" class="botonNegro" >Enviar</button>
                                
                                    </form>

                                    @if(session('info'))
                                        <p>{{session('info')}}</p>
                                    @endif

                                </div>
                        </div>
                </div>
            </div>
        </div>  



        <div class="fondoBlanco">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d6483.089608394852!2d139.7321399!3d35.6635851!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x60188b82a9127f3d%3A0xa387ac54965052f1!2sGYOPAO%20Gyoza%20Roppongi%204%20Chome-9-8%20Roppongi%20Minato%20City%2C%20Tokyo%20106-0032%20Jap%C3%B3n!3m2!1d35.6635851!2d139.7321399!5e0!3m2!1ses!2ses!4v1681842307156!5m2!1ses!2ses" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>  





        <div class="container-fluid ">
            <div class="col-12">
                <div class="row filtro-gris parallax-contacto">
    
                </div>
            </div>
        </div>





        <div class="fondoNegro">
            <div class="container">
                <div class="row">
                    <div class="col-12 centrarTexto">
                
                        <h2 class="titulo-japon-oscuro">Historia</h2>
                        <br>
                        <p>Okamoto Kido es uno de los mejores cocineros de ramen en Japón. Con más de 30 años de experiencia en la preparación de ramen.</p>

                        <a class="nav-link" href="{{ route('historia') }}">
                            <button type="button" class="botonNegroCentral" >Ir a mi historia</button>
                        </a>

                    </div>
                </div>
            </div>
        </div>  

        

        @include('layout.footer')
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
