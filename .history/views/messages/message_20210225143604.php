
<br>
<br>
<br>
<br>
<br>
<p id="viewMessage"></p>
<div class="container">
<form id="sendMessage">
<label for="message">Envoyer un message</label>
<input type="text" id="message" name="text">
<input type="hidden" name="user_id" value="<?= $_GET["id_user"] ?>">
<input type="submit">
</form>
</div>