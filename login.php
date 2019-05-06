<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登入</title>
</head>
<body>

<?php
    if(!empty($_POST)){
        // 如果POST不是空直 撈資料庫判斷帳號密碼是否正確
        $sql = "select * from user where acc='".$_POST['acc']."' && pw='".$_POST['pw']."'";
        $sqllogin = "select count(*) from user where acc='".$_POST['acc']."' && pw='".$_POST['pw']."'";
        $login = $pdo->query($sqllogin)->fetch();
        $data = $pdo->query($sql)->fetch();
        if($sqllogin){
            $_SESSION['login']=true;
            $_SESSION['name']=$data['name'];
            header("location:index.php?do=welcome");
        }else{
            echo "帳號密碼錯誤";
        }
    }else{
        // 如果是空值顯示表單
?>
<form action="index.php?do=login" method="post">
帳號<input type="text" name="acc" id=""><br>
密碼<input type="password" name="pw" id=""><br>
<input type="submit" value="登入">
</form>
<?php
}
?>
    
</body>
</html>