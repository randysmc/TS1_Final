<!DOCTYPE html>
<html lang="es">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
</head>

<body>
    <div class="wrapper">
        @include('layouts.header')

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title mb-4">Lista de Ingresos</h2>
                            <p>
                                Aquí mostramos la lista de ingresos.
                            </p>
                            <p>
                                El precio por unidad es el costo por el que se compra.
                            </p>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Residuo</th>
                                        <th>Precio*Unidad</th>
                                        <th>Cantidad</th>
                                        <th>Costo Total</th>
                                        <th>Fecha</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($waste_incomes as $wasteIncome)
                                    <tr>
                                        <td>{{ $wasteIncome->employee->name }}</td>
                                        <td>{{ $wasteIncome->wasteInventory->name }}</td>
                                        <td>Q {{ $wasteIncome->wasteInventory->cost}}</td>
                                        <td style="text-align: right;">{{ $wasteIncome->amount }} unidades</td>
                                        <td>Q{{ $wasteIncome->cost }}</td>
                                        <td>{{ $wasteIncome->date }}</td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="6">No se encontraron ingresos.</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div class="d-grid mt-3">
                                <a href="{{ route('waste-income.create') }}" class="btn btn-success">Crear Nuevo Ingreso</a>
                            </div>
                            <div class="d-grid mt-3">
                                <a href="{{ route('waste-inventory.index') }}" class="btn btn-success">Ver Inventario</a>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-body">
                            
                            <p class="card-text">Aquí puedes agregar una descripción de la imagen.</p>
                            <img class="img-fluid" src="https://imagenes.heraldo.es/files/image_990_v3/files/fp/uploads/imagenes/2019/06/04/imagen-hap039pri-20180517co.r_d.2182-658.jpeg" alt="Descripción de la imagen">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('layouts.scripts')
</body>

</html>
