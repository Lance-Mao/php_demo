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
if (isset($_POST['button'])) {
    $_zs = $_POST['_zs'];
    $_xm = $_POST['_xm'];
    $_xb = $_POST['_xb'];
    $_zy = $_POST['_zy'];
    $_xz = $_POST['_xz'];
    $_xl = $_POST['_xl'];
    $_by = $_POST['_by'];
    $_rx = $_POST['_rx'];

    echo $_zs;
    echo $_xm;
    echo $_xb;
    echo $_zy;
    echo $_xz;
    echo $_xl;
    echo $_by;
    echo $_rx;

    $sql = "insert into info(证书编号,姓名,性别,专业,学制,学历层次,毕业院校,入学时间) values('$_zs','$_xm','$_xb','$_zy','$_xz','$_xl','$_by','$_rx')";
    if (mysql_query($sql)) {
        echo "新记录插入成功";
    } else {
        echo "新记录插入失败";
    }

}
?>


<body align="center">
<h1>添加信息</h1>
<form action="" method="post">
    <table align="center" width="500px;" class="table">
        <tr>
            <th>证书编号</th>
            <th><input type="number" name="_zs"/></th>
        </tr>
        <tr>
            <th>姓名</th>
            <th><input type="type" name="_xm"/></th>
        </tr>
        <tr>
            <th>性别</th>
            <th>
                <input type="radio" name="_xb" value="男"/>男
                <input type="radio" name="_xb" value="女"/>女
            </th>
        </tr>
        <tr>
            <th>专业</th>
            <th>
                <select name="_zy">
                    <option value="软件工程">软件工程</option>
                    <option value="网络工程">网络工程</option>
                </select>
            </th>
        </tr>
        <tr>
            <th>学制</th>
            <th><input type="type" name="_xz"/></th>
        </tr>
        <tr>
            <th>学历层次</th>
            <th><input type="type" name="_xl"/></th>
        </tr>
        <tr>
            <th>毕业院校</th>
            <th><input type="type" name="_by"/></th>
        </tr>
        <tr>
            <th>入学时间</th>
            <th><input type="date" name="_rx"/></th>
        </tr>
        <tr>
            <th colspan="2">
                <button type="submit" name="button" id="">添加</button>
                <button type="reset">重置</button>
            </th>
        </tr>
    </table>
</form>
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>