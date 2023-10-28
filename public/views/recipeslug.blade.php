


    <html>
        <head></head>
        <body>
    <img src="{{URL::asset('/images/recipes/' . $recipe->imagen) }}" alt="">
    <p>ejempo</p>
    <p>{{$recipe}}</p>
    <p>{{$recipe->id}}</p>
    <p>{{$recipe->id}}</p>
    <p>{{$recipe->titulo}}</p>
    <p>{!!nl2br($recipe->contenido) !!}</p><!--esta forma de despliegue es para que respete los saltos de linea, nl2br es de php-->
    <p>{{$recipe->imagen}}</p>
    <p>{{$recipe->recipe}}</p>
    <br><p>{{$favorite}}</p>


<!--este es el boton de faboritos que solo se va a ver los usuarios, ni los admin ni los ni registrados-->
    @if (auth()->user() && !auth()->user()->admin) 
    <p>eres admin</p>


    @auth
    @if (!$favorite)
            <p>si es favorite</p>
                <!--Para pulsar como favorito-->
                <form action="{{ route('favorite', $recipe->id) }}" method="POST">
                    @method('POST')
                    @csrf

                    <input type="submit" value="pulsar como favorito" class="col-5 btn btn-primary">
                </form>

    @elseif ($favorite)
            <p>no es favorite</p>
                <!--Para pulsar como favorito-->
                <form action="{{ route('delete.favorite', $recipe->id) }}" method="POST">
                    @method('DELETE')
                    @csrf

                    <input type="submit" value="quitar como favorito" class="col-5 btn btn-primary">
                </form>
        
            @endif

    @else
        <p>no va</p>

    @endauth
    @endif




        
        </body>
    </html>