<?php


//執行登出動作，刪除session
if (isset($_GET['logout']) && ($_GET['logout'] == "true")) {
    unset($_SESSION['loginMember']);
    header("Location:index.php");
}

