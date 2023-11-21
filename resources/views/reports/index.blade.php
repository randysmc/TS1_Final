<!DOCTYPE html>
<html lang="es">

<head>
    <title>Reportes</title>
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
                        <h1 class="card-title text-center mb-4">Reportes</h1>

                        <h5 class="card-title"></h5>
                        <p class="card-text">
                            Los reportes permiten realizar un seguimiento detallado de las transacciones realizadas por los usuarios.
                        </p>
                        <p class="card-text">
                            Tener un historial detallado en forma de reportes facilita la resolución de problemas.
                            Los usuarios y los administradores pueden referirse a estos informes para entender
                            lo que sucedió durante una transacción específica.
                        </p>
                        <p>Los reportes ofrecen datos valiosos para el análisis de tendencias y comportamientos de los usuarios.
                            Los patrones de compra y venta, los productos más populares,
                            los momentos de mayor actividad, entre otros, pueden ser identificados a través de estos informes. </p>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Seleccionar Reporte:</h5>

                        <form action="{{ route('report.residuosMasIngresados') }}" method="get" class="mb-3">
                            @csrf
                            <button type="submit" class="btn btn-success btn-block">Residuos Ingresados</button>
                        </form>

                        <form action="{{ route('report.residuosMasReciclados') }}" method="get" class="mb-3">
                            @csrf
                            <button type="submit" class="btn btn-success btn-block">Residuos Reciclados</button>
                        </form>

                        <form action="{{ route('report.residuosRecicladosMasVendidos') }}" method="get" class="mb-3">
                            @csrf
                            <button type="submit" class="btn btn-success btn-block">Residuos Reciclados Vendidos</button>
                        </form>

                        <form action="{{ route('report.usuarioMayorIngresoResiduos') }}" method="get" class="mb-3">
                            @csrf
                            <button type="submit" class="btn btn-success btn-block">Ingreso Residuos por Usuario</button>
                        </form>

                        <form action="{{ route('report.usuarioMayorConversiones') }}" method="get" class="mb-3">
                            @csrf
                            <button type="submit" class="btn btn-success btn-block">Reciclajes</button>
                        </form>

                        <form action="{{ route('report.usuarioMayorIngresos') }}" method="get" class="mb-3">
                            @csrf
                            <button type="submit" class="btn btn-success btn-block">Ventas e Ingresos</button>
                        </form>
                    </div>
                </div>
                <img src="https://www.metacontratas.com/wp-content/uploads/2021/06/Reciclaje-Y-Medio-Ambiente.jpg" class="card-img-top" alt="Report Image">
            </div>
        </div>

        @include('layouts.scripts')
    </div>
</body>

</html>