<?php

$nombre     = $_POST['nombre'];
$apellido   = $_POST['apellido'];
$dni        = $_POST['dni'];
$telefono   = $_POST['telefono'];
$sexo        = $_POST['sexo'];

if( !empty( $nombre ) || !empty( $apellido ) || !empty( $dni ) || !empty($telefono) || !empty($sexo) ){

    $con = mysqli_connect('localhost', 'root', '','hospital') or die('Error en la conexion al servidor'); 
    $sql = "INSERT INTO usuarios VALUES (null,'".$nombre."', '".$apellido."', ".$dni.", '".$telefono."', ".$sexo.")";

    $resul = mysqli_query($con, $sql) or die('error en la query');
    mysqli_close($con);

}
else{
    echo "Los campos no deben de estar en blanco";
    die();
}



echo "usuario".$nombre;
?>