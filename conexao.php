<?php

header('Content-Type:text/html; charset=utf-8');

function pg_connection_string_from_database_url() {
  extract(parse_url($_ENV["DATABASE_URL"]));
  return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
}

$con = pg_connect(pg_connection_string_from_database_url()) or die("Não foi possível conectar com o servidor de dados!");

echo "-----------------------------------------------------------\n\n"
echo $_ENV["DATABASE_URL"]
echo "-----------------------------------------------------------\n\n"
?>
