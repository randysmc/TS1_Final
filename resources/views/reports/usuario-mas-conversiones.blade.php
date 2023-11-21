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
                <h1 class="text-center mb-4">Usuario con más Residuos Reciclados</h1>

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
                                    <td>{{ $item->total_reciclado }}</td>
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

        @include('layouts.scripts')
    </div>
</body>
</html>
