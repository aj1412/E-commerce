<?php
session_start();


if(! $_SESSION['adminId'])
{

    echo "Online login can Access .<br><br><br>Click <a href='login.php' here</a>To Login<br>";
    exit;
}

if(isset($_POST['submit'])){

    $newname = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $newcode = filter_var($_POST["code"], FILTER_SANITIZE_STRING);
    $file = $_FILES['image'];
    $fileName = $_FILES['image']['name'];
    $fileTmpName = $_FILES['image']['tmp_name'];
    $fileSize = $_FILES['image']['size'];
    $fileError = $_FILES['image']['error'];
    $fileType = $_FILES['image']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg','png');

    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 10000000){
                 $fileNameNew = uniqid('',true).".".$fileActualExt;
                 $fileDestination = 'product-images/'.$fileNameNew;
                 move_uploaded_file($fileTmpName, $fileDestination);
                 $newimage = $fileDestination;
            }else{
                echo "too big";
            }
        }else{
            echo "Error Uploading";
        }
    }else{
        echo "You cannot upload files";
    }

    
    $newprice = filter_var($_POST["price"], FILTER_SANITIZE_STRING);

    require_once ("../../config/class/ShoppingCart.php");
    
    $member = new ShoppingCart();
    $isLoggedIn = $member->addnew($newname,$newcode,$newimage,$newprice);
   if (! $isLoggedIn) {
        $_SESSION["falseMessage"] = "Invalid Credentials";
        ?>
        <script>
        window.location = '../admin/tables';
        </script>
        <?php
    }
        if ($isLoggedIn) {
        $_SESSION["trueMessage"] = "Complete";  
    ?>
        <script>
        window.location = '../admin/tables';
        </script>
        <?php
    }
    exit();
}
?>

