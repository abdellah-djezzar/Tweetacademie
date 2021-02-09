<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header.php</title>
  <script src="public/scripts/main.js"></script>
</head>
<?php
if(isset($_SESSION['id'])){
  include('views/navigation/membersNavigation.php');
} else {
  include('views/navigation/publicNavigation.php');
}