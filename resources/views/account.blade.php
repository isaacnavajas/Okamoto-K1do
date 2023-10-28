

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
    <link rel="stylesheet" href="{{asset('/css/app.css')}}" />
    <meta name="description" content="En esta página, encontrarás una aplicación para poder mantener tu cuenta dentro de Okamotok1do.com.">
    <meta name="keywords" content="ramen, Okamoto K1do, favoritos, usuarios">
    <meta name="author" content="Isaac Navajas">




    </head>
  <body>
    @include('layout.header')

    <div class="container-fluid ">
        <div class="row">
            <div class="col-12" id="cabeceraPaginaLogin">
                <h1 class="tituloPresentacionCabeceras">
                    @auth {{Auth::user()->name}} @endauth
                </h1>

                <a href="{{route('logout')}}">
                    <button type="button" class="botonNegroCentral">Salir de la cuenta</button>
                </a>

            </div>
        </div>
    </div>






        <!--cuando entra como admin-->
        @if(Auth::user()->admin == true) 


        <div class="fondoNegro">
            <div class="container">
                <div class="row">
                    <h2 class="titulo-japon-oscuro bloqueRecetasTexto">Crear una receta</h2>
                        <div class="col-12 col-lg-6">
                            <br>
                            <br>
                            <p class="bloqueRecetasTexto"> Para crear una receta debes seguir los siguientes pasos </p>
                            <br>
                            <ol class="bloqueRecetasTexto">
                                <li>Rellena la entrada "Titulo" de forma unica, es decir que el titulo de la nueva receta no se repita con ninguna de las anteriores. </li>
                                <li>Agrega la entrada "Contenido" sobre como realizar la receta. 
                                <br>
                                    La entrada "Contenido" respeta los saltos de linea.
                                </li>
                                <li>Al subir el archivo de "Imagen" recuerda que solo puede ser un archivo tipo imagen que tenga la extensión de archivo jpg, bmp, png o jpeg y con un tamaño de imagen máximo de 2MB.</li>
                                <li>Finalmente pulsa el botón Enviar para crear la nueva receta, si hay algun error, el formulario te avisará de como solucionarlo.</li>
                            </ol>
                        </div>

                             <!--Para crear receta -->
                                <div class="col-12 col-lg-6 ">
                                    <br>
                                    <div class="bloqueRecetasTexto">
                                        <br>
                                        <form method="POST" action="{{route("crear.receta")}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                            <label for="titulo"class="form-label">Titulo:</label>
                                            <input type="text" class="form-control" id="titulo" name="titulo" required>
                                            </div>
                                            <div class="mb-3">
                                            <label for="contenido"class="form-label">Contenido:</label>
                                            <textarea rows="10" cols="50" class="form-control" id="contenido" name="contenido" required></textarea>
                                            <!--<input type="text" class="form-control" id="passwordInput"name="contenido" required>-->
                                            </div>
                                            <div class="mb-3">
                                            <label for="imageInput" class="form-label">Imagen:</label>
                                            <br>
                                            <input type="file" id="imageInput" name="imagen" required>
                                            </div>
                                            <!--imagen-->
                                            <button type="submit" class="botonNegro">Enviar</button>
                                        </form>
                                        <br>
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
                                    </div>    
                                </div>
                    </div>
                </div>
        </div>  







        <!--Para editar o eliminar -->

        <div class="fondoBlanco">
            <div class="container">
                <div class="row">

                    <div class="container">

                        @foreach ($recipe as $recipeid)
                            <div class="row bloqueRecetas">
                                <div class="col-12 col-lg-6">
                                    <img src="{{URL::asset('/images/recipes/' . $recipeid->imagen) }}" alt="imagen para editar de {{ $recipeid->titulo }}" class="imagenRecetas">
                                </div>
                                
                                <div class="col-12 col-lg-6">
                                    <div class=bloqueRecetasTexto>
                                        <h3 class="titulo-japon-reducido-recetas">{{ $recipeid->titulo }}</h3>
                                        <p>{!! Str::limit($recipeid->contenido, 400, ' ...') !!}</p> <!--para reducir el texto a 500 caracteres-->
                                        <p>Receta creada el: {{ $recipeid->created_at->format('d/m/Y') }}</p>

                                        <a class="nav-link" href="{{route('recipe.slug', $recipeid->id)}}">
                                            <button type="button" class="botonBlanco" style="margin-top:0 !important">Leer más</button>
                                        </a>
                                        
                                        <a class="nav-link" href="{{ route('ask.recipe.edit', $recipeid->id) }}">
                                            <button type="button" class="botonBlanco" style="margin-top:0 !important">Editar</button>
                                        </a>

                                        <form action="{{ route('recipe.delete', $recipeid->id) }}" method="POST" style="margin-top:0 !important">
                                            @method('DELETE')
                                            @csrf
                    
                                            <input type="submit" value="Eliminar" class="botonNavegador" style="margin:0 !important">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <br>
                        @endforeach

                        @if($recipe->count() < "1")
                            <div class="centrarTexto col-12">
                                <p>No existe ninguna receta.</p>
                            </div>
                        @elseif($recipeid->count() > "6" && $recipe->hasMorePages() == false) 
                            <div class="centrarTexto col-12">
                                <a href="{{ $recipe->previousPageUrl()}}" class="botonNavegador" style="margin-right: 15px">Anterior</a>
                            </div>   
                        @elseif(isset($recipe) && $recipe->hasMorePages() == true) 
                            <div class="centrarTexto col-12">
                                <a href="{{ $recipe->previousPageUrl()}}" class="botonNavegador" style="margin-right: 15px">Anterior</a>
                                <a href="{{ $recipe->nextPageUrl()}}" class="botonNavegador"style="margin-left: 15px" >Siguiente</a>
                            </div>
                        @endif
        


                    </div>

                </div>
            </div>
        </div>  


                    

            


        <!--cuando entra como usuario-->

        @elseif(Auth::user()->admin == false) 


        <div class="fondoNegro">
            <div class="container">
                <div class="row d-lg-flex flex-lg-row-reverse">
                    
                    <div class="col-12 col-lg-6">
                        <img src="{{asset('/images/web/recetas-info.png')}}" alt="imagen de recetas en favoritos" class="imagenBloque">
                    </div>

                    <div class="col-12 col-lg-6">
                        <h2 class="titulo-japon-oscuro">Favoritos</h2>
                        <br>
                        <p> Hemos creado un sistema de favoritos para que puedas acceder rápidamente a nuestras recetas: </p>
                        <ol start="1">
                            <li>Lo primero que has de hacer es acceder "Mis recetas".</li>
                            <li>Entrar a la receta que quieras guardar en tu usuario como favorito desde "Leer más".</li>
                            <li>Clicar el botón de "pulsar como favorito" que solo es accesible una vez creada una cuenta de usuario.</li>
                            <li>Una vez pulsado como favorito, entra al apartado de "Mi cuenta".</li>
                            <li>Disfruta de tus favoritos.</li>
                            <li>Si en cualquier momento quieres quitar algún favorito vuelve a entrar a esa entrada y pulsa en "Quitar como favorito". </li>
                        </ol>


                    </div>
                </div>
            </div>
        </div>  






        <div class="fondoBlanco">
            <div class="container">
                <div class="row">

                    <div class="container">



                        @foreach ($recipeuser as $recipeid)
             
                            <div class="row bloqueRecetas">
                                <div class="col-12 col-lg-6">
                                    <img src="{{URL::asset('/images/recipes/' . $recipeid->imagen) }}" alt="imagen de receta favorita de {{$recipeid->titulo}}" class="imagenRecetas">
                                </div>
                                
                                <div class="col-12 col-lg-6">
                                    <div class=bloqueRecetasTexto>
                                        <h3 class="titulo-japon-reducido-recetas">{{ $recipeid->titulo }}</h3>
                                        <p>{!! Str::limit($recipeid->contenido, 500, ' ...') !!}</p> <!--para reducir el texto a 500 caracteres-->
                                        <p>Receta creada el: {{ $recipeid->created_at->format('d/m/Y') }}</p>
                                        <a class="nav-link" href="{{route('recipe.slug', $recipeid->recipe_id)}}">
                                            <button type="button" class="botonBlanco">Leer más</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                        <br>
                        @endforeach


                        @if($recipeuser->count() < "1")
                            <div class="centrarTexto col-12">
                                <p>No existe ninguna receta.</p>
                            </div>
                        @elseif($recipecount->count() > "6" && $recipeuser->hasMorePages() == false) 
                            <div class="centrarTexto col-12">
                                <a href="{{ $recipe->previousPageUrl()}}" class="botonNavegador" style="margin-right: 15px">Anterior</a>
                            </div>   
                        @elseif(isset($recipeuser) && $recipeuser->hasMorePages() == true) 
                            <div class="centrarTexto col-12">
                                <a href="{{ $recipe->previousPageUrl()}}" class="botonNavegador" style="margin-right: 15px">Anterior</a>
                                <a href="{{ $recipe->nextPageUrl()}}" class="botonNavegador"style="margin-left: 15px" >Siguiente</a>
                            </div>
                        @endif
        
                 

                    </div>

                </div>
            </div>
        </div>  



        

        @endif












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


































