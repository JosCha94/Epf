<?php
include ('conexion.php');
$nom_pro = $_POST['nom_pro'];
$pri_ape_pro = $_POST['pri_ape_pro'];
$seg_ape_pro = $_POST['seg_ape_pro'];
$est_pro= $_POST['est_pro'];
$user_pro= $_POST['user_pro'];
$pass_pro= $_POST['pass_pro'];

echo $sql = "insert into profesores (nom_pro, pri_ape_pro, seg_ape_pro, est_pro, user_pro, pass_pro )
    values('$nom_pro', '$pri_ape_pro', '$seg_ape_pro', '$est_pro', '$user_pro', '$pass_pro')";
    $res = pg_query($sql);

 header('location:epf2.html');

?>