<?php
header("Content-Type: text/html; charset=UTF-8");
header("Refresh:5;url=index.html");
$school=$_POST["school"];
$name=$_POST["name"];
$phone=$_POST["phone"];
$email=$_POST["email"];

echo $school.$name.$phone.$email;

print('正在加载，请稍等...<br>五秒后自动跳转。');

?>
