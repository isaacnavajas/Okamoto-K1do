


    <html>

        <head>
            
        </head>

        <body>
            
    <div class="blog col-7">


        <div class="container">
            @foreach ($report as $recipe)
                <img src="{{URL::asset('/images/recipes/' . $recipe->imagen) }}" alt="">
                {{ $recipe->id }}
                created the blog in {{ $recipe->created_at->format('d/m/Y') }}
                {{ $recipe->titulo }}
                <a href="{{ route('recipe.slug', $recipe->id) }}">{{ $recipe->contenido}} </a>
                {{ $recipe->contenido }}
            <br>
         
            
            @endforeach

            {{$report}}
        </div>




    
    </div>

    @if (Route::has('login'))

    @auth


        <a href="{{route('mi-cuenta')}}">Mi cuenta</a>
    @else
        <a href="{{route('login')}}">Login</a>


    @endauth

    @endif


        </body>

</html>
