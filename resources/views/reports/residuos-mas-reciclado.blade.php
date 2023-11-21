<!DOCTYPE html>
<html lang="es">

<head>
    <title>Residuos Más Reciclados</title>
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
                        <h1 class="card-title text-center mb-4">Residuos Más Reciclados</h1>
                        <p class="card-text">
                            En esta sección mostramos una lista que muestra los tipos de residuos que 
                            ya fueron reciclados en una tabla, mostramos el total de veces que estas 
                            unidades fueron recicladas.
                            
                            
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
                                        <th>Total Reciclado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($report as $item)
                                        <tr>
                                            <td>{{ $item->recycledWasteInventory->name }}</td>
                                            <td>{{ $item->total_recycled_amount }} Unidades</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <a href="{{ route('reports.index') }}" class="btn btn-primary">Regresar</a>
                
                <a href="{{ route('conversion.index') }}" class="btn btn-primary">Ver más detallado</a>


                <img src="https://cdn0.ecologiaverde.com/es/posts/4/8/8/cosas_que_se_pueden_reciclar_2884_orig.jpg" class="card-img-top" alt="Report Image">


            </div>
        </div>

        @include('layouts.scripts')
    </div>
</body>

</html>
