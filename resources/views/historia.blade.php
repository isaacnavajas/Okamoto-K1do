

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
    
    <link rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}">

    
    <meta name="description" content="¿Quieres aprender a cocinar el ramen perfecto? ¡El chef japonés más famoso del mundo está aquí para ayudarte! Con más de 20 años de experiencia en la cocina, este chef ha perfeccionado la receta del ramen y ha creado algunos de los platos más deliciosos que jamás hayas probado. ">
    <meta name="keywords" content="ramen, Okamoto K1do, cocinero, historia">
    <meta name="author" content="Isaac Navajas">


    </head>
  <body>
    @include('layout.header')

    <div class="container-fluid ">
        <div class="row">
            <div class="col-12" id="cabeceraPaginaHistoria">
                <h1 class="tituloPresentacionCabeceras">
                    Mi historia
                </h1>

            </div>
        </div>
    </div>

        <div class="fondoNegro">
            <div class="container">
                <div class="row d-md-flex flex-md-row-reverse">

                    <div class="col-12 col-lg-6 ">
                        <img src="{{asset('/images/web/imagen-historia.png')}}" alt="imagen de historia de Okamoto Kido" class="imagenBloque">
                    </div>

                    <div class="col-12 col-lg-6 ">
                        <h2 class="titulo-japon-oscuro bloqueRecetasTexto">Experiencia</h2>
                        <br>
                        <p class="bloqueRecetasTexto"> Okamoto Kido es uno de los mejores cocineros de ramen en Japón. Con más de 30 años de experiencia en la preparación de ramen, Okamoto Kido ha perfeccionado su técnica para crear el ramen más sabroso y auténtico posible . Su pasión por la cocina japonesa y su dedicación por la recuperación del sabor ancestral del ramen lo han llevado a viajar por todo Japón en busca de los mejores ingredientes y técnicas para crear el ramen perfecto . Okamoto Kido es conocido por su habilidad para crear caldos sabrosos y equilibrados que son la base del ramen auténtico . Su técnica única de preparación de fideos y su atención al detalle en cada paso del proceso de preparación hacen que su ramen sea uno de los más populares en Japón . </p>
                        
                    </div>

                </div>
            </div>
        </div>  



        <div class="fondoBlanco">
            <div class="container">
                <div class="row">

                    <h2 class="titulo-japon-blanco bloqueRecetasTexto col-12">Compromiso</h2>
                    

                    <div class="col-12 col-lg-6 ">
                        <br>
                        <p class="bloqueRecetasTexto">
                            La destreza y dedicación de los antiguos samuráis se puede ver reflejada en la comida que prepara Okamoto Kido. Al igual que los samuráis, Okamoto Kido ha dedicado su vida a perfeccionar su técnica y habilidades para crear el ramen más auténtico y sabroso posible. Su pasión por la cocina japonesa y su dedicación a la recuperación del sabor ancestral del ramen son una muestra de su compromiso con la excelencia. Al igual que los samuráis, Okamoto Kido es un maestro en su arte y ha perfeccionado su técnica a lo largo de muchos años de práctica y dedicación. Su habilidad para crear caldos sabrosos y equilibrados es una muestra de su destreza culinaria y su atención al detalle en cada paso del proceso de preparación es una muestra de su dedicación a la perfección.
                        <p>

                        <p class="bloqueRecetasTexto">
                            El ramen es un plato muy versátil que se puede preparar de muchas maneras diferentes y con una amplia variedad de ingredientes. Para crear un buen ramen, se necesita un cocinero experimentado que tenga un profundo conocimiento de los ingredientes y técnicas necesarios para crear un caldo sabroso y equilibrado. El sabor ancestral del ramen se puede recuperar utilizando técnicas tradicionales y auténticos ingredientes japoneses. Un cocinero japonés especializado en ramen debe tener una gran experiencia y habilidad para crear el mejor ramen posible.
                        <p>
                            
                    </div>

                    
                    <div class="col-12 col-lg-6 ">
                   
                        <br>
                        <p class="bloqueRecetasTexto"> 
                            Okamoto Kido es conocido por su habilidad para crear caldos sabrosos y equilibrados que son la base del ramen auténtico. Su técnica única de preparación de fideos y su atención al detalle en cada paso del proceso de preparación hacen que su ramen sea uno de los más populares en Japón. La técnica única de Okamoto Kido para preparar fideos implica el uso de harina especial y agua de manantial para crear una textura única y un sabor auténtico. Además, Okamoto Kido utiliza solo ingredientes frescos y auténticos para crear el caldo sabroso que es la base del ramen auténtico.
                        </p>

                        <p class="bloqueRecetasTexto">
                            La dedicación de Okamoto Kido a la perfección se puede ver en cada tazón de ramen que sirve. Cada tazón está cuidadosamente preparado con los mejores ingredientes disponibles y con la atención al detalle que solo un maestro puede proporcionar. La pasión de Okamoto Kido por la cocina japonesa se refleja en cada tazón de ramen que sirve, y su compromiso con la excelencia es evidente en cada bocado.
                        <p>
                            
                        <p class="bloqueRecetasTexto">   
                            En resumen, Okamoto Kido es uno de los mejores cocineros de ramen en Japón debido a su destreza culinaria, atención al detalle y dedicación a la perfección. Su técnica única para preparar fideos y crear caldos sabrosos lo convierten en uno de los más populares en Japón y ahora puedes conocer sus secretos.
                        </p>

                    </div>
                    <a class="nav-link" href="{{ route('recipe') }}">
                        <button type="button" class="botonBlancoCentral" >Ir a mis recetas</button>
                    </a>

                </div>
            </div>
        </div>  





        <div class="container-fluid ">
            <div class="col-12">
                <div class="row filtro-gris parallax">
    
                </div>
            </div>
        </div>




        <div class="fondoNegro">
            <div class="container">
                <div class="row">
                    <div class="col-12 centrarTexto">
                
                        <h2 class="titulo-japon-oscuro">Chef Okamoto</h2>
                        <br>
                        <p>Si estás buscando una experiencia gastronómica auténtica y deliciosa, no busques más allá.</p>
                        <p>Nuestro menú de ramen auténtico y otros platos japoneses tradicionales están seguros de satisfacer tus papilas gustativas . ¡Esperamos verte pronto!</p>

                    </div>
                </div>
            </div>
        </div>  


        @include('layout.footer')
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
