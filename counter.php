<?php
// 定义存储计数的文件
$filename = 'count.txt';

// 检查文件是否存在，不存在则创建并初始化为0
if (!file_exists($filename)) {
    file_put_contents($filename, '0');
}

// 读取当前计数
$count = file_get_contents($filename);
// 转换为整数
$count = intval($count);
// 增加计数
$count++;

// 保存新的计数
file_put_contents($filename, $count);

// 设置响应头为JSON
header('Content-Type: application/json');
// 返回计数
echo json_encode(['count' => $count]);
?>