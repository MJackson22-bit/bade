<?php
$cnx = new PDO("mysql:host=localhost;dbname=usuariosservice","root", "root");
$res=$cnx->query("select * from usuarios");
$datos= array();
foreach ($res as $row){
    array_push($datos, array(
        'email'=>$row['email'],
        'telefono'=>$row['telefono'],
            'nombre'=>$row['nombre']
    ));
}
echo utf8_encode(json_encode($datos));
?>
