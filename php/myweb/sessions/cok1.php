<html>
   
   <head>
      <title>Accessing Cookies with PHP</title>
   </head>
   
   <body>
      
      <?php
         echo $_COOKIE["name"]. "<br />";
         
         /* is equivalent to */
         echo $HTTP_COOKIE_VARS["name"]. "<br />";
         
         echo $_COOKIE["age"] . "<br />";
         
         /* is equivalent to */
         echo $HTTP_COOKIE_VARS["age"] . "<br />";
      ?>
      
   </body>
</html>
<?php
   setcookie("name", "John Watkin", time()+3600, "/","", 0);
   setcookie("age", "36", time()+3600, "/", "",  0);
?>