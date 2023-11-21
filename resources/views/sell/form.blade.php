<div class="container mt-5">
    @if(count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1>Realizar Venta</h1>
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title mb-4">Ingreso</h2>
                    <form action="{{ route('sell.store') }}" method="post">
                        @csrf

                        <div class="mb-3">
                            <label for="employee_id" class="form-label">Selecciona un Empleado:</label>
                            <select name="employee_id" id="employee_id" class="form-select" required>
                                @foreach($sellerEmployees as $employee)
                                <option value="{{ $employee->id }}">{{ $employee->name }} {{ $employee->last_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="recycled_waste_inventory_id" class="form-label">Selecciona un Producto en Stock:</label>
                            <select name="recycled_waste_inventory_id" id="recycled_waste_inventory_id" class="form-select" required>
                                @foreach($recycledWasteInventories as $inventory)
                                <option value="{{ $inventory->id }}">{{ $inventory->name }} - Cantidad disponible: {{ $inventory->amount }} - Precio: {{$inventory->recycled_price}}</option>
                                @endforeach
                            </select>
                        </div>

                        

                        <div class="mb-3">
                            <label for="amount" class="form-label">Cantidad a Vender:</label>
                            <input type="text" name="amount" id="amount" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="date" class="form-label">Fecha:</label>
                            <input type="date" class="form-control" id="date" name="date" value="{{ old('date', now()->toDateString()) }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Realizar Venta</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4 text-center" style="max-width: 90%; overflow: hidden;">
        <img src="https://procity.com.pe/wp-content/uploads/2020/06/00-reciclaje-que-desechos-rescatar-y-cuales-botar.jpg" alt="">
    </div>
</div>
