<?php 
include('views/messages/homeMessage.php');
if($_GET['action'] == 'sendMessage'){
  include('views/messages/sendMessage.php');
}