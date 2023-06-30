<?php
    $code=0;
    $data=[];
    $msg=["获取数据失败","获取数据成功"];
    include('functions.php');
function traverseFolder($folderPath) {
    $result = array();

    // 打开目录
    $handle = opendir($folderPath);

    // 遍历目录中的文件和子文件夹
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            $entryPath = $folderPath . "/" . $entry;
            
            // 如果是目录，则递归遍历子文件夹
            if (is_dir($entryPath)) {
                $result[$entry] = traverseFolder($entryPath);
            } else {
                // 如果是文件，则将文件名添加到结果数组中
                $result[] = $entry;
            }
        }
    }

    // 关闭目录句柄
    closedir($handle);

    return $result;
}

// 遍历指定文件夹
$folderPath = "D:/phpstudy_pro/WWW/V 1/uploads";  // 将此处的路径替换为实际的文件夹路径
$folderContents = traverseFolder($folderPath);

// 输出结果
$i=0; 
foreach($folderContents as $line){
     //读取记录行 
            $data[$i]["filename"]=$line;
            $i++;
}
if(count($data)>0) $code=1;
header("content-type:application/json");
echo getApiResult($code,$data,$msg);
?>