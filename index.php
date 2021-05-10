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

//$usuario = new Usuario();
//$usuario ->login("root", "panico7");
//echo $usuario;

/*$aluno = new Usuario();
$aluno -> setDessenha("1234");
$aluno -> setDeslogin("jao");
$aluno -> insert();
echo $aluno;
*/

/*$usuario = new Usuario();
$usuario -> loadById(6);
$usuario -> update("joao", "123456");
echo $usuario;
*/

$usuario = new Usuario();
$usuario -> loadById(7);
$usuario -> delete();
echo $usuario;









?>