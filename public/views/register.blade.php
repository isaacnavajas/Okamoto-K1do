

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



    <p>esto es registro</p>

    <form method="POST" action="{{route('validar-registro')}}">
        @csrf
        <label for="emailInput">Email</label>
        <input type="email" id="emailInput" name="email" required autocomplete="disable">

        <label for="passwordInput">Password</label>
        <input type="password" class="form-control" id="passwordInput" name="password" required>

        <label for="userInput">Nombre</label>
        <input type="text" id="userInput" name="name" required autocomplete="disable">

        <button type="submit" >Registrarse</button>

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






</body>

</html>