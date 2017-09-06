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
//获取授权成功的用户信息,这个用户信息是从微信拉过来
$user = $oauth->user();
//真正做项目的时候,这里会把用户信息保存 到数据库
$_SESSION['user'] = $user->toArray();

//跳转回去
$target_url = isset($_SESSION['target_url']) ? $_SESSION['target_url'] : '/hello.php'; //注意:这个默认的页面千万不能是发起授权的页面,否则会造成死循环
header("Location:{$target_url}");