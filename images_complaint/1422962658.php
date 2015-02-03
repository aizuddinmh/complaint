<?php error_reporting(0); ?>

<?php 
session_start();
include 'includes/db.php';
include 'includes/check_access.php';

$sql = mysql_query("SELECT * FROM setting");
$res = mysql_fetch_array($sql);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en" xml:lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $o['title']; ?></title>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<link href="css/cloud-zoom.css" rel="stylesheet" type="text/css">
<link href="css/superfish.css" rel="stylesheet" type="text/css">
<link href="css/slideshow.css" rel="stylesheet" type="text/css">
<link href="css/jquery.jscrollpane.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.16.custom.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.8.16.custom.css">
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.4.css" media="screen">
<script type="text/javascript" src="js/jquery.colorbox.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/colorbox.css" media="screen">

<script type="text/javascript" src="js/tabs.js"></script>
<script type="text/javascript" src="js/easyTooltip.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/jQuery.equalHeights.js"></script>
<script type="text/JavaScript" src="js/cloud-zoom.1.0.2.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/jscript_zjquery.anythingslider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/jquery.bxSlider.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>

<link rel="stylesheet" type="text/css" href="css/livesearch.css">
</head>
<body class="account-login"><div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" style="padding-bottom: 57px; padding-right: 28px; display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxLoadedContent" class="" style="width: 0px; height: 0px; overflow: hidden;"></div><div id="cboxLoadingOverlay" class=""></div><div id="cboxLoadingGraphic" class=""></div><div id="cboxTitle" class=""></div><div id="cboxCurrent" class=""></div><div id="cboxNext" class=""></div><div id="cboxPrevious" class=""></div><div id="cboxSlideshow" class=""></div><div id="cboxClose" class=""></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div>
	<div class="main-shining">
		
<p id="back-top" style="display: none;"> <a href="http://felinna2u.com.my/#top"><span></span></a> </p>
<?php include 'menu.php'; ?>
   
<div class="main-bg" style="">
<div id="container">
<div id="notification"> </div>
<div id="content">  <div class="breadcrumb">
        <a href="">Home</a>
         » <a href="" class="last">About us</a>
      </div>
  <h1>About Us</h1>
  <div class="box-container">
    <div class="box-container" style="background-color:#FFFFFF">
    <p dir="ltr" style="margin-left: -0.05pt;margin-right: -0.05pt;text-indent: -0.05pt; margin-top: 0pt; margin-bottom: 0pt;">&nbsp;
	</p>
<p dir="ltr" id="internal-source-marker_0.6593803688153704" style="margin-left: -0.05pt;margin-right: -0.05pt;text-indent: -0.05pt; margin-top: 0pt; margin-bottom: 0pt;">
	<span style="font-family:arial,helvetica,sans-serif;"><span style="color:#808080;"><span style="font-size: 20px;"><span style="background-color: transparent; font-weight: normal; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;"><strong><img alt="" height="57" src="images/logoFelinna.png" width="169"></strong></span></span></span><span style="font-size: 15px; color: rgb(0, 0, 0); background-color: transparent; font-weight: normal; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;">&nbsp;</span></span><?php echo nl2br($res['about_us']); ?></p>
</div>
  </div>
  </div>
<script type="text/javascript"><!--
$('#login input').keydown(function(e) {
	if (e.keyCode == 13) {
		$('#login').submit();
	}
});
//--></script> 
</div>
<div class="clear"></div>
      <div id="powered" align="center">
      			<div align="center" class="indent" style="vertical-align: middle;">
      			<label style="vertical-align: middle;">Copyright © 2014 WHY (We Help You) SELLING ONLINE  &nbsp; &nbsp;</label>
      			<img style="vertical-align: middle;" alt="" src="images/payment.jpg">
      			</div>
      </div>
  </div>
</div>
</div>
<script type="text/javascript" src="js/livesearch.js"></script>
</div>
</body></html>