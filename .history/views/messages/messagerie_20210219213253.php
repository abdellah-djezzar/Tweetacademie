<?php 

if(!empty($_POST["searchterm"])) 
{
    // the query responsible for fetch matched data
    $sql_query ="SELECT * FROM username WHERE name like '" . $_POST["searchterm"] . "%' ORDER BY name LIMIT 0,4";
    $get_result = mysqli_query($dbconfig,$sql_query);
 
        if(!empty($get_result)) {
            // prepare the list for append
        ?>
                <ul id="name-list">
                <?php
                while($name_val = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
                ?>
					<li onClick="selectname('<?php echo $name_val["name"]; ?>');"><?php echo $name_val["name"]; ?></li>
                <?php 
				} 
				?>
                </ul>
        <?php } 
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

