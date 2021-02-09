<?php
header('Content-Type: application/json');

if($_GET["action"] == "email") {
  echo json_encode("mail existant");
}else {
  echo json_encode("ok");
}