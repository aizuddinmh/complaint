
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="../css/style.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HOSTEL's COMPLAINTS CENTRE SYSTEM</title>

</head>

<body>

<table bgcolor="#ffffff" width="850" border="0" align="center"><tr><td><table width="850" border="0" align="center">
  <tr>
    <td width="840" colspan="2"><?php include("../banner.php"); ?></td>
  </tr>
  <tr>
    <td><div class="style1">
      <table width="232" border="0">
        <tr>
          <td width="19"><strong><img src="images/new.jpg" alt="" width="16" height="16" /></strong></td>
          <td width="98"><strong><a href="index.php">Aduan Baru</a></strong></td>
          <td width="19"><strong><img src="images/logout.jpg" alt="" width="16" height="16" /></strong></td>
          <td width="78"><strong><a href="logout.php">Keluar</a><a href="index.php"></a></strong></td>
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
    <td height="167" colspan="2"><p align="center"><span class="style1">Pastikan Anda Penghuni  untuk menggunakan sistem ini. <br />
      Sila Masukkan Nombor Adua.</span></p>
    <table width="497" border="0" align="center">
        <tr>
          <td width="595">
          
        
          <fieldset>
          <legend><span class="style22"><strong>:: Semak Aduan ::</strong></span></legend>
          <table width="90%" border="0" align="center">
          <tr>
              <td colspan="3">
                <div align="right" class="style6 style7">-</div></td>
              </tr>
              <form id="log_daftar" name="log_daftar" action="" method="POST"  onsubmit="return validateForm(this);">
            <tr>
              <td><span class="style1">No Rujukan Aduan</span></td>
              <td>:</td>
              <td><input name="no_rujukan" type="text" id="no_rujukan" size="30" maxlength="50" class="textboxform" required/></td>
            </tr>
            <tr>
              <td width="147">&nbsp;</td>
              <td width="3">&nbsp;</td>
              <td width="276"><input type="submit" name="login" id="login" value="Semak Aduan" action=""/></td>
            </tr>
            <tr>
              <td colspan="3"><div align="center"></div></td>
            </tr>
            </form>
          </table>
          </fieldset>
        </form></td>
        </tr>
      </table>
      <p align="center"><span class="style1">Berikut adalah Perkara yang Perlu Diambil Perhatian: <br />
          <span class="style5">Pendaftaran Pengguna hanya boleh dilakukan oleh pihak <em>Administrator</em> berdasarkan senarai penghuni Apartment.</span></span></p></td>
  </tr>
  
</table></td>
  </tr>
</table>
</body>
</html>
