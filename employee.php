<form action="index.php?do=employee" method="post">
    查詢員工資料<br>
    部門<input type="text" name="employeeDep" id=""><br>
    縣市<input type="text" name="employeeCity" id=""><br>
    <input type="submit" value="查詢" name="search">
   
</form>
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
<?php
if(isset($_POST["search"])){
    $employeeDep = $_POST['employeeDep'];
    $employeeCity = $_POST['employeeCity'];
    if(empty($employeeDep)){
        $sqlemployee = "select * from `employee` where `縣市`='$employeeCity'";
    }else if(empty($employeeCity)){
        $sqlemployee = "select * from `employee` where `部門代號`='$employeeDep'";
    }else{
        $sqlemployee = "select * from `employee` where `部門代號`='$employeeDep' && `縣市`='$employeeCity'";
    }
    $employeeSearch = $pdo->query($sqlemployee)->fetchAll();

?>
<?php
$num=0;
    foreach($employeeSearch as  $value){
        
                
?>
<form action="index.php?do=employee" method="post">
    <tr>
        <td><?=$value['姓名'];?></td>
        <td><?=$value['現任職稱'];?></td>
        <td><?=$value['部門代號'];?></td>
        <td><?=$value['縣市'];?></td>
        <td><?=$value['地址'];?></td>
        <td><?=$value['電話'];?></td>
        <td><?=$value['郵遞區號'];?></td>
        <td><?=$value['目前月薪資'];?></td>
        <td><?=$value['年假天數'];?></td>
    <?php
    echo    "<td><input type='submit' name='delete".$num."' value='刪除'></td>";
    ?>
    
    </tr>  
</form>
<?php
$num++;
$delete[]='delete'.$num;
$arr[]=$value['姓名'];
}

print_r($delete);
print_r($arr);


        for($i=0; $i<99; $i++){
            if(isset($_POST["delete$i"])){
                echo "delete".$i;
                echo $arr[$i];
                // $sqldelete = "DELETE FROM `employee` WHERE `姓名`="
               }    
            }
        }
?>
    

</table> 


