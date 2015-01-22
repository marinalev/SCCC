<?php 
include 'includes/config.php';
include 'includes/header.php';

echo "<h1>Web Desing & Development Classes</h1>";

$sql = "select * from Webdesignclasses";
//-----end config area---

$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_error()));
$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error()));
if (mysqli_num_rows($result) > 0)//at least one record!
{//show results
	while ($row = mysqli_fetch_assoc($result))
    {
	   echo "<p>";
	   echo "Class name: <b>" . $row['ClassName'] . "</b><br />";
	   echo "Code: <b>" . $row['Code'] . "</b><br />";
	   echo "Description: <b>" . $row['Description'] . "</b><br />";
	   echo "</p>";
    }
}else{//no records
	echo '<div align="center">What! No customers?  There must be a mistake!!</div>';
}

@mysqli_free_result($result); #releases web server memory
@mysqli_close($iConn); #close connection to database

  

include 'includes/footer.php';

  
