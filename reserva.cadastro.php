<?php

//Incluindo o sistema de autenticação

include('acesso_com.php');



//Incluindo o Arquivo de conexão

include('../conexoes/conexao.php');



//Selecionando os dados

$consulta = "select * from vw_tbprodutos order by descri_produto asc";


//Buscar a lista completa de produtos

$lista = $conexao->query($consulta);



//Separar produtos por linha

?>
