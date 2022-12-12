<?php  
session_start();

if(!isset($_SESSION['login'])){
  header('Location: login.php');
  exit;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style type="text/css">
    body{
      background-color: #262626;
    }
  </style>
  </head>
  <body>
    <!-- Nav bar -->
    <?php require"nav.php" ?>


  <div style="margin-top: 60px; background-color:#F2F2F2; height: 200px;  text-align:
    center;">
      <div>
        <center><h1 style="border-bottom: 3px solid #FF9933; width: 90%; padding-top:50px;">Welcome Admin</h1></center>
      </div>
  </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
