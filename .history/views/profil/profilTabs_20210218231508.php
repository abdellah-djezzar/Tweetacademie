<div class="container">
  <div class="row">
    <div class="col-12">
      <ul class="nav nav-tabs navbar-fixed-top" id="myTab" role="tablist">
       
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="tweet-tab" data-toggle="tab" href="#tweet" role="tab" aria-controls="tweet" aria-selected="true">Tweets</a>
        </li>

        <li class="nav-item" role="presentation">
          <a class="nav-link" id="followers-tab" data-toggle="tab" href="#followers" role="tab" aria-controls="followers" aria-selected="false">Followers</a>
        </li>

        <li class="nav-item" role="presentation">
          <a class="nav-link" id="following-tab" data-toggle="tab" href="#following" role="tab" aria-controls="following" aria-selected="false">Following (<?= $CountFollowing["nbrFollowing"] ?>)</a>
        </li>

        <?php
        if(isset($_GET['id_user'])){?>

          <!-- subscribe button -->
          <li class="nav-item">
          <?php if(isset($subBtn) and $subBtn == true){ ?>
          <form action="" method="POST" id="unsubscribe">
            <input type="submit" name="unsubscribe" id="unsubBtn" value="se désabonner">
            <input type="hidden" value="<?=$_GET["id_user"]?>" name="user">
          </form>
          <?php } ?>
          
          
          <!-- unsubscribe btn -->
          <?php if(isset($SubBtn) and $subBtn == false){ ?>
          <form action="" method="POST" id="subscribe">
            <input type="submit" name="subscribe" id="subBtn" value="s'abonner">
          </form>
          <?php } ?>
          </li>

          <?php var_dump($subBtn);?>

          <?php }else {?>
            
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="editprofil-tab" data-toggle="tab" href="#editprofil" role="tab" aria-controls="editprofil" aria-selected="false">Modifier le profil</a>
          </li>

        <?php } ?>

        
      </ul>
      <div class="tab-content" id="myTabContent">

        <div class="tab-pane fade show active" id="tweet" role="tabpanel" aria-labelledby="tweet-tab"><?php include('views/profil/tweets.php') ?></div>

        <div class="tab-pane fade" id="followers" role="tabpanel" aria-labelledby="followers-tab"><?php include('views/profil/followersList.php')?></div>

        <div class="tab-pane fade" id="following" role="tabpanel" aria-labelledby="following-tab"><?php include('views/profil/followingList.php')?></div>
          
        <div class="tab-pane fade" id="editprofil" role="tabpanel" aria-labelledby="editprofil-tab"><?php include('views/profil/editprofil.php')?></div>

      </div>
        </div>
    </div>
  </div>
</div>