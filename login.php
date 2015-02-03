<?php
ob_start();
session_start();
error_reporting(0);

include 'includes/config.php'; 

if($_POST['submit']){
	
	function returnheader($location){
		$returnheader = header("location: $location");
		return $returnheader;
	}
	$errors = array();
	
	if(isset($_POST["in-dex"])){
	
	$uname = trim(htmlentities($_POST['username']));
	$pass = trim(htmlentities($_POST['pass']));
	
	if(!$errors){

		$query = "SELECT * FROM tenants WHERE username = '".mysql_real_escape_string($uname)."' AND password = '".mysql_real_escape_string($pass)."' AND role = 2 AND status = 1";
		$result = mysql_query($query) OR die(mysql_error());
		$result_num = mysql_fetch_array($result);
		$rows = mysql_num_rows($result);
		
		$u_id = stripslashes($result_num["tenantID"]);
		$name = stripslashes($result_num["name"]);
		$role = stripslashes($result_num["role"]);
			
		if($rows == 1){
				
				$_SESSION['u_id'] = $u_id;
				$_SESSION['name'] = $name;
				$_SESSION['role'] = $role;
				
				returnheader("users/index.php");
		}
		else {
			$errors[] = "Your username or password are incorrect!";
		}
	}
	} else {
		$uname = "";
	}
	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css">
<title>PSMZA HOSTEL's COMPLAINTS CENTRE SYSTEM</title>
</head>

<body>
<table bgcolor="#ffffff" width="850" border="0" align="center"><tr><td><table width="850" border="0" align="center">
  <tr>
    <td width="840" colspan="2"><?php include("banner.php"); ?></td>
  </tr>
  <tr>
    <td><div class="style1">
        <table width="255" border="0">
          <tr>
            <td width="17"><img src="images/home.jpg" width="17" height="16" /></td>
            <td width="91"><strong><a href="index.php">Laman Utama</a></strong></td>
            <td width="17"><strong><img src="images/check.jpg" width="16" height="16" /></strong></td>
            <td width="115"><strong><a href="semak_aduan.php">Semak Aduan</a></strong></td>
          </tr>
        </table>
    </div></td>
    <td><div class="style1">
      <div align="right"><strong>
        <?php echo date("D d M Y");?>
      </strong></div>
    </div></td>
  </tr>
  <tr>
    <td height="167" colspan="2"><p align="center"><span class="style1">Pastikan Anda Penghuni Asrama untuk menggunakan sistem ini. <br />
      Sila Masukkan No Matrik dan Nombor Kad Pengenalan Anda.</span></p>
      <table width="497" border="0" align="center">
        <tr>
          <td width="595">
        <form id="log_daftar" name="log_daftar" action="" method="POST">
          <fieldset>
          <legend><span class="style22"><strong>:: Log Masuk ::</strong></span></legend>
          <table width="323" border="0" align="center">
            <tr>
              <td colspan="3" style="color:#FF0000; font-style:italic;"><?php
									if(count($errors) > 0){
										foreach($errors as $error){
											echo $error . "<br />";
										}
									} else {
										echo "";
									}
								?></td>
              </tr>
            <tr>
              <td width="176"><span class="style1">No Matrik</span></td>
              <td width="7">:</td>
              <td width="126">
                <div align="left">
                  <input type="text" name="username" autocomplete="off" required>
                </div></td>
            </tr>
            <tr>
              <td><span class="style1">No Kad Pengenalan</span></td>
              <td>:</td>
              <td>
                  <div align="left">
                    <input type="password" name="pass" autocomplete="off" required>
                  </div></td>
            </tr>
            <tr>
              <td colspan="3"><div align="center">
                  <input name="in-dex" type="hidden" value="1" />
                  <input name="submit" type="submit" value="Login" class="btn-submit">
              </div></td>
            </tr>
          </table>
          </fieldset>
        </form></td>
        </tr>
      </table>
      <p align="center"><span class="style1">Berikut adalah Perkara yang Perlu Diambil Perhatian: <br />
          <span class="style5">Pendaftaran Pengguna hanya boleh dilakukan oleh pihak <em>Administrator</em> berdasarkan senarai penghuni asrama.</span></span></p></td>
  </tr>
  
</table></td>
  </tr>
</table>
</body>
</html>
