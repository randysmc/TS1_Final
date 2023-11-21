<!DOCTYPE html>
<html>

<head>
    <title>Nuevo Elemento Reciclaje</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
</head>`

<body>
    <div class="wrapper">
        @include('layouts.header')
        <form action="{{route('recycled-waste-inventory.store')}}" method="post" , enctype="multipart/form-data">
            @csrf
            @include('recycled-waste-inventory/form');
            
            
        
        </form>
    </div>

</body>