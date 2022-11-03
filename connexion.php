<?php
   try{
      $pdo=new PDO("mysql:host=localhost;dbname=projets","root","");
   }
   catch(PDOException $e){
      echo $e->getMessage();
   }
?>