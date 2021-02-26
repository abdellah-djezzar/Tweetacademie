<br>
<br>
<br>
<br>
<div class="row">
  <div class="col-4">
    <ul>
      <li><a href="index.php?action=sendMessage&id_user=8">Conversation 1</a></li>
    </ul>
  </div>

<div class="col-8">
<?php 
if($_GET['action'] == 'sendMessage'){
  include('views/messages/sendMessage.php');
}
?>
</div>
</div>