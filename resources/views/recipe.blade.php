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
          
    <meta name="description" content="¿Quieres probar el auténtico sabor del ramen? ¡El chef japonés más famoso del mundo está aquí para ayudarte! Con más de 20 años de experiencia en la cocina, este chef ha perfeccionado la receta del ramen y ha creado algunos de los platos más deliciosos que jamás hayas probado. En esta página, encontrarás sus mejores recetas de ramen y consejos para cocinar el plato perfecto.">
    <meta name="keywords" content="ramen, Okamoto K1do, cocinero, recetario japones">
    <meta name="author" content="Isaac Navajas">


    </head>
  <body>
    @include('layout.header')

    <div class="container-fluid ">
        <div class="row">
            <div class="col-12" id="cabeceraPaginaRecetas">
                <h1 class="tituloPresentacionCabeceras">
                    Recetas
                </h1>

            </div>
        </div>
    </div>

        <div class="fondoNegro">
            <div class="container">
                <div class="row d-md-flex flex-md-row-reverse">
                    
                    <div class="col-12 col-lg-6 ">
                        <img src="{{asset('/images/web/recetas-info.png')}}" alt="imagen de cocina" class="imagenBloque">
                    </div>

                    <div class="col-12 col-lg-6">
                        <h2 class="titulo-japon-oscuro">Cocina</h2>
                        <br>
                        <p> Aquí te dejo algunos consejos para mantener tu cocina: </p>
                        <ol start="1">
                            <li>Utiliza ingredientes frescos y de alta calidad. La comida japonesa se basa en la calidad de los ingredientes y su sabor natural.</li>
                            <li>Mantén tu cocina limpia y organizada. La higiene es muy importante en la cocina japonesa.</li>
                            <li>Utiliza cuchillos afilados para cortar los ingredientes. Los cuchillos japoneses son muy afilados y permiten cortar los ingredientes con precisión.</li>
                            <li>Cocina los alimentos al vapor o a la parrilla para mantener su sabor natural.</li>
                            <li>Utiliza salsas y condimentos japoneses para dar sabor a tus platos.</li>
                            <li>Aprende a preparar arroz japonés correctamente. El arroz es un ingrediente básico en la cocina japonesa y es importante saber cómo prepararlo correctamente.</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>  




        <div class="fondoBlanco">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                    <div class="container">
                    
                        @foreach ($report as $recipe)
                            <div class="row bloqueRecetas">
                                <div class="col-12 col-lg-6 ">
                                    <img src="{{URL::asset('/images/recipes/' . $recipe->imagen) }}" alt="imagen de {{ $recipe->titulo }}" class="imagenRecetas">
                                </div>
                                
                                <div class="col-12 col-lg-6 ">
                                    <div class=bloqueRecetasTexto>
                                        <h3 class="titulo-japon-reducido-recetas">{{ $recipe->titulo }}</h3>
                                        <p>{!! Str::limit($recipe->contenido,570, ' ...') !!}</p> <!--para reducir el texto a 500 caracteres-->
                                        <p>Receta creada el: {{ $recipe->created_at->format('d/m/Y') }}</p>
                                        <a class="nav-link" href="{{ route('recipe.slug', $recipe->id) }}">
                                            <button type="button" class="botonBlanco">Leer más</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <br>
                        @endforeach



                        @if($report->count() < "1")
                            <div class="centrarTexto col-12">
                                <p>No existe ninguna receta.</p>
                            </div>
                        @elseif($recipe->count() > "6" && $report->hasMorePages() == false) 
                            <div class="centrarTexto col-12">
                                <a href="{{ $report->previousPageUrl()}}" class="botonNavegador" style="margin-right: 15px">Anterior</a>
                            </div>   
                        @elseif(isset($report) && $report->hasMorePages() == true) 
                            <div class="centrarTexto col-12">
                                <a href="{{ $report->previousPageUrl()}}" class="botonNavegador" style="margin-right: 15px">Anterior</a>
                                <a href="{{ $report->nextPageUrl()}}" class="botonNavegador"style="margin-left: 15px" >Siguiente</a>
                            </div>
                        @endif
        
                       
                    </div>
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
