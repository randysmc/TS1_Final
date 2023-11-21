<!DOCTYPE html>
<html lang="es">

<head>
    <title>Crear Conversión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
</head>

<body class="wrapper">
    <div class="container mt-5">
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title">Crear Conversión</h2>


                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="card-title">Inventario de Residuos</h3>
                            <p>En esta tabla mostramos las unidades de residuo para pasar por el proceso de reciclaje
                                tenemos el nombre del residuo y a la par la cantidad, cabe decir que si el numero esta 
                                en cero es que no hay elementos disponibles.
                            </p>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nombre del residuo</th>
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
                        </div>
                    </div>

                    <br>

                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="card-title">Registro de Conversión de Reciclaje</h3>
                            <p>En el siguiente formulario podemos realizar un proceso de conversión 
                                se selecciona un usuario operador, luego seleccionamos el elemento 
                                que deseamos reciclar, la cantidad y una fecha.
                            </p>
                            <div class="form-group">
                                <label for="employee_id">Empleado Operador:</label>
                                <select name="employee_id" id="employee_id" class="form-control" required>
                                    @foreach($operatorEmployees as $employee)
                                    <option value="{{ $employee->id }}">{{ $employee->name }} {{ $employee->last_name}}</option>
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
                        </div>
                    </div>


                <div class="card">
                    <div class="card-body">
                        
                        <img src="https://www.traperosdeemaus.org/mini-slider/reciclaje/reciclaje-general.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-beta2/js/bootstrap.min.js"></script>
</body>

</html>
