<?php
if (! empty($_SESSION["adminId"])) {
    require_once 'class/Member.php';
    $member = new Member();
    $memberResult = $member->getadminById($_SESSION["adminId"]);
    if(!empty($memberResult[0]["admin"])) {
        $display_name = ucwords($memberResult[0]["admin"]);
    } else {
        $display_name = $memberResult[0]["admin"];
    }
    $_SESSION["user"] = $display_name;
    
}



if (! empty($_SESSION["Id"])) {
    require_once 'class/Member.php';
    $member = new Member();
    $memberResult = $member->billing_info($_SESSION["name"]);

    print_r($memberResult);die();
}
?>
<html>
<head>
<title>User Login</title>
<link href="./view/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div>
        <div class="dashboard">
            <div class="member-dashboard">Welcome <b><?php echo $display_name; ?></b>, You have successfully logged in!<br>
                Click to <a href="./logout.php" class="logout-button">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>