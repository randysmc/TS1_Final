<!DOCTYPE html>
<html lang="en">
<head>
<title>Registro Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
</head>
<body>
    <div class="wrapper">
        @include('layouts.header')
        <form action="{{route('conversion.store')}}" method="post">
            @csrf
            @include('conversion/form');
        </form>
    </div>
    
</body>
</html>
