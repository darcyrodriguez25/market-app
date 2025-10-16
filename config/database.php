<?php
$supa_host = "localhost";
$supa_port = "5432";
$supa_dbname = "market-app";
$supa_user = "postgres";
$supa_password = "postgres";

$local_data_connection = "
host=$supa_host
port=$supa_port
dbname=$supa_dbname
user=$supa_user
password=$supa_password
";

$connection_supa = pg_connect($local_data_connection);

if (!$connection_supa) {
    die("Error de conexión a PostgreSQL: " . pg_last_error());
}

return $connection_supa;
?>