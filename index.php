<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration</title>
<link rel="stylesheet" type="text/css" href="css/registration.css" />
<script type="text/javascript">
function updateClock (){
  var currentTime = new Date ( );
  var currentHours = currentTime.getHours ();
  var currentMinutes = currentTime.getMinutes ();
  var currentSeconds = currentTime.getSeconds ();
  currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;
  currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;
  var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";
  currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;
  currentHours = ( currentHours == 0 ) ? 12 : currentHours;
  var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;
  document.getElementById("clock").firstChild.nodeValue = currentTimeString;
}
</script>

</head>
<body onload="updateClock(); setInterval('updateClock()', 1000 )"; style="background-image:url(img/backgrounds-for-website-9.jpg)">   
    <div id="info">
    <h>Form Registrasi</h>
    </div>
 
	<div id="time">
    <h>Hari ini :
    <script type="text/javascript">
	var currentTimes = new Date()
	var bulan = currentTimes.getMonth()+1
	var day = currentTimes.getDate()
	var year = currentTimes.getFullYear()
	if(bulan == 1){
	bulan = "Januari";
	}
	else if(bulan == 2){
	bulan = "Februari";
	}
	else if(bulan == 3){
	bulan = "Maret";
	}
	else if(bulan == 4){
	bulan = "April";
	}
	else if(bulan == 5){
	bulan = "Mei";
	}
	else if(bulan == 6){
	bulan = "Juni ";
	}
	else if(bulan == 7){
	bulan = "Juli";
	}
	else if(bulan == 8){
	bulan = "Agustus";
	}
	else if(bulan == 9){
	bulan = "September";
	}
	else if(bulan == 10){
	bulan = "Oktober";
	}
	else if(bulan == 11){
	bulan = "November";
	}
	else if(bulan == 12){
	bulan = "Desember";
	}
	
	document.write(day + "/" + bulan + "/" + year)
	</script>
	</h>
	</div>
    
    <div id="time2">
    <h id="clock">&nbsp;</h>
    </div>
    
<center>
<div id="wrap">
	
    <div id="welcome">
    <p>Selamat datang calon Wisudawan</p>
    </div>
    
    <div id="login">
    <?php
	if (!empty($_GET['message']) && $_GET['message'] == 'success') {
    echo '<h3 style="color:#FFFFFF;margin-top:0px;padding-top:10px;">
	Berhasil menambah data!</h3>';
	}
	?>
    </div>
 
    <div id="content">
    <form name="input_data" style="margin-top:30px;" action="insert.php" method="post">
    <table>
	<tr>
    <td>Nama Lengkap</td>
    <td><input style="width:200px;" type="text" placeholder="Nama Lengkap anda" name="NamaLengkap"/></td>
    </tr>
    <tr>
    <td>NPM</td>
	<td><input style="width:200px;" type="text" placeholder="NPM" name="NPM"/></td>
    </tr>
    <tr>
    <td>Jenis Kelamin</td>
    <td><input style="width:200px;" list="jeniskelamin" name="Jenis_Kelamin"/>
		<datalist id="jeniskelamin">
 		<option value="Laki-Laki"></option>
  		<option value="Perempuan"></option>
		</datalist>
    </td>
  	</tr>
    <tr>
    <td>TTL</td>
    <td><input style="width:200px;" type="date" name="TTL"/></td>
    </tr>
    <tr>
    <td>Fakultas</td>
    <td>
			<input style="width:200px;" list="Jurusan" name="Fakultas"/>
				<datalist id="Jurusan">
 				 <option value="Teknik Informatika"></option>
  					<option value="Hukum"></option>
                      <option value="Psikologi"></option>
                        <option value="Ekonomi"></option>
                           <option value="Kedokteran"></option>
				</datalist>
    </td>
    </tr>
    <tr>
    <td>Alamat</td>
    <td><input style="width:200px;" type="text" placeholder="Alamat lengkap anda"  name="Alamat"/></td>
    </tr>
    <tr>
    <td>No telp</td>
    <td><input style="width:200px;" type="text" placeholder="No telepon"  name="NoTelp"/></td>
    </tr>
    <tr>
    <td>No Hp</td>
    <td><input style="width:200px;" type="text" placeholder="No HP" name="NoHP" /></td>
    </tr>
    <tr>
    <td>Nama Ayah</td>
    <td><input style="width:200px;" type="text" placeholder="Nama orang tua" name="NamaAyah"/></td>
    </tr>
    <tr>
    <td>Nama ibu</td>
    <td><input style="width:200px;" type="text" placeholder="Nama orang tua" name="NamaIbu"/></td>
    </tr>
    <tr>
    <td>Upload foto</td>
    <td><input type="file" /></td>
    </tr>
    <tr>
    <td>Username</td>
    <td><input style="width:200px;" type="text" placeholder="Username" name="username"/></td>
    </tr>
    <tr>
    <td>Password</td>
    <td><input style="width:200px;" type="password" placeholder="Password" name="password"/></td>
    </tr>
    <tr style="margin-top:40px;">
    <td><input type="submit" value="submit" />
   	</tr>
    </table>
    
    </div>
    
    
        
   
	
    
    
</div>
</center>
</body>
</html>
