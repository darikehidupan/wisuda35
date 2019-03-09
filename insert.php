<?php
//panggil file config.php untuk menghubung ke server
include('config.php');
 
//tangkap data dari form
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
$Status= $_POST['Status'];

//simpan data ke database
$query = mysql_query("insert into data35 values('','$NamaLengkap', '$NPM', '$Jenis_Kelamin', '$TTL', '$Fakultas', '$Alamat', '$NoTelp', '$NoHP', '$NamaAyah', '$NamaIbu', '$username', '$password', '$NomorKursi', '$Status')")or die(mysql_error());
 
if ($query) {
    header('location:index.php?message=success');
}
?>