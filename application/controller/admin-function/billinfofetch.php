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
	SELECT * FROM billing_info 
	WHERE order_id LIKE '%".$search."%' 
	OR member_id LIKE '%".$search."%'
	OR first_name LIKE '%".$search."%' 
	OR last_name LIKE '%".$search."%' 
	OR country LIKE '%".$search."%'
	OR address LIKE '%".$search."%'
	OR zipcode LIKE '%".$search."%'
	OR city LIKE '%".$search."%'
	OR phone_no LIKE '%".$search."%'
	OR email LIKE '%".$search."%' 
	";
}
else
{
	$query = "
	SELECT * FROM billing_info ORDER BY order_id";
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
                              Order ID
                           </th>
                           <th>
                              Member ID
                           </th>
                           <th>
                              First-Name
                           </th>
                           <th>
                              Last-Name
                           </th>
                           <th>
                              Country
                           </th>
                           <th>
                              Address
                           </th>
                           <th>
                              Zip Code
                           </th>
                           <th>
                              City
                           </th>
                           <th>
                              Phone
                           </th>
                           <th>
                              Email
                           </th>
                        </thead>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$i++.'</td>
				<td>'.$row["order_id"].'</td>
				<td>'.$row["member_id"].'</td>
				<td>'.$row["first_name"].'</td>
				<td>'.$row["last_name"].'</td>
				<td>'.$row["country"].'</td>
				<td>'.$row["address"].'</td>
				<td>'.$row["zipcode"].'</td>
				<td>'.$row["city"].'</td>
				<td>'.$row["phone_no"].'</td>
				<td>'.$row["email"].'</td>

				

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