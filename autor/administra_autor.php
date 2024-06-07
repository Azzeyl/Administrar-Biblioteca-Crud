<?php
//incluye la clase autor y CrudAutor
require_once('crud_Autor.php');
require_once('autor.php');

$crud = new CrudAutor();
$autor = new Autor();

//Si el elemento insertar no viene nulo llama al crud e insertar un autor
if (isset($_POST['insertar'])) {
    $autor->setNombre($_POST['nombre']);
    $autor->setApellido($_POST['apellido']);
    $autor->setDireccion($_POST['direccion']);
    $autor->setTelefono($_POST['telefono']);
    $autor->setEmail($_POST['email']);
    $autor->setCiudad($_POST['ciudad']);
    //llama a la funcion insertar definida en el crud
    $crud->insertar_autor($autor);
    header('Location: ../index.php');
    //Si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el autor
} elseif (isset($_POST['actualizar'])) {//pilas si toca cambiar
    $autor->setId($_POST['id']);
    $autor->setNombre($_POST['nombre']);
    $autor->setApellido($_POST['apellido']);
    $autor->setDireccion($_POST['direccion']);
    $autor->setTelefono($_POST['telefono']);
    $autor->setEmail($_POST['email']);
    $autor->setCiudad($_POST['ciudad']);
    $crud->actualizar_Autor($autor);
    header('Location: ../index.php');
    //Si la variable accion enviada por GET es == 'e' llama al crud y elimina un autor
} elseif ($_GET['accion'] == 'e') {
    $crud->eliminar_Autor($_GET['id']);
    header('Location: ../index.php');
    //Si la variable accion enviada por GET es == 'a', envia a la pagina actualizar.php
} elseif ($_GET['accion'] == 'a') {
    header('Location: actualizar_autor.php');
}
?>