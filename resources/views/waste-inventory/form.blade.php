<div class="container mt-5">
@if(count($errors)>0)
    <div class="alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>


    @endif
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1>Registro de Residuo</h1>
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title mb-4">Ingreso</h2>
                    <form action="{{ route('waste-inventory.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre:</label>
                            <input type="text" name="name" value="{{ isset($waste_inventory->name) ? $waste_inventory->name : '' }}" id="name" class="form-control" required>
                        </div>

                        


                        <div class="mb-3">
                            <label for="cost" class="form-label">Costo:</label>
                            <input type="number" name="cost" value="{{ isset($waste_inventory->cost) ? $waste_inventory->cost : '' }}" id="amount" class="form-control" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success" value="{{ $mode}}">Guardar Datos</button>
                        </div>

                        <div class="d-grid mt-3">
                            <a href="{{ route('waste-inventory.index') }}" class="btn btn-secondary">Regresar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
