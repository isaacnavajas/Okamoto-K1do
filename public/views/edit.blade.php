

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel - login</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
     

    </head>
<body>
<p>editar la receta</p>


@if(Auth::user()->admin == true) 

<!--Para editar-->

<form action="{{ route('recipe.edit', $recipe->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf

    <label for="titulo"class="form-label">Titulo</label>
    <input type="text" class="form-control" id="titulo" name="titulo" value="{{$recipe->titulo}}" required/>
    </div>
    <div class="mb-3">
    <label for="contenido"class="form-label">Contenido</label>
    <textarea rows="10" class="form-control" id="contenido" name="contenido" value="{{$recipe->contenido}}" required>{{$recipe->contenido}}
    </textarea>

    <div class="mb-3">
    <label for="imageInput"class="form-label">Imagen</label>
    <input type="file" id="imageInput" name="imagen">
    </div>

    <input type="submit" value="cambiar receta" class="col-5 btn btn-primary">


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



@elseif(Auth::user()->admin == false)
<p>no tienes acceso para ver este contnenido</p>
@endif

</form>

</body>

</html>