<div class="container-fluid mt-5">
  <div class="row">

  <div class="col-sm-12 col-md-3 d-flex justify-content-center mt-5">
      <?php include('asideHome.php');?>
  </div>

  <div class="col-sm-12 col-md-9">
    <h4>#hashtags</h4>
    
  <?php 
  foreach($hashtags as $hashtag){ ?>
  
    <div class="tweet-container" style="display: flex; flex-direction: column; margin-top: 3em">
    
    <span><a href="<?="index.php?action=profil&id_user=". $hashtag["ID_user"] .""?>"><?= $hashtag["pseudo"] ?></a> tweeted :</span>
    <p><?= $hashtag["text"]?></p>
          <form style="display: inline" action="" method="POST" class="retweet">
          <input type="hidden" name="id_user">
          </form>
      <h6 class="ml-auto">Tweet on: <?= $hashtag["tweetDate"]?> </h6>
          </div>
  <?php 
  } 
  ?>
</div>
  </div>
  </div>