<?php

header('Content-Type:text/html; charset=utf-8');

$con = @mysql_connect("localhost", "root", "") or die("Não foi possível conectar com o servidor de dados!");
mysql_select_db("fisio", $con) or die("Banco de dados não localizado!");
    
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

?>