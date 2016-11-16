<?php
error_reporting(0);
include('controller/authentication.php');
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8"/>
<title>Inventory</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>

<link href="assets/fonts/simple-line-icons/simple-line-icons.css" rel="stylesheet" type="text/css" />
<link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/fonts/text-font/myfont.css" rel="stylesheet" type="text/css" >

<!--PLugins-->
<link href="assets/global/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/icheck/skins/all.css" rel="stylesheet" type="text/css" />
<!--PLugins-->

<link href="assets/css/style.css" rel="stylesheet" type="text/css">
<link href="assets/css/animate.css" rel="stylesheet" type="text/css">
<link href="assets/css/common.css" rel="stylesheet" type="text/css">
</head>
<body>
	
	<?php include('files/navigation.php') ?>

	<div class="data-content">
		<div class="container">
			<div class="section-body">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-3">
							<div class="custom-stat straight-light">
			                    <div class="stat-data">
			                        <span class="stat-num">54,954 tk</span>
			                        <span class="stat-title">Revenue</span>
			                    </div>
			                    <p><?php echo date('F Y'); ?></p>
			                </div>
			            </div>
						<div class="col-md-3">
							<div class="custom-stat straight-light">
			                    <div class="stat-data">
			                        <span class="stat-num">6,669 tk</span>
			                        <span class="stat-title">Profit</span>
			                    </div>
			                    <p><?php echo date('F Y'); ?></p>
			                </div>
			            </div>
						<div class="col-md-3">
							<div class="custom-stat straight-light">
			                    <div class="stat-data">
			                        <span class="stat-num">6</span>
			                        <span class="stat-title">Quantity of Sales</span>
			                    </div>
			                    <p><?php echo date('F Y'); ?></p>
			                </div>
			            </div>
						<div class="col-md-3">
							<div class="custom-stat straight-light">
			                    <div class="stat-data">
			                        <span class="stat-num">1,847,434 tk</span>
			                        <span class="stat-title">Value of Stock</span>
			                    </div>
			                    <p><?php echo date('F Y'); ?></p>
			                </div>
			            </div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="white-block">
								<div class="header-bar border">
									<h3>Sales <?php echo date('F Y'); ?></h3>
								</div>
								<div class="body-bar">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="white-block">
								<div class="header-bar border">
									<h3>Sales <?php echo date('Y'); ?></h3>
								</div>
								<div class="body-bar">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include('files/footer.php') ?>
	<script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/icheck/icheck.min.js" type="text/javascript"></script>
	<script src="assets/global/plugins/jquery.sticky.js" type="text/javascript"></script>
	<script src="assets/js/script.js" type="text/javascript" ></script>
	<script type="text/javascript">
		$('document').ready(function(){
			Inventory.init();
		});
	</script>
</body>
</html>