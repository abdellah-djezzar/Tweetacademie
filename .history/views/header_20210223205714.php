<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="public/style/bootstrap-4.6.0-dist/css/bootstrap.min.css">
  <?php if($_SESSION['theme'] == 2){?>
  <link rel="stylesheet" href="public/style/dark-style.css">
  <?php } else {?>
  <link rel="stylesheet" href="public/style/style.css">
  <?php } ?>
  <title>Tweeter Inscriptio Connexion</title>
  <title>Header.php</title>
</head>
<body>
<?php echo "<br>"?>
<?php echo "<br>"?>

<?php echo "<br>"?>

<?php echo "<br>"?>

<?php
if(isset($_SESSION['id'])){
  include('views/navigation/membersNavigation.php');
} else {
  include('views/navigation/publicNavigation.php');
}

