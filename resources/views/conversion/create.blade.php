<div class="container">
    <h2>Crear Conversión</h2>

    <h2> Inventario de Residuos</h2>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach($wasteInventories as $wasteInventory)
            <tr>
                <td>{{ $wasteInventory->name}}</td>
                <td>{{ $wasteInventory->amount}}</td>
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
            <label for="date">Fecha:</label>
            <input type="date" name="date" id="date" class="form-control" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Guardar Conversión</button>
        </div>
    </form>
</div>
