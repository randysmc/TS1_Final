

    <div class="Empleado">
    <div class="container mt-5">
        <h2>Nuevo Elemento</h2>
        <form action="{{ route('recycled-waste-inventory.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="waste_inventory_id">Seleccionar del inventario de Residuos:</label>
                <select name="waste_inventory_id" id="waste_inventory_id" class="form-control">
                    @foreach($wasteInventories as $wasteInventory)
                        <option value="{{ $wasteInventory->id }}">{{ $wasteInventory->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

