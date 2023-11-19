

@section('content')
    <div class="container">
        <h2>Crear RecycledWasteInventory</h2>
        <form action="{{ route('recycled-waste-inventory.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="waste_inventory_id">Seleccionar Waste Inventory:</label>
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

