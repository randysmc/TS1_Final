<!DOCTYPE html>
<html lang="es">

<head>
    <title>Residuos Reciclados Más Vendidos</title>
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
                        <h1 class="card-title text-center mb-4">Residuos Reciclados Más Vendidos</h1>
                        <p class="card-text">
                            En esta sección mostramos en una tabla los distintos tipos de residuos, el total de veces que se han vendido
                            y el dinero que se ha obtenido gracias a la venta de estos.
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
                                        <th>Total Vendido</th>
                                        <th>Dinero Ingresado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($report as $item)
                                        <tr>
                                            <td>{{ $item->recycledWasteInventory->name }}</td>
                                            <td>{{ $item->total_amount }} Unidades</td>
                                            <td>Q. {{ $item->total_money}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <a href="{{ route('reports.index') }}" class="btn btn-primary">Regresar</a>
                <a href="{{ route('sell.index') }}" class="btn btn-primary">Ver mas detalle</a>
                <img src="https://usil-blog.s3.amazonaws.com/PROD/blog/image/manejo-de-residuos-1-scaled.jpg" class="card-img-top" alt="Report Image">
            </div>
        </div>

        @include('layouts.scripts')
    </div>
</body>

</html>

