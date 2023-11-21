<!DOCTYPE html>
<html lang="es">

<head>
    <title>Información sobre Reciclaje</title>
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
                        <h1 class="card-title text-center mb-4">Reciclaje: Cuidando Nuestro Planeta</h1>
                        
                        <h3 class="card-title">Aplicación de Reciclaje</h3>
                        <p class="card-text">
                            Nuestra aplicación está diseñada para hacer llevar a cabo el proceso de reciclaje, empezando 
                            por el ingreso de nuevos residuos, el proceso de clasificación, el reciclaje y por ultimo 
                            la venta de nuevo material reciclado.
                        </p>

                        <h3 class="card-title">Tipos de Residuos</h3>
                        <p class="card-text">
                            Existen varios tipos de residuos, como plásticos, papel, cartón, vidrio, metal y residuos orgánicos.
                            Cada tipo de residuo requiere un método específico de reciclaje para reducir su impacto ambiental.
                        </p>

                        <h3 class="card-title">Procesos de Reciclaje</h3>
                        <p class="card-text">
                            Los procesos de reciclaje incluyen la recolección, clasificación, procesamiento y fabricación de nuevos productos.
                            Durante estos procesos, los residuos se transforman en materiales reutilizables, reduciendo la necesidad de recursos naturales.
                        </p>

                        <h3 class="card-title">Por qué Reciclar</h3>
                        <p class="card-text">
                            Reciclar ayuda a conservar recursos naturales, reducir la contaminación, disminuir la cantidad de residuos en vertederos
                            y minimizar el impacto ambiental. Cada pequeño esfuerzo cuenta para crear un futuro más sostenible.
                        </p>

                        <div class="text-center">
                            <img src="https://www.faxvirtual.com/blog//wp-content/uploads/2017/03/reciclar-papel1_opt.jpg" class="img-fluid mb-3" alt="Imagen 1">
                            <img src="https://independiente.com.py/wp-content/uploads/2022/05/reciclaje.jpg" class="img-fluid" alt="Imagen 2">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.scripts')
    </div>
</body>

</html>
