<?php
    /**
     * 对用户的注册信息进行注册并同步到数据库，结束后跳转回登录界面
     */

    //session_start();
    include('conn.php');
    $userName=$_GET["re_name"];
    $userPwd=$_GET["re_pwd"];
    // echo $userName;
    // echo $userPwd;//调试时方便验证所设置
 
    if($userName=="" || $userPwd=="") 
        die(0);

    $str="insert into db_account(username,password,phoneNumber) values('$userName','$userPwd',null)";
    if(mysqli_query($conn,$str)) { 
        echo "<script>alert('注册成功')</script>";
        header("Location:http://127.0.0.2:8082/index.html"); //根据具体服务器地址端口进行修改
    }    
    else{
        echo ("错误描述: " . mysqli_error($conn));
        echo "<script>alert('注册失败')</script>";
    }

    mysqli_close($conn);
?>