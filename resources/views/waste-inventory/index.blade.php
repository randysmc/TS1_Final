<!DOCTYPE html>
<html lang="es">
<head>
    <!-- ...otros encabezados... -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
</head>
<body>
    <!-- ...contenido... -->
    <div class="wrapper">
        @include('layouts.header')
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title mb-4">Inventario de Residuos</h2>
                            <p>Elementos guardados en el inventario de la aplicación</p>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Cantidad</th>
                                        <th>Costo</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($waste_inventories as $wasteInventory)
                                    <tr>
                                        <td>{{ $wasteInventory->id }}</td>
                                        <td>{{ $wasteInventory->name }}</td>
                                        <td>{{ $wasteInventory->amount }}</td>
                                        <td>{{ $wasteInventory->cost}}</td>
                                        <td>
                                            <a href="{{ route('waste-inventory.edit', $wasteInventory->id) }}" class="btn btn-success btn-sm">Editar</a>
                                            <form action="{{ route('waste-inventory.destroy', $wasteInventory->id) }}" method="post" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-grid mt-3">
                                <a href="{{ route('waste-inventory.create') }}" class="btn btn-success">Crear Nuevo Registro</a>
                            </div>
                        </div>

                        <!-- Div para la imagen -->
                        <div class="card mt-4">
                            <img src="https://www.educarchile.cl/sites/default/files/styles/style_image_slider_multimedia/public/2022-05/reciclaje-03.jpg?itok=AVQ1n2N1" class="card-img-top" alt="Descripción de la imagen">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    @include('layouts.scripts')
</body>
</html>
