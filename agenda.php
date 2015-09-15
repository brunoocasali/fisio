<?php
$conexao = mysql_connect ("localhost", "root", "");

mysql_select_db("fisio");

$resultado = mysql_query ("SELECT * FROM agenda");
$linhas = mysql_num_rows ($resultado);

echo "<p><b>Agenda</b></p><hr />";

for ($i=0 ; $i<$linhas ; $i++){
$reg = mysql_fetch_row($resultado);

echo "Evento: $reg[1] <br> Às $reg[2] Horas e $reg[3] minutos <br> Onde: $reg[4] <br> Data: $reg[5]<hr />";
}

mysql_close($conexao);
?>