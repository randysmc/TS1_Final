<!DOCTYPE html>
<html lang="es">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
</head>

<body>
    <div class="wrapper">
        @include('layouts.header')

        <div class="container mt-5">
            <h1 class="text-center mb-4">Registro de Ventas</h1>

            @if(count($errors) > 0)
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <p class="lead text-center">
                Aquí puedes ver el registro de ventas.
            </p>
            <p class="lead text-center">
                Puedes realizar una nueva venta presionando el boton de crear
            </p>

            @if(count($sells) > 0)

                    <table class="table">
                        <thead>
                            <tr>
                                
                                <th>Cantidad</th>
                                <th>Precio de Venta</th>
                                <th>Costo Total</th>
                                <th>Fecha</th>
                                <th>Empleado</th>
                                <th>Producto en Stock</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sells as $sell)
                                <tr>
                                    
                                    <td>{{ $sell->amount }}</td>
                                    <td>{{ $sell->sell_price }}</td>
                                    <td>{{ $sell->cost }}</td>
                                    <td>{{ $sell->date }}</td>
                                    <td>{{ $sell->employee->name }} {{ $sell->employee->last_name }}</td>
                                    <td>{{ $sell->recycledWasteInventory->name }} - Cantidad: {{ $sell->recycledWasteInventory->amount }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>


                <div class="d-grid mt-3">
                    <a href="{{ route('sell.create') }}" class="btn btn-primary">Crear Nueva Venta</a>
                </div>
            @else
                <p class="text-center">No hay ventas registradas.</p>
                <div class="d-grid mt-3">
                    <a href="{{ route('sell.create') }}" class="btn btn-primary">Crear Venta</a>
                </div>
            @endif
        </div>
    </div>

    @include('layouts.scripts')
</body>

</html>
