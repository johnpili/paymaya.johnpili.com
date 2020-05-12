<?php
	session_start();
	$session_id=session_id();	
?>
<html>
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.min.css" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/js/bootstrap.min.js"></script>
		<title>PayMaya Super Sample Checkout Usage</title>
	</head>
	<body>
		<form action="checkout.php" name='assessmentForm' method="post">
		<div class="container">
			<div class="row">
				<div class="col-12 py-2">
					<img src="https://johnpili.com/wp-content/uploads/2020/01/johnpili.svg" style="width: 100px;"/>
				</div>				
			</div>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class=card-body>
							<div class="container-fluid p-0">
								<div class="row">
									<div class="col-6">
										<table class="table table-striped">								
											<tbody>
												<tr>
													<td>Students Name</td>
													<td>Lutz Bartmann</td>
												</tr>
												<tr>
													<td>Year</td>
													<td>8th</td>
												</tr>
												<tr>
													<td>Address</td>
													<td>Frankfurt, Germany</td>
												</tr>
												<tr>
													<td>Nationality</td>
													<td>German</td>
												</tr>
												<tr>
													<td>Email</td>
													<td>lutz@johnpili.de</td>
												</tr>
											</tbody>								
										</table>
									</div>
								</div>
							</div>																			
							<table class="table table-striped">
								<thead>
									<tr>
										<th>SN</th>
										<th>Item/Description</th>
										<th>Unit</th>
										<th>Price/Unit</th>
										<th>Quantity</th>
										<th>Total</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Y2020/8th - School Fees</td>
										<td>lot</td>
										<td>200000.00</td>
										<td>1</td>
										<td>200000.00</td>
									</tr>
								</tbody>								
							</table>
						</div>
					</div>					
				</div>
			</div>			
			<div class="row">
				<div class="col-12 py-2">
					<input type="hidden" name="cart_session" value="<?php echo $session_id ?>"/>
					<button type="submit" class="btn btn-primary">PAY</button>
				</div>
			</div>
		</div>		
		</form>
	</body>
</html>