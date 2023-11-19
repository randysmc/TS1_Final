<!DOCTYPE html>
<html lang="es">
<head>
    <!-- ...otros encabezados... -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
</head>
<body>
    <div class="wrapper">
        @include('layouts.header')
        <div class="container mt-5">
            <form method="post" action="{{ route('conversion.store') }}">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title mb-4">Registro de Conversión</h2>
                                <div class="mb-3">
                                    <label for="waste_amount" class="form-label">Cantidad de residuo:</label>
                                    <input type="number" class="form-control" id="waste_amount" name="waste_amount" value="{{ old('waste_amount') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="recycled_amount" class="form-label">Cantidad reciclada:</label>
                                    <input type="number" class="form-control" id="recycled_amount" name="recycled_amount" value="{{ old('recycled_amount') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="date" class="form-label">Fecha:</label>
                                    <input type="date" class="form-control" id="date" name="date" value="{{ old('date', now()->toDateString()) }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="employee_id" class="form-label">Empleado:</label>
                                    <input type="number" class="form-control" id="employee_id" name="employee_id" value="{{ old('employee_id') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="waste_inventory_id" class="form-label">ID de inventario de residuos:</label>
                                    <input type="number" class="form-control" id="waste_inventory_id" name="waste_inventory_id" value="{{ old('waste_inventory_id') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="recycled_waste_inventory_id" class="form-label">ID de inventario de residuos reciclados:</label>
                                    <input type="number" class="form-control" id="recycled_waste_inventory_id" name="recycled_waste_inventory_id" value="{{ old('recycled_waste_inventory_id') }}">
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-success">Guardar Datos</button>
                                </div>

                                <div class="d-grid mt-3">
                                    <a href="{{ route('conversion.index') }}" class="btn btn-secondary">Regresar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @include('layouts.scripts')
</body>
</html>
