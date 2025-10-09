<?php 
//Database connection 
$supa_host     = "aws-1-us-east-2.pooler.supabase.com"; //127.0.0.1
$supa_user     = "postgres.kdsiaxleilwgtxnvtcdh";
$supa_dbname   = "postgres";
$supa_password = "unicesmag@@";
$supa_port     = "6543";

//Database connection 
$local_host     = "localhost"; //127.0.0.1
$local_user     = "postgres";
$local_dbname   = "marketapp";
$local_password = "unicesmag";
$local_port     = "5432";



$supa_data_connection = "
    host=$supa_host    
    user=$supa_user
    password=$supa_password
    dbname=$supa_dbname 
    port=$supa_port
";

$local_data_connection = "
    host=$local_host
    user=$local_user
    password=$local_password
    dbname=$local_dbname 
    port=$local_port
";

$conn_supa= pg_connect($supa_data_connection);

if(!$conn_supa){
    echo "Error";

}else{
    echo"Connection successfuly :::";
}

?>