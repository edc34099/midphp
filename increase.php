<?php
include_once "base.php";
if(!empty($_POST['iName'])){
    $iName = $_POST['iName'];
    $iJob = $_POST['iJob'];
    $iDep = $_POST['iDep'];
    $iCity = $_POST['iCity'];
    $iAddress = $_POST['iAddress'];
    $iTel = $_POST['iTel'];
    $iPostalcode = $_POST['iPostalcode'];
    $iSalary = $_POST['iSalary'];
    $iLeave = $_POST['iLeave'];
    $sqlIncrease = "INSERT INTO `employee`(`姓名`, `現任職稱`, `部門代號`, `縣市`, `地址`, `電話`, `郵遞區號`, `目前月薪資`, `年假天數`) 
    VALUES ('$iName','$iJob','$iDep','$iCity','$iAddress','$iTel','$iPostalcode','$iSalary','$iLeave')";
    $Increase = $pdo->query($sqlIncrease);
    if($Increase){
echo "<script>
alert('上傳成功');
 location.href = 'index.php?do=increase';
 </script>";
    }
}else{
?>
<form action="increase.php" method="post">
新增員工資料
    <table>
        <tr>
            <td>姓名</td>
            <td>現任職稱</td>
            <td>部門代號</td>
            <td>縣市</td>
            <td>地址</td>
            <td>電話</td>
            <td>郵遞區號</td>
            <td>目前月薪資</td>
            <td>年假天數</td>
        </tr>
        <tr>
            <td><input type="text" name="iName" id="" size="10"></td>
            <td><input type="text" name="iJob" id="" size="10"></td>
            <td><input type="text" name="iDep" id="" size="10"></td>
            <td><input type="text" name="iCity" id="" size="10"></td>
            <td><input type="text" name="iAddress" id="" size="20"></td>
            <td><input type="text" name="iTel" id="" size="10"></td>
            <td><input type="text" name="iPostalcode" id="" size="10"></td>
            <td><input type="text" name="iSalary" id="" size="10"></td>
            <td><input type="text" name="iLeave" id="" size="10"></td>
            <td><input type="submit" value="新增"></td>
        </tr>
        <?php
    }
?>
    </table>
</form>