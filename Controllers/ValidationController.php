<?php
if($_GET["action"]) {
  echo json_encode("mail ok");
}else {
  echo json_encode("ok");
}
