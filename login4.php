<?php


  $user=$_POST['s1'];
$pass=$_POST['S2'];
echo"hello" ;
echo"$user and $pass";

  if($user=="pavan" && $pass=="pavan")
  {
  
       header('Location: http://localhost/button.html');
  
  
  }
  else
  {
  
      echo"password wrong";
  
  }
?> 
