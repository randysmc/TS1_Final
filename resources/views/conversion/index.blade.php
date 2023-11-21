<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <title>Listado de Conversiones</title>
</head>

<body class="wrapper">
    @include('layouts.header')

    <div class="container mt-5">
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Listado de Conversiones</h2>


                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="card-title">Tabla de Conversiones</h3>
                        <p class="card-text">Aquí encontrarás un listado de todas las conversiones realizadas
                            con el nombre del empleado que hizo la conversión, el elemento que se recicló
                            y la cantidad reciclada.
                        </p>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Empleado</th>
                                    <th>Elemento Reciclado</th>
                                    <th>Cantidad Reciclada</th>
                                    <th>Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($conversions as $conversion)
                                <tr>
                                    <td>{{ $conversion->id }}</td>
                                    <td>{{ $conversion->employee->name }}</td>
                                    <td>{{ $conversion->recycledWasteInventory->name }}</td>
                                    <td>{{ $conversion->recycled_amount }}</td>
                                    <td>{{ $conversion->date }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="d-grid mt-3">
                    <a href="{{ route('conversion.create') }}" class="btn btn-secondary">Nuevo Proceso de Reciclaje</a>
                </div>


                <div class="card mt-4">
                    <div class="card-body">

                        <img src="https://revistacitylife.com/wp-content/uploads/2021/05/separa-tu-basura.jpg" alt="Descripción de la imagen">
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