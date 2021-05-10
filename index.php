<?php
require_once("config.php");

//$sql = new Sql();
//$usuarios = $sql -> select("SELECT * FROM tb_usuarios");
//print_r ($usuarios);

//$root = new Usuario();
//$root -> loadById(1);
//echo $root;

//$lista = Usuario::getList();
//echo json_encode($lista);

$usuario = new Usuario();
$usuario ->login("root", "panico7");
echo $usuario;






?>