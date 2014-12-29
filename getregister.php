<?php
header("Content-Type: text/html; charset=UTF-8");
//header("Refresh:5;url=index.html");
$school=$_POST["school"];
$name=$_POST["name"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$time=date('Y-m-d H:i:s');
$mysql = new SaeMysql();


//$sql = "INSERT  INTO `register` ( `school`,`name`,`phone`,`email`,`time`) VALUES ('1','2','2','1',,'989') ";
//$sql = "INSERT  INTO `register` ( `school`) VALUES ($school) ";
$sql="insert into register(school,name,phone,email,time) values('".$school."','".$name."','".$phone."','".$email."','".$time."')";

$mysql->runSql($sql);
if ($mysql->errno() != 0)
{
    die("Error:" . $mysql->errmsg());
}else{
    echo "恭喜您注册成功！\n 工作人员会在一个工作日与您取得联系。非常感谢！";

}

$mysql->closeDb();




print('正在加载，请稍等...<br>五秒后自动跳转。');

?>
