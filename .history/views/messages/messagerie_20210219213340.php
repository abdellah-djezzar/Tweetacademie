<?php 

if(!empty($_POST["searchterm"])) 
{
    // the query responsible for fetch matched data 
      foreach($getMembers as $member){
        echo "$member["pseudo"]";
      }
} 
?>

<p> Home Messagerie </p>
<div class="search-frm">
	<form name="search-example" method="" action="">
		<input type="text" id="searchword" placeholder="Start search with your name" />
		// search input form for type
	</form>
	<div id="id_suggesstions">
		// this area for show the jquery ajax autocomplete search result
	</div>
</div>

