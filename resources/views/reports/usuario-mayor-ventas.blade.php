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
                <h1 class="text-center mb-4">Empleado con Más Ventas y Dinero Vendido</h1>

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
                                    <td>{{ $reportDinero->where('employee_id', $ventas->employee_id)->first()->total_dinero_vendido }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        @include('layouts.scripts')
    </div>
</body>
