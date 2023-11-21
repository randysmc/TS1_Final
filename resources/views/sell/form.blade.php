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
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="card-title mb-4">Realizar Venta</h1>
                            <form action="{{ route('sell.store') }}" method="post">
                                @csrf

                                <div class="mb-3">
                                    <label for="employee_id" class="form-label">Selecciona un Empleado:</label>
                                    <select name="employee_id" id="employee_id" class="form-select" required>
                                        @foreach($sellerEmployees as $employee)
                                        <option value="{{ $employee->id }}">{{ $employee->name }} {{ $employee->last_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="recycled_waste_inventory_id" class="form-label">Selecciona un Producto en Stock:</label>
                                    <select name="recycled_waste_inventory_id" id="recycled_waste_inventory_id" class="form-select" required>
                                        @foreach($recycledWasteInventories as $inventory)
                                        <option value="{{ $inventory->id }}">{{ $inventory->name }} - Cantidad disponible: {{ $inventory->amount }} - Precio: {{$inventory->recycled_price}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="amount" class="form-label">Cantidad a Vender:</label>
                                    <input type="text" name="amount" id="amount" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="date" class="form-label">Fecha:</label>
                                    <input type="date" class="form-control" id="date" name="date" value="{{ old('date', now()->toDateString()) }}" required>
                                </div>

                                <button type="submit" class="btn btn-primary">Realizar Venta</button>
                            </form>
                        </div>
                    </div>
                    <div class="mt-4 text-center">
                <img src="https://procity.com.pe/wp-content/uploads/2020/06/00-reciclaje-que-desechos-rescatar-y-cuales-botar.jpg" alt="Venta de Reciclaje" class="img-fluid rounded w-100">
            </div>
                </div>
            </div>


            

        </div>
    </div>
    @include('layouts.scripts')
</body>
</html>
