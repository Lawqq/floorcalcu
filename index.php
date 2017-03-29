<!DOCTYPE html>  
	<html>   
		<head>  
			<meta charset=utf-8 />  
			<title>Flooring Supply Centre - Room Estimation</title>  
			 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        	<link href="../materialize/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        	<link href="../materialize/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        	<link rel="stylesheet" href="css/demo.css">
			<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	
			<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

			<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
			<style type="text/css">  
			body {margin: 30px;}  
			</style>   
		</head>  
<body>  
	<h2> Enter Room Dimensions(sqm)</h2>
		<form>  
			Length: <input type="text" id="firstNumber" /><br>  
			Width: <input type="text" id="secondNumber" /><br>  
			<input type="button" onClick="multiplyBy()" Value="Calculate" />  
		</form>  
					<p>Total flooring space in sqm: <br>  
						<span id = "result"></span> </p>   
		
			<br> </br>
		<br> </br>
			<H2> Divide your room size by pack coverage </H1>  
			Room Size: <input type="text" id="thirdNumber" /><br>  
			Pack coverage: <input type="text" id="fourthNumber" /><br>   
			<input type="button" onClick="divideBy()" Value="Calculate" />  
		</form>  
						<p>Estimated packs required(this is an estimate based only on math!!): <br>  
						<span id = "result2"></span></p>



<footer class="footer-distributed">

			<div class="footer-left">

				<p class="footer-links">
					<a href="http://flooringsupplycentre.co.uk/index.php?Page=1">Visit our main site!</a>
					·
				</p>

				<p class="footer-company-name">Flooring Supply Centre &copy; 2016</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Dunnings Bridge Road </span> Netherton, Liverpool</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>0151 521 5221</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">sales@flooringsupplycentre.co.uk</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>Still need to choose a floor?</span>
				Head over to our main site and browse our online catalogue.  Most of the big manufacturers do not like the deals we can offer you, its often best to call or email us direct as our prices are too good to be online!!
				</p>

			</div>

		</footer>








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

		 <script src="materialize/js/jquery-1.11.1.min.js"></script>
        <script src="materialize/bootstrap/js/bootstrap.min.js"></script>
        <script src="materialize/js/jquery.backstretch.min.js"></script>
        <script src="materialize/js/scripts.js"></script>

	</body>
</html>