<!DOCTYPE html>
<html lang="es">

<head>
    <title>Residuos Más Ingresados</title>
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
                        <h1 class="card-title text-center mb-4">Residuos Ingresado</h1>

                        <h5 class="card-title"></h5>
                        <p class="card-text">
                            En esta sección mostramos en una tabla los distintos tipos de residuo y el total de veces que se ingreso.
                            
                        </p>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <div class="tablas">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Residuo</th>
                                        <th>Total Ingreso</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($report as $item)
                                        <tr>
                                            <td>{{ $item->wasteInventory->name }}</td>
                                            <td>{{ $item->total_amount }} Unidades</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <a href="{{ route('reports.index') }}" class="btn btn-primary">Regresar</a>
                <a href="{{ route('waste-income.index') }}" class="btn btn-primary">Ver más detallado</a>

                <img src="https://cdnx.jumpseller.com/dobakaru/image/18876669/HUERTOS_DEL_ALMA__3_.png.png?1631404535" class="card-img-top" alt="Report Image">
            </div>
        </div>

        @include('layouts.scripts')
    </div>
</body>

</html>
