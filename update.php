<?php
require_once("conn/conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<?php
//查询总记录数
$count = mysql_query("select * from info");
$page_count_all = mysql_num_rows($count);
//计算总页数 ceil:向上取整
$page_count = ceil($page_count_all/20);
//当前页 isset：判断是否为空，默认是不为空
$page_start = isset($_GET['page_no'])?$_GET['page_no']:1;
//每页总数
$page_size = 20;
//起始位置 （起始位置 = （当前页-1）*每页数量）
$start_no = ($page_start-1)*$page_size;
//查询总数
$rs = mysql_query("select * from info limit $start_no,$page_size");
?>

<body align= "center">
    <table>align= "center" width="500px;">
       
    <tr>
        <th >ID</th>
        <th>证书编号</th>
        <th>姓名</th>
        <th>性别</th>
        <th>专业</th>
        <th>学制</th>
        <th>学历层次</th>
        <th>毕业院校</th>
        <th>入学时间</th>
        <th colspan="2">操作</th>
    </tr>
    <tr>
            <th><input type="text" disabled="disabled" name = "_id"/></th>
            <th><input type="number"  name = "_zs"/></th>
            <th><input type="type"  name = "_xm"/></th>
            <th><input type=""  name = "_xb"/></th>
            <th><input type="type"  name = "_zy"/></th>
            <th><input type="type"  name = "_xz"/></th>
            <th><input type="type"  name = "_xl"/></th>
            <th><input type="type"  name = "_by"/></th>
            <th><input type="date"  name = "_rx"/></th>
    </tr>
</table> 
</body>
</html>