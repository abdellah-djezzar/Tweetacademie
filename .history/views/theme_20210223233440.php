
<?php 

var_dump($checkTheme);
if(isset($checkTheme) AND $checkTheme == 1) {?>
<link rel="stylesheet" href="public/style/dark-style.css"><?php } else {
?>
  <link rel="stylesheet" href="public/style/style.css"><?php } ?> 
