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
if(!empty($_POST["search"])){
    $_SESSION['search']=$_POST["search"];
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
}
$num=0;
function delete($i){
    $num='delete'.$i;
    if(isset($_POST["$i"])){
        echo $num;
        }    
    }
if(!empty($_SESSION['search'])){
    foreach($employeeSearch as  $value){
        $name[]=$value['姓名'];
                
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
        <td><input type='button' name="delete[]" value='刪除'></td>
        </tr>  
</form>
        
    <?php
    // echo    "<td><input type='button' name='delete".$num."' value='刪除'></td>";
    // $_SESSION["delete$num"] = $_POST["delete$num"];
    // $arr[] = $_SESSION["delete$num"];
    $delete[]='delete'.$num;
    $num++;
    
    
print_r($delete);
print_r($name);



           
    ?>
    

<?php
}
}
    if(!empty($_POST['delete'])){
       
          echo "刪除";
      
    }
        
?>
<tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><input type='button' name="delete" value='刪除'></td>
        </tr>  
    

</table> 



