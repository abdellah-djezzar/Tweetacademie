<!-- Button trigger modal -->
<form action="" method="POST">
        <input type="text" name="test" value="<?=$_SESSION['id']?>">
        <button type="submit" class="btn btn-danger">TEST compte</button>
</form>

<?php var_dump($_POST);