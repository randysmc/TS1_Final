<div class="container mt-5">
    <h2>RecycledWasteInventory List</h2>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Recycled Price</th>
                {{-- Agrega más encabezados según sea necesario --}}
            </tr>
        </thead>
        <tbody>
            @foreach($recycledWasteInventories as $recycledWasteInventory)
                <tr>
                    <td>{{ $recycledWasteInventory->name }}</td>
                    <td>{{ $recycledWasteInventory->amount }}</td>
                    <td>{{ $recycledWasteInventory->recycled_price }}</td>
                    {{-- Agrega más columnas según sea necesario --}}
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-3">
        <a href="{{ route('recycled-waste-inventory.create') }}" class="btn btn-primary">Crear Nuevo</a>
    </div>
</div>
