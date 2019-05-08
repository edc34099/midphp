<?php
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
        $arr[]=$value['姓名'];
                
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
    $num++;
    $delete[]='delete'.$num;
    ?>
    
    </tr>  
</form>
<?php
}
print_r($delete);


    

  


?>