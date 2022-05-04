<?php
/**Created by Phpstorm. ... */ 

session_start();
include "servicos/servicoMensagemSessao.php";
include "servicos/servicoValidacao.php";
include "servicos/categoriaServico.php";

$nome = $_POST['nome'];
$idade= $_POST['idade'];

defineCategoriaCompetidor($nome, $idade);

header('location: index.php');


