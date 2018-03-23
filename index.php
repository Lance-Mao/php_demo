<?php
require_once("conn/conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- 可选的Bootstrap主题文件（一般不用引入） -->
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
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
$page_size = 10;
//起始位置 （起始位置 = （当前页-1）*每页数量）
$start_no = ($page_start-1)*$page_size;
//查询总数
$rs = mysql_query("select * from info limit $start_no,$page_size");
?>
<body align= "center">
<table class="table">
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
    <?php
    while ($info = mysql_fetch_assoc($rs)) {
        ?>
        <tr>
            <th><?php echo $info['ID']?></th>
            <th><?php echo $info['证书编号']?></th>
            <th><?php echo $info['姓名']?></th>
            <th><?php echo $info['性别']?></th>
            <th><?php echo $info['专业']?></th>
            <th><?php echo $info['学制']?></th>
            <th><?php echo $info['学历层次']?></th>
            <th><?php echo $info['毕业院校']?></th>
            <th><?php echo $info['入学时间']?></th>
            <th><a href="#" class="btn btn-primary">编辑</a></th>
            <th><a href="del.php?id=<?php echo $info['ID']?>" class="btn btn-primary" onclick="return confirm('是否删除该记录？')">删除</a></th>
        </tr>
        <?php
    }
    ?>
</table>
<div align= "center">
<a href="insert.php" class="btn btn-info">添加信息</a>
<a class="btn btn-warning" href="?page_no=1">首页</a>
<a class="btn " href="?page_no=<?php echo $page_start-1 > 0 ? $page_start-1 :1 ?>">上一页</a>
<a class="btn " href="?page_no=<?php echo $page_start+1 > $page_count ? $page_count :$page_start+1 ?>">下一页</a>
<a class="btn btn-warning" href="?page_no=<?php echo $page_count ?>">尾页</a>
</div>

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>