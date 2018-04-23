      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $name = $_POST['username'];
      // check if the inputted username and password match
      if($name){
                   session_save_path(aber/mal30/tmp);//save path in tmp
                   session_start();// Start the PHP session.
  //if the the name is inputted 
                    $_SESSION['log_in'] = $name;//session login would be name variable so that we can call out what the user will be inputting

                   header('Location: main.php');//direct the user to the main page or the products pages when they enter and login
              }else{ 

                  //or if they just login without any input redirect to  index page
                  header('Location: index.php');
                  // returns the user to the login page

              }
          }
      ?>

    <!DOCTYPE html>
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  	<meta charset="UTF-8">
  	<link href="pagelayout.css" type="text/css" rel="stylesheet"/>
  	<title>Login Page</title>
  </head>
      <body>
          
  <div id="header">
      <h1>Max Limbu's Video Game Shop Login</h1>
      </div>
          <div id="body">
          <!-- where the user will enter his username and password -->
          <form method="post">
              
              <h3>Enter your name here:</h3><input type="text" name="username"/>
                      <input type="submit" value="Login"/>
              </form>
                  </div></body>
      </html>