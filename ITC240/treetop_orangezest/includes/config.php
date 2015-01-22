<?php
//config.php

include 'credentials.php'; //database credentials

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
//echo THIS_PAGE;

define('DEBUG',TRUE); #we want to see all errors
function myerror($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
       echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
       echo "Error Message: <b>" . $errorMsg . "</b><br />";
       die();
    }else{
		echo "I'm sorry, we have encountered an error.  Would you like to buy some socks?";
		die();
    }
}


$nav1 ['index.php'] = "Home";
$nav1 ['ourwork.php'] = "Work";
$nav1 ['projects.php'] = "Projects";
$nav1 ['contact.php'] = "Contact";
$nav1 ['register.php'] = "Register";
$nav1 ['webclasses-table.php'] = "Credentials";

switch(THIS_PAGE)
{
	case 'index.php':
		$title = "Home Page Title!";
		$banner = "Home Page banner";
		break;
		
	case 'ourwork.php':
		$title = "About Page Title!";
		$banner = "About Page banner";
		break;
		
	case 'projects.php':
		$title = "Works Page Title!";
		$banner = "Works Page banner";
		break;
		
	case 'blog.php':
		$title = "Blog Page Title!";
		$banner = "Blog Page banner";
		break;
		
	case 'contact.php':
		$title = "Contact Page Title!";
		$banner = "Contact Page banner";
		break;
	
	case 'webclasses-table.php':
		$title = "My Credentials Page Title!";
		$banner = "Credentials Page banner";
		break;
		
	default:
		$title = "Our cool website!";
		$banner = "our cool banner";
}



function makeLinks($nav)
{
	$output = '';
	
	foreach($nav as $url => $text)
	{
		if($url == THIS_PAGE)
		{//if th eurl matches the page, add the class active
			$output .= '<li class="active"><a href="'. $url .'">'. $text .'</a></li> ' . PHP_EOL;
		} else {//otherwisw no class!
			$output .= '<li><a href="'. $url .'">'. $text .'</a></li> ' . PHP_EOL;;
		}
		
		
	}
	return $output;
}

/*
<li class="active"><a href="index.html">home</a></li> 
	<li class="sub-menu"><a href="#">about us<span></span></a>
			<ul class="submenu">
				<li><a href="#">history</a></li>
				<li><a href="#">news</a></li>
				<li><a href="#">testimonials</a></li>
			</ul>
		</li> 
	  <li><a href="#">services</a></li> 
	  <li><a href="#">projects</a></li> 
	  <li><a href="#">contacts</a></li>  
*/

?>