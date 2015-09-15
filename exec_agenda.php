<?php

$patologia = $_POST["patologia"];
$profissional = $_POST["profissional"];
$data = $_POST["data"];
$horario = $_POST["horario"];

require_once "conexao.php";

$basedados = mysql_select_db("fisio");
$cadastrar = mysql_query("INSERT INTO agenda (patologia, profissional, data, horario) VALUES ('$patologia', '$profissional', '$data', '$horario')", $con);

if ($cadastrar == 1){
}else{ 
	echo "ERRO";
}

echo "<script>alert('Salvou!');";
echo "location.href='verificar_agenda.php'</script>";

?>