<?php 
// foreach($tweets as $tweet){
//   echo "<p class=\"tweet-container\" id=".$tweet["ID_tweet"].">".$tweet["text"]."</p>";
// }

foreach($tweets as $tweet){
  echo "<div class=\"tweet-container\">
        <p>".$tweet["text"]."</p>
        <span>Tweet posted by: <a href=\"index.php?action=profilOtherMember&id_user=".$tweet["ID_user"]."\">".$tweet["username"]."</a></span>
        </form>
        </div>";
}