

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


<main class= "container align-center p-5">

<form method="POST" action="{{route("inicia-sesion")}}">
@csrf
<div class="mb-3">
<label for="emailInput"class="form-label">Email</label>
<input type="email" class="form-control" id="emailInout" name="email" required>
</div>
<div class="mb-3">
<label for="passwordInput"class="form-label">Password</label>
<input type="password" class="form-control" id="passwordInput"name="password"required>
</div>
<div class="mb-3 form-check">
<input type="checkbox" class="form-check-input" id="rememberCheck"name="remember">
<label class="form-check-label"for="rememberCheck">
Mantener sesión iniciada</label>
</div>
<div>
<p>¿No tienes cuenta? <a href="{{route('registro')}}">
Regístrate</a></p>
</div>
<button type="submit" class="btn btn-primary" >Acceder</button>


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