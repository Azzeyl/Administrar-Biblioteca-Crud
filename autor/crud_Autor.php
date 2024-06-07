<?php
// incluye la clase Db
require_once('../conexion.php');

class CrudAutor
{
    //Constructor de la clase
    public function __construct()
    {
    }

    //Metodo para insertar, recibe como parametro un objeto de tipo autor
    public function insertar_autor($autor)
    {
        $db = Db::conectar();
        $insert = $db->prepare('INSERT INTO autores values(NULL,:nombre,:apellido,:direccion,:telefono,:email,:ciudad)');//insertar datos tabla autores
        $insert->bindValue('nombre', $autor->getNombre());
        $insert->bindValue('apellido', $autor->getApellido());
        $insert->bindValue('direccion', $autor->getDireccion());
        $insert->bindValue('telefono', $autor->getTelefono());
        $insert->bindValue('email', $autor->getEmail());
        $insert->bindValue('ciudad', $autor->getCiudad());
        $insert->execute();
    }

    //Metodo para mostrar todos los Autores
    public function mostrar_autor()
    {
        $db = Db::conectar();
        $listaLibros = [];
        $select = $db->query('SELECT * FROM autores');

        foreach ($select->fetchAll() as $autor) {
            $myAutor = new Autor();//crea una variable de la instancia de la clase autor
            $myAutor->setId($autor['id']);
            $myAutor->setNombre($autor['nombre']);
            $myAutor->setApellido($autor['apellido']);
            $myAutor->setDireccion($autor['direccion']);
            $myAutor->setTelefono($autor['telefono']);
            $myAutor->setEmail($autor['email']);
            $myAutor->setCiudad($autor['ciudad']);
            $listaAutores[] = $myAutor;//vector guardar los autores consultados
        }
        return $listaAutores;
    }

    //Metodo para eliminar un autor, recibe como parametro el id del autor
    public function eliminar_Autor($id)
    {
        $db = Db::conectar();
        $eliminar = $db->prepare('DELETE FROM autores WHERE ID=:id');
        $eliminar->bindValue('id', $id);
        $eliminar->execute();
    }

    //Metodo para buscar un autor,recibe como parametro el id del autor
    public function obtenerAutor($id)
    {
        $db = Db::conectar();
        $select = $db->prepare('SELECT * FROM autores WHERE ID=:id');
        $select->bindValue('id', $id);
        $select->execute();
        $autor = $select->fetch();
        $myAutor = new Autor();
        $myAutor->setId($autor['id']);
        $myAutor->setNombre($autor['nombre']);//permite que aparescan los datos a actualizar en las cajas
        $myAutor->setApellido($autor['apellido']);
        $myAutor->setDireccion($autor['direccion']);
        $myAutor->setTelefono($autor['telefono']);
        $myAutor->setEmail($autor['email']);
        $myAutor->setCiudad($autor['ciudad']);
        return $myAutor;
    }

    //Metodo para actualizar un autor, recibe como parametro el autor
    public function actualizar_Autor($autor)
    {
        $db = Db::conectar();
        $actualizar = $db->prepare('UPDATE autores SET nombre=:nombre, apellido=:apellido, direccion=:direccion, telefono=:telefono, email=:email, ciudad=:ciudad  WHERE ID=:id');
        $actualizar->bindValue('id', $autor->getId());
        $actualizar->bindValue('nombre', $autor->getNombre());
        $actualizar->bindValue('apellido', $autor->getApellido());
        $actualizar->bindValue('direccion', $autor->getDireccion());
        $actualizar->bindValue('telefono', $autor->getTelefono());
        $actualizar->bindValue('email', $autor->getEmail());
        $actualizar->bindValue('ciudad', $autor->getCiudad());
        $actualizar->execute();
    }
}
?>