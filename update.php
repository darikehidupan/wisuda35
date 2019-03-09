<?php
include('config.php');
 
//tangkap data dari form
$id = $_POST['user_id'];
$NamaLengkap= $_POST['NamaLengkap'];
$NPM= $_POST['NPM'];
$Jenis_Kelamin= $_POST['Jenis_Kelamin'];
$TTL= $_POST['TTL'];
$Fakultas= $_POST['Fakultas'];
$Alamat= $_POST['Alamat'];
$NoTelp= $_POST['NoTelp'];
$NoHP= $_POST['NoHP'];
$NamaAyah= $_POST['NamaAyah'];
$NamaIbu= $_POST['NamaIbu'];
$username= $_POST['username'];
$password= $_POST['password'];
$NomorKursi= $_POST['NomorKursi'];
$status= $_POST['status'];
 
//update data di database sesuai user_id
$query = mysql_query("update data35 set NamaLengkap='$NamaLengkap', NPM='$NPM', Jenis_Kelamin='$Jenis_Kelamin', TTL='$TTL', Fakultas='$Fakultas', Alamat='$Alamat', NoTelp='$NoTelp', NoHP='$NoHP', NamaAyah='$NamaAyah', NamaIbu='$NamaIbu', username='$username', password='$password', NomorKursi='$NomorKursi', status='$status' where user_id='$id'") or die(mysql_error());

if ($query) {
    header('location:Mainpage(admin).php');
}

?>