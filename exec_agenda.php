<?php

//Cria as variáveis:

$patologia = $_POST["patologia"];
$profissional = $_POST["profissional"];
$data = $_POST["data"];
$horario = $_POST["horario"];

// conectando ao servidor:

require_once "conexao.php";

$basedados = mysql_select_db("fisio");

$cadastrar = mysql_query("INSERT INTO agenda (patologia, profissional, data, horario) VALUES ('$patologia', '$profissional', '$data', '$horario')", $con);

if ($cadastrar == 1){

}else{ echo "ERRO";}

//Esse script dará um alerta de que foi inserido com sucesso e chamará a página de resultados

echo "<script>alert('Seu evento foi inserido com sucesso. Obrigado!');";
echo "location.href='verificar_agenda.php'</script>";

?>