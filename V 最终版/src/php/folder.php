<?php
function displayFolder($folderPath) {
    // 获取文件夹列表
    $folders = glob($folderPath . '/*', GLOB_ONLYDIR);

    // 生成文件夹链接列表
    foreach ($folders as $folder) {
        $folderName = basename($folder);
        echo "<a href=\"folder.php?path=$folder\">$folderName</a><br>";
    }
}

$folderPath = isset($_GET['path']) ? $_GET['path'] : 'D:/phpstudy_pro/WWW/V 1/upload'; // 将此处的路径替换为实际的根文件夹路径

// 显示当前文件夹内容
displayFolder($folderPath);
?>