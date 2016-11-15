<nav class="navbar navbar-default sticky">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>	
			<a class="navbar-brand" href="index.php">
				
			</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <i class="fa fa-angle-down"></i></a>
					<ul class="dropdown-menu animated flipInY">
						<li><a href="add_product.php"><i class="icon-layers"></i> Add Products</a></li>
						<li><a href=""><i class="icon-list"></i> Products List</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Report <i class="fa fa-angle-down"></i></a>
					<ul class="dropdown-menu animated flipInY">
						<li><a href=""><i class="fa fa-bar-chart"></i> Sales Report</a></li>
						<li><a href=""><i class="icon-pie-chart"></i> Purchase Report</a></li>
						<li><a href=""><i class="fa fa-line-chart"></i> Stock Report</a></li>
					</ul>
				</li>
				<li class="dropdown logged-user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
						<img class="img-circle" src="assets/img/a.jpg">	S. R. <span class="fa fa-angle-down"></span>
					</a>
					<ul class="dropdown-menu animated flipInY">
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