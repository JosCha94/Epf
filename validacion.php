<?php
session_start();
include ('conexion.php');

$user = $_POST['user'];
$pass = $_POST['pass'];

if((!$user) || (!$pass)){
    header("location: index.html");
}else{
    $sql = "SELECT * FROM alumnos WHERE user_alu = '$user' AND pass_alu = '$pass' AND hab_alu='t' ;";
    $res = pg_query($sql);
    $login_check = pg_num_rows($res);

    if ($login_check > 0){
        while($row = pg_fetch_array($res)){

            $_SESSION['usuario_usr'] = $row['user_alu'];
            $_SESSION['nombre_usr'] = $row['nom_alu'];

            header("location: campus.html");
        }
       }else{
              header("location: index.html");
        }
    }
?>

