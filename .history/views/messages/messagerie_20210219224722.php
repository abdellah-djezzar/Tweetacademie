<?php 
  if($getMembers) { //
    echo json_encode($getMembers[0]["pseudo"]);
  } else {
    echo json_encode("aucun resultat");
  }

?>
<p> Home Messagerie </p>
<input type="text" id="searhBarMessage" name="searchBarMessage">
<p id="result"></p>