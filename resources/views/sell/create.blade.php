<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Venta</title>
    <!-- Agrega los enlaces a tus estilos CSS y Bootstrap aquí -->
    <link rel="stylesheet" href="tu_estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-4">
        <h1>Registro de Venta</h1>

        @if(count($errors) > 0)
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('sell.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="employee_id" class="form-label">Selecciona un Empleado:</label>
                <select name="employee_id" id="employee_id" class="form-select" required>
                    @foreach($employees as $employee)
                    <option value="{{ $employee->id }}">{{ $employee->name }} {{ $employee->last_name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="recycled_waste_inventory_id" class="form-label">Selecciona un Producto en Stock:</label>
                <select name="recycled_waste_inventory_id" id="recycled_waste_inventory_id" class="form-select" required>
                    @foreach($recycledWasteInventories as $inventory)
                    <option value="{{ $inventory->id }}">{{ $inventory->name }} - Cantidad disponible: {{ $inventory->amount }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="amount" class="form-label">Cantidad a Vender:</label>
                <input type="text" name="amount" id="amount" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="sell_price" class="form-label">Precio de Venta:</label>
                <input type="text" name="sell_price" id="sell_price" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Fecha de Venta:</label>
                <input type="date" name="date" id="date" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Realizar Venta</button>
        </form>
    </div>

    <!-- Agrega los scripts de Bootstrap y tus propios scripts aquí -->

</body>

</html>