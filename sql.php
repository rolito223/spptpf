<?php
// Conectando, seleccionando la base de datos
$link = mysql_connect('mysql_host', 'mysql_user', 'mysql_password')
    or die('No se pudo conectar: ' . mysql_error());
echo 'Conexion exitosa';
mysql_select_db('my_database') or die('No se pudo seleccionar la base de datos');
>