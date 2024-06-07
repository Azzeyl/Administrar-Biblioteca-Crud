<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Autor</title>
    <!-- Materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="../styles/estilos.css">
    <script src="https://kit.fontawesome.com/bbaa0992cc.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Navbar -->
    <header class="ingreso">
        <nav class="ingreso">
            <div class="nav-wrapper">
                <div class="container">
                    <div class="titulo center">Ingresar Autores</div>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        <form action='administra_autor.php' method='post'>
            <h4>Ingresa los datos del Autor</h4>
            <table>
                <tr>
                    <td>Nombre:</td>
                    <td><input type='text' name='nombre'></td>
                </tr>
                <tr>
                    <td>Apellido:</td>
                    <td><input type='text' name='apellido'></td>
                </tr>
                <tr>
                    <td>Direccion:</td>
                    <td><input type='text' name='direccion'></td>
                </tr>
                <tr>
                    <td>Telefono:</td>
                    <td><input type='text' name='telefono'></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type='text' name='email'></td>
                </tr>
                <tr>
                    <td>Ciudad:</td>
                    <td><input type='text' name='ciudad'></td>
                </tr>
                <input type='hidden' name='insertar' value='insertar'>
            </table>
            <div class="container"><!--Boton guardar-->
                <button class="unboton" type="submit" style="background-color: transparent; border: none;">
                    <!-- Botón con apariencia de enlace -->
                    <i class="fas fa-save fa-2x" style="color: #74C0FC;"></i> <!-- Icono de Font Awesome -->
                </button>
                <!--Volver-->
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