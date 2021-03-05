<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Disable your account
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Disable your account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p>If you want to disable your account, you can re-activate it at any time you want.</p>
      <form action="index.php?action=editProfil" method="POST" id="deleteAccount">
        <button type="submit" class="btn btn-danger">Disable your account</button>
        <input type="hidden" name="deleteAccount" value="<?=$_SESSION['id']?>">
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>