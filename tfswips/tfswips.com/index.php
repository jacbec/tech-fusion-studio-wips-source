<!DOCTYPE html>
<html>
	<head>
		<title>Tech Fusion Studio - WIPS</title>

    <!-- Meta/Favicons/Fonts Section ------------------------------------------------------------------------------------------------>
		<?php require '../@includes/tags.php'; ?>

		<link rel="stylesheet" type="text/css" media="screen" href="css/nav.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">

	</head>
	<body>
		<!-- Header Section ------------------------------------------------------------------------------------------------>
		<?php require 'nav.php'; ?>

		<!-- Content Section ------------------------------------------------------------------------------------------------>
		<section class="body">
<?php if(isset($_GET['crosslight'])): ?>
			<section id="crosslight" class="no-padding container-fluid">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe src="@crosslight/" width="100%" height="900px" frameborder="0" scrolling="hidden"></iframe>
				</div>
			</section>
<?php else: ?>
			<section id="services" class="no-padding container-fluid" style="padding-top: 50px">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<h2 class="section-heading">WIPS</h2>
							<hr class="primary">
						</div>
					</div>
				</div>

				<div class="container-fluid">
					<div class="row no-gutter">
						<div class="col-lg-4 col-md-6 text-center">
							<a href="?crosslight">
								<div class="box">
									<img src="img/logoanim.gif" alt="Cross Light Logo"/>
								</div>
							</a>
						</div>
					</div>
				</div>
			</section>
<?php endif; ?>
		</section>
		<!-- Footer ------------------------------------------------------------------------------------------------>
		<?php require '../@includes/footer.php'; ?>
    <!-- Scripts ------------------------------------------------------------------------------------------------>
		<?php require '../@includes/scripts.php'; ?>
	</body>
</html>
