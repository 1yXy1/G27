<?php
$path = "D:/phpstudy_pro/WWW/V 1/uploads";//需要根据本地地址进行配置
include('functions.php');
include('conn.php');
deldir($path);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $targetDir = "uploads/"; // 上传文件保存的目录

    // 检查是否有文件上传
    if (!empty($_FILES["files"]["name"][0])) {
        // 循环处理每个上传的文件
        foreach ($_FILES["files"]["tmp_name"] as $key => $tmpName) {
            // 将文件移动到目标位置
            if (move_uploaded_file($tmpName, "D:/phpstudy_pro/WWW/V 1/uploads/" . $_FILES["files"]["name"][$key])) {
                echo "文件 ";
                echo $_FILES["files"]["name"][$key] ;
                echo " 上传成功<br>";
                echo $_FILES["files"]["webkitRelativePath"][$key] ;
            } else {
                echo "文件 ";
                echo $_FILES["files"]["name"][$key] ;
                echo " 上传失败<br>";
            }
        }
    } else {
        echo "没有选择要上传的文件";
    }
}
$str="delete table save;";
mysqli_query($conn,$str);
header('Location:http://127.0.0.1:8081/search.html');
?>
