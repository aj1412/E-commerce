
<?php
require_once "DBController.php";

class ShoppingCart extends DBController
{


    function getAllProduct()
    {
        $query = "SELECT * FROM tbl_product";
        
        $productResult = $this->getDBResult($query);
        return $productResult;
    }

     function getLimitProduct()
    {
        $query = "SELECT * FROM tbl_product LIMIT 9";
        
        $productResult = $this->getDBResult($query);
        return $productResult;
    }

    function getupdate()
    {
        $query = "UPDATE tbl_cart SET member_id='{$_SESSION["userId"]}' WHERE member_id= $num ";
        
        $update = $this->updateDB($query);
        return $update;
    }

    function LimitProduct()
    {
        $query = "SELECT  id, name, code, image, price FROM tbl_product WHERE name LIKE '%"  .$keywordforfrom    ."%'";
        
        $productResult = $this->getDBResult($query);
        return $productResult;
    }


    function getMemberCartItem($member_id)
    {
        $query = "SELECT tbl_product.*, tbl_cart.id as cart_id,tbl_cart.quantity FROM tbl_product, tbl_cart WHERE 
            tbl_product.id = tbl_cart.product_id AND tbl_cart.member_id = ?";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $member_id
            )
        );
        
        $cartResult = $this->getDBResult($query, $params);
        return $cartResult;
    }

      function deleteCartItemid($member_id)
    {
        $query = "DELETE FROM tbl_cart WHERE member_id = ?";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $member_id
            )
        );
        $Result = $this->getDBResult($query, $params);
        return $Result;
    }
    
    function getprocessLogin($username, $password) 
    {
        
        $query = "SELECT * FROM registered_users WHERE user_name = ? AND password = ?";
        $params = array(
            array(
                "param_type" => "ss",
                "param_value" => $username
            ),
            array(
                "param_type" => "ss",
                "param_value" => $password
            )
        );
        $memberResult = $this->getDBResult($query, $params);
        if(!empty($memberResult)) {
            $_SESSION["userId"] = $memberResult[0]["id"];
            return true;
        }
    }


    function getProductByCode($product_code)
    {
        $query = "SELECT * FROM tbl_product WHERE code=?";
        
        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $product_code
            )
        );
        
        $productResult = $this->getDBResult($query, $params);
        return $productResult;
    }

    function getCartItemByProduct($product_id, $member_id)
    {
        $query = "SELECT * FROM tbl_cart WHERE product_id = ? AND member_id = ?";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $product_id
            ),
            array(
                "param_type" => "i",
                "param_value" => $member_id
            )
        );
        
        $cartResult = $this->getDBResult($query, $params);
        return $cartResult;
    }

    function addToCart($product_id, $quantity, $member_id)
    {
        $query = "INSERT INTO tbl_cart (product_id,quantity,member_id) VALUES (?, ?, ?)";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $product_id
            ),
            array(
                "param_type" => "i",
                "param_value" => $quantity
            ),
            array(
                "param_type" => "i",
                "param_value" => $member_id
            )
        );
        
        $this->updateDB($query, $params);
    }

    function updateCartQuantity($quantity, $cart_id)
    {
        $query = "UPDATE tbl_cart SET  quantity = ? WHERE id= ?";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $quantity
            ),
            array(
                "param_type" => "i",
                "param_value" => $cart_id
            )
        );
        
        $this->updateDB($query, $params);
    }

    
    

    function deleteCartItem($cart_id)
    {
        $query = "DELETE FROM tbl_cart WHERE id = ?";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $cart_id
            )
        );
        
        $this->updateDB($query, $params);
    }

    function deleteproduct($cart_id)
    {
        $query = "DELETE FROM tbl_product WHERE id = ?";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $cart_id
            )
        );
        
        $this->updateDB($query, $params);
    }
    
    function deleteuser($cart_id)
    {
        $query = "DELETE FROM registered_users WHERE id = ?";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $cart_id
            )
        );
        
        $this->updateDB($query, $params);
    }        

    function emptyCart($member_id)
    {
        $query = "DELETE FROM tbl_cart WHERE member_id = ?";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $member_id
            )
        );
        
        $this->updateDB($query, $params);
    }

       function emptyPaymentCart($member_id)
    {
        $query = "DELETE FROM tbl_cart WHERE member_id = ?";
        
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $member_id
            )
        );
        
        $this->updateDB($query, $params);
    }

    function getMemberById($memberId)
    {
        $query = "select * FROM registered_users WHERE id = ?";
        $paramType = "i";
        $paramArray = array($memberId);
        $memberResult = $this->select($query, $paramType, $paramArray);
        return $memberResult;

    }

    function getadminById($memberId)
    {
        $query = "select * FROM admin WHERE id = ?";
        $paramType = "i";
        $paramArray = array($memberId);
        $memberResult = $this->select($query, $paramType, $paramArray);
        return $memberResult;

    }

     function getMemberByName($username)
    {
        $query = "select * FROM registered_users WHERE user_name = ?";
        $paramType = "s";
        $paramArray = array($username);
        $memberResult = $this->select($query, $paramType, $paramArray);
        
        return $memberResult;
    }
    
    public function processLogin($username, $password) {
        $passwordHash = md5($password);
        $query = "select * FROM registered_users WHERE user_name = ? AND password = ?";
        $paramType = "ss";
        $paramArray = array($username, $passwordHash);
        $memberResult = $this->select($query, $paramType, $paramArray);
        if(!empty($memberResult)) {
            $_SESSION["userId"] = $memberResult[0]["id"];
            $_SESSION["username"] = $memberResult[0]["display_name"];
            return true;
        }
    }
     public function registrationLogin($newusername,$newname,$newpassword,$newemail) {
        
        $passwordHash = md5($newpassword);
        $paramType = "ssss";
        $query = "INSERT INTO registered_users (user_name,display_name, password,email ) VALUES (?, ?, ?, ?)";
        $paramArray = array($newusername,$newname,$passwordHash,$newemail);
        $memberResult = $this->insert($query,$paramType,$paramArray);
         if(!empty($memberResult)) {
            $_SESSION["memberId"] = $memberResult[0]["id"];
            $_SESSION["username"] = $memberResult[0]["display_name"];
            return true;
        }
        return false;
    }

    public function adminLogin($username, $password) {
        $passwordHash = md5($password);
        $query = "select * FROM admin WHERE admin = ? AND password = ?";
        $paramType = "ss";
        $paramArray = array($username, $passwordHash);
        $memberResult = $this->select($query, $paramType, $paramArray);
        if(!empty($memberResult)) {
            $_SESSION["adminId"] = $memberResult[0]["id"];
            $_SESSION["adminname"] = $memberResult[0]["admin_name"];
            return true;
        }
        return false;
    }

    public function billing_info($newmember_id,$newfirstname,$newlastname,$newcountry,$newaddress,$newzipcode,$newcity,$newphoneno,$newemail) {
        $paramType = "sssssssss";
        $query = "INSERT INTO billing_info (member_id,first_name,last_name,country,address,zipcode,city,phone_no,email) VALUES (?, ?, ?,?,?,?,?,?,?)";
        $paramArray = array($newmember_id,$newfirstname,$newlastname,$newcountry,$newaddress,$newzipcode,$newcity,$newphoneno,$newemail);
        $memberResult = $this->insert($query,$paramType,$paramArray);
         if(!empty($memberResult)) {
            $_SESSION["Id"] = $memberResult[0]["first_name"];
            $_SESSION["email"] = $memberResult[0]["email"];
            return true;
        }
        return false;
    }
     public function getbillinfo($newfirstname,$newemail) {
        $query = "select * FROM billing_info WHERE  first_name = ? AND email = ?";
        $paramType = "ss";
        $paramArray = array($newfirstname,$newemail);
        $memberResult = $this->select($query, $paramType, $paramArray);
        if(!empty($memberResult)) {
            $_SESSION["orderid"] = $memberResult[0]["order_id"];
            $_SESSION["name"] = $memberResult[0]["first_name"];
            $_SESSION["lname"] = $memberResult[0]["last_name"];
            $_SESSION["mail"] = $memberResult[0]["email"];
            $_SESSION["number"] = $memberResult[0]["phone_no"];
            $_SESSION["address"] = $memberResult[0]["address"];

            return true;
        }
        return false;
    }
    public function order_info($newmember_id,$newfirstname,$newlastname,$neworderid,$newpayment_id,$status,$newpaymentid,$newemail,$number,$amount) {
        $paramType = "ssssssssss";
        $query = "INSERT INTO order_status (member_id,first_name,last_name,order_id,payment_id,status,paymentid,email,phone_no,amount) VALUES (?,?,?,?,?,?,?,?,?,?)";
        $paramArray = array($newmember_id,$newfirstname,$newlastname,$neworderid,$newpayment_id,$status,$newpaymentid,$newemail,$number,$amount);
        $memberResult = $this->insert($query,$paramType,$paramArray);
         if(!empty($memberResult)) {
            $_SESSION["info"] = $memberResult[0]["iduser"];
            return true;
        }
        return false;
    }

    public function message_info($newfirstname,$newlastname,$newsubject,$newmessage,$newemail) {
        $paramType = "sssss";
        $query = "INSERT INTO message (first_name,last_name,subject,message,email) VALUES (?,?,?,?,?)";
        $paramArray = array($newfirstname,$newlastname,$newsubject,$newmessage,$newemail);
        $memberResult = $this->insert($query,$paramType,$paramArray);
         if(!empty($memberResult)) {
            return true;
        }
        return false;
    }

    public function getinfo($name) {
        $query = "select * FROM tbl_product WHERE  name = ?";
        $paramType = "s";
        $paramArray = array($name);
        $memberResult = $this->select($query, $paramType, $paramArray);
        if(!empty($memberResult)) {
            return true;
        }
        return false;
    }

    public function addnew($newname,$newcode,$newimage,$newprice) {
        $paramType = "ssss";
        $query = "INSERT INTO tbl_product (name, code, image, price) VALUES (?,?,?,?)";
        $paramArray = array($newname,$newcode,$newimage,$newprice);
        $memberResult = $this->insert($query,$paramType,$paramArray);
         if(!empty($memberResult)) {
            return true;
        }
        return false;
    }
}


