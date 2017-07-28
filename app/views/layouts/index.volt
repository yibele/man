<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Phalcon PHP Framework</title>

    {{ stylesheet_link('css/bootstrap.min.css') }}
    {{ stylesheet_link('/css/app.css') }}
    {{ stylesheet_link('/css/start.css') }}
    {{ javascript_include('js/vue.js') }}

</head>
<body>

<!-- 星星背景 -->
<div class="stars"></div>
<div class="twinkling"></div>
<div class="mount"></div>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false" style="margin-top : 30px">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">{{ image('img/index/logo_li.png','class':'logo') }}</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav center-block">
                <li><a href="#">写信 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">寄明信片</a></li>
                <li><a href="#">看公开信</a></li>
                <li><a href="#">晒单</a></li>
                <li><a href="#">我的慢递</a></li>
                <li><a href="#">自费及帮助</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right ">
                <li>
                <span class="index_head" style="line-height: 100px; margin-right:10px;">
                    {{ image('img/index/head.png') }}
                </span>
                </li>
                <li><a href="#" style="padding-left: 0;padding-right: 4px;">注册</a></li>
                <li><a href="#" style="padding-left: 0;padding-right: 65px;">| 登陆</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


{{ content() }}


<div class="footer">
    <div style="display: inline-block;">
        Copyright © 2015-2017mandifish.com.蒙ICP备15003789
    </div>
    <div class="copyright"  >
        <a href="">版权声明</a>
        &nbsp;
        &nbsp;
        |
        &nbsp;
        &nbsp;
        <a href="">关于价格</a>
        &nbsp;
        &nbsp;
        |
        &nbsp;
        &nbsp;
        <a href="">常见问题</a>
        &nbsp;
        &nbsp;
        |
        &nbsp;
        &nbsp;
        <a href="">联系我们</a>
    </div>
</div>

</body>
</html>
