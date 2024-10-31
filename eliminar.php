<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/estilo.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Eliminar Dato</title>
</head>

<body>
    <div id="fondo2">
        <fieldset>
            <header>
                <legend>
                    <h2>Eliminar Registro</h2>
                </legend>
            </header>
            <section class="contenido">
                <p>
                    <?php
                    // Conexión a la base de datos
                    include('config.php');

                    // Verificar si se ha enviado un número de registro válido
                    if (isset($_GET['NumeroRegistro']) && is_numeric($_GET['NumeroRegistro'])) {
                        $NumeroRegistro = $_GET['NumeroRegistro'];

                        // Consulta para eliminar el registro
                        $eliminarConsulta = "DELETE FROM registro WHERE NumeroRegistro = $NumeroRegistro";
                        $resultadoEliminacion = mysqli_query($conexion, $eliminarConsulta);

                        if ($resultadoEliminacion) {
                            echo 'Registro eliminado correctamente.';
                        } else {
                            echo 'Error al eliminar el registro: ' . mysqli_error($conexion);
                        }
                    } else {
                        echo 'Número de registro no válido.';
                    }

                    // Cerrar la conexión a la base de datos
                    mysqli_close($conexion);
                    ?>
                </p>
            </section>
            <footer>
                <p>
                    <a href="Registros.php">Volver a la página de Registros</a>
                </p>
            </footer>
        </fieldset>
    </div>
</body>

</html>