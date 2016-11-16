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
							<form id="productForm" action="" method="post" enctype="multipart/form-data">
					            <div class="form-group">
					            	<label>Product Code</label>
					                <input type="text" id="pcode" class="form-control">
					            </div>
								<div class="form-group">
									<label>Select Category</label>
					                <select class="form-control" id="pcategory">
					                	<option value="0">Select </option>
					                	<option value="1">Cat 1</option>
					                	<option value="2">Cat 2</option>
					                	<option value="3">Cat 3</option>
					                </select>
					            </div>
					            <div class="form-group">
					            	<label>Product Name</label>
					                <input type="text" id="pname" class="form-control">
					            </div>
					            <div class="form-group">
					            	<label>Quantity</label>
					                <input type="text" id="pquantity" class="form-control">
					            </div>
					            <div class="form-group">
					            	<label>Buying Price </small></label>
					                <input type="text" id="pbprice" class="form-control">
					            </div>
					            <div class="form-group">
					            	<label>Selling Price <small>(Minimum)</small></label>
					                <input type="text" id="psprice" class="form-control">
					            </div>
					            <div class="form-group">
					            	<label>Product Picture</label>
					                <div class="fileinput fileinput-new" data-provides="fileinput">
	                                    <div class="fileinput-new thumbnail g-logo-img">
	                                        <span><img src="assets/img/product.png" alt="Product Image"></span>
	                                	</div>
	                                	<div class="photo-info">
	                                	</div>
	                                    <div>
	                                        <span class="btn btn-default btn-file">
	                                            <span class="fileinput-new">
	                                                <input type="file" id="product_image" name="pFilename">
	                                            </span>
	                                        </span>
	                                    </div>
	                                    <div id="valid_msg" class="required" aria-required="true"></div>
	                                </div>
					            </div>
					            <div class="form-group text-right">
					            	<button type="button" class="btn btn-danger cancel">Cancel</button>
					            	<button type="button" class="btn btn-success btn-upload-product">Upload Product</button>
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
			
			$('#pquantity, #pbprice, #psprice').keyup(function(e){
				value = $(this).val();
				if(! $.isNumeric(value)){
					$(this).val('');
				}
			});
			function readImage(file) {      
		        var reader = new FileReader();
		        var image  = new Image();		      
		        reader.readAsDataURL(file);  
		        reader.onload = function(_file) {
		            image.src    = _file.target.result;              // url.createObjectURL(file);
		            image.onload = function() {
		                var w = this.width,
		                    h = this.height,
		                    t = file.type,                           // ext only: // file.type.split('/')[1],
		                    n = file.name,
		                    s = ~~(file.size/1024) +'KB';
		                $('.g-logo-img span, .photo-info').empty();
		                $('.g-logo-img span').append('<img class="img-responsive" src="'+image.src+'">');
		                $('.photo-info').append('<p>Photo Dimension: '+w+'x'+h+'</p><p>Size: '+s+'</p><p>File Name: '+n+'</p>');
		            };
		            image.onerror= function() {
		                alert('Invalid file type: '+ file.type);
		            };      
		        };
		    }
			$("#product_image").change(function (e) {
		        if(this.disabled) return alert('File upload not supported!');
		        var F = this.files;
		        if(F && F[0]) for(var i=0; i<F.length; i++) readImage( F[i] );
		    });

			$('.btn-upload-product').click(function(){
				$('#productForm').submit();				
			});

			$('#productForm').submit(function(e){
				e.preventDefault();
				var pCode = $('#pcode').val();
				var pCat = $('#pcategory').val();
				var pName = $('#pname').val();
				var pQty = $('#pquantity').val();
				var pBprice = $('#pbprice').val();
				var pSprice = $('#psprice').val();
				
				
				formData = new FormData(this);
				formData.append('pCode', pCode);
				formData.append('pCat', pCat);
				formData.append('pName', pName);
				formData.append('pQty', pQty);
				formData.append('pBprice', pBprice);
				formData.append('pSprice', pSprice);

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
								$('.form-container').find('input').val('');
								$('.form-container').find('select').val('0');
								$('.g-logo-img img').attr('src', 'assets/img/product.png');
								$('.photo-info').empty();
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
			$('.cancel').click(function(){
				$('.form-container').find('input').val('');
				$('.form-container').find('select').val('0');
				$('.g-logo-img img').attr('src', 'assets/img/product.png');
				$('.photo-info').empty();
			});
		});
	</script>
</body>
</html>