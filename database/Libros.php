<?php
require_once 'BibliotecaDB.php';
class Libros
{
    private $id;
    private $nombre;
    private $autor;
    private $descripcion;
    private $genero;
    private $publicacion;
    private $imagen;
    private $reservas;

    function __construct($id = 0, $nombre = "", $autor = "", $descripcion = "", $genero = "", $publicacion = "", $imagen = "", $reservas = 0)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->autor = $autor;
        $this->descripcion = $descripcion;
        $this->genero = $genero;
        $this->publicacion = $publicacion;
        $this->imagen = $imagen;
        $this->reservas = $reservas;
    }

    public function insert()
    {
        $conexion = BibliotecaDB::connectDB();
        $insercion = "INSERT INTO libros (nombre, autor, descripcion, genero, publicacion, imagen, reservas) VALUES ('$this->nombre', '$this->autor', '$this->descripcion', '$this->genero', '$this->publicacion', '$this->imagen')";
        $conexion->exec($insercion);
    }
    public function delete()
    {
        $conexion = BibliotecaDB::connectDB();
        $borrado = "DELETE FROM articulos WHERE id=$this->id";
        $conexion->exec($borrado);
    }
    public function update()
    {
        $conexion = BibliotecaDB::connectDB();
        $actualiza = "UPDATE libros SET nombre='$this->nombre', autor='$this->autor', descripcion='$this->descripcion', genero='$this->genero', publicacion='$this->publicacion', imagen='$this->imagen' WHERE id='$this->id'";
        $conexion->exec($actualiza);
    }
    public static function getLibros()
    {
        $conexion = BibliotecaDB::connectDB();
        $seleccion = "SELECT * FROM libros ORDER BY publicacion DESC";
        $consulta = $conexion->query($seleccion);
        $libros = [];
        while ($registro = $consulta->fetchObject()) {
            $libros[] = new Libros($registro->id, $registro->nombre, $registro->autor, $registro->descripcion, $registro->genero, $registro->publicacion, $registro->imagen, $registro->reservas);
        }
        return $libros;
    }
    public static function getLibroById($id)
    {
        $conexion = BibliotecaDB::connectDB();
        $seleccion = "SELECT * FROM libros WHERE id='$id'";
        $consulta = $conexion->query($seleccion);
        $registro = $consulta->fetchObject();
        $libro = new Libros($registro->id, $registro->nombre, $registro->autor, $registro->descripcion, $registro->genero, $registro->publicacion, $registro->imagen, $registro->reservas);
        return $libro;
    }
    public static function getLibrosByGenero($genero)
    {
        $conexion = BibliotecaDB::connectDB();
        $seleccion = "SELECT * FROM libros WHERE genero='$genero'";
        $consulta = $conexion->query($seleccion);
        $libros = [];
        while ($registro = $consulta->fetchObject()) {
            $libros[] = new Libros($registro->id, $registro->nombre, $registro->autor, $registro->descripcion, $registro->genero, $registro->publicacion, $registro->imagen, $registro->reservas);
        }
        return $libros;
    }
    public static function getLibrosByReservas()
    {
        $conexion = BibliotecaDB::connectDB();
        $seleccion = "SELECT * FROM libros ORDER BY reservas DESC";
        $consulta = $conexion->query($seleccion);
        $libros = [];
        while ($registro = $consulta->fetchObject()) {
            $libros[] = new Libros($registro->id, $registro->nombre, $registro->autor, $registro->descripcion, $registro->genero, $registro->publicacion, $registro->imagen, $registro->reservas);
        }
        return $libros;
    }
    public static function getLibrosByFecha()
    {
        $conexion = BibliotecaDB::connectDB();
        $seleccion = "SELECT * FROM libros ORDER BY publicacion DESC";
        $consulta = $conexion->query($seleccion);
        $libros = [];
        while ($registro = $consulta->fetchObject()) {
            $libros[] = new Libros($registro->id, $registro->nombre, $registro->autor, $registro->descripcion, $registro->genero, $registro->publicacion, $registro->imagen, $registro->reservas);
        }
        return $libros;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of autor
     */ 
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     *
     * @return  self
     */ 
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */ 
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of genero
     */ 
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     *
     * @return  self
     */ 
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of publicacion
     */ 
    public function getPublicacion()
    {
        return $this->publicacion;
    }

    /**
     * Set the value of publicacion
     *
     * @return  self
     */ 
    public function setPublicacion($publicacion)
    {
        $this->publicacion = $publicacion;

        return $this;
    }

    /**
     * Get the value of imagen
     */ 
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set the value of imagen
     *
     * @return  self
     */ 
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get the value of reservas
     */ 
    public function getReservas()
    {
        return $this->reservas;
    }

    /**
     * Set the value of reservas
     *
     * @return  self
     */ 
    public function setReservas($reservas)
    {
        $this->reservas = $reservas;

        return $this;
    }
}
