<?php 
$NamaLengkap= $_GET['NamaLengkap'];
$NPM= $_GET['NPM'];
$Jenis_Kelamin= $_GET['Jenis_Kelamin'];
$TTL= $_GET['TTL'];
$Fakultas= $_GET['Fakultas'];
$Alamat= $_GET['Alamat'];
$NoTelp= $_GET['NoTelp'];
$NoHP= $_GET['NoHP'];
$NamaAyah= $_GET['NamaAyah'];
$NamaIbu= $_GET['NamaIbu'];
$Username= $_GET['username'];
$Password= $_GET['Password'];

echo "<h1 align='center' style='text-align:center'>Data Diri Anda</h1></br></br>
<body style='background:#939393 url(http://cs.unsyiah.ac.id/~alamri/gambar/001.png)'>
 <div style='background:#f2f2f2;width:600px; margin:0 auto'>
  <fieldset>
   <legend style='font-family:arial;'>Identitas diri</legend>
     <table>
      <tr><td>NIM</td><td>:</td><td>$NamaLengkap</td></tr>
      <tr><td>Nama</td><td>:</td><td>$NPM</td></tr>
      <tr><td>Kelamin</td><td>:</td><td>$Jenis_Kelamin</td></tr>
      <tr><td>Jurusan</td><td>:</td><td>$TTL</td></tr> 
      <tr><td>IPK</td><td>:</td><td>$Fakultas</td></tr>
	  <tr><td>IPK</td><td>:</td><td>$Alamat</td></tr> 
	  <tr><td>IPK</td><td>:</td><td>$NoTelp</td></tr> 
	  <tr><td>IPK</td><td>:</td><td>$NoHP</td></tr> 
	  <tr><td>IPK</td><td>:</td><td>$NamaAyah/td></tr> 
	  <tr><td>IPK</td><td>:</td><td>$NamaIbu</td></tr>
	  <tr><td>IPK</td><td>:</td><td>$Username</td></tr> 
	  <tr><td>IPK</td><td>:</td><td>$Password</td></tr>   
     </table>
  </fieldset>
 </div>
</body>";

?>