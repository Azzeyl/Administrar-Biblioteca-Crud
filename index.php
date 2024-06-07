<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrar Biblioteca</title>
    <!-- Materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="styles/estilos.css">
    <script src="https://kit.fontawesome.com/bbaa0992cc.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Navbar -->
    <header>
        <nav>
            <div class="nav-wrapper">
                <div class="container">
                    <div class="titulo center">Bienvenido a Administrar Biblioteca</div>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="row">
            <!-- Carta de libro -->
            <div class="col s12 m6 l4"> <!-- Ajuste en las clases de la rejilla para separar las cartas -->
                <div class="card">
                    <div class="card-image">
                        <img src="img/biblioteca.jpg">
                        <span class="card-title">Libros</span>
                    </div>
                    <div class="card-content">
                        <tr>
                            <p>Libros disponibles en la Biblioteca.</p>
                        </tr>
                    </div>
                    <table border="10px">
                        <tr>
                            <td><a href="libro/ingresar.php"><i class="fa-solid fa-right-to-bracket fa-2xl"
                                        style="color: #74C0FC;"></i></a></td>
                            <td><a href="libro/mostrar.php"><i class="fa-solid fa-eye fa-2xl"
                                        style="color: #74C0FC;"></i></a></td>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- Carta de Autor -->
            <div class="col s12 m6 l4"> <!-- Ajuste en las clases de la rejilla para separar las cartas -->
                <div class="card">
                    <div class="card-image">
                        <img src="img/autores.jpg">
                        <span class="card-title">Autores</span>
                    </div>
                    <div class="card-content">
                        <p>Autores de los libros registrados.</p>
                    </div>
                    <table border="10px">
                        <tr>
                            <td><a href="autor/ingresar_Autor.php"><i class="fa-solid fa-right-to-bracket fa-2xl"
                                        style="color: #74C0FC;"></i></a></td>
                            <td><a href="autor/mostrar_Autor.php"><i class="fa-solid fa-eye fa-2xl"
                                        style="color: #74C0FC;"></i></a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
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