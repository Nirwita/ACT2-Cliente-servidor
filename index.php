
<?php
$titulo = "Formulario de contacto";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $titulo ?></title>

    <!-- Bootstrap -->
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >

    <!-- CSS propio -->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <!-- Contenedor principal -->
    <div class="container mt-5">

        <!-- Centrar y reducir el ancho -->
        <div class="row justify-content-center">
            <div class="col-md-6">

                <!-- Card -->
                <div class="card">

                    <div class="card-body p-4">

                        <h1 class="text-center mb-4">
                            <?= $titulo ?>
                        </h1>

                        <p class="text-center mb-4">
                            Puedes utilizar este formulario para ponerte en contacto conmigo.
                        </p>

                        <form action="#" method="post">

                            <!-- Nombre -->
                            <div class="mb-3">
                                <label for="nombre" class="form-label">
                                    Nombre
                                </label>

                                <input 
                                    type="text"
                                    class="form-control"
                                    id="nombre"
                                    name="nombre"
                                    placeholder="Escribe tu nombre"
                                    required
                                >
                            </div>

                            <!-- Correo electrónico -->
                            <div class="mb-3">
                                <label for="correo" class="form-label">
                                    Correo electrónico
                                </label>

                                <input 
                                    type="email"
                                    class="form-control"
                                    id="correo"
                                    name="correo"
                                    placeholder="ejemplo@correo.com"
                                    required
                                >
                            </div>

                            <!-- Asunto -->
                            <div class="mb-3">
                                <label for="asunto" class="form-label">
                                    Asunto
                                </label>

                                <input 
                                    type="text"
                                    class="form-control"
                                    id="asunto"
                                    name="asunto"
                                    placeholder="Escribe el asunto"
                                    required
                                >
                            </div>

                            <!-- Mensaje -->
                            <div class="mb-3">
                                <label for="mensaje" class="form-label">
                                    Mensaje
                                </label>

                                <textarea
                                    class="form-control"
                                    id="mensaje"
                                    name="mensaje"
                                    rows="5"
                                    placeholder="Escribe tu mensaje"
                                    required
                                ></textarea>
                            </div>

                            <!-- Botón -->
                            <div class="d-grid mt-4">
                                <button 
                                    type="submit" 
                                    class="btn btn-light"
                                >
                                    Enviar
                                </button>
                            </div>

                        </form>

                    </div>

                </div>

            </div>
        </div>

    </div>
<script src="js/app.js"></script>
</body>
</html>






