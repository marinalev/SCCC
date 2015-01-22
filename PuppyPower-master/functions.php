<?php

//sidebars
register_sidebar(array(
	"name" => "Right Side Bar",
	"id" => "right-sidebar",
	"description" => "Right Side Bar",
	"before_widget" => "<div  id='widget'>",
	"after_widget" => "</div><br > <br> <!--end widget-->", 
	"before_title" => "<h3 class='widget_title'>",
	"after_title" => "</h3>"
));


?>