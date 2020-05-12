<?php
	session_start();
	$session_id=session_id();	
?>
<html>
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/css/bootstrap.min.css" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/js/bootstrap.min.js"></script>
		<title>PayMaya Result</title>
	</head>
	<body>
    <div class="container">
			<div class="row">
				<div class="col-12 py-2">
					<img src="https://johnpili.com/wp-content/uploads/2020/01/johnpili.svg" style="width: 100px;"/>
				</div>				
			</div>			
            <div class="row">
				<div class="col-12">
                <div class="jumbotron">
                    <h1 class="display-4">Payment Cancelled!</h1>                    
                    <hr class="my-4">                    
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="index.php" role="button">Back to order</a>
                    </p>
                    </div>                                    
                </div>
            </div>
		</div>
	</body>
</html>