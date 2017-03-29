<!DOCTYPE html>  
<html>   
<head>  
<meta charset=utf-8 />  
<title>Flooring Supply Centre</title>  
<style type="text/css">  
body {margin: 30px;}  
</style>   
</head>  
<body>  
<form>  
Length: <input type="text" id="firstNumber" /><br>  
Width: <input type="text" id="secondNumber" /><br>  
<input type="button" onClick="multiplyBy()" Value="Multiply" />  
<input type="button" onClick="divideBy()" Value="Divide" />  
</form>  
<p>Total floor required in sqm: <br>  
<span id = "result"></span>  
</p>   

		<!-- Scripts -->
		<script type="text/javascript">
		function multiplyBy()  
{  
        num1 = document.getElementById("firstNumber").value;  
        num2 = document.getElementById("secondNumber").value;  
        document.getElementById("result").innerHTML = num1 * num2;  
}  
  
function divideBy()   
{   
        num1 = document.getElementById("firstNumber").value;  
        num2 = document.getElementById("secondNumber").value;  
document.getElementById("result").innerHTML = num1 / num2;  
} </script>	

	</body>
</html>