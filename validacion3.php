<?php
session_start();
include ('conexion.php');

$user = $_POST['user'];
$pass = $_POST['pass'];

if((!$user) || (!$pass)){
    header("location: login2.html");
}else{
    $sql = "SELECT * FROM profesores WHERE user_pro = '$user' AND pass_pro = '$pass' AND hab_pro='t' ;";
    $res = pg_query($sql);
    $login_check = pg_num_rows($res);

    if ($login_check > 0){
        while($row = pg_fetch_array($res)){

            $_SESSION['usuario_usr'] = $row['user_pro'];
            $_SESSION['nombre_usr'] = $row['nom_pro'];

            header("location: epf3.html");
        }
       }else{
              header("location: login2.html");
        }
    }
?>

