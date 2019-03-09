<?php
include('config.php');
 
$id = $_GET['id'];
 
$query = mysql_query("delete from data35 where user_id='$id'") or die(mysql_error());
 
if ($query) {
    header('location:Mainpage(admin).php?message=delete');
}
?>