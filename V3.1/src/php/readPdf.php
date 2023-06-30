<?php
require_once 'D:/phpstudy_pro/WWW/V 1/vendor/autoload.php'; // 根据你的项目路径更新此处
use Smalot\PdfParser\Parser;
$path = "D:/phpstudy_pro/WWW/V 1/uploads";//服务器上传文件夹地址
include('conn.php');
include('functions.php');
//调用函数，传入路径
foreach(getDir($path) as $line1){
    //通过Pdfparser依赖来对pdf文件进行读取
    if (strpos($line1, '.pdf') !== false) {//判断是否为pdf文件
        $pdfFile = $line1;// 通过遍历文件夹得到文件地址
        $Filename=explode('\\',$line1);// 通过遍历文件夹得到文件名字
        $parser = new Parser();
        $pdf = $parser->parseFile($pdfFile);
        $text = $pdf->getText();
        $lines = explode("\n", $text);
        foreach ($lines as $line2) {
            echo $line2 . "\n";

        }
        $point=0;
        foreach ($lines as $line2) {
            $point=$point+1;
            echo $line2;
            echo "\n";
            $str="insert into save(filename,value,line) values('$Filename[1]','$line2','$point')";
            if(mysqli_query($conn,$str)==0) { 
                echo ("错误描述: " . mysqli_error($conn));//返回数据库语句的错误提示
                echo "<script>alert('上传失败')</script>";
            }
        }
    }
    
}
?>
