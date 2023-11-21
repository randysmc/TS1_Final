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
                        <h1 class="card-title text-center mb-4">Residuos Reciclados por Empleados</h1>
                        <p class="card-text">
                            En esta sección mostramos en una tabla la cantidad de ingresos que tienen los empleados
                            así podremos observar que empleado tiene más ingresos y cual es el total, podemos ver una 
                            tabla más detallada si usamos el boton de ver mas detalle de abajo.
                        </p>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <div class="tablas">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Usuario</th>
                                        <th>Total Residuos Reciclados</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($report as $item)
                                        <tr>
                                            <td>{{ $item->employee->name }} {{ $item->employee->last_name }}</td>
                                            <td>{{ $item->total_reciclado }} Unidades</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="2">No hay datos disponibles</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <a href="{{ route('reports.index') }}" class="btn btn-primary">Regresar</a>
                <a href="{{ route('conversion.index') }}" class="btn btn-primary">Ver más detallado</a>
                <img src="https://usil-blog.s3.amazonaws.com/PROD/blog/image/manejo-de-residuos-1-scaled.jpg" class="card-img-top" alt="Report Image">
                

            </div>
        </div>

        @include('layouts.scripts')
    </div>
</body>

</html>
