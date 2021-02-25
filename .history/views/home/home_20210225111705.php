<div class="container-fluid">
  <div class="row row-home">


    <div class="col-sm-12 col-md-4">
      <?php include('asideHome.php');?>
    </div>
    
    <?php if($_GET['action'] == "home") { ?>
    <div class="col-sm-12 col-md-8">
      <?php include('tweetHome.php') ?>
    </div>
    <?php } ?>

    <div class="col-sm-12 col-md-8">
      <?php include('tendanceHome.php') ?>
    </div>


  </div>
  </div>