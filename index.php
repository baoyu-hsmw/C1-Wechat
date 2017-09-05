<?php
//微信
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
    //...
];
$app = new Application($options);


$server = $app->server;

$user_service = $app->user;

$server->setMessageHandler(function($message) use($user_service){
    $open_id = $message->FromUserName;
    $user = $user_service->get($open_id);
    switch ($message->MsgType) {
        case 'event':
            return '收到事件消息';
            break;
        case 'text': //文本消息
            //$nickname = $user->nickname;
            //return json_encode($message, JSON_UNESCAPED_UNICODE);
            //return "{$nickname}你发的文本信息内容是:{$message->Content}";
            //return json_encode($user, JSON_UNESCAPED_UNICODE);

            switch ($message->Content){
                case '儿歌':
                    return '两只老虎 两只老虎 跑得快 跑得快 一只没有眼睛 一只没有尾巴 真奇怪 真奇怪';
                    break;
                case '唐诗':
                    return '床前明月光，疑是地上霜。举头望明月，低头思故乡。';
                    break;
                case '周杰伦':
                    return '蔡依林';
                    break;
                case '文章':
                    return '马伊琍';
                    break;
                case '天气':
                    return '今天天气好晴朗';
                    break;
                case '免费上网':
                    return '我们的Wifi是: zhangquanlongnan, 密码是: qianlan188';
                    break;
                default:
                    return '俺不知道你想干嘛';
                    break;
            }
            break;
        case 'image':
            return '收到图片消息';
            break;
        case 'voice':
            return '收到语音消息';
            break;
        case 'video':
            return '收到视频消息';
            break;
        case 'location':
            return '收到坐标消息';
            break;
        case 'link':
            return '收到链接消息';
            break;
        // ... 其它消息
        default:
            return '收到其它消息';
            break;
    }
});

$response = $server->serve();
// 将响应输出
$response->send(); // Laravel 里请使用：return $response;