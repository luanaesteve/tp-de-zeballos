<?php
$pregunta_hijos = $_GET['hijos'];
$cantidad_hijos = $_GET['cantidad'];
$casamiento = $_GET['casamiento'];
$patagonia = $_GET['patagonia'];
$submit = $_GET['submit'];

if ($_REQUEST['hijos'] == "si") {
    $pregunta_hijos = $_POST["hijos"];
    echo $_REQUEST['hijos']."si tiene hijos"; 
}

?>