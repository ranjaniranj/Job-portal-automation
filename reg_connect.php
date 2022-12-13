<?php
  $email=$_POST["e"];
  $pwd=$_POST["pwd"];
  $con=mysql_connect("localhost","root","");
  mysql_select_db("Webdev");
  mysql_query("insert into register (e,pwd) values ('$email','$pwd'");
  include ("Register.php");
  mysql_close($con);
?>