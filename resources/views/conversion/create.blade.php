<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Crear Conversión</title>
</head>
<body>

    <div class="container mt-5">
        <h2 class="mb-4">Crear Conversión</h2>

        <h2>Inventario de Residuos</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                </tr>
            </thead>
            <tbody>
                @foreach($wasteInventories as $wasteInventory)
                    <tr>
                        <td>{{ $wasteInventory->name }}</td>
                        <td>{{ $wasteInventory->amount }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <br>

        <form method="post" action="{{ route('conversion.store') }}">
            @csrf

            <div class="form-group">
                <label for="employee_id">Empleado:</label>
                <select name="employee_id" id="employee_id" class="form-control" required>
                    @foreach($employees as $employee)
                        <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="recycled_waste_inventory_id">Elemento que quiere reciclar:</label>
                <select name="recycled_waste_inventory_id" id="recycled_waste_inventory_id" class="form-control" required>
                    @foreach($recycledWasteInventories as $recycledWasteInventory)
                        <option value="{{ $recycledWasteInventory->id }}">{{ $recycledWasteInventory->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="recycled_amount">Cantidad a reciclar:</label>
                <input type="number" name="recycled_amount" id="recycled_amount" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="date" class="form-label">Fecha:</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ old('date', now()->toDateString()) }}" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Guardar Conversión</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
