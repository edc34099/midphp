<?php
 include_once "base.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>產品銷售管理系統</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="wrap">
    <div id="top">
        <?php
        include_once "head.php";
        ?>
    </div>
    <div id="mid">
        <div id="sidebar">
        <?php
        include_once "sidebar.php";
        ?>
        </div>    
        <div id="content">
            <?php
            if(!empty($_GET['do'])){
                $do=$_GET['do'];
            }else{
                $do="";
            }
            switch($do){
                case "login":
                include "login.php";
                break;
                case "welcome":
                include "welcome.php";
                break;
                case "reg":
                include "reg.php";
                break;
                case "employee":
                include "employee.php";
                break;
            }
        ?>
        </div>
    </div>
    </div>   
</body>
</html>