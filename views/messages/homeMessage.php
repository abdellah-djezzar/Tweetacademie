<div class="container-fluid messagerie">
<div class="row">
  <div class="col-3">
    <ul>
      <?php foreach($getConversation as $conversation){?>
       <li class="m-3 p-3 chats"><a href="index.php?action=sendMessage&id_user=<?=$conversation["adressee_id"]?>"><?= $conversation["pseudo"] ?></a></li>
      <?php } ?>
    </ul>
  </div>

<div class="col-9">
<?php 
if($_GET['action'] == 'sendMessage'){
  include('views/messages/sendMessage.php');
}else{
?>
<h2 class="display-5 text-center mt-5"><br><br><br><br>You don’t have a message selected <br><small>
Choose one from your existing messages, or start a new one !</small></h2>
<?php } ?>
</div>
</div>
</div>