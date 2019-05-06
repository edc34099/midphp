<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
            <li><a href="index.php"><img src=./logo.jpg style="width:80px; height:40px;"></a></li>
<?php
    if(empty($_SESSION['login'])){
?>
        <li><a href="index.php?do=login">登入</a></li>

<?php
    }else{
?>
        <li>Hi, <?=$_SESSION['name'];?></li>
        <li><a href="logout.php">登出</a></li>
<?php
    }
?>
        <li><a href="index.php?do=reg">註冊</a></li>
    </ul>
</body>
</html>