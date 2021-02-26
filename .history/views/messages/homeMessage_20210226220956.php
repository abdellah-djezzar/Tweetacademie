<br>
<br>
<br>
<br>
<div class="row">
<ul>
<li><a href="index.php?action=sendMessage&id_user=8">Conversation 1</a></li>
</ul>


<?php 
if($_GET['action'] == 'sendMessage'){
  include('views/messages/sendMessage.php');
}
?>