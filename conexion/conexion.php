<?php

class conectar{
    private $servidor = "localhost";
    private $usuario = "root";
    private $bd = "formulario";
    private $password = "";

    public function conexion(){
        $conexion = mysqli_connect ($this->servidor,
                                    $this->usuario,
                                    $this->password,
                                    $this->bd);
        return $conexion;
    }
}

$obje = new conectar();
if ($obje->conexion()) {
    echo "conectado con exito";
} else {
    echo "No se pudo conectar con la base de datos";
}

?>