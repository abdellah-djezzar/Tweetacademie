<?php 
Session_destroy();
header('Location: ' . $_SERVER['HTTP_REFERER']);

// en gros ça veut dire "dégage maintenant" :-)