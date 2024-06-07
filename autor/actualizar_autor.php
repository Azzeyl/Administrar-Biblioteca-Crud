<?php
//Incluye la clase Autor y CrudAutor
require_once('crud_autor.php');
require_once('autor.php');
$crud = new CrudAutor();
$autor = new Autor();
//Busca el autor utilizando el id, que es enviado por GET desde la vista mostrar_Autor.php
$autor = $crud->obtenerAutor($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Autor</title>
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
                    <div class="titulo center">Actualizar Datos Autores</div>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        <form action='administra_autor.php' method='post'>
            <h4>Actualizar Datos</h4>
            <table border=10px>
                <tr>
                    <input type='hidden' name='id' value='<?php echo $autor->getId() ?>'>
                    <td>Nombre Autor:</td>
                    <td><input type='text' name='nombre' value='<?php echo $autor->getNombre() ?>'></td>
                    <td>Apellido Autor:</td>
                    <td><input type='text' name='apellido' value='<?php echo $autor->getApellido() ?>'></td>
                    <td>Direccion:</td>
                    <td><input type='text' name='direccion' value='<?php echo $autor->getDireccion() ?>'></td>
                    <td>Telefono:</td>
                    <td><input type='text' name='telefono' value='<?php echo $autor->getTelefono() ?>'></td>
                    <td>Email:</td>
                    <td><input type='text' name='email' value='<?php echo $autor->getEmail() ?>'></td>
                    <td>Ciudad:</td>
                    <td><input type='text' name='ciudad' value='<?php echo $autor->getCiudad() ?>'></td>
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