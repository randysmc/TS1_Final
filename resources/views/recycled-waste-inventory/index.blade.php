<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <title>Inventario de Residuos Reciclados</title>
</head>

<body class="wrapper">
    @include('layouts.header')

    <div class="container mt-5">
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Inventario de Residuos Reciclados</h2>

                
                    @if (Session::has('message'))
                    <div class="alert alert-success">
                        {{ Session::get('message') }}
                    </div>
                    @endif

                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="card-title">Lista de Residuos Reciclados</h3>
                            <p class="card-text">Aquí encontrarás un listado de los residuos reciclados disponibles.</p>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Cantidad</th>
                                        <th scope="col">Precio Reciclado</th>
                                        {{-- Agrega más encabezados según sea necesario --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($recycledWasteInventories as $recycledWasteInventory)
                                    <tr>
                                        <td>{{ $recycledWasteInventory->name }}</td>
                                        <td>{{ $recycledWasteInventory->amount }}</td>
                                        <td>{{ $recycledWasteInventory->recycled_price }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="mt-3">
                        <a href="{{ route('recycled-waste-inventory.create') }}" class="btn btn-primary">Crear Nuevo</a>
                    </div>
                

                <div class="card mt-4">
                    <div class="card-body">
                        <h5 class="card-title">Como reciclar correctamente</h5>
                        <img src="https://i.ytimg.com/vi/0i99_Lkvjm0/hqdefault.jpg" alt="Descripción de la imagen">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-beta2/js/bootstrap.min.js"></script>
</body>

</html>
