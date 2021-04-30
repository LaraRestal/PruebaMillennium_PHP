<?php


class metodos{
    public function insertarDatos($nombre, $apellidos){
        try {
            $con = new conectar();
            $conexion = $con->conexion();

            echo $nombre;
            echo $apellidos;

            $sql = "INSERT INTO `persona`(`id`, `nombre`, `apellidos`) VALUES ('','$nombre', '$apellidos')";

            return $result = mysqli_query($conexion, $sql);
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }
}

?>