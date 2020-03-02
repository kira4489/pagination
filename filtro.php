<?php
include "./php/conexion1.php";


if(isset($_POST['buscar'])) {
    $q = $_POST['q'];
    $query = "SELECT * FROM estudiantes4 WHERE programa=".$q;
    $resEstudiantes4=$conexion->query($query);
    echo "<pre>".$resEstudiantes4."</pre>";
    exit;
}

$estudiantes4="SELECT * FROM estudiantes4 limit 10";
$resEstudiantes4=$conexion->query($estudiantes4);




?>
