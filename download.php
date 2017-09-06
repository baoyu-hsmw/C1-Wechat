<?php
include __DIR__ . '/vendor/autoload.php'; // 引入 composer 入口文件
// 把用户上传的图片下载到服务器. 为什么?
// 因为上传的是临时素材, 微信只帮你保存3天,所以必须下载到我们的服务器
use EasyWeChat\Foundation\Application;
$options = [
    'debug'  => true,
    'app_id' => 'wx983b895f6631d3b9',
    'secret' => '84103d2497d8c416237755a868f2dec0',
    'token'  => 'nemoling',
    // 'aes_key' => null, // 可选
    'log' => [
        'level' => 'debug',
        'file'  => __DIR__ . '/log/nemo_easywechat.log', // XXX: 绝对路径！！！！
    ],
    //...
];
$app = new Application($options);

$mediaId = isset($_GET['id']) ? $_GET['id'] : '';
// 临时素材
$temporary = $app->material_temporary;

$file_name = $temporary->download($mediaId, __DIR__ . '/media/');

$data = [
    'error' => 0,
    'msg' => 'OK',
    'file_name' => $file_name,
];

echo json_encode($data);