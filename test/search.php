<?php
// Turn off all error reporting
error_reporting(0);
?>
<?php
    include "cart.php";
    include "header/siteheader.php";
    $keywordforfrom = $_GET["name"];
?>
<section class="items">
    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="product_grid">
<?php
//fetch.php
$connect = mysqli_connect('localhost','root','','shopping_cart');
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "SELECT  id, name, code, image, price FROM tbl_product WHERE name LIKE '%"  .$search."%'";
}
else
{
 $query = "
  SELECT * FROM tbl_product ORDER BY id
 ";
}
$result = mysqli_query($connect, $query) or die(exit());
if(mysqli_num_rows($result) > 0){
 while($row = mysqli_fetch_array($result))  {
?>
                        <!-- Product -->
                        <div class="product">
                        <form method="post" action="search.php?action=add&code=<?php echo $row["code"]; ?>">
                        <div class="product_image" id="image"><img src="<?php echo $row["image"]; ?>"></div>
                        <div class="product_extra product_new"><a href="">New</a></div>
                        <div class="product_content">
                            <div class="product_title" id="title"><a href=""><?php echo $row["name"]; ?></a></div>
                            <div class="product_price" id="price"><?php echo "$".$row["price"]; ?></div>
                            <input type="text" class="product-quantity" name="quantity" value="1" size="2" />
                            <div class="button cart_button"><a href="#"><button type="submit" id="PageRefresh" value="Add to Cart" class="btnAddAction">Add to Cart</button></a>

                            </div>
                        </div>
                        </form>
                        </div>
                        <?php
                                }
                            }
                            ?>
                    </div>                      
                </div>
            </div>
        </div>
    </div>
</section>  
<?php
include "header/sitefooter.php";
?>