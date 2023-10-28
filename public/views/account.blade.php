


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel - login</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
     
        <link href="../css/app.css" rel="stylesheet" type="text/css">

    </head>


<body>


    <p>esto es los favoritosssssss </p>

<div>
<header class="d-flex flex-wrap align-items-center
justify-content-centerjustify-content-md-betweenpy-3 mb-4
border-bottom">
<a class="d-flex align-items-center col-md-3 mb-2 mb-md-e
text-darktext-decoration-none">
Página privada @auth {{Auth::user()->name}} @endauth


</a>
<p>
    es admin? @if(Auth::user()->admin == true) SI  @elseif(Auth::user()->admin == false) NO @endif
</p>
<div class="col-md-3 text-end">
<a href="{{route('logout')}}"><button type="button"
class="btnbtn-outline-primaryme-2">Salir</button></a>
</div>
</header>
</div>
<article class="container">
<h2>Tu sección privada</h2>
</article>







<!--cuando entra como admin-->
@if(Auth::user()->admin == true) 

<p>esto es la parte que solo ve el admin con el formulario</p>


<!--Para crear receta -->
    <form method="POST" action="{{route("crear.receta")}}" enctype="multipart/form-data">

        @csrf
        <div class="mb-3">
        <label for="emailInput"class="form-label">Titulo</label>
        <input type="text" class="form-control" id="emailInout" name="titulo" required>
        </div>
        <div class="mb-3">
        <label for="passwordInput"class="form-label">Contenido</label>
        <textarea rows="10" cols="50" class="form-control" id="contenido" name="contenido" required>
        </textarea>
        <!--<input type="text" class="form-control" id="passwordInput"name="contenido" required>-->
        </div>
        <div class="mb-3">
        <label for="imageInput"class="form-label">Imagen</label>
        <input type="file" id="imageInput" name="imagen" required>
        </div>
        <!--imagen-->

        <button type="submit" class="btn btn-primary" >Acceder</button>

    </form>





    <div class="container">
        @foreach ($recipe as $recipeid)
            {{ $recipeid->id }}
            created the blog in {{ $recipeid->created_at->format('d/m/Y') }}
            {{ $recipeid->titulo }}
            <a href="{{ route('recipe.slug', $recipeid->id) }}">{{ $recipeid->contenido }} </a>
            {{ $recipeid->contenido }}

             <!--Para borrar una receta individualmente-->
            <form action="{{ route('recipe.delete', $recipeid->id) }}" method="POST">
                @method('DELETE')
                @csrf

                <input type="submit" value="Eliminar" class="col-5 btn btn-primary">
            </form>
            <!--Para editar una receta individualmente-->
            <a href="{{ route('ask.recipe.edit', $recipeid->id) }}" class="col-5 btn btn-primary"> Editar </a>

            {{$recipeid}}

        @endforeach
        
        {{$recipe}}
<a href="{{route('recipe')}} "> Recetas</a>


             

    
    
    









<!--cuando entra como usuario-->

@elseif(Auth::user()->admin == false) 


<p>esto es la parte del usuariooooooo</p>

<p>{{ $recipeuser }}</p>
    @foreach ($recipeuser as $recipeid)

        <p>{{ $recipeid }}</p>
        <a href="{{route('recipe.slug', $recipeid->recipe_id)}}">vrfe </a>
        <p>{{ $recipeid->titulo }}</p>
        <p>{{ $recipeid->contenido }}</p>

        <p>{{ $recipeid }}</p>

    

    @endforeach
    {{ $recipeuser }}



@endif


</body>

</html>