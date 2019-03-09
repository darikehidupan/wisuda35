<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_W35 = "localhost";
$database_W35 = "wisuda35";
$username_W35 = "root";
$password_W35 = "";
$W35 = mysql_pconnect($hostname_W35, $username_W35, $password_W35) or trigger_error(mysql_error(),E_USER_ERROR); 
?>