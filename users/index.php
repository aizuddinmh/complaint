<?php 	
	ob_start();
	session_start();
	include '../includes/config.php'; 
	include '../includes/functions.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css">
<title>PSMZA HOSTEL's COMPLAINTS CENTRE SYSTEM</title>

</head>

<body>

<table bgcolor="#ffffff" width="850" border="0" align="center">
<tr>
<td>
<table width="850" border="0" align="center">
  <tr>
    <td width="840" colspan="2"><?php include("../banner.php"); ?></td>
  </tr>
  <tr>
    <td><div class="style1">
        <table width="200" border="0">
          <tr>
            <td><img src="images/home.jpg" width="17" height="16" /></td>
            <td><strong><a href="index.php">Laman Utama</a></strong></td>
            <td><strong><img src="images/logout.jpg" alt="" width="16" height="16" /></strong></td>
            <td><strong><a href="logout.php">Keluar</a></strong></td>
          </tr>
        </table>
    </div></td>
    <td><div class="style1">
      <div align="right"><strong>
        <?php  echo date("D d M Y");?>
      </strong></div>
    </div></td>
  </tr>
  <tr>
    <td height="167" colspan="2"><p class="style26">Sistem Aduan Online</p>
      <p class="style19">Sila kemukakan permasalahan anda melalui Sistem Aduan Online kami.   Jelaskan permasalahan anda dengan mudah bagi membantu kami memahami   permasalahan anda semasa berurusan dengan pihak kami.</p>
      <p class="style19">Sebarang Aduan dan cadangan anda kami dahului degan ucapan ribuan terima kasih.</p>
      <form action="" method="post" enctype="multipart/form-data" name="newad">
      <table width="833" border="0" align="center">
      <tr>
        <td valign="top" width="283" rowspan="9"><p class="style1">* Sila isi borang dengan <strong>TELITI</strong> dan <strong>TEPAT</strong>. Kesilapan anda mengisi borang boleh menyebabkan aduan anda tidak diterima</p>
          <p class="style1">* Aduan akan diproses dalam masa 3 hari bekerja<br />
          </p>
          
          <a href="semak_aduan.php"><img src="images/semakanstatus.jpg" alt="aduan_baru" border="0" style="opacity:0.5;filter:alpha(opacity=40)"
    onmouseover="this.style.opacity=1;this.filters.alpha.opacity=100"
    onmouseout="this.style.opacity=0.5;this.filters.alpha.opacity=40" /></a>
    </td>
         
          <tr>
        <td width="103"><span class="style1">Blok</span></td>
        <td width="7"><span class="style1">:</span></td>
        <td width="422">
        <select name="accomodation" id="accomodation" required>
          <option value="">- Sila Pilih -</option>
          <?php 
		  	$sql = mysql_query("SELECT * FROM accomodations WHERE status = 1");
		  	while($res = mysql_fetch_array($sql)){
		  ?>
          <option value="<?php echo $res['accomodationID']; ?>"><?php echo $res['accomodationName']; ?></option>
          <?php  } ?>
        </select>        </td>
      </tr>
      <tr>
        <td><span class="style1">No Bilik</span></td>
        <td><span class="style1">:</span></td>
        <td><input name="room_no" type="text" id="no_bilik" size="8" maxlength="4" required class="textboxform"/></td>
      </tr>
      

      <tr>
        <td><span class="style1">Kategori Aduan</span></td>
        <td><span class="style1">:</span></td>
        <td><select name="category" id="kategori_aduan" required>
          <option value="">- Sila Pilih -</option>
          <option value="KEROSAKAN AM">Kerosakan Am</option>
          <option value="KEROSAKAN ELEKTRIK">Kerosakan Elektrik</option>
        </select>
        
        <a onmouseover='this.style.cursor="pointer" ' onfocus='this.blur();' onclick="document.getElementById('PopUp').style.display = 'block' " ><span style="text-decoration: no-underline;"><img src="images/help.jpg" title="Jenis Kategori Kerosakan"></span></a>

<div id='PopUp' style='display: none; position: absolute; center: 0px; right: 400px; top: 250px; border: solid black 1px; padding: 10px; background-color: rgb(243,244,245); text-align: left; font-size: 14px; width: 500px;'>



<div id="container">

<strong><span class="style14"><u>Kategori Aduan</u></span></strong><br />
<br />

<strong>Kerosakan Elektrik</strong><br />
Kerosakan Elektrik merupakan kerosakan yang berkaitan dengan permasalahan elektrik seperti lampu rosak, kipas tidak berfungsi, lampu di aras tidak menyala dan lain-lain yang berkaitan elektrik<br />
<br />

<strong>Kerosakan Am</strong><br />
Selain kerosakan elektrik adalah kerosakan Am. Contoh seperti tombol pintu tidak berfungsi dan tidak boleh dikunci, tempat gantung langsir tertanggal dan lain-lain keroasakan Am yang lain<br />
<br />

<div style='text-align: right;'><a onmouseover='this.style.cursor="pointer" ' style='font-size: 14px;' onfocus='this.blur();' onclick="document.getElementById('PopUp').style.display = 'none' " ><img src="images/close.jpg" title="Tutup Tetingkap"></a></div>
</div></div>        </td>
      </tr>
      
      <tr>
        <td><span class="style1">Perkara</span></td>
        <td><span class="style1">:</span></td>
        <td><input name="title" type="text" id="perkara" size="38" maxlength="34" class="textboxform" required/></td>
      </tr>
      <tr>
        <td valign="top"><span class="style1">Aduan</span></td>
        <td valign="top"><span class="style1">:</span></td>
        <td><textarea name="details" id="aduan" cols="40" rows="5" required></textarea></td>
      </tr>
      <tr>
        <td><span class="style1">Lampiran</span></td>
        <td><span class="style1">:</span></td>
        <td><span class="style1"><input type="file" name="image" id="file"></span></td>
      </tr>
      <tr>
        <td colspan="4">
          <div align="center">
            <input type="reset" name="reset" id="reset" value="Isi Semula" />
            <input name="Submit" type="submit" value="Hantar >>">
            </div></td>
        </tr>
    </table>    
    </form></td>
  </tr>
  
</table></td>
  </tr>
</table>

</body>
</html>
<?php
extract($_REQUEST);

if($Submit){
	$today = date("Y-m-d");
	$serialno = sprintf("%05d",runningno()); 

	$file_name = $_FILES['image']['name'];
	$nn = $_FILES['image']['tmp_name'];
	$ext_img = pathinfo($file_name, PATHINFO_EXTENSION);
	$ext = ".".$ext_img;
	
	$nama_file = time().$serialno.$ext;
	$jj = "../images_complaint/$nama_file";
	$jk = move_uploaded_file($nn,$jj);
	
	if($_FILES['image']['name']==""){
		$namefile = "";
	}
	else{
		$namefile = $nama_file;
	}
	
	$query = mysql_query("INSERT INTO complaints SET complaintNo='$serialno', tenantID='".$_SESSION['u_id']."', accomodationID='$accomodation', roomNo='$room_no', complaintDate='$today', category='$category', title='$title', complaintDetail='$details', files='$namefile'");
	
	if($query){
		echo "<script type='text/javascript'>";
		echo "alert('Aduan Telah Dihantar Untuk Diproses.')";
		echo "</script>";	
		echo "<meta http-equiv='refresh' content='0; url=index.php'>"; 
	}

}

?>