<!DOCTYPE html>
<html>
<head>
<?php
    session_start();

    if (isset($_SESSION['User'])) {
        
    } else {
        header("location:index.php?No");
    }
    ?> 
  <title>Admin</title>
  <link rel="stylesheet" type="text/css" href="assets/css/admin.css">
</head>
<body style=" background: #272822;">

    <footer>Copyright &#169; ProjectQ   
<?php echo date("Y"); ?></footer>
    <style>
      
    </style>

<ul class="bg-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>

</body>
</html>