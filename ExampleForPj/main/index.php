<?php
require_once("Includes/db.php");
$logonSuccess = false;

// verify user's credentials
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $logonSuccess = (WishDB::getInstance()->verify_wisher_credentials($_POST['user'], $_POST['userpassword']));
    if ($logonSuccess == true) {
        session_start();
        $_SESSION['user'] = $_POST['user'];
        header('Location: editWishList.php');
        exit;
    }
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Wish List Application</title>
    <link href="wishlist.css" type="text/css" rel="stylesheet" media="all"/>
</head>
<body class="body">

<div id="content">
    <div class="logo">
        <img style="margin-right: 10%" src="static/logo1.jpg" width="300" height="300" alt="logo"/>

        <img src="static/logo2.jpg" width="200" height="200" alt="logo"/>
        <br/>
        <img style="margin-bottom: 10%" src="static/logo3.jpg" width="300" height="300" alt="logo"/>
        <img style="margin-right: 10%" src="static/logo5.jpg" width="300" height="300" alt="logo"/>
    </div>
    <div class="logon">
        <button type="submit" class="login-submit" name="myWishList" value="" onclick="javascript:showHideLogonForm()">My Wish List >></button>
        <form class="login-form" name="logon" action="index.php" method="POST"
              style="visibility:<?php if ($logonSuccess)
                  echo "hidden"; else
                  echo "visible"; ?>">
            Username:
            <input type="text" name="user"/>

            Password:
            <input type="password" name="userpassword"/><br/>

            <div class="error">
                <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    if (!$logonSuccess)
                        echo "Invalid name and/or password";
                }
                ?>
            </div>
            <button type="submit" class="login-submit" value="">Edit My Wish List</button>

        </form>
    </div>

    <div class="showWishList">
        <button class="login-submit" type="submit" name="showWishList" value="Show Wish List of >>"
                onclick="javascript:showHideShowWishListForm()">Show Wish List of >></button>

        <form name="wishList" action="wishlist.php" method="GET" style="visibility:hidden">
            <input type="text" name="user"/>
            <input type="submit" value="Go"/>
        </form>
    </div>
    <div class="createWishList">
        Still don't have a wish list?! <a href="createNewWisher.php">Create now</a>
    </div>
</div>
<script type="text/javascript">
    function showHideLogonForm() {
        if (document.all.logon.style.visibility == "visible") {
            document.all.logon.style.visibility = "hidden";
            document.all.myWishList.value = "<< My Wish List";
        } else {
            document.all.logon.style.visibility = "visible";
            document.all.myWishList.value = "My Wish List >>";
        }
    }

    function showHideShowWishListForm() {
        if (document.all.wishList.style.visibility == "visible") {
            document.all.wishList.style.visibility = "hidden";
            document.all.showWishList.value = "Show Wish List of >>";
        } else {
            document.all.wishList.style.visibility = "visible";
            document.all.showWishList.value = "<< Show Wish List of";
        }
    }
</script>
</body>
</html>
