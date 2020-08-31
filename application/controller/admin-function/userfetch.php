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
	SELECT * FROM registered_users 
	WHERE user_name LIKE '%".$search."%'
	OR display_name LIKE '%".$search."%' 
	OR email LIKE '%".$search."%' 
	";
}
else
{
	$query = "
	SELECT * FROM registered_users ORDER BY id";
}

$i="0";
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<table class="table">
                        <thead class=" text-primary">
                           <th>
                              ID
                           </th>
                           <th>
                              Name
                           </th>
                           <th>
                              User_Name
                           </th>
                           <th>
                              Email
                           </th>
                           <th>
                              Remove
                           </th>
                        </thead>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$i++.'</td>
				<td>'.$row["user_name"].'</td>
				<td>'.$row["display_name"].'</td>
				<td>'.$row["email"].'</td>
				<td><a href="../admin-function/edit?action=removeuser&id='.$row["id"].'" class="btnRemoveAction" onclick="md.showNotification("top","right")"><i class="fa fa-trash" aria-hidden="true"></i></a></td>

			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>