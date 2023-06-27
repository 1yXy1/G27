<?php
    /**
     * 登录验证
     */

    session_start();
    include('conn.php');
    $userName=$_GET["name"];
    $userPwd=$_GET["pwd"];

 
    if($userName=="" || $userPwd=="") 
    echo "<script>alert('用户名或密码不能为空')</script>";;

    $str="select * from db_account where username='$userName' and password='$userPwd'";
    $rs=mysqli_query($conn,$str);
    if(mysqli_num_rows($rs)>0) {  //判断记录集返回行数
        echo 1;
        $row=mysqli_fetch_assoc($rs);
        $_SESSION["userName"]=$userName;
        $_SESSION["userId"]=$row["user_id"];
        header("Location:http://127.0.0.2:8082/menu.html"); //根据具体服务器地址端口进行修改
    }    
    else
        echo 0;
?>