<?php
// incluye la clase Db
//SE PUEDE UNIR LOS CRUD DE LIBRO Y AUTOR PERO TOCA CAMBIAR EL NOMBRE DE crud_Libro por crud_Global y mirar cada llamada
require_once('../conexion.php');//cambia direccion

class CrudLibro
{
    //Constructor de la clase
    public function __construct()
    {
    }

    //Metodo para insertar, recibe como parametro un objeto de tipo libro
    public function insertar($libro)
    {
        $db = Db::conectar();
        $insert = $db->prepare('INSERT INTO libros values(NULL,:nombre)');
        $insert->bindValue('nombre', $libro->getNombre());
        $insert->execute();
    }

    //Metodo para mostrar todos los libros
    public function mostrar()
    {
        $db = Db::conectar();
        $listaLibros = [];
        $select = $db->query('SELECT * FROM libros');

        foreach ($select->fetchAll() as $libro) {
            $myLibro = new libro();
            $myLibro->setId($libro['id']);
            $myLibro->setNombre($libro['nombre']);
            $listaLibros[] = $myLibro;
        }
        return $listaLibros;
    }

    //Metodo para eliminar un libro, recibe como parametro el id del libro
    public function eliminar($id)
    {
        $db = Db::conectar();
        $eliminar = $db->prepare('DELETE FROM libros WHERE ID=:id');
        $eliminar->bindValue('id', $id);
        $eliminar->execute();
    }

    //Metodo para buscar un libro,recibe como parametro el id del libro
    public function obtenerLibro($id)
    {
        $db = Db::conectar();
        $select = $db->prepare('SELECT * FROM libros WHERE ID=:id');
        $select->bindValue('id', $id);
        $select->execute();
        $libro = $select->fetch();
        $myLibro = new Libro();
        $myLibro->setId($libro['id']);
        $myLibro->setNombre($libro['nombre']);
        return $myLibro;
    }

    //Metodo para actualizar un libro, recibe como parametro el libro
    public function actualizar($libro)
    {
        $db = Db::conectar();
        $actualizar = $db->prepare('UPDATE libros SET nombre=:nombre WHERE ID=:id');
        $actualizar->bindValue('id', $libro->getId());
        $actualizar->bindValue('nombre', $libro->getNombre());
        $actualizar->execute();
    }
}


?>