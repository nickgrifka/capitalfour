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