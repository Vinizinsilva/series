<?php
$conexao = mysqli_connect("localhost","root","","novelas");
$nome = $_POST['nome'];
$atrizprotagonista = $_POST['atrizprotagonista'];
$atorprotagonista = $_POST['atorprotagonista'];
$totalepisodios = $_POST['totalepisodios'];
$sinopse = $_POST['sinopse'];
$sql_inserir = "insert into tabnovelas(nome,atrizprotagonista,atorprotagonista,totalepisodios,sinopse) values ('{$nome}','{$atrizprotagonista}','{$atorprotagonista}',{$totalepisodios},'{$sinopse}')";
mysqli_query($conexao,$sql_inserir);
mysqli_close($conexao);

?>