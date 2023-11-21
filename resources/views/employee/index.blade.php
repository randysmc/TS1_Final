<!DOCTYPE html>
<html lang="es">

<head>
    <title>Listado de Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <style>
        .tabla-container {
            overflow-x: auto;
        }
    </style>
</head>

<body class="wrapper">
    @include('layouts.header')
    <div class="container mt-5">
        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <h1 class="card-title text-center mb-4">Listado de Empleados</h1>
                        <h5 class="card-subtitle mb-4">Aquí tenemos la información de cada empleado disponible.</h5>

                        @if (Session::has('message'))
                            <div class="alert alert-success">
                                {{ Session::get('message') }}
                            </div>
                        @endif

                        <div class="tabla-container">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Username</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Rol</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employees as $employee)
                                        <tr>
                                            <td>{{ $employee->id }}</td>
                                            <td>{{ $employee->username }}</td>
                                            <td>{{ $employee->name }}</td>
                                            <td>{{ $employee->last_name }}</td>
                                            <td>{{ \App\Enums\UserRole::getDescription($employee->role->value) }}</td>
                                            <td>
                                                <a href="{{ url('employee/'.$employee->id.'/edit') }}" class="btn btn-sm btn-success">Editar</a>
                                                <form action="{{ route('employee.destroy', $employee->id) }}" method="post" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Confirmar')">Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="text-center">
                                <img src="https://static.wixstatic.com/media/b75b9a_f2a6e32543f341219db697608af5906c~mv2.jpg/v1/fill/w_640,h_354,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/b75b9a_f2a6e32543f341219db697608af5906c~mv2.jpg" class="img-fluid mb-3" alt="Imagen de la aplicación 1">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.scripts')
    </div>
</body>

</html>
