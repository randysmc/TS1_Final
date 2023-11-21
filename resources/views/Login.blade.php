<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
   <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <title>Inicio de Sesion</title>
</head>
<body>
 <img class="wave" src="https://www.actaverytelehealth.com/static/media/wave.66362fb1.png" >
 <div class="container">
    <div class="img">
        <img src="https://www.simlevante.com/wp-content/uploads/2022/10/waste-management-edited.png" >
    </div>
    <div class="login-content">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <img src="https://www.pngall.com/wp-content/uploads/5/Profile-Avatar-PNG-Picture.png" alt="">
            <h2 class="title">Bienvenido</h2>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5></h5>
                    <input type="text" id="username" class="input" name="username" placeholder="Usuario">
                </div>
            </div>
            <div class="input-div pass">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                    <h5></h5>
                    <input type="password" id="input" class="input" name="password" placeholder="Password">
                </div>
            </div>
            @if($errors->any())
                <span class="help-block"> {{ $errors->first() }} </span>
            @endif
            <button type="submit" class="btn">INICIAR SESION</button>
        </form>
    </div>
 </div>    
 @include('layouts.scripts')
</body>
</html>