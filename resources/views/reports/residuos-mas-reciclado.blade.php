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
                <h1 class="text-center mb-4">Residuos Más Reciclados</h1>
                
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
                                    <td>{{ $item->RecycledWasteInventory->name }}</td>
                                    <td>{{ $item->total_recycled_amount }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    @include('layouts.scripts')
</body>

</html>
