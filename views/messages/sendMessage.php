<div class="container chatMessage">
<div class="row">
<div class="col-12" style="height: 70vh; overflow-y: scroll;">
<p id="viewMessage"></p>
</div>
  <div class="col-12 p-1">
    <form method="POST" action="" id="sendMessage">
        <input class="form-control" type="text" id="message" name="text">
        <input type="hidden" id="user_id" name="user_id" value="<?= $_GET["id_user"] ?>">
        <button class="btn btn-outline-primary d-block mx-auto" type="submit">Send</button>
    </form>
  </div>
</div>
</div>
