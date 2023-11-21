<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nuevo Elemento Reciclaje</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
</head>

<body class="wrapper">
    @include('layouts.header')

    <div class="container mt-5">
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Nuevo Elemento Reciclaje</h2>

                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="card-title">Lista de Elementos Reciclados</h3>
                        <p class="card-text">Aquí encontrarás un listado de los elementos reciclados disponibles.</p>
                        <table class="table mx-auto">
                            <thead>
                                <tr>
                                    <th scope="col">Nombre</th>
                                    {{-- Agrega más encabezados según sea necesario --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recycledWasteInventories as $recycledWasteInventory)
                                <tr>
                                    <td>{{ $recycledWasteInventory->name }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-body">
                        <h3 class="card-title">Formulario de Nuevo Elemento Reciclaje</h3>
                        <p class="card-text">Completa el siguiente formulario para agregar un nuevo elemento reciclaje
                            toma en cuenta que los elementos que estan en la tabla de arriba son elementos que ya se procesaron 
                            para pasar por el proceso de reciclaje.</p>
                        <form action="{{ route('recycled-waste-inventory.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @include('recycled-waste-inventory/form')
                            <button type="submit" class="btn btn-primary mt-3">Guardar Elemento Reciclaje</button>
                        </form>
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
