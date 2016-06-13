<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cross Light - About Us</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" media="screen" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
  <link rel="stylesheet" type="text/css" media="screen" href="css/mainCarousel.css">

  <link rel="icon" href="images/favicon.png"/>
</head><!--/head-->

<body data-spy="scroll" data-target="#navbar" data-offset="0">
  <?php require '@includes/header.php'; ?>

  <?php require '@includes/mainCarousel.php'; ?>

  <section id="content" class="container-fluid">
    <div class="container">
      <div class="box first">
        <div class="row">
<?php if(isset($_GET['vpn'])): ?>
          <div align="center">
            <p><img src="images/dell-sonicwall-logo.jpg" width="155" height="66" /></p>

            <br>
            <br>
            <br>

            <p><a href="https://vpn.crosslightinc.com:4433/auth1.html"><img src="images/vpnportalbttn.png" width="221" height="39" /></a></p>

            <br>

            <p><a href="http://vault.crosslightinc.com/_RASSgmJZTXLmAR"><img src="images/dlndwindows.png" width="450" height="39" /></a></p>

            <br>

            <p><a href="http://vault.crosslightinc.com/_x7SeKOax_XYm6R"><img src="images/dnldmoble.png" width="449" height="39" /></a></p>

            <br>

            <p><a href="https://play.google.com/store/apps/details?id=com.sonicwall.netextender&amp;hl=en"><img src="images/dnldandroid3.png" width="458" height="39" /></a></p>

            <br>

            <p><a href="https://play.google.com/store/apps/details?id=com.sonicwall.mobileconnect&amp;hl=en"><img src="images/dnldandroid4.png" width="458" height="39" /></a></p>

            <br>

            <a href="portal.php">Go back</a>
          </div>
<?php else: ?>
          <div align="center"><h3>Welcome to the Cross Light Access Portal!</h3></div>

          <br>

          <div align="center"><a href="http://vault.crosslightinc.com/DropBox"><img src="images/uploadbtn.png" width="161" height="39" /></a></div>

          <br>

          <strong><h4>Staff Resources</h4></strong>

          <br>

          <p><a href="https://webmail.hostallapps.com/owa/">Outlook Web Access</a></p>

          <br>

          <p><a href="http://vault.crosslightinc.com/Login">Vault Web File Management </a></p>

          <br>

          <p><a href="vpn.html"></a><a href="http://vault.crosslightinc.com:8080/">Vault Speed Test</a></p>

          <br>

          <p><a href="?vpn">VPN Access</a><a href="http://vault.crosslightinc.com:8080/"></a></p>

<?php endif; ?>
        </div>
      </div>
    </div>

    <?php require '@includes/footer.php'; ?>
  </section>

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
