<?php
//Incluye la clase autor de CrudLibro
require_once('crud_autor.php');//Crud autor
require_once('autor.php');//clase autor
$crud = new CrudAutor();
$autor = new Autor();
//Obtiene todos los libros con el metodo mostrar de la clase crud
$listaAutores = $crud->mostrar_autor();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Autor</title>
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
                    <div class="titulo center">Datos Autores</div>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        <form action='administra_autor.php' method='post'>
            <h4 style=" text-align: center;">Datos de los datos del Autores</h4>
            <table>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Direccion</td>
                <td>Telefono</td>
                <td>Email</td>
                <td>Ciudad</td>
                <td>Acciones</td>
                <?php foreach ($listaAutores as $autor) { ?>
                    <tr>
                        <td>
                            <?php echo $autor->getNombre() ?>
                        </td>
                        <td>
                            <?php echo $autor->getApellido() ?>
                        </td>
                        <td>
                            <?php echo $autor->getDireccion() ?>
                        </td>
                        <td>
                            <?php echo $autor->getTelefono() ?>
                        </td>
                        <td>
                            <?php echo $autor->getEmail() ?>
                        </td>
                        <td>
                            <?php echo $autor->getCiudad() ?>
                        </td>
                        <td><a href="actualizar_autor.php?id=<?php echo $autor->getId() ?>&accion=a"><i
                                    class="fa-solid fa-pencil" style="color: #74C0FC;padding: 10px"></i></a>
                            <a href="administra_autor.php?id=<?php echo $autor->getId() ?>&accion=e"><i
                                    class="fa-solid fa-xmark" style="color: #74C0FC;"></i></a>
                        </td>
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