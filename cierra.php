<?php
include "sesion.php";
session_destroy();
if (isset($_COOKIE['_coockie'])) {
    setCookie('_coockie', '', time() - 1000);
}
header("Location: index.php"); 
?>