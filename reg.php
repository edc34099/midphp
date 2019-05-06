<?php
include_once "base.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>reg</title>
</head>
<body>
    <?php
    if(!empty($_POST)){
        $regacc=$_POST['regacc'];
        $regpw=$_POST['regpw'];
        $regname=$_POST['regname'];
        $regemail=$_POST['regemail'];
        $regsql = "INSERT INTO `user`(`acc`, `pw`, `name`, `email`) 
        VALUES ('$regacc','$regpw','$regname','$regemail')";
        $reg = $pdo->query($regsql);
        if($reg){
            echo "註冊成功";
        }else{
            echo "註冊失敗";
        }
    }else{
    ?>
    註冊會員
    <form action="index.php?do=reg" method="post">
    帳號<input type="text" name="regacc" id=""><br>
    密碼<input type="password" name="regpw" id=""><br>
    姓名<input type="text" name="regname" id=""><br>
    email<input type="text" name="regemail" id=""><br>
    <input type="submit" value="確認送出">
    </form>
    <?php
    }
    ?>
    
</body>
</html>