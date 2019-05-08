<form action="index.php?do=employee" method="post">
    查詢員工資料<br>
    部門<input type="text" name="employeeDep" id=""><br>
    縣市<input type="text" name="employeeCity" id=""><br>
    <input type="submit" value="查詢" name="search">
   
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
if(isset($_POST['search'])){
   include "search.php";
}
?>
    
</form>

</table> 


