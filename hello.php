<?php
session_start();
?><!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
    <title>Hello Amaze UI</title>

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
</head>
<body>
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
<pre>
    <?php var_dump($_SESSION);?>
</pre>
<ul data-am-widget="gallery" class="am-gallery am-avg-sm-2
  am-avg-md-3 am-avg-lg-4 am-gallery-default" data-am-gallery="{ pureview: true }" >
    <li>
        <div class="am-gallery-item">
            <a href="http://s.amazeui.org/media/i/demos/bing-1.jpg" class="">
                <img src="http://s.amazeui.org/media/i/demos/bing-1.jpg"  alt="远方 有一个地方 那里种有我们的梦想"/>
                <h3 class="am-gallery-title">远方 有一个地方 那里种有我们的梦想</h3>
                <div class="am-gallery-desc">2375-09-26</div>
            </a>
        </div>
    </li>
    <li>
        <div class="am-gallery-item">
            <a href="http://s.amazeui.org/media/i/demos/bing-2.jpg" class="">
                <img src="http://s.amazeui.org/media/i/demos/bing-2.jpg"  alt="某天 也许会相遇 相遇在这个好地方"/>
                <h3 class="am-gallery-title">某天 也许会相遇 相遇在这个好地方</h3>
                <div class="am-gallery-desc">2375-09-26</div>
            </a>
        </div>
    </li>
    <li>
        <div class="am-gallery-item">
            <a href="http://s.amazeui.org/media/i/demos/bing-3.jpg" class="">
                <img src="http://s.amazeui.org/media/i/demos/bing-3.jpg"  alt="不要太担心 只因为我相信"/>
                <h3 class="am-gallery-title">不要太担心 只因为我相信</h3>
                <div class="am-gallery-desc">2375-09-26</div>
            </a>
        </div>
    </li>
    <li>
        <div class="am-gallery-item">
            <a href="http://s.amazeui.org/media/i/demos/bing-4.jpg" class="">
                <img src="http://s.amazeui.org/media/i/demos/bing-4.jpg"  alt="终会走过这条遥远的道路"/>
                <h3 class="am-gallery-title">终会走过这条遥远的道路</h3>
                <div class="am-gallery-desc">2375-09-26</div>
            </a>
        </div>
    </li>
</ul>

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