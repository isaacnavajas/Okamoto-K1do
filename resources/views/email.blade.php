


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Email- Okamoto Kido</title>
    <link href="{{ asset('resources/css/app.css') }}"  rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}">

    <meta name="description" content="Aquí tenemos el template de email para poder enviar el contacto de el formulario de Okamoto.">
    <meta name="keywords" content="ramen, Okamoto K1do, cocinero, template email">
    <meta name="author" content="Isaac Navajas">
    

    </head>
  <body>


    <div class="container-fluid fondoBlanco">
        <div class="row container">
            <div class="col-12" >
                <h1 >
                    {{$contenido["Nombre"]}}
                </h1>

            </div>
        </div>



        <div class="fondoBlanco">
      
            <div class="row col-12">

                <div class="row col-12">

                    <p >{{$contenido["Consulta"]}}</p>    
                               
                </div>
            </div>
    
            </div>
        </div>  

    </div> 



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>


















