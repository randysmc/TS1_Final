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
                        <h1 class="card-title text-center mb-4">Ingreso de Residuos por Empleado</h1>
                        <p class="card-text">
                            En esta sección mostramos en una tabla la cantidad de reciclajes realizadas por los usuarios para 
                            que podamos llevar un control de cuantos residuos se reciclan por usuario, en el boton de abajo
                            podemos ver información más detallada.
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
                                        <th>Total Ingreso</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($report as $item)
                                        <tr>
                                            <td>{{ $item->employee->name }}</td>
                                            <td>{{ $item->total_ingresado }}  unidades</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <a href="{{ route('reports.index') }}" class="btn btn-primary">Regresar</a>
                <a href="{{ route('waste-income.index') }}" class="btn btn-primary">Ver más detallado</a>
                <img src="https://usil-blog.s3.amazonaws.com/PROD/blog/image/manejo-de-residuos-1-scaled.jpg" class="card-img-top" alt="Report Image">
            </div>
        </div>

        @include('layouts.scripts')
    </div>
</body>

</html>
