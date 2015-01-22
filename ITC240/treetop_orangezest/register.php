<?php include 'includes/config.php'; ?>
<?php include 'includes/header.php'; ?>
<h3>Contact Us</h3>

<?php
$to = "mlevon01@seattlecentral.edu";
$subject = "Response to my form handler";
//end config area
if(isset($_POST['Name']))
{//data is submitted, show it
	//echo $_POST['Name'];
	$text = 'From: ' . $_POST['Name'] . PHP_EOL;
	
	//$text .= $_POST['Comments'];
	$text .= process_post();
	$from = $_POST['Email'];
	/*
	echo '<pre>';
	var_dump($_POST);
	echo '</pre>';
	*/
	
	$headers = 'From: noreply@seattlecentral.edu' . PHP_EOL .
		'Reply-To: ' . $from . PHP_EOL .
		'X-Mailer: PHP/' . phpversion();
	 mail($to,$subject,$text,$headers);
	 
	echo '<div>Thank you for your message!</div>';
	echo '<br />
		<ul class="list1">
			<li>
				<a href=" index.php ">Home Page</a>
			</li>
			<li>
				<a href=" about.php ">About</a>
			</li>
			<li>
				<a href=" works.php ">Works</a>
			</li>
			<li>
				<a href=" blog.php ">Blog</a>
			</li>
		</ul>';
}
else
{//no data, show form

	echo '
	<form action=" ' . THIS_PAGE . ' " method="post">
	Name:<br /><input type="text" required name="Name" /><br />
	Username:<br /><input type="text" required name="Username" /><br />
	Your Birthday (month and year):<br /><input type="month" name="bdaymonth"><br />
	Email:<br /><input type="email" required name="Email" /><br />
	Telephone:<br /><input type="tel" name="usrtel"><br />
	Please spam me:<br />
	<input type="radio" name= "Please_Spam_Me" value="Yes" /> Yes <br />
	<input type="radio" name= "Please_Spam_Me" value="No" /> No <br />
	Please spam me this way: <br />
	<input type="checkbox" name="option1" value="email" checked>Email<br />
	<input type="checkbox" name="option2" value="phone">Phone Call<br />
	<input type="checkbox" name="option3" value="newsletter">Newsletter<br />
	Comments:<br />
	<textarea name="Comments"></textarea><br />
	<input type="submit" />
	</form>
	';
	
}

include 'includes/footer.php'; 

function process_post()
{//loop through POST vars and return a single string
    $myReturn = ''; //set to initial empty value

    foreach($_POST as $varName=> $value)
    {#loop POST vars to create JS array on the current page - include email
         $strippedVarName = str_replace("_"," ",$varName);#remove underscores
        if(is_array($_POST[$varName]))
         {#checkboxes are arrays, and we need to collapse the array to comma separated string!
             $myReturn .= $strippedVarName . ": " . implode(",",$_POST[$varName]) . PHP_EOL;
         }else{//not an array, create line
             $myReturn .= $strippedVarName . ": " . $value . PHP_EOL;
         }
    }
    return $myReturn;
}
?>