<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title></title>

    <meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport">  
    <meta name="apple-mobile-web-app-capable" content="yes"> 

    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link rel="apple-touch-icon-precomposed" href="images/iphone/icon.png">
    <link rel="apple-touch-startup-image" href="images/iphone/splash.png">

    <link rel="stylesheet/less" href="less/mobile.less">
    <script src="js/libs/less/less.js" type="text/javascript"></script>
    <script type="text/javascript">
        less.env = 'development';
        less.watch();
    </script>
</head>
<body>
    <div id="container">
        <header class="global">
            <span class="icon toggle-nav">Toggle Navigation</span>
            <span class="icon show-calendar">Calendar</span>
        </header>
        <section class="ui-content">
            <div>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
            </div>
        </section>
    </div>
    <nav class="global">
        <ul class="ui-content ui-list">
            <li class="title">Analytics</li>
            <li><a href="/">whatever</a></li>
            <li><a href="/">whatever</a></li>
            <li><a href="/">whatever</a></li>
        </ul>
    </nav>

    <script type="text/javascript" src="js/libs/zepto/zepto.js"></script>
    <script type="text/javascript">
    $(function() {
        $('.toggle-nav').bind('click', function() {
            $('#container').toggleClass('offscreen');
        }).trigger('click');
    });
    </script>
</body>
</html>