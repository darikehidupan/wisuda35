<?php
include('config.php');
?>
 
<html>
<head>
<title>Edit</title>
</head>
 
<body>
<h1>Form Input Data</h1>
 
<?php
$id = $_GET['id'];
 
$query = mysql_query("select * from data35 where user_id='$id'") or die(mysql_error());
 
$data = mysql_fetch_array($query);
?>
 
<form name="update_data" action="update.php" method="post">
<input type="hidden" name="user_id" value="<?php echo $id; ?>" />
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
     	<tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" name="NamaLengkap" maxlength="20" required value="<?php echo $data['NamaLengkap']; ?>" /></td>
        </tr>
        <tr>
            <td>NPM</td>
            <td>:</td>
            <td><input type="text" name="NPM" maxlength="20" required value="<?php echo $data['NPM']; ?>" /></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="text" name="Jenis_Kelamin" maxlength="20" required value="<?php echo $data['Jenis_Kelamin']; ?>" /></td>
        </tr>
        <tr>
         <tr>
            <td>TTL</td>
            <td>:</td>
            <td><input type="text" name="TTL" maxlength="20" required value="<?php echo $data['TTL']; ?>" /></td>
        </tr>
        <tr>
           	<td>Fakultas</td>
            <td>:</td>
            <td><input type="text" name="Fakultas" maxlength="20" required value="<?php echo $data['Fakultas']; ?>" /></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="Alamat" maxlength="20" required value="<?php echo $data['Alamat']; ?>" /></td>
        </tr>
        <tr>
            <td>NoTelp</td>
            <td>:</td>
            <td><input type="text" name="NoTelp" maxlength="20" required value="<?php echo $data['NoTelp']; ?>" /></td>
        </tr>
        <tr>
            <td>No HP</td>
            <td>:</td>
            <td><input type="text" name="NoHP" maxlength="20" required value="<?php echo $data['NoHP']; ?>" /></td>
        </tr>
        <tr>
            <td>NamaAyah</td>
            <td>:</td>
            <td><input type="text" name="NamaAyah" maxlength="20" required value="<?php echo $data['NamaAyah']; ?>" /></td>
        </tr>
        <tr>
            <td>NamaIbu</td>
            <td>:</td>
            <td><input type="text" name="NamaIbu" maxlength="20" required value="<?php echo $data['NamaIbu']; ?>" /></td>
        </tr>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" maxlength="20" required value="<?php echo $data['username']; ?>"/></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="password" maxlength="20" required value="<?php echo $data['password']; ?>" /></td>
        </tr>
		<tr>
        <tr>
            <td>NomorKursi</td>
            <td>:</td>
            <td><input type="text" name="NomorKursi" maxlength="20" required value="<?php echo $data['NomorKursi']; ?>" /></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>:</td>
            <td><input type="text" name="status" maxlength="20" required value="<?php echo $data['status']; ?>" /></td>
        </tr>
            <td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
        </tr>
    </tbody>
</table>
</form>
 
<a href="Mainpage(admin).php">Lihat Data</a>
 
</body>
</html>