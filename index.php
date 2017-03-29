<!DOCTYPE html>  
	<html>   
		<head>  
			<meta charset=utf-8 />  
			<title>Flooring Supply Centre - Room Estimation</title>  
			 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        	<link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        	<link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
			<style type="text/css">  
			body {margin: 30px;}  
			</style>   
		</head>  
<body>  
	<h1> Enter Room Dimensions</h1>
		<form>  
			Length: <input type="text" id="firstNumber" /><br>  
			Width: <input type="text" id="secondNumber" /><br>  
			<input type="button" onClick="multiplyBy()" Value="Calculate" />  
		</form>  
					<p>Total floor required in sqm: <br>  
						<span id = "result"></span> </p>   


		<form>
			<H1> Divide your room size by pack coverage </H1>  
			Room Size: <input type="text" id="thirdNumber" /><br>  
			Pack coverage: <input type="text" id="fourthNumber" /><br>   
			<input type="button" onClick="divideBy()" Value="Calculate" />  
		</form>  
						<p>Total packs required: <br>  
						<span id = "result2"></span></p>

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