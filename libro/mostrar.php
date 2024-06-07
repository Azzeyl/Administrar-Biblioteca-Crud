<?php
//Incluye la clase libro de CrudLibro
require_once('crud_libro.php');
require_once('book.php');
$crud = new CrudLibro();
$libro = new Libro();
//Obtiene todos los libros con el metodo mostrar de la clase crud
$listaLibros = $crud->mostrar();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Libros</title>
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
                    <div class="titulo center">Datos Libros</div>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        <form action='administra_autor.php' method='post'>
            <h4 >Datos de los libros</h4>
            <table border=10px>
                <td>Nombre</td>
                <td>Actualizar</td>
                <td>Eliminar</td>
                <?php foreach ($listaLibros as $libro) { ?>
                    <tr>
                        <td>
                            <?php echo $libro->getNombre() ?>
                        </td>
                        <td><a href="actualizar.php?id=<?php echo $libro->getId() ?>&accion=a"><i class="fa-solid fa-pencil"
                                    style="color: #74C0FC;"></i></a></td>
                        <td><a href="administra_libro.php?id=<?php echo $libro->getId() ?>&accion=e"><i
                                    class="fa-solid fa-xmark" style="color: #74C0FC;"></i></a></td>
                    </tr>
                <?php } ?>
            </table>
            <div class="container"><!--Boton guardar-->
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