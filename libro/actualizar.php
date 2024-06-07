<?php
//Incluye la clase Libro y CrudLibro
require_once('crud_libro.php');
require_once('book.php');
$crud = new CrudLibro();
$libro = new Libro();
//Busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php
$libro = $crud->obtenerLibro($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Libro</title>
    <!-- Materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="../styles/estilos.css">
    <script src="https://kit.fontawesome.com/bbaa0992cc.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Navbar -->
    <header>
        <nav class="ingreso">
            <div class="nav-wrapper">
                <div class="container">
                    <div class="titulo center">Actualizar Datos Libros</div>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        <form action='administra_libro.php' method='post'>
            <h4>Actualizar Datos</h4>
            <table border=10px>
                <tr>
                    <input type='hidden' name='id' value='<?php echo $libro->getId() ?>'>
                    <td>Nombre libro:</td>
                    <td><input type='text' name='nombre' value='<?php echo $libro->getNombre() ?>'></td>
                </tr>
                <input type='hidden' name='actualizar' value='actualizar'>
            </table>
            <div class="container">
                <button class="unboton" type="submit" style="background-color: transparent; border: none;">
                    <!-- Botón con apariencia de enlace -->
                    <i class="fas fa-save fa-2x" style="color: #74C0FC;"></i> <!-- Icono de Font Awesome -->
                </button>
                <!-- volver-->
                <a class="unboton" href="../index.php"><i class="fas fa-undo fa-2x" style="color: #74C0FC;"></i></a>
            </div>
        </form>
    </div>
    <!-- Footer -->
    <footer>
        Administrar Biblioteca
        <br>
        Jonatan Camilo Igua Contreras
        <br>
        2024
    </footer>

    <!-- JavaScript Materialize -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>