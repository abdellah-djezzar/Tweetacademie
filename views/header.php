<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="public/style/style.css">
  <link rel="shortcut icon" type="image/x-icon" href="https://img.icons8.com/fluent/48/000000/twitter.png" />
  <title>Tweeter Inscription / Connexion</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@900&display=swap" rel="stylesheet">
  <title>Header.php</title>
</head>
<?php
if(isset($_SESSION['id'])){
  include('views/navigation/membersNavigation.php');
} else {
  include('views/navigation/publicNavigation.php');
}

