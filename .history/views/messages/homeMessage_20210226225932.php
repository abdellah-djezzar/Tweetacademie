<br>
<br>
<br>
<br>
<div class="container">
<div class="row">
  <div class="col-4">
    <ul>
      <?php 
        if(isset($getConversation)){
        foreach($getConversation as $conversation){?>
       <li><a href="index.php?action=sendMessage&id_user=<?=$conversation["adressee_id"]?>">Conversation 1</a></li>
      <?php }} ?>
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
</div>