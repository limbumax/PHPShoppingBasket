    <!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <link href="pagelayout.css" type="text/css" rel="stylesheet"/><!-- Link to the CSS page to add the layout within the web page//-->
    <title>About</title><!-- title for the webpage so that it shows what ever the title is written in the tab.//-->
    <meta charset ="UTF-8">
    </head>
    <body>
    <h1> ********************************About****************************</h1>
    <header><!-- Header for the webpage//-->
    </header>
    <div class ="main"><!-- using the div class as main/about to make changes to whatever the content is inside the div so that it can either align/change the content inside it.//-->
    <div class="about">

    <?php echo '<p><b>Pro:</b></p>' ;?>
        <p>
    I think that using PHP and SQL are useful because you can retrieve database and display it. 
    I believe that it is a good e-commerce tool and also using it with database to show records within the web pages. 
    I found out that connecting to the database and accessing the records to display in PHP was simple because we were already provided with the connection function we needed to create SQL function to retrieve it. 
    I believe that my PHP is a standard web page that allows user to access the game shop web page view the game titles and add it to the cart, then the user can view their cart, remove or use the JavaScript form to do their checkout. 
    It is a simple web page, which I believe uses simple colour to appeal and also have validating functions.
      I have three simple buttons, which allows the user to go to the product page, which is the main page after logging in on the login page. The login page is the index page and after they are logged in, they can also log out. I have used SESSION variable in order to create my login function for the PHP so that it prints out the user name in all of the sites.
    Using CSS in PHP was easier as we had to call it using the div function where the CSS will set out intended colour.
     I think that CSS is helpful because I can use my created CSS and apply the layout style to all of my page which makes it easier since I only have to change my CSS layout in order to change out my whole PHP page.
            I believe that i have made most of the session work hoever it may not work properly. In my perspective it works because you can login add item to basket and view your basket,exit without removing by using the logout and when you log back in the session has been erased since the item in the basket is completely removed when emptied. The basket can hold item and also remove and add item. Further instructions has been provided on how to remove and add the items within the php page.  
    </p>
    <?php echo '<p><b>Cons:</b></p>' ;?>
        <p>
    I found some of the bits hard like removing from shopping basket as it was time consuming and also had error such as parameter excepted to be 1, syntax error, and undefined variable.
    I also had an error when my cart was empty. I have managed to use error_reporting(0) in order to fix it to surpass the error. I think that it is not working correctly but it is surpassing the error that I got my empty basket working when I tried to remove everything. My validation may not work correctly because I have a mainpage that calls the basket and product page so that when I try to validate my site it goes directly to my index page since i am calling pages in an array for my basket and index page.
    I have managed to use sessions and manage to print out the name but I don't think that my sessions are passing to each other oddly because of me creating my pages to be called with an array or maybe I lack knowledge on sessions. 
    I have managed to do most of the tasks but have not yet been able to full conduct on producing a perfect php website due to my lack of understanding the php and trying to use sql to do the for each look to get my basket.
    I think that in my opinion I found using PHP with sql a little harder as there were some operation errors with my code and it was time consuming to fix it. I had to be careful of my code as it would have given me error even if I made a slight mistake.
    I think that SESSION are understandable but for my part I dont think that the SESSION works properly to login and logout. I have made effort by creating sql commands which help to add items to my basket. In my perspective
    I havent made enough effort to make my website look appealing as I can because using div on php wouldnot do as what html would do when moving things around the webpage. The reason behind me not completing the sort page is because lacked time and also spend too long
    correcting the things that I should have left like error so that I could finish my work perfectly. I think that I didn't have time to do the sorting from price high to low because I didnt know how to do it and also I spent most of the time to figure out the removing item that I faced where when I remove the item I would have a syntax error or the remove function not working correctly by just removing one and adding one.
            I believe that since i have made an array of the pages i cant use the html validator since the link just redirects or when i use the main.php?page=products i get a lot of error., however I have checked using individual url for eg te product.php page and so on and some of it seems to be validating but not all. The css validation works but it is pointed towards the css page since if i click on the refer it redirects to the main page which has arrays of pages and codes. The csss seems to be working as it has validated with no errors. Providing with the link i will give description of errors:
            <ol>
                <li>https://validator.w3.org/nu/?doc=http%3A%2F%2Fusers.aber.ac.uk%2Fmal30%2Fcs25010%2Fabout.php</li>-This is for the about page all of the things were validating, now due to writing in ol tags it is giving me error
                <li>https://validator.w3.org/nu/?doc=http%3A%2F%2Fusers.aber.ac.uk%2Fmal30%2Fcs25010%2Findex.php</li>-This is the index page or the login page it works as expected with no errors
                <li>https://validator.w3.org/nu/?doc=http%3A%2F%2Fusers.aber.ac.uk%2Fmal30%2Fcs25010%2Fbasket.php</li>-<b> This is the basket page and has an error on form where there are ",attribute and bad value error. I need this form in order to update my basket because if i remove it, then the basket wont update. The error is just for (form method="POST" action "main.php?page=basket) this  everything else is working on this page.</b>
                <li>https://validator.w3.org/nu/?doc=http%3A%2F%2Fusers.aber.ac.uk%2Fmal30%2Fcs25010%2Fproducts.php</li>- <b>This is the product page. It has an error that I havent found or does not seem to exist. It has error about "br /" where i checked and i havent found any break tags within my product page when using find within my php code.</b>
                <li>https://validator.w3.org/nu/?doc=http%3A%2F%2Fusers.aber.ac.uk%2Fmal30%2Fcs25010%2Fcheckout.php</li>- <b></b>This is the checkout page. I have errors because I have used table to align my javascript form in order to make it look appealing.</b>
     </ol>          
                
                
                
                
                
                
                
                
     <?php echo '<p><b>Refrences:</b></p>' ;?>
                Here are the sites that I have used in order to help me with my assignment. I have implemented some deas using these sites and I belive that it was a lot helpful        
                
            <ol>
             <li>https://www.youtube.com/watch?v=mpQts3ezPVg</li>-used for PHP AND SQL    
            <li>https://www.youtube.com/watch?v=tqfl51HVodI</li>-used for PHP AND SQL
            <li>http://php.net/manual/en/features.sessions.php</li>-used for PHP
            <li>https://en.wikipedia.org/wiki/PostgreSQL</li>-used for SQL
            <li>https://www.youtube.com/watch?v=5b3TcoeY7Bs&list=PLFB796C1E18E6E37E</li>-used for PHP and SQL
            <li>http://www.formget.com/login-form-in-php/</li>used for Login page
            <li>http://www.w3schools.com/js/js_validation.asp</li>used for javascript form. 
     </ol>
    </div>
    </div>
    </body>
    </html>
