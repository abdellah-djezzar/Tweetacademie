<?php 
if (empty($_SESSION['id']))
{
    header('Location: index.php?action=home');
}
include('views/home/home.php');