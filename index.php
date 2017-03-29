<!DOCTYPE html>  
<html>   
		<head>  
		<meta charset=utf-8 />  
		<title>Flooring Supply Centre - Flooring Estimate</title>  
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
		<style type="text/css">  
		body {margin: 30px;}  
		</style>   
		</head>  
	<body>  

	    <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Flooring Supply Centre</strong> Estimate Room Size &amp; Packs Required</h1>
                            <div class="description">
                            	<p>Enter your room dimensions and then divide your rooms size by your pack coverage</p>
                            </div>
                        </div>
                    </div>

                    <div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
										<h3>Enter Room Dimensions</h3>
											</div>	
											<div class="form-top-right">
	                        			<i class="fa fa-key"></i>
	                        		</div>
	                        		</div>
								<div class="form-bottom">
				                    <form role="form" action="" method="post" class="login-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Length: </label><input type="text" id="firstNumber" /><br>  
				                    		</div>
				                    <div class="form-group">
				                       <label class="sr-only" for="form-username">
											Width: </label><input type="text" id="secondNumber" /><br>  
			<input type="submit" class="btn" onClick="multiplyBy()" Value="Calculate" />  
			</div>

			<p>Total floor required in sqm:<br>  
			<span id = "result"></span>  
			</p>
			</form>   
			</div>
			</div>
			</div>
			</div>
			

				<div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>

                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
			<form>
				<H3> Divide your room size by pack coverage </H3>  
				</div>
					<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        				</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="" method="post" class="registration-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-first-name">
				Room Size(sqm): </label> <input type="text" id="thirdNumber" /><br>  
				</div>
				<div class="form-group">
				                        	<label class="sr-only" for="form-last-name">
				Pack coverage: </label><input type="text" id="fourthNumber" /><br>   
				<input type="button" onClick="divideBy()" Value="Calculate" />  
				</div>
			</form>  
				<p>Total packs required: <br>  
				<span id = "result2"></span>  
				</p>
				         </div>
                        	</div>
                        	
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>

										<script type="text/javascript">
												function multiplyBy()  
										{  
										        num1 = document.getElementById("firstNumber").value;  
										        num2 = document.getElementById("secondNumber").value;  
										        document.getElementById("result").innerHTML = num1 * num2;  
										}  
										  
										function divideBy()   
										{   
										        num3 = document.getElementById("thirdNumber").value;  
										        num4 = document.getElementById("fourthNumber").value;  
										document.getElementById("result2").innerHTML = num3 / num4;  
										} </script>	
										 	<script src="assets/js/jquery-1.11.1.min.js"></script>
									        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
									        <script src="assets/js/jquery.backstretch.min.js"></script>
									        <script src="assets/js/scripts.js"></script>

											</body>
										</html>