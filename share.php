<?php
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
$js = $app->js;
?>
<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
    <title>最新动态-掌圈龙南</title>

    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">

    <!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    <link rel="icon" type="image/png" href="amaze/assets/i/favicon.png">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="amaze/assets/i/app-icon72x72@2x.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
    <link rel="apple-touch-icon-precomposed" href="amaze/assets/i/app-icon72x72@2x.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="amaze/assets/i/app-icon72x72@2x.png">
    <meta name="msapplication-TileColor" content="#0e90d2">

    <link rel="stylesheet" href="amaze/assets/css/amazeui.min.css">
    <link rel="stylesheet" href="amaze/assets/css/app.css">
    <!-- 引用微信的JS SDK-->
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js" type="text/javascript" charset="utf-8"></script>
    <!-- 输出JS SDK的配置-->
    <script type="text/javascript" charset="utf-8">
        wx.config(<?php echo $js->config(['onMenuShareTimeline'], true) ?>);
    </script>
    <style>
        #logo-div{
            display: none;
        }
    </style>
</head>
<body>
<div id="logo-div">
    <img src="kaola.jpg" alt="最新动态-掌圈龙南"/>
</div>
<!-- 页头 -->
<header data-am-widget="header"
        class="am-header am-header-default">
    <div class="am-header-left am-header-nav">
        <a href="#left-link" class="">

            <i class="am-header-icon am-icon-home"></i>
        </a>
    </div>

    <h1 class="am-header-title">
        <a href="#title-link" class="">
            掌圈龙南
        </a>
    </h1>

    <div class="am-header-right am-header-nav">
        <!-- 右边 -->
    </div>
</header>
<!-- /页头 -->

<!-- 正文 -->
<div data-am-widget="list_news" class="am-list-news am-list-news-default" >
    <!--列表标题-->
    <div class="am-list-news-hd am-cf">
        <!--带更多链接-->
        <a href="##" class="">
            <h2>栏目标题</h2>
            <span class="am-list-news-more am-fr">更多 &raquo;</span>
        </a>
    </div>

    <div class="am-list-news-bd">
        <ul class="am-list">

            <li class="am-g am-list-item-dated">
                <a href="##" class="am-list-item-hd ">我很囧，你保重....晒晒旅行中的那些囧！</a>

                <span class="am-list-date">2013-09-18</span>


            </li>
            <li class="am-g am-list-item-dated">
                <a href="##" class="am-list-item-hd ">我最喜欢的一张画</a>

                <span class="am-list-date">2013-10-14</span>


            </li>
            <li class="am-g am-list-item-dated">
                <a href="##" class="am-list-item-hd ">“你的旅行，是什么颜色？” 晒照片，换北欧梦幻极光之旅！</a>

                <span class="am-list-date">2013-11-18</span>


            </li>
        </ul>
    </div>

</div>


<!-- /正文 -->

<!-- 底部图标 NavBar/TabBar -->
<div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default "
     id="">
    <ul class="am-navbar-nav am-cf am-avg-sm-4">
        <li >
            <a href="tel:123456789" class="">
                <span class="am-icon-phone"></span>
                <span class="am-navbar-label">呼叫</span>
            </a>
        </li>
        <li data-am-navbar-share>
            <a href="###" class="">
                <span class="am-icon-share-square-o"></span>
                <span class="am-navbar-label">分享</span>
            </a>
        </li>
        <li data-am-navbar-qrcode>
            <a href="###" class="">
                <span class="am-icon-qrcode"></span>
                <span class="am-navbar-label">二维码</span>
            </a>
        </li>
        <li >
            <a href="https://github.com/allmobilize/amazeui" class="">
                <span class="am-icon-github"></span>
                <span class="am-navbar-label">GitHub</span>
            </a>
        </li>
        <li >
            <a href="http://amazeui.org/getting-started" class="">
                <span class="am-icon-download"></span>
                <span class="am-navbar-label">下载使用</span>
            </a>
        </li>
        <li >
            <a href="https://github.com/allmobilize/amazeui/issues" class="">
                <span class="am-icon-location-arrow"></span>
                <span class="am-navbar-label">Bug 反馈</span>
            </a>
        </li>
    </ul>
</div>

<!-- /底部图标 -->



<!--[if (gte IE 9)|!(IE)]><!-->
<script src="amaze/assets/js/jquery.min.js"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="amaze/assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="amaze/assets/js/amazeui.min.js"></script>
</body>
</html>