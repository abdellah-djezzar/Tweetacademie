<br>
<br><br><br>

<?php 

include('views/messages/asideMessage.php')
if($_GET['action'] == 'sendMessage'){
  include('views/messages/sendMessage.php');
}

?>