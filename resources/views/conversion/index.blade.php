hola

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Listado de Conversiones</title>
</head>

<body>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Listado de Conversiones</h2>

        <table class="table table-striped">
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


        <div class="d-grid mt-3">
            <a href="{{ route('conversion.create') }}" class="btn btn-secondary">Nuevo Proceso de Reciclaje</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>