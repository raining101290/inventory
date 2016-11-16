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
						<div class="col-md-12">
							<?php
								include('controller/controller.php');
								$access = new ProcessorClass();
								$result = $access->ShowProducts();
								$NumOfRow = mysqli_num_rows($result);
							?>
							<div class="white-block">
								<div class="header-bar border">
									<h3 class="inline">Products List </h3>
								</div>
								<div class="body-bar">
									<div class="row">
										<?php
											if($NumOfRow > 0){
												while ( $row = mysqli_fetch_array($result)) {
													?>
													<div class="col-md-6">
														<div class="flex product-cont">
															<div class="photo">
																<img src="assets/img/<?php echo $row['p_photo']; ?>" />
															</div>
															<div class="pro-info">
																<a href="javascript:;" class="btn btn-primary btn-sm edit-item"><i class="icon-pencil"></i></a>
																<a href="javascript:;" class="btn btn-danger btn-sm delete-item"><i class="icon-trash"></i></a>
																<h3 class="wrap-text"><?php echo $row['category_name']; ?></h3>
																<p><span>Code:</span> <?php echo $row['p_code']; ?></p>
																<p><span>Category:</span> <?php echo $row['category_name']; ?></p>
																<p><span>Quantity:</span> <?php echo $row['p_qty']; ?></p>
																<p><span>Buying Price:</span> <?php echo $row['pb_price']; ?></p>
																<p><span>Selling Price:</span> <?php echo $row['ps_price']; ?></p>
															</div>
														</div>
													</div>
													<?php
												}
											}
											else{
												?>
												<div class="no-data">
													<h3>No Data Found</h3>
												</div>
												<?php
											}
										?>
									</div>
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