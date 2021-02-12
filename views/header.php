<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="public/style/style.css">
  <link rel="shortcut icon" type="image/x-icon" href="https://img.icons8.com/fluent/48/000000/twitter.png" />
  <title>Tweeter Inscriptio Connexion</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@900&display=swap" rel="stylesheet">
  <title>Header.php</title>
</head>
<?php
if(isset($_SESSION['id'])){
  include('views/navigation/membersNavigation.php');
} else {
  include('views/navigation/publicNavigation.php');
}

