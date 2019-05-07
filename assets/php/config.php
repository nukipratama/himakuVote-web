<?php

   $con = mysqli_connect('localhost','root','','himaku');

   if(!$con){
       die(' Please check your connection '.mysqli_error());
   }
?>