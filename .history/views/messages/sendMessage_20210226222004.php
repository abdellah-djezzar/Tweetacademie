<div class="row">
<p id="viewMessage"></p>
  <div class="col-8">
    <form method="POST" action="" id="sendMessage">
      <label for="message">Envoyer un message</label>
        <input type="text" id="message" name="text">
        <input type="hidden" id="user_id" name="user_id" value="<?= $_GET["id_user"] ?>">
        <input type="submit">
    </form>
  </div>
</div>