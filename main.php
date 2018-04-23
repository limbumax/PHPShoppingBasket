	<?php
	session_start();
	require_once("connect.php");//connect to the php once this will be applied to the products and basket page
	if(isset($_GET['page'])){
		$pages = array("products", "basket", "checkout","about");//use arrays for the products and basket page to get the page
		
		if(in_array($_GET['page'],$pages)){//if the pages are in the aeeay
		$page = $_GET['page'];//set the get page to page variable
		}
		
		else{
		$page = "products";//else page is products
		
		}

	}
		else{
		$page = "products";//same here
		}
	?>
	<!DOCTYPE html>
	<html xmlns="http://www.w3.org/1999/xhtml">
	    <head>
	        <meta charset="UTF-8">
	    <link href="pagelayout.css" type="text/css" rel="stylesheet"/>
	        <title>Products Page</title>
	        </head>
	<div id="header">
	<h1>Max Limbu's Video Game Shop</h1>
	<?php
	if(!isset($_SESSION['log_in'])){

	    // if the session is not logged in
	    // redirect to login page
	    header('Location: index.php');
	}else{
	    echo "You are logged in as " . $_SESSION['log_in'] ;//print out the username of the user
	}
	?>

	</div>
	<div id="body">
	<body>
	<div id="nav">
	<ul>
	<li><a href="main.php?page=products">Product</a></li>
	<li><a href="main.php?page=basket">Basket</a></li>
	<li><a href="main.php?page=about"">About</a></li>
	<li><a href="logout.php">Logout</a></li>
	</ul>
	</div>


	<?php require($page . ".php"); ?><!-- this will work as a link to the basket and products page-->

	</body>
	<footer align="center">
	  
	    This submission is my own work, except where clearly indicated.
	I understand that there are severe penalties for plagiarism and other unfair practice,
	which can lead to loss of marks or even the withholding of a degree.
	I have read the sections on unfair practice in the Students' Examinations Handbook
	and the relevant sections of the current Student Handbook of the Department of
	Computer Science.
	I  understand  and  agree  to  abide  by  the  University's  regulations  governing  these
	issues.
	     <p><a href="http://validator.w3.org/check?uri=referer" target="_blank">
				<img src="http://www.w3.org/html/logo/badge/html5-badge-h-solo.png" 
					width="63" height="64"
					alt="Valid HTML 5!" /></a></p>
			
		 <p><a href="https://jigsaw.w3.org/css-validator/validator?uri=users.aber.ac.uk%2Fmal30%2Fcs25010%2Fpagelayout.css&profile=css3&usermedium=all&warning=1&vextwarning=&lang=en" target="_blank">
	          <img src="http://www.w3.org/Icons/valid-css-blue" 
	          alt="Valid CSS!" height="31" width="88" />
	        </a>
	      </p>
	</footer>
	</html>