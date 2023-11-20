hola





    <div class="container">
        <h2>Listado de Conversiones</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Empleado</th>
                    <th>Elemento Reciclado</th>
                    <th>Cantidad Reciclada</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                @foreach($conversions as $conversion)
                    <tr>
                        <td>{{ $conversion->id }}</td>
                        <td>{{ $conversion->employee->name }}</td>
                        <td>{{ $conversion->recycledWasteInventory->name }}</td>
                        <td>{{ $conversion->recycled_amount }}</td>
                        <td>{{ $conversion->date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

