<?php
error_reporting(0);
include('controller/authentication.php');
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8"/>
<title>Add Product | Inventory</title>
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
					<div class="white-block">
						<div class="header-bar border">
							<h3>Add Product</h3>
						</div>
						<div class="body-bar form-container">
							<div class="message-container"></div>
							<form id="categoryForm" action="">
					            <div class="form-group">
					            	<label>Product Category Name</label>
					                <input type="text" id="pcat" class="form-control">
					            </div>
					            <div class="form-group text-right">
					            	<button type="button" class="btn btn-success btn-upload-category">Upload Product</button>
					            </div>
				            </form>
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

			$('#productForm').submit(function(e){
				e.preventDefault();
				var pCode = $('#pcode').val();
				var pCat = $('#pcategory').val();

				if(pName == "" || pBprice == "" || pSprice == ""){
					var message = "Please provide information correctly."
	            	var container = "message-container";
	            	var type = 0;
	            	Inventory.Notify(type, message, container);
				}
				else if(pCat == 0){
					var message = "Please select product category."
	            	var container = "message-container";
	            	var type = 0;
	            	Inventory.Notify(type, message, container);
				}
				else if(pQty == "" || pQty == 0){
					var message = "Please provide quantity."
	            	var container = "message-container";
	            	var type = 0;
	            	Inventory.Notify(type, message, container);
				}
				else{
					$.ajax({
				        type: 'POST',
				        url: 'parse/add_product.php',
				        data: formData,
				        contentType: false,
			    	    cache: false,
						processData:false,
						datatype: 'script',
				        success: function(response) {
				            if(response == "error"){
				            	var message = "Please provide information correctly.";
				            	var container = "message-container";
				            	var type = 0;
				            	Inventory.Notify(type, message, container);
				            }
				            else if(response == "done"){
				            	var message = "Product added successfully";
				            	var container = "message-container";
				            	var type = 1;
				            	Inventory.Notify(type, message, container);
				            }
				            else{
				            	var message = response;
				            	var container = "message-container";
				            	var type = 1;
				            	Inventory.Notify(type, message, container);
				            }
				        }
				    });
				}
			});
		});
	</script>
</body>
</html>