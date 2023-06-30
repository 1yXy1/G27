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
    if(is_dir($path)){
        $p = scandir($path);
        foreach($p as $val){
         if($val !="." && $val !=".."){
             if(is_dir($path.'/'.$val)){
               deldir($path.'/'.$val);
               @rmdir($path.'/'.$val);
             }else{
               unlink($path.'/'.$val);
             }
         }
        }
     }
   }
   
   function highlightKeyword($text, $keyword) {//标红功能失败
    $keyword = preg_quote($keyword);
    $highlightedText = preg_replace("/$keyword/", '<span style="color: red;">$1</span>', $text);
    return $highlightedText;
}
?>