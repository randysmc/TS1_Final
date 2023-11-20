<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>RecycledWasteInventory List</title>
</head>
<body>

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
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-3">
            <a href="{{ route('recycled-waste-inventory.create') }}" class="btn btn-primary">Crear Nuevo</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
