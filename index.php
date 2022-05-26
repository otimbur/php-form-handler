<html>
  <head>
    <title>Form Handler</title>
  </head>
  <body>
    <h1>Form Handler</h1
   <?php
     if (isset($_POST["FirstName"])){ // show data
        echo $_POST["FirstName"];
     } else {//show the form
      echo '
            <form method="post" action=" "> 
              <p> First Name: <input  type = "text" name= "FirstName"/></p>
              <p> <input type="submit"/></p>    
            </form> 

           ';
     }
   ?>

  
  </body>
</html>
