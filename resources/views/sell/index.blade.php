


    <div class="container mt-4">
        <h1>Lista de Ventas</h1>

        @if(count($sells) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Cantidad</th>
                        <th>Precio de Venta</th>
                        <th>Fecha</th>
                        <th>Empleado</th>
                        <th>Producto en Stock</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sells as $sell)
                        <tr>
                            <td>{{ $sell->id }}</td>
                            <td>{{ $sell->amount }}</td>
                            <td>{{ $sell->sell_price }}</td>
                            <td>{{ $sell->date }}</td>
                            <td>{{ $sell->employee->name }} {{ $sell->employee->last_name }}</td>
                            <td>{{ $sell->recycledWasteInventory->name }} - Cantidad: {{ $sell->recycledWasteInventory->amount }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $sells->links() }} {{-- Para paginación --}}
            <a href="{{ route('sell.create') }}" class="btn btn-primary">Crear Venta</a>
    </div>

        @else
            <p>No hay ventas registradas.</p>
        @endif
    </div>

