<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="public/style/bootstrap-4.6.0-dist/css/bootstrap.min.css">
  <?php include('views/theme.php')?>
  <title>Tweeter Inscriptio Connexion</title>
  <title>Header.php</title>
</head>
<body>
<?php
if(isset($_SESSION['id'])){
  include('views/navigation/membersNavigation.php');
} else {
  include('views/navigation/publicNavigation.php');
}

