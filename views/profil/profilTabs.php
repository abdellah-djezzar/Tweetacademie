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
        
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="tweet" role="tabpanel" aria-labelledby="tweet-tab">Lister tweets</div>
        <div class="tab-pane fade" id="followers" role="tabpanel" aria-labelledby="followers-tab">Lister Followers</div>
        <div class="tab-pane fade" id="following" role="tabpanel" aria-labelledby="following-tab"><?php include('views/profil/followingList.php')?></div>
      </div>
    </div>
  </div>
</div>