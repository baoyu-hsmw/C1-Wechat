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



$server->setMessageHandler(function($message) use($app){

    $open_id = $message->FromUserName;
    $user_service = $app->user;
    $user = $user_service->get($open_id);

    switch ($message->MsgType) {
        case 'event': {
            switch ($message->Event) {
                case 'unsubscribe': //取消订阅, 取消关注
                    return '你怎么舍得离我而去?';
                    break;
                case 'subscribe': //订阅, 关注
                    $nickname = $user->nickname;
                    return "{$nickname}, 终于等到你. ";
                    break;
                case 'CLICK': {
                    switch ($message->EventKey){
                        case 'MENU_10': //第1个1级菜单
                            return '我是蔡MM';
                            break;
                        case 'MENU_20': //第2个1级菜单
                            return '我是廖GG';
                            break;
                        case 'MENU_32': //第3个菜单的第2个子菜单:关于我们
                            return '我们是一群很牛B的人,欢迎来膜拜';
                            break;
                        case 'MENU_33': //第3个菜单的第3个子菜单:调戏客服
                            return '你讨厌';
                            break;
                        default:
                            return '别乱点';
                            break;
                    }
                    break;
                }
                default:
                    return '响应事件: '.json_encode($message);
                    break;
            }
            break;
        }
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
                case 'menu':
                    $menu = $app->menu;
                    $buttons = [
                        [
                            'type' => 'click',
                            'name' => '蔡',
                            'key' => 'MENU_10'
                        ],
                        [
                            'type' => 'click',
                            'name' => '廖',
                            'key' => 'MENU_20'
                        ],
                        [
                            'name' => '掌圈龙南',
                            'sub_button' => [
                                [
                                    'type' => 'view',
                                    'name' => '敬请欣赏',
                                    'url' => 'http://nemo.jx1860.net/hello.php' //这里必须是完整的URL
                                ],
                                [
                                    'type' => 'click',
                                    'name' => '联系我们',
                                    'key' => 'MENU_32'
                                ],
                                [
                                    'type' => 'click',
                                    'name' => '调戏客服',
                                    'key' => 'MENU_33'
                                ],
                            ]
                        ]
                    ];
                    $menu->add($buttons);
                    return '菜单已更新';
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