<!DOCTYPE html>
<html lang="es">

<head>
    <!-- ...otros encabezados... -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
</head>

<body class="wrapper">
    @include('layouts.header')
    <div class="container mt-5">
        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <h1 class="card-title text-center mb-4">Empleado con Más Ventas y Dinero Vendido</h1>
                        <p class="card-text">
                            En esta sección mostramos en una tabla la cantidad de ventas y de dinero generado por 
                            cada uno de los empleados. Especificamos un poco más el contenido en ver mas.
                        </p>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <div class="tablas">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Empleado</th>
                                        <th>Total Ventas</th>
                                        <th>Total Dinero Vendido</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($reportVentas as $ventas)
                                        <tr>
                                            <td>{{ $ventas->employee->name }} {{ $ventas->employee->last_name }}</td>
                                            <td>{{ $ventas->total_ventas }}</td>
                                            <td>Q.{{ $reportDinero->where('employee_id', $ventas->employee_id)->first()->total_dinero_vendido }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <a href="{{ route('reports.index') }}" class="btn btn-primary">Regresar</a>
                <a href="{{ route('sell.index') }}" class="btn btn-primary">Ver Mas</a>
                <img src="https://independiente.com.py/wp-content/uploads/2022/05/reciclaje.jpg" class="card-img-top" alt="Report Image">
            </div>
        </div>

        @include('layouts.scripts')
    </div>
</body>

</html>
