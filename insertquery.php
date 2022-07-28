<?php
   $exp_name = $_POST['name'];
   $exp_amt = $_POST['amount'];
   $exp_category = $_POST['category'];

   $connection = new mysqli('localhost','root','','Users');

   if ($connection -> connect_error) {
      die('Connection error: '.$connection->connect_error);
   }

   $insertQuery = "INSERT INTO yashica VALUES('$exp_name',$exp_amt,'$exp_category');";

   $query = "select sum(amount) from yashica;";
   $result = $connection->query($query);
   $row = $result->fetch_assoc();
   $SUMamt= implode($row);
   
   if ($exp_amt > $SUMamt){
      echo ("<script LANGUAGE='JavaScript'>
      window.location.href='home.php';
      window.alert('You are spending more than you have :)');
      </script>");
   }
   else if ($connection->query($insertQuery) == TRUE) {
      header("Location: home.php");
   } else {
      echo ("ERROR: ".$insertQuery."<br>".$connection->error);
   }
   $connection -> close();
?>