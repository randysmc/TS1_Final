<!DOCTYPE html>
<html lang="en">

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <title>Inventario de Residuos Reciclados</title>
</head>

<body>

    <div class="wrapper">
        @include('layouts.header')

        <div class="tablas">
            @if (Session::has('message'))
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
            @endif
            

            <table class="table">
            <h2>RecycledWasteInventory List</h2>
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Recycled Price</th>
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

        <div class="mt-3">
            <a href="{{ route('recycled-waste-inventory.create') }}" class="btn btn-primary">Crear Nuevo</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>