<?php
header("Content-Type: text/html; charset=UTF-8");
header("Refresh:5;url='../register.html'");
$content=$_POST["content"];

$time=date('Y-m-d H:i:s');
$mysql = new SaeMysql();


//$sql = "INSERT  INTO `register` ( `school`,`name`,`phone`,`email`,`time`) VALUES ('1','2','2','1',,'989') ";
//$sql = "INSERT  INTO `register` ( `school`) VALUES ($school) ";
$sql="insert into preference(content,time) values('".$content."','".$time."')";

$mysql->runSql($sql);
if ($mysql->errno() != 0)
{
    die("Error:" . $mysql->errmsg());
}else{
    echo "
    恭喜您 \n

    您的需求与系统偏好已经完成，工作人员将会在一个工作日内联系您。非常感谢你的使用！   \n
    为您跳转至【注册页面】";

}

$mysql->closeDb();





?>
