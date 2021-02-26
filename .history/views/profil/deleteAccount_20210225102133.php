<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Suprimer mon compte
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Supprimer mon compte</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, est reprehenderit! Facere totam quaerat odio odit in quisquam maxime soluta. Recusandae sequi perferendis facilis voluptate deserunt itaque, dolorum magnam possimus.</p>
      <form action="index.php?action=deleteAccount" method="POST" id="deleteAccount">
        <button type="submit" class="btn btn-danger">Supprimer mon compte</button>
        <input type="hidden" name="delete" value="<?=$_SESSION['id']?>">
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>