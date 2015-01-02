<?php
header("Content-Type: text/html; charset=UTF-8");
header("Refresh:5;url=http://www.yaogenghao.com/intro/preference.html");
$school=$_POST["school"];
$name=$_POST["name"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$time=date('Y-m-d H:i:s');
$password=$_POST["password"];
$password2=$_POST["password2"];
$mysql = new SaeMysql();



$sql="insert into register(school,name,phone,email,time,password,password2) values('".$school."','".$name."','".$phone."','".$email."','".$time."','".$password."','".$password2."')";

$mysql->runSql($sql);
if ($mysql->errno() != 0)
{
    die("Error:" . $mysql->errmsg());
}else{
    echo "恭喜您注册成功！\n 稍后请进行【系统偏好设置】";

}

$mysql->closeDb();




print('正在加载，请稍等...<br>五秒后自动跳转。');

?>
