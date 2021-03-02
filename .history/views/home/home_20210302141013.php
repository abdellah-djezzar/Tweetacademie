<div class="container-fluid">
  <div class="row row-home">

  <div class="col-sm-12 col-md-3 d-flex justify-content-center">
      <?php include('asideHome.php');?>
  </div>

<?php 
  $page = $_GET['action'];

  switch ($page) 
  {
    
      case "home" ?>
      <div class="col-sm-12 col-md-9">
      <?php include('tweetHome.php'); break?>
      </div>

      <?php case "tendance" ?>
      <div class="col-sm-12 col-md-9">
      <?php include('tendanceHome.php'); break?>
      </div>

      <?php case "hashtag" ?>
      <div class="col-sm-12 col-md-9">
      <?php include('hashtagHome.php'); break?>
      </div>

 <?php 
  } 
  ?>

  </div>
  </div>