<?php

   $dsn = 'mysql:host=localhost; dbname=site_dif';
   $user = 'root';
   $pass = '059580';

   try{
    $conn = new PDO($dsn, $user, $pass);

   }catch(PDOException $ex){
    echo 'erro: ' .$ex->getMessage();
   }


?>