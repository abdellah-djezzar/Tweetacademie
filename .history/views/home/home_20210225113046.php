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
      <?php include('tweetHome.php'); break?>
      </div>

      <?php case "tendance" ?>
      <div class="col-sm-12 col-md-8">
      <?php include('tendance.php'); break?>
      </div>

      <?php case "hashtag" ?>
      <div class="col-sm-12 col-md-8">
      <?php include('hashtag.php'); break?>
      </div>

 <?php 
  } 
  ?>

  </div>
  </div>