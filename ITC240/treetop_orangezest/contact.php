  
<?php include 'includes/config.php'; ?>
<?php include 'includes/header.php'; ?>
<h3>Contact Us</h3>
<p>Filling out the contact form</p>
<?php
$publickey = "6Ld11wYAAAAAAMqyo-I6NvENfuD3VJOXRBLG_8cE";
$privatekey = "6Ld11wYAAAAAAEbf282RKWoikILiUBE7U1QJzfmO";

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
	echo '<br /><a href=" index.php ">Home</a>';
	
}
else
{//no data, show form

	echo '
	<form action=" ' . THIS_PAGE . ' " method="post">
	Name:<br /><input type="text" required name="Name" class="form_settings"/><br />
	Email:<br /><input type="email" required name="Email" class="form_settings"/><br />
	Comments:<br />
	<textarea name="Comments" class="form_settings">Please add your comments here</textarea><br />
	<input type="submit" class="form_settings"/>
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