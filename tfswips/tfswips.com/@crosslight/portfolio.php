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
  <link rel="stylesheet" type="text/css" media="screen" href="css/vlb_files/vlightbox.css">
  <link rel="stylesheet" type="text/css" media="screen" href="css/vlb_files/visuallightbox.css">

  <link rel="icon" href="images/favicon.png"/>
</head><!--/head-->

<body data-spy="scroll" data-target="#navbar" data-offset="0">
  <?php require '@includes/header.php'; ?>

  <?php require '@includes/mainCarousel.php'; ?>

  <section id="content" class="container-fluid">
    <div class="container">
      <div class="box first">
        <div class="row">
          <p>Cross Light has provided its services all over the states of Ohio, Indiana, and Kentucky.  Working with a multitude of clients and applications we are pleased to share some of the 850  projects we have provided equipment and services to.</p>

          <br>

<?php if(isset($_GET['clients'])): ?>
            <strong><h4><a href="portfolio.php">Back to Portfolio</a></h4></strong>

            <br>
            <br>

            <!-- Clients Section ------------------------------------------------------------------------------------------------>
            <strong><h4>Installations / Clients</h4></strong>

            <ul class="clients">
                <li>Actors Theater Louisville</li>
                <li>Akron Civic Theatre</li>
                <li>Argosy Casino</li>
                <li>Ball State University / Emmens Auditorium</li>
                <li>Batesville High School</li>
                <li>Ben Davis High School</li>
                <li>Berea College / Presser Hall</li>
                <li>Bethel Temple</li>
                <li>Caesar's World Casino</li>
                <li>CAPA - CAPAcity Project</li>
                <li>CAPA - Lincoln Theater</li>
                <li>CAPA - Ohio Theater</li>
                <li>CAPA - Palace Theater</li>
                <li>CAPA - Southern Theater</li>
                <li>CAPA - Vern Riffe Theaters</li>
                <li>Carmel High School</li>
                <li>Cedar Point / Good Time Theatre</li>
                <li>Cincinnati Country Day School</li>
                <li>Cincinnati Music Hall</li>
                <li>Cincinnati Music Hall Ballroom</li>
                <li>Cincinnati Playhouse / Marx Theater</li>
                <li>Cincinnati Playhouse / Shelterhouse Theater</li>
                <li>Conseco Fieldhouse</li>
                <li>COSI - Columbus</li>
                <li>Crane Naval Training Center</li>
                <li>Crothersville High School</li>
                <li>DePauw University Theatres (4)</li>
                <li>Fort Wayne Performing Arts Center</li>
                <li>Indiana Repertory Theater</li>
                <li>Indiana University / Neal Marshall PAC</li>
                <li>Indiana Wesleyan University Performing Arts Center</li>
                <li>Indiana Live! Casino</li>
                <li>Indianapolis Arts Garden</li>
                <li>Indianapolis Repertory Theatre</li>
                <li>Indianapolis Symphony Orchestra</li>
                <li>Indianapolis Zoo / White River Gardens</li>
                <li>Intel</li>
                <li>Kentucky Center for the Arts</li>
                <li>Kentucky Derby Museum</li>
                <li>Kentucky Fair &amp; Expo Center</li>
                <li>KET - Kentucky Educational Television</li>
                <li>Kings Island</li>
                <li>La Comedia Dinner Theatre</li>
                <li>Lincoln Amphitheater</li>
                <li>Louisville Slugger Museum</li>
                <li>Marie P Debartolo PAC Notre Dame University</li>
                <li>Medal of Honor</li>
                <li>National Historic Trails Center</li>
                <li>Noblesville High School</li>
                <li>Northern Kentucky University Theaters</li>
                <li>P &amp; G Theatre</li>
                <li>Palace Theater - Louisville</li>
                <li>Paramount Arts Center</li>
                <li>Paul Brown Stadium</li>
                <li>Rosenthal Contemporary Arts Center</li>
                <li>School for Creative &amp; Performing Arts</li>
                <li>Schuster Performing Arts Center</li>
                <li>Severance Hall</li>
                <li>Sinclair Community College</li>
                <li>Solon Arts Center</li>
                <li>SouthBrook Christian Church</li>
                <li>St. Xavier High School </li>
                <li>The Limited, 48 stores</li>
                <li>University of Cincinnati / Corbett Auditorium</li>
                <li>University of Cincinnati / Patricia Corbett Theater</li>
                <li>University of Cincinnati / Werner Recital Hall</li>
                <li>University of Indianapolis</li>
                <li>University of Kentucky / Fine Arts Theatre</li>
                <li>University of Kentucky / Singletary Center for the Arts</li>
                <li>University of Louisville / School of Music</li>
                <li>Vanderburgh Auditorium</li>
                <li>Veterans Glass City Skyway / Maumee River Crossing</li>
                <li>Victory Theatre Performing Arts Center</li>
                <li>Vincennes University</li>
                <li>West Baden Hotel</li>
                <li>Wright Patterson Air Force Base Museum</li>
                <li>Xavier University / Cintas Center</li>
                <li>WCPO-TV (Cincinnati, Ohio)</li>
                <li>WKRC-TV (Cincinnati, Ohio)</li>
                <li>WRTV-TV (Indianapolis, Indiana)</li>
                <li>WTTE-TV (Columbus, Ohio)</li>
                <li>WXYX-TV (Columbus, Ohio)</li>
            </ul>

<?php elseif(isset($_GET['gallery'])): ?>
  <?php if(isset($_GET['kca'])): ?>
            <strong><h4><a href="portfolio.php?gallery">Back to Gallery List</a></h4></strong>

            <br>
            <br>

            <div id="vlightbox1">
              <a class="vlightbox1" href="images/vlb_images/dsc_6226.jpg" title="Looking from outdoors"><img src="images/vlb_thumbnails/dsc_6226.jpg" alt="Looking from outdoors"/></a>
              <a class="vlightbox1" href="images/vlb_images/dsc_5978.jpg" title="Interior lobby ceiling"><img src="images/vlb_thumbnails/dsc_5978.jpg" alt="Interior lobby ceiling"/></a>
              <a class="vlightbox1" href="images/vlb_images/dsc_6174.jpg" title="Interior lobby ceiling"><img src="images/vlb_thumbnails/dsc_6174.jpg" alt="Interior lobby ceiling"/></a>
              <a class="vlightbox1" href="images/vlb_images/dsc_6179.jpg" title="Night Sky "><img src="images/vlb_thumbnails/dsc_6179.jpg" alt="Night Sky "/></a>
              <a class="vlightbox1" href="images/vlb_images/dsc_6215.jpg" title="Looking from outdoors"><img src="images/vlb_thumbnails/dsc_6215.jpg" alt="Looking from outdoors"/></a>
              <a class="vlightbox1" href="images/vlb_images/dsc_6055.jpg" title="Interior lobby ceiling"><img src="images/vlb_thumbnails/dsc_6055.jpg" alt="Interior lobby ceiling"/></a>
              <a class="vlightbox1" href="images/vlb_images/dsc_6193.jpg" title="Fireworks being simulated onto ceiling"><img src="images/vlb_thumbnails/dsc_6193.jpg" alt="Fireworks being simulated onto ceiling"/></a>
              <a class="vlightbox1" href="images/vlb_images/dsc_5997.jpg" title="Interior lobby ceiling"><img src="images/vlb_thumbnails/dsc_5997.jpg" alt="Interior lobby ceiling"/></a>
              <a class="vlightbox1" href="images/vlb_images/dsc09658.jpg" title="Looking from outdoors"><img src="images/vlb_thumbnails/dsc09658.jpg" alt="Looking from outdoors"/></a>
              <a class="vlightbox1" href="images/vlb_images/dsc_5983.jpg" title="Interior lobby ceiling"><img src="images/vlb_thumbnails/dsc_5983.jpg" alt="Interior lobby ceiling"/></a>
              <a class="vlightbox1" href="images/vlb_images/dsc_6123.jpg" title="Leaf being projected onto ceiling"><img src="images/vlb_thumbnails/dsc_6123.jpg" alt="Leaf being projected onto ceiling"/></a>
              <a class="vlightbox1" href="images/vlb_images/dsc_6199.jpg" title="Horse projected onto ceiling"><img src="images/vlb_thumbnails/dsc_6199.jpg" alt="Horse projected onto ceiling"/></a>
              <a class="vlightbox1" href="images/vlb_images/dsc09734.jpg" title="LCD Station for selecting presets."><img src="images/vlb_thumbnails/dsc09734.jpg" alt="LCD Station for selecting presets."/></a>
              <a class="vlb" href="http://visuallightbox.com">jquery div lightbox by VisualLightBox.com v5.4</a>
            </div>

  <?php else: ?>
            <strong><h4><a href="portfolio.php">Back to Portfolio</a></h4></strong>

            <br>
            <br>

            <!-- Gallery Section ------------------------------------------------------------------------------------------------>
            <strong><h4>Photo Gallery</h4></strong>

            <br>

            <table width="200" border="0" align="center">
              <tr>
                <th height="129" scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
                <th align="center" scope="col"><p><a href="?gallery&kca"><img src="images/KCAlogo.png" width="223" height="93" longdesc="http://www.kentuckycenter.org/" /></a></p>
                  <p>Kentucky Center for the Arts</p></th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>

  <?php endif; ?>

<?php elseif(isset($_GET['videolist'])): ?>
  <?php if(isset($_GET['indianalive'])): ?>
            <strong><h4><a href="portfolio.php?videolist">Back to Video List</a></h4></strong>

            <br>
            <br>

            <table width="200" border="0" align="center">
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><iframe width="640" height="480" src="//www.youtube.com/embed/b55L0uIOCkM?rel=0" frameborder="0" allowfullscreen></iframe></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>

  <?php elseif(isset($_GET['vgcs1'])): ?>
            <strong><h4><a href="portfolio.php?videolist">Back to Video List</a></h4></strong>

            <br>
            <br>

            <table width="200" border="0" align="center">
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><iframe width="640" height="480" src="//www.youtube.com/embed/ZntieutXMqc?rel=0" frameborder="0" allowfullscreen></iframe></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                </tr>
            </table>

  <?php elseif(isset($_GET['vgcs2'])): ?>
            <strong><h4><a href="portfolio.php?videolist">Back to Video List</a></h4></strong>

            <br>
            <br>

            <table width="200" border="0" align="center">
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><iframe width="640" height="480" src="//www.youtube.com/embed/7MzwtGD4yZo?rel=0" frameborder="0" allowfullscreen></iframe></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>

  <?php elseif(isset($_GET['vgcs3'])): ?>
            <strong><h4><a href="portfolio.php?videolist">Back to Video List</a></h4></strong>

            <br>
            <br>

            <table width="200" border="0" align="center">
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><iframe width="640" height="480" src="//www.youtube.com/embed/h_HqlRaiHjU?rel=0" frameborder="0" allowfullscreen></iframe></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>

  <?php elseif(isset($_GET['kca1'])): ?>
            <strong><h4><a href="portfolio.php?videolist">Back to Video List</a></h4></strong>

            <br>
            <br>

            <table width="200" border="0" align="center">
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><iframe width="640" height="480" src="//www.youtube.com/embed/rQ1IdRNKuVM?rel=0" frameborder="0" allowfullscreen></iframe></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>

  <?php elseif(isset($_GET['kca2'])): ?>
            <strong><h4><a href="portfolio.php?videolist">Back to Video List</a></h4></strong>

            <br>
            <br>

            <table width="200" border="0" align="center">
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><iframe width="640" height="480" src="//www.youtube.com/embed/_3ssoJXejUw?rel=0" frameborder="0" allowfullscreen></iframe></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>

  <?php elseif(isset($_GET['mvg1'])): ?>
            <strong><h4><a href="portfolio.php?videolist">Back to Video List</a></h4></strong>

            <br>
            <br>

            <table width="200" border="0" align="center">
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><iframe width="640" height="480" src="//www.youtube.com/embed/IqYh1unRsNw?rel=0" frameborder="0" allowfullscreen></iframe></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>

  <?php elseif(isset($_GET['mvg2'])): ?>
            <strong><h4><a href="portfolio.php?videolist">Back to Video List</a></h4></strong>

            <br>
            <br>

            <table width="200" border="0" align="center">
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><iframe width="640" height="480" src="//www.youtube.com/embed/4O6UrpxTQkk?rel=0" frameborder="0" allowfullscreen></iframe></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>

  <?php elseif(isset($_GET['2ndstreet1'])): ?>
            <strong><h4><a href="portfolio.php?videolist">Back to Video List</a></h4></strong>

            <br>
            <br>

            <table width="200" border="0" align="center">
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><iframe width="640" height="480" src="//www.youtube.com/embed/Y5y_u4nkroQ?rel=0" frameborder="0" allowfullscreen></iframe></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>

  <?php elseif(isset($_GET['2ndstreet2'])): ?>
            <strong><h4><a href="portfolio.php?videolist">Back to Video List</a></h4></strong>

            <br>
            <br>

            <table width="200" border="0" align="center">
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><iframe width="640" height="480" src="//www.youtube.com/embed/yMzGVFkav24?rel=0" frameborder="0" allowfullscreen></iframe></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>

  <?php elseif(isset($_GET['2ndstreet3'])): ?>
            <strong><h4><a href="portfolio.php?videolist">Back to Video List</a></h4></strong>

            <br>
            <br>

            <table width="200" border="0" align="center">
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><iframe width="640" height="480" src="//www.youtube.com/embed/boNuaaeBfnY?rel=0" frameborder="0" allowfullscreen></iframe></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>

  <?php elseif(isset($_GET['2ndstreet4'])): ?>
            <strong><h4><a href="portfolio.php?videolist">Back to Video List</a></h4></strong>

            <br>
            <br>

            <table width="200" border="0" align="center">
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><iframe width="640" height="480" src="//www.youtube.com/embed/MkBihQig25s?rel=0" frameborder="0" allowfullscreen></iframe></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>

  <?php else: ?>
            <strong><h4><a href="portfolio.php">Back to Portfolio</a></h4></strong>

            <br>
            <br>

            <!-- Videolist Section ------------------------------------------------------------------------------------------------>
            <strong><h4>Indiana Live! Casino - 1 Video </h4></strong>
            <table width="900" border="0" align="center">
              <tr>
                <td width="250"><h6>Center Bar</h6></td>
                <td width="534">&nbsp;</td>
                <td width="30">&nbsp;</td>
                <td width="30">&nbsp;</td>
                <td width="34">&nbsp;</td>
              </tr>
              <tr>
                <td><a href="?videolist&indianalive"><img src="https://i1.ytimg.com/vi/b55L0uIOCkM/mqdefault.jpg" alt="Thumbnail" width="200" height="112"/></a></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>

            <br>
            <br>

            <strong><h4>Veterans' Glass City Skyway - 3 Videos</h4></strong>
            <table width="900" border="0" align="center">
              <tr>
                <td width="250"><h6>Winter Snow</h6></td>
                <td width="250"><h6>Sunrise</h6></td>
                <td width="250"><h6>New Year</h6></td>
                <td width="104">&nbsp;</td>
                <td width="24">&nbsp;</td>
              </tr>
              <tr>
                <td><a href="?videolist&vgcs1"><img src="https://i1.ytimg.com/vi/ZntieutXMqc/mqdefault.jpg" alt="Thumbnail" width="200" height="112"/></a></td>
                <td><a href="?videolist&vgcs2"><img src="https://i1.ytimg.com/vi/7MzwtGD4yZo/mqdefault.jpg" alt="Thumbnail" width="200" height="112"/></a></td>
                <td><a href="?videolist&vgcs3"><img src="https://i1.ytimg.com/vi/h_HqlRaiHjU/mqdefault.jpg" alt="Thumbnail" width="200" height="112"/></a></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td></td>
                <td></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>

            <br>
            <br>

            <strong><h4>Kentucky Center for the Arts - 2 Videos</h4></strong>
            <table width="900" border="0" align="center">
              <tr>
                <td width="250"><h6>Lightning</h6></td>
                <td width="250"><h6>Fall Leaves</h6></td>
                <td width="330">&nbsp;</td>
                <td width="22">&nbsp;</td>
                <td width="26">&nbsp;</td>
              </tr>
              <tr>
                <td><a href="?videolist&kca1"><img src="http://i1.ytimg.com/vi/rQ1IdRNKuVM/mqdefault.jpg" alt="Thumbnail" width="200" height="112"/></a></td>
                <td><a href="?videolist&kca2"><img src="http://i1.ytimg.com/vi/_3ssoJXejUw/mqdefault.jpg" alt="Thumbnail" width="200" height="112"/></a></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>

            <br>
            <br>

            <strong><h4>Miami Valley Gaming - Lebanon Racino - 2 Videos</h4></strong>
            <table width="900" border="0" align="center">
              <tr>
                <td width="250"><h6>Cool</h6></td>
                <td width="250"><h6>Rainbow</h6></td>
                <td width="330">&nbsp;</td>
                <td width="22">&nbsp;</td>
                <td width="26">&nbsp;</td>
              </tr>
              <tr>
                <td><a href="?videolist&mvg1"><img src="http://i1.ytimg.com/vi/IqYh1unRsNw/mqdefault.jpg" alt="Thumbnail" width="200" height="112"/></a></td>
                <td><a href="?videolist&mvg2"><img src="http://i1.ytimg.com/vi/4O6UrpxTQkk/mqdefault.jpg" alt="Thumbnail" width="200" height="112"/></a></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>

            <br>
            <br>

            <strong><h4>2nd Street Streetscapes - 4 Videos</h4></strong>
            <table width="900" border="0" align="center">
              <tr>
                <td width="250"><h6>Sunset</h6></td>
                <td width="250"><h6>6PM</h6></td>
                <td width="330"><h6>7PM</h6></td>
                <td width="22"><h6>Midnight & Finale</h6></td>
                <td width="26">&nbsp;</td>
              </tr>
              <tr>
                <td><a href="?videolist&2ndstreet1"><img src="http://i1.ytimg.com/vi/Y5y_u4nkroQ/mqdefault.jpg" alt="Thumbnail" width="200" height="112"/></a></td>
                <td><a href="?videolist&2ndstreet2"><img src="http://i1.ytimg.com/vi/yMzGVFkav24/mqdefault.jpg" alt="Thumbnail" width="200" height="112"/></a></td>
                <td><a href="?videolist&2ndstreet3"><img src="http://i1.ytimg.com/vi/boNuaaeBfnY/mqdefault.jpg" alt="Thumbnail" width="200" height="112"/></a></td>
                <td><a href="?videolist&2ndstreet4"><img src="http://i1.ytimg.com/vi/MkBihQig25s/mqdefault.jpg" alt="Thumbnail" width="200" height="112"/></a></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>

  <?php endif; ?>

<?php else: ?>
          <!-- Portfolio Section ------------------------------------------------------------------------------------------------>
          <strong><h4>Portfolio Browser</h4></strong>

          <table width="718" border="0" align="center">
            <tr>
              <td width="25">&nbsp;</td>
              <td width="382">&nbsp;</td>
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td><a href="?clients"><img src="images/dot.png" alt="" width="20" height="20" align="middle" /></a></td>
              <td colspan="2"><h3><a href="?clients">List of Clients / Installations</a></h3></td>
              <td width="196">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td><a href="?gallery"><img src="images/dot.png" alt="" width="20" height="20" align="middle" /></a></td>
              <td><h3><a href="?gallery">Photo Gallery</a></h3></td>
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td></td>
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td><a href="?videolist"><img src="images/dot.png" width="20" height="20" align="middle" /></a></td>
              <td><h3><a href="?videolist">Video Library</a></h3></td>
              <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td colspan="2">&nbsp;</td>
            </tr>
          </table>

<?php endif; ?>
        </div>
      </div>
    </div>

    <?php require '@includes/footer.php'; ?>
  </section>

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/thumbscript.js" type="text/javascript"></script>
	<script src="js/vlbdata.js" type="text/javascript"></script>
  <script src="js/visuallightbox.js" type="text/javascript"></script>
  <script src="js/main.js"></script>
</body>
</html>
