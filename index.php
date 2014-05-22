<?php
   echo "Hello World<br/>";

   if ($_SERVER['REQUEST_METHOD'] === 'POST')
   {
      echo "POST method<br/>";

      // check for post data
      if ($_POST)
      {
         echo "received POST data:<br/>";
         print_r($_POST);
      }
      else
      {
         echo "no POST data<br/>";
      }

      // Check for files
      if ($_FILES)
      {
         echo "received file:<br/>";
         print_r($_FILES);

         if (file_exists("picture.png"))
         {
            echo "picture file does not exist prior to file creation<br/>";
         }
         else
         {
            echo "PICTURE FILE EXISTS prior to file creation<br/>";  
         }

         file_put_contents("picture.png", $_FILES);

         if (file_exists("picture.png"))
         {
            echo "picture file does not exist even after file creation<br/>";
         }
         else
         {
            echo "PICTURE FILE EXISTS after file creation<br/>";  
         }
      }
      else
      {
         echo "no file data<br/>";
      }
   }
   else
   {
      echo "GET method<br/>";
   }
?>