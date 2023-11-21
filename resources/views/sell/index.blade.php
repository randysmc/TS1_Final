<!DOCTYPE html>
<html lang="es">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">

</head>

<body>
    <div class="wrapper">
        @include('layouts.header')


                <h1>Lista de Ventas</h1>

                @if(count($errors) > 0)
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if(count($sells) > 0)
                <div class="tablas">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Cantidad</th>
                                <th>Precio de Venta</th>
                                <th>Costro total</th>
                                <th>Fecha</th>
                                <th>Empleado</th>
                                <th>Producto en Stock</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sells as $sell)
                            <tr>
                                <td>{{ $sell->id }}</td>
                                <td>{{ $sell->amount }}</td>
                                <td>{{ $sell->sell_price }}</td>
                                <td>{{ $sell->cost}}</td>
                                <td>{{ $sell->date }}</td>
                                <td>{{ $sell->employee->name }} {{ $sell->employee->last_name }}</td>
                                <td>{{ $sell->recycledWasteInventory->name }} - Cantidad: {{ $sell->recycledWasteInventory->amount }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <a href="{{ route('sell.create') }}" class="btn btn-primary">Crear Venta</a>
                <div class="d-grid mt-3">
                            <a href="{{ route('sell.create') }}" class="btn btn-secondary">Crear Nueva Venta</a>
                        </div>
                @else
                <p>No hay ventas registradas.</p>
                @endif


    </div>

    @include('layouts.scripts')
</body>

</html>
