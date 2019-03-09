<?php require_once('Connections/W35.php'); ?>
<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "main.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "";
$MM_donotCheckaccess = "true";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && true) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "main.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($_SERVER['QUERY_STRING']) && strlen($_SERVER['QUERY_STRING']) > 0) 
  $MM_referrer .= "?" . $_SERVER['QUERY_STRING'];
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$colname_SessionUser3 = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_SessionUser3 = $_SESSION['MM_Username'];
}
mysql_select_db($database_W35, $W35);
$query_SessionUser3 = sprintf("SELECT * FROM data35 WHERE username = %s", GetSQLValueString($colname_SessionUser3, "text"));
$SessionUser3 = mysql_query($query_SessionUser3, $W35) or die(mysql_error());
$row_SessionUser3 = mysql_fetch_assoc($SessionUser3);
$totalRows_SessionUser3 = mysql_num_rows($SessionUser3);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include('config.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WisudaOnline-About</title>
<link rel="stylesheet" type="text/css" href="css/homepage.css" />
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

<body  onload="updateClock(); setInterval('updateClock()', 1000 )" background="img/wallpaper-132616.jpg">
<center>
<!--WAJIB1!-->
<div id="wrap">
	
    <!--header-->
	<div id="up">
    <p>Welcome ,   <?php echo $row_SessionUser3['NamaLengkap']; ?><br/>
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
	
      <!--Div di bawah header warna: hijau terang-->
   	  <div id="upb">
      <a style="float:right; 
      			font-family:'Segoe UI Light'; 
                color:#FFFFFF; 
                margin-right:50px;
                margin-top:5px;" 
                target="_blank" href="<?php echo $logoutAction ?>">Log out</a>
    		
        <!--menu drop down-->
        <div>
			<ul class="drop_menu">
				<li><a href='#'>Menus</a>
					<ul>
						<li><a href="homepage1.php">Home</a></li>
						<li><a href="JadwalWisuda.php">Jadwal Wisuda</a></li>
                        <li><a href="PersyaratanWisuda.php">Persyaratan Wisuda</a></li>
                        <li><a href="About.php">About</a></li>
					</ul>
               </li>
            </ul>
         </div>        
    </div>
          
    </div>
    
    <!--buat ngisi content yang ada di tengah-->
    <div id="content">

    	

  
    </div>
    
    <!--footer bawah-->
    <div id="copyright">
    	<p>Copyright &copy; 35 Community 2014</p>
    </div>



</div>
</center>
</body>
</html>
<?php
mysql_free_result($SessionUser3);
?>
