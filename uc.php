<?php
session_start();
include __DIR__ . '/vendor/autoload.php'; // 引入 composer 入口文件
use EasyWeChat\Foundation\Application;
$options = [
    'debug'  => true,
    'app_id' => 'wx983b895f6631d3b9',
    'secret' => '84103d2497d8c416237755a868f2dec0',
    'token'  => 'nemoling',
    // 'aes_key' => null, // 可选
    'log' => [
        'level' => 'debug',
        'file'  => '/tmp/nemo_easywechat.log', // XXX: 绝对路径！！！！
    ],
    'oauth' => [
        'scopes'   => ['snsapi_userinfo'],
        'callback' => '/oauth_callback.php', //回调页面
    ],
    //...
];
$app = new Application($options);
$oauth = $app->oauth;

//用户中心
//1. 检测用户是否登录
$is_login = isset($_SESSION['user']);
//2. 如果没有登录,让他登录
if(!$is_login){
    //之前我们的做法是,跳转到登录页面.
    //现在,我们不需要做这一步了,我们引入微信授权

    $_SESSION['target_url'] = '/uc.php'; //授权完成后,跳回到哪个页面
    $oauth->redirect()->send();//发起授权
} else {
//3. 如果登录了,显示他的内容
    echo '你已登录';
    echo '<pre>';
    var_dump($_SESSION['user']);
}