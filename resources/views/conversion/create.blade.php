Formulario





<!-- resources/views/recycling/create.blade.php -->



<div class="container mt-4">
    <h1>Formulario de Reciclaje</h1>

    @if(session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif

    <form action="{{ route('conversion.store') }}" method="post">
        @csrf

        <!-- Agregar campos necesarios para obtener información de employee y waste_inventory -->

        <div class="mb-3">
            <label for="waste_inventory_id" class="form-label">Selecciona un Elemento de Waste Inventory:</label>
            <select name="waste_inventory_id" id="waste_inventory_id" class="form-select" required>
                @foreach($wasteInventories as $wasteInventory)
                <option value="{{ $wasteInventory->id }}">{{ $wasteInventory->name }} - Cantidad disponible: {{ $wasteInventory->amount }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="employee_id" class="form-lable">Selecciona un Empleado</label>
            <select name="employee_id" id="employee_id" class="form-select" required>
                @foreach($employees as $employee)
                <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="new_element_name" class="form-label">Nombre del Nuevo Elemento Reciclado:</label>
            <input type="text" name="new_element_name" id="new_element_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="new_element_amount" class="form-label">Cantidad del Nuevo Elemento Reciclado:</label>
            <input type="text" name="new_element_amount" id="new_element_amount" class="form-control" required>
        </div>

        <!-- Agregar otros campos según sea necesario -->

        <button type="submit" class="btn btn-primary">Crear Elemento Reciclado</button>
    </form>
</div>