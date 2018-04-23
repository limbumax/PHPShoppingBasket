	<!DOCTYPE html>
	<html xmlns="http://www.w3.org/1999/xhtml">
	 <head>
	     <meta charset="UTF-8">
	<title> Checkout page</title>
	 <link href="pagelayout.css" type="text/css" rel="stylesheet"/>
	<script type="text/javascript">//jscript to make sure that i have email and check out for he user so that it feels like a real form
	<!--
	function checkoutform() {
		
		
		var x = document.forms["checkout"]["email"].value;
		var z = document.forms["checkout"]["creditcardnumber"].value;
		var regex =  /^([0-9a-zA-Z]([-_\\.]*[0-9a-zA-Z]+)*)@([0-9a-zA-Z]([-_\\.]*[0-9a-zA-Z]+)*)[\\.]([a-zA-Z]{2,9})$/;
		if (x == null || x == "") {
			alert("Please fill out email to checkout");
			return false;
		}
		else if (z == null || z == "") {
			alert("Please enter credit card number");
			return false;
		}
		else if(!regex.test(x)){
			alert("Please enter a valid email");
			return false;
		}
		else if (z.length < 16 || z.length > 16) {
			alert("Please enter a valid credit card number");
			return false
		}
		
	}
	-->
	</script>


	</head>
	<body>

	<h1> ********************************Checkout****************************</h1>
	This is not a real web shop; it
	is created as part of my university coursework.  Please do not attempt to buy anything
	from this site, or enter any real card details
	<form name="checkout" action="checkout.php" onsubmit="return checkoutform()" method="POST">
	<table>
	<tr>
	<th>Please enter your email address :</th>
		<td><input type="text" name="email" size="50"></td>
	    </tr>
	<th>Please enter your credit card number :</th>
	    <th><input type="text" name="creditcardnumber" min="0" max="16"></th>
	<th><input type="submit" name="send" value="Send details"  /></th>
		</table>

	</form>
	</body>
	</html>