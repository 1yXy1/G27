<?php 
/**
* 数据库连接
* author：zjvivi
* date：2023-4-10
* version：1.0
*/

$user = 'root'; //数据库连接用户名
$pwd = '123456';  //数据库连接密码
$db = 'web20230109';  //数据库名
$host = 'localhost';   //数据库服务器地址
$port = 3306;    //数据库访问端口号，默认mysql为3306

$conn = mysqli_init();  //创建数据库连接对象
$success = mysqli_real_connect(   //连接数据库
   $conn, 
   $host, 
   $user, 
   $pwd, 
   $db,
   $port
);

if($success!=1){
	die("数据库连接失败");
}
$sql="set names utf8";    
mysqli_query($conn,$sql);   //数据库连接串编码统一为utf8
//echo 1;
 ?>