
  <?php
  error_reporting(0);//getting rid of error syntax when the basket is empty
  if(isset($_POST['submit'])){//if the post submit is set
  foreach($_POST as $key => $val){//then foreach loop the post as the key in value
  	$key = explode("-",$key);//remove the "-" from quantity by using explode to get quantity 2 instead of quantity-2
  	$key = end($key);//clode it 
  	if($key=="submit"){//if the key is quals to submit
      unset($_SESSION['basket'][$key]);//remove item from basket
    }
  else if(isset($_POST['quantity-'.$key])){//if the quantity of the time is set
  	if($_POST['quantity-'.$key] <= 0){//and quantity is less than or equal to 0
  	unset($_SESSION['basket'][$key]);//remove the quanitity from the basket
  	} else{
  	$_SESSION['basket'][$key]['quantity'] = $val;//if the item and quantity is the same as value for the basket
  	echo "<i>Message : Basket updated!</i>";//print out that the basket has been updated that it has been changed
  	}
  }
  } 
  }

  ?>
  <!DOCTYPE html>
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  	<meta charset="UTF-8">
  	<title>Basket Page</title>
  </head>
  <h1> ********************************Basket****************************</h1>
  <h2>This is not a real web shop; it
is created as part of my university coursework. Please do not attempt to buy anything
from this site, or enter any real card details.</h2>
  <br /><a href = 'main.php?page=checkout'>Click here to Checkout</a><!-- link to return to the main page -->
  <form method="POST" action "main.php?page=basket"> <!-- return the user to the basket when updating the baskeet-->

  <?php
        $query = "SELECT * FROM videogames WHERE ref IN (";//select the data records from videogames where ref is in a for loop
  foreach($_SESSION['basket'] as $ref => $val){//for all the ref as the value we said
  $query .= $ref . ",";
  }
  $query = substr($query,0,-1) .") ORDER BY title ASC";//
  $res = pg_query($query);
  $total_price = 0;
  if(empty($res)){
    echo "Empty basket! Try to add something by going to the products page";
  }
  else{
    echo "<i>Welcome to your basket. To remove item enter 0 you want to remove and press update button. To add enter quantity and press update button</i>";
  }

   ?><!-- table heading-->
  <table>
              <tr>
              <th>Game Titles</th>
              <th>Platform</th>
            <th>Quantity</th>
              <th>Price</th>
              <th>Total Quantity Price</th>
              
          </tr>
  <input type ="submit" name = "submit" value = "Update Cart"></input> 
   <!-- update the cart by clicking this-->
  </form>
  <?php

   $query = "SELECT * FROM videogames WHERE ref IN (";
  foreach($_SESSION['basket'] as $ref => $val){
  $query .= $ref . ",";
  }
  $query = substr($query,0,-1) .") ORDER BY title ASC";
  $res = pg_query($query);
  $total_price = 0;
  if(!empty($res)){
  while($row = pg_fetch_array($res)){
  	$subtotal = $_SESSION['basket'][$row['ref']]['quantity']*$row['price'];
  $total_price+= $subtotal;
  ?>
  <tr><!--print out the records to show the user their items-->
  <td><?php echo $row['title']; ?></td>
      <td><?php echo $row['platform']; ?></td>
      <td><input type ="text" name = "quantity-<?php echo $row['ref'];?>" size="5" value="
       <?php echo $_SESSION['basket'][$row['ref']]['quantity']; ?>" /></td>
      <td><?php echo"£" . $row['price'];?></td>
     <td><?php echo"£" . $_SESSION['basket'][$row['ref']]['quantity'] * $row['price'];?></td>
     </tr>
     <?php
     }
  } ?>
     <tr>
     <td></td>
     <td></td>
  <td>Total Price:</td>
  <td><?php echo "£" . $total_price; ?></td>
  </tr>

  </table>
  </body>
  </html>


