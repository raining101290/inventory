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
	
	<nav class="navbar navbar-default sticky">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>	
				<a class="navbar-brand" href="index.html">
					
				</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown logged-user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
							<img class="img-circle" src="assets/img/a.jpg">	S. R. <span class="fa fa-angle-down"></span>
						</a>
						<ul class="dropdown-menu animated flipInY">
							<li><a href=""><i class="fa fa-dashboard"></i> Dashboard</a></li>
							<li><a href=""><i class="icon-wallet"></i> Income</a></li>
							<li><a href=""><i class="icon-settings"></i> Settings</a></li>
							<li class="divider"></li>
							<li>
								<a href="logout.php">
								<i class="icon-logout"></i> Log Out </a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="data-content">
		<div class="container">
			<div class="section-body">
				<div class="col-md-3">
					<div class="leftside-filter">
						<div class="filter-section collapsed">
							<div class="filter-head">
								<a href="javascript:;" class="sidebar-collapse">
									Product
								</a>
							</div>
							<div class="filter-body">
								 <ul>
								 	<li><a href="">Add Products</a></li>
								 	<li><a href="">Products List</a></li>
								 </ul>
							</div>
						</div>
						<div class="filter-section collapsed">
							<div class="filter-head">
								<a href="javascript:;" class="sidebar-collapse">
									Product
								</a>
							</div>
							<div class="filter-body">
								 <ul>
								 	<li><a href="">Add Products</a></li>
								 	<li><a href="">Products List</a></li>
								 </ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="white-block">
						<div class="header-bar border">
							<h3>Dashboard</h3>
						</div>
						<div class="body-bar">
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<footer>
			<div class="container">
				<div class="col-md-12">
					<p>2016 &copy; Raasforce LLC. All rights reserved.</p>
				</div>
			</div>
		</footer>
	</div>
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