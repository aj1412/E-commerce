<?php
//fetch.php
$connect = mysqli_connect('localhost','root','','shopping_cart');
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = 
  "SELECT  id, name, code, image, price FROM tbl_product WHERE name LIKE '%"  .$search."%'";
}
else
{
 $query = "
  SELECT * FROM tbl_product ORDER BY id
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Customer Name</th>
     <th>Address</th>
     <th>City</th>
     <th>Postal Code</th>
     <th>Country</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
   <td>'.$row["id"].'</td>
    <td>'.$row["name"].'</td>
    <td>'.$row["code"].'</td>
    <td>'.$row["image"].'</td>
    <td>'.$row["price"].'</td>
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
