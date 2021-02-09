<?php
if(!isset($_SESSION['id'])){
  header('Location: http://soutenance-epitech.test/test/index.php?action=');
}
include('views/home/home.php');