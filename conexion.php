<?php

	function conexion(){

	$host = "host=dpg-d2nmba8gjchc73dkdkh0-a.oregon-postgres.render.com";
	$port = "port=5432";
	$dbname = "dbname=examplenubedb";
	$user = "user=examplenubedb_user";
	$password = "password=zEHHy52Y6rBEdicHZ46kCfzwyTd0hr0Q";

	$db = pg_connect("$host $port $dbname $user $password");

	return $db;
}
?>