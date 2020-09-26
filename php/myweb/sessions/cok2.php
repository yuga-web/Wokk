<html>
   
   <head>
      <title>Accessing Cookies with PHP</title>
   </head>
   
   <body>
      
      <?php
         if( isset($_COOKIE["name"]))
            echo "Welcome " . $_COOKIE["name"] . "<br />";
         
         else
            echo "cookie not set" . "<br />";
      ?>
      
   </body>
</html>
<?php
   setcookie("name", "ssnii", time()+3600, "/","", 0);
   setcookie("age", "36", time()+3600, "/", "",  0);
?>