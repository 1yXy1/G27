<?php
//封装数组的函数
function getApiResult($code,$data,$msg){
    //拼装成数组
    $output[0]["code"]=$code;
    $output[0]["data"]=$data;
    $output[0]["msg"]=$msg[$code];
    return json_encode($output,JSON_UNESCAPED_UNICODE);
}
function getDir($path){
    //判断目录是否为空
    if(!file_exists($path)) {
        return [];
    }
 
    $files = scandir($path);
    $fileItem = [];
    foreach($files as $v) {
        $newPath = $path .DIRECTORY_SEPARATOR . $v;
        if(is_dir($newPath) && $v != '.' && $v != '..') {
            $fileItem = array_merge($fileItem, getDir($newPath));
        }else if(is_file($newPath)){
            $fileItem[] = $newPath;
        }
    }
 
    return $fileItem;
}

function deldir($path){
    //清空文件夹函数和清空文件夹后删除空文件夹函数的处理
    //如果是目录则继续
    if(is_dir($path)){
     //扫描一个文件夹内的所有文件夹和文件并返回数组
        $p = scandir($path);
        foreach($p as $val){
         //排除目录中的.和..
         if($val !="." && $val !=".."){
          //如果是目录则递归子目录，继续操作
             if(is_dir($path.'/'.$val)){
               //子目录中操作删除文件夹和文件
               deldir($path.'/'.$val);
               //目录清空后删除空文件夹
               @rmdir($path.'/'.$val);
             }else{
               //如果是文件直接删除
               unlink($path.'/'.$val);
             }
         }
        }
     }
   }
?>