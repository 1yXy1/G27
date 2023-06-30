<?php
$folderPath ='D:/'; // 将此处的路径替换为实际的文件夹路径

// 扫描文件夹并获取文件列表
$folders = glob($folderPath . '/*', GLOB_ONLYDIR);

// 生成文件夹链接列表
foreach ($folders as $folder) {
    $folderName = basename($folder);
    echo "<a href=\"uploads.php?path=$folder\">$folderName</a><br>";
}
?>