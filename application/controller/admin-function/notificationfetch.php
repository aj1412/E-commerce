<?php

$connect = mysqli_connect("sql309.epizy.com", "epiz_25618552", "1IYalJj3p7", "epiz_25618552_w317");


session_start();
if(! $_SESSION['adminId'])
{

    echo "Online login can Access .<br><br><br>Click <a href='login.php' here</a>To Login<br>";
    exit;
}


$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM message 
	WHERE first_name LIKE '%".$search."%'
	OR last_name LIKE '%".$search."%' 
	OR email LIKE '%".$search."%'
	OR subject LIKE '%".$search."%'
	OR message LIKE '%".$search."%' 
	";
}
else
{
	$query = "
	SELECT * FROM message ORDER BY id";
}

$i="0";
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '';
	while($row = mysqli_fetch_array($result))
	{
		$output .= ' <div class="alert alert-info alert-with-icon" data-notify="container" id="result">
                    <i class="material-icons" data-notify="icon">add_alert</i>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>
                    <span data-notify="message">Email:'.$row["email"].'</span>
                    <span data-notify="message">First Name:'.$row["first_name"].'</span>
                    <span data-notify="message">Last Name:'.$row["last_name"].'</span>
                    <span data-notify="message">Subject:'.$row["subject"].'</span>
                    <span data-notify="message">Message:'.$row["message"].'</span>
                  </div>';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>