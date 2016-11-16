<?php
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
							<div class="white-block">
								<div class="header-bar border">
									<h3>Products List </h3>
								</div>
								<div class="body-bar">
									<table class="table table-bordered">
										<tr>
											<th>Photo</th>
											<th>Product Code</th>
											<th>Product Category</th>
											<th>Name</th>
											<th>Quantity</th>
											<th>Buying Price</th>
											<th>Selling Price</th>
										</tr>
										<tr>
											<?php
												include('controller/controller.php');
												$access = new ProcessorClass();
												$result = $access->ShowProducts();
												$NumOfRow = mysqli_num_rows($result);
												if($NumOfRow > 0){
													while ( $row = mysqli_fetch_array($result)) {
														?>
														<tr>
															<td><img src="assets/img/<?php echo $row['p_photo']; ?>" width="50" /></td>
															<td><?php echo $row['p_code']; ?></td>
															<td><?php echo $row['category_name']; ?></td>
															<td><?php echo $row['p_name']; ?></td>
															<td><?php echo $row['p_qty']; ?></td>
															<td><?php echo $row['pb_price']; ?></td>
															<td><?php echo $row['ps_price']; ?></td>
														</tr>
														<?php
													}
												}
												else{
													?>
													<tr>
														<td colspan="7" align="center">
															<h3>No Data Found</h3>
														</td>
													</tr>
													<?php
												}
											?>
										</tr>
									</table>
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