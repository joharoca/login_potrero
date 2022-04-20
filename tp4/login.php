<?php

$user=$_POST["user"];
$password=$_POST["password"];

$usuario="admin";
$contrasenia="1234";

if ($usuario == $user && $contrasenia == $password){
    header("location:https://frinkiac.com/");
} else {
    header("location:error.html");
}


?>