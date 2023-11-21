<!DOCTYPE html>
<html lang="es">

<head>
    <title>Acerca de la Aplicación de Reciclaje</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
</head>

<body class="wrapper">
    @include('layouts.header')
    <div class="container mt-5">
        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <h1 class="card-title text-center mb-4">Acerca de la Aplicación de Reciclaje</h1>

                        <h3 class="card-title">Nuestra Misión</h3>
                        <p class="card-text">
                            Este proyecto tiene como objetivo principal la implementación de un sistema de reciclaje integral,
                            orientado a empresas con fines comerciales. La necesidad de abordar los desafíos relacionados con
                            la gestión de residuos es evidente, considerando las problemáticas asociadas al crecimiento poblacional,
                            la concentración urbana desordenada y el desarrollo industrial sin planificación
                        </p>

                        <h2 class="card-title">Uso del Sistema</h3>
                            <h3 class="card-title">Administrador</h3>
                            <p class="card-text">
                                Accede al panel de administración para realizar operaciones CRUD (Crear, Leer, Actualizar, Eliminar)
                                de empleados y usuarios. Añade nuevos empleados y usuarios, actualiza la información y elimina registros según sea necesario.
                            </p>

                            <!-- Sección Clasificador -->
                            <h3 class="card-title">Clasificador</h3>
                            <p class="card-text">
                                Accede al módulo de clasificación para gestionar el inventario de basura.
                                Registra nuevos elementos, actualiza la información existente y elimina elementos según sea necesario.
                                Registra y gestiona ingresos de basura al sistema.
                            </p>

                            <!-- Sección Operador -->
                            <h3 class="card-title">Operador</h3>
                            <p class="card-text">
                                Accede al módulo de operaciones para gestionar el inventario de reciclaje.
                                Registra nuevos elementos, actualiza la información existente y elimina elementos del inventario de reciclaje.
                            </p>

                            <!-- Sección Vendedor -->
                            <h3 class="card-title">Vendedor</h3>
                            <p class="card-text">
                                Accede al área de ventas para realizar operaciones sobre las transacciones de venta.
                                Registra nuevas ventas de productos reciclados.
                            </p>

                            <h3 class="card-title">Manager</h3>
                            <p class="card-text">
                                Accede al área de reportes para llevar un control del sistema en si
                            </p>

                            <h3 class="card-title">Contacto</h3>
                            <p class="card-text">
                                Si tienes preguntas, sugerencias contacta al correo randy@gmail.com o al CUNOC.
                            </p>

                            <h3 class="card-title">Licencia</h3>
                            <p class="card-text">
                                Este proyecto está bajo la licencia de TS1_Final
                            </p>

                            <div class="text-center">
                                <img src="https://aprende.guatemala.com/wp-content/uploads/2016/09/guatemala-universidaddesancarlos.jpg" class="img-fluid mb-3" alt="Imagen de la aplicación 1">
                                
                            </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.scripts')
    </div>
</body>

</html>