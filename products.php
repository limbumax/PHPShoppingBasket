        <?php
        if(isset($_GET['action']) && $_GET['action'] == "add"){//the get action for the basket to add the items inside it
            $ref = intval($_GET['ref']);//ref is set to $ref to make it easier to call when it is wanted by using GET
        if(isset($_SESSION['basket'][$ref])){//if the session for the basket with ref from the videogames is set
        $_SESSION['basket'][$ref]['quantity']++;//then add the item to the basket
        } else {
        $query2 = "SELECT * FROM videogames WHERE ref={$ref}";//else select all the table from videogames where the ref is matched with the refrence
        $res2 = pg_query($query2);//calling out second method for finding the asked result within the php

        if(pg_num_rows($res2) != 0){//if the row is not equal to 0 then
            $row2 = pg_fetch_array($res2);//fetch the rows 
            $_SESSION['basket'][$row2['ref']]= array("quantity" => 1, "price" => $row2['price']);//if the array in the row has been added assign its quantity to 1 at first and add as we go along and also get the price 
        }else{
            $alert = "This game title don't match our id";//if the title is not found then print out this to the customer
        }
        }
        }

        ?>
        <!DOCTYPE html>
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta charset="UTF-8">
            <title>Game Title Page</title>
        </head>
        <body>
            <h1> *****************************Video Game Products****************************</h1>
            <h3><i>After you add to the basket, To add more go to basket from the navigation menu above to increase, decrease or remove the quantity</i></h3>

        <?php if (isset($alert)){
            echo $alert;
        } //if the alert is set then print out the alert here
        ?>
        <table><!--start of the table to get the records from the database -->
           <tr>
            <th>Game Titles</th>
            <th>Platform</th>
            <th>Genre</th>
            <th>Publisher</th>
            <th>PEGI</th>
            <th>Description</th>
            <th></th>
            <th>Price</th>
            <th>Action</th>
        </tr>

        <?php
                $query = "SELECT * FROM videogames ORDER BY title";//select all from video games database and order it by title
        $res = pg_query($query);//record the result in $res
        while ($row = pg_fetch_assoc($res)){//fetch the result in $row
           ?>
           <tr><!--print out the record-->
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['platform']; ?></td>
            <td><?php echo $row['genre']; ?></td>
            <td><?php echo $row['publisher'];?></td>
            <td><?php echo $row['pegi']; ?></td>
            <td><?php echo $row['description']; ?><td> 
                <td><?php echo "£" . $row['price'];?></td>
                <td><a href="main.php?page=products&action=add&ref=<?php echo $row['ref'];?>">Add it to Basket</a><!--include the add to cart button for each so that the user can add to theri cart-->

            </tr>
            <?php
        }
        ?>
        </table><!--end of the table-->
        </body>
        </html>