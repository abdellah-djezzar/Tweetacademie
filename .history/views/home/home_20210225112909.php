<div class="container-fluid">
  <div class="row row-home">

  <div class="col-sm-12 col-md-4">
      <?php include('asideHome.php');?>
  </div>

<?php 
  $page = $_GET['action'];

  switch ($page) 
  {
    case "home" ?>
     
      <div class="col-sm-12 col-md-8">
      <?php include('tweetHome.php'); break:?>
      </div>

      <?php case "tendance" ?>


 <?php 
  } 
  ?>


  ?>
   
    <?php if($_GET['action'] == "home") { ?>
    <div class="col-sm-12 col-md-8">
      <?php include('tweetHome.php') ?>
    </div>
    <?php } ?>


    <?php if($_GET['action'] == "tendance") { ?>
      <div class="col-sm-12 col-md-8">
        <?php include('tendanceHome.php') ?>
      </div>
    <?php } ?>


    <?php if($_GET['action'] == "hashtag") { ?>
      <div class="col-sm-12 col-md-8">
        <?php include('hashtagHome.php') ?>
      </div>
    <?php } ?>



  </div>
  </div>