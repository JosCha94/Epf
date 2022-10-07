<?php
include ('conexion.php');
$nom_cur = $_POST['nom_cur'];
$nom_pro = $_POST['nom_pro'];
$peri_cur = $_POST['peri_cur'];
$grup_cur= $_POST['grup_cur'];

echo $sql = "insert into cursos (nom_cur, pro_cur, peri_cur, grup_cur)
    values('$nom_cur', '$nom_pro', '$peri_cur', '$grup_cur')";
    $res = pg_query($sql);

 header('location:epf2.html');

?>