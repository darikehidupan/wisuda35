<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WisudaOnline-Persyaratan Wisuda</title>
<link rel="stylesheet" type="text/css" href="css/Persyaratan.css" />
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

<body  onload="updateClock(); setInterval('updateClock()', 1000 )" background="img/3.jpg">
<center>
<!--WAJIB1!-->
<div id="wrap">
	
    <!--header-->
	<div id="up">
    <p>Welcome ,   <br/>
    to Wisuda Online</p>
   
    <p1>Hari ini :
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
	</p1>
    <p2 id="clock">&nbsp;</p2>
    
    </div>
	
      <!--Div di bawah header warna: hijau terang-->
   	
    <!--buat ngisi content yang ada di tengah-->
    <div id="content">
    <p1 style="font-size:28px">Persyaratan Wisuda</p1>
    <br/>
    <br/>
    <p1>&deg;  Daftar / registrasi di form pendaftaran yang terdapat di dalam Web Wisuda Online</p1>
    <br/>
    <br/>
	<p1>&deg; Upload foto ukuran 3x4</p1>
    <br/>
    <br/>
    <br/>
	<p1>&deg; Mengupload bukti pembayaran wisuda</p1>
    <br/>
    <br/>
	<p1>&deg; Sks wajib terpenuhi sesuai yang di tentukan 148 termasuk skripsi</p1>
    </div>
    
    <!--footer bawah-->
    <div id="copyright">
    	<p>Copyright &copy; 35 Community 2014</p>
    </div>



</div>
</center>
</body>
</html>