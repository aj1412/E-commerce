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
	SELECT * FROM order_status 
	WHERE member_id LIKE '%".$search."%'
	OR first_name LIKE '%".$search."%' 
	OR last_name LIKE '%".$search."%' 
	OR order_id LIKE '%".$search."%'
	OR payment_id LIKE '%".$search."%'
	OR status LIKE '%".$search."%'
	OR paymentid LIKE '%".$search."%'
	OR email LIKE '%".$search."%'
	OR phone_no LIKE '%".$search."%'
	OR amount LIKE '%".$search."%' 
	";
}
else
{
	$query = "
	SELECT * FROM order_status ORDER BY iduser";
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
                              Member ID
                           </th>
                           <th>
                              First-Name
                           </th>
                           <th>
                              Last-Name
                           </th>
                           <th>
                              Uniqid
                           </th>
                           <th>
                              Order-Id
                           </th>
                           <th>
                              Status
                           </th>
                           <th>
                              Paymennt-id
                           </th>
                           <th>
                              Email
                           </th>
                           <th>
                              Phone Number
                           </th>
                           <th>
                              Amount
                           </th>
                        </thead>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$i++.'</td>
				<td>'.$row["member_id"].'</td>
				<td>'.$row["first_name"].'</td>
				<td>'.$row["last_name"].'</td>
				<td>'.$row["order_id"].'</td>
				<td>'.$row["payment_id"].'</td>
				<td>'.$row["status"].'</td>
				<td>'.$row["paymentid"].'</td>
				<td>'.$row["email"].'</td>
				<td>'.$row["phone_no"].'</td>
				<td>'.$row["amount"].'</td>
				

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