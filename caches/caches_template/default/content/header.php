<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>style.css">
    <script src="<?php echo JS_PATH;?>jquery-1.11.1.min.js"></script>
    <script src="<?php echo JS_PATH;?>common.js" type="text/javascript"></script>
    <script src="<?php echo JS_PATH;?>unslider.min.js"></script>

    <link rel="stylesheet" href="<?php echo CSS_PATH;?>min.css">

    <script type="text/javascript">

            function detectBrowser()
            {
            var browser=navigator.appName
            var b_version=navigator.appVersion
            var version=parseFloat(b_version)
            
            if ((browser=="Netscape"||browser=="Microsoft Internet Explorer")
            && (version>=5))
              {document.getElementById('detectBrowser').style.display="none"}
            else
              {document.getElementById('detectBrowser').style.display="block";}
              }
    </script>
    <title>Document</title>
</head>
<body onload="detectBrowser()">
 <div id="detectBrowser" class="center" style="display: none;">您的浏览器版本过低，为了您更好的体验，请更换浏览器</div>
    <div id="main">
        <img src="<?php echo IMG_PATH;?>erweima.jpg" id="imgfloat">
        <div id="header">
            <div class="header-up">
                <img src="<?php echo IMG_PATH;?>headerup.jpg" />
                <form id="sousuo">
                    <input type="text" id="sousuo-text" placeholder="关键字搜索">
                    <input type="submit" id="sousuo-button" value=""/>
                </from>
            </div>
            <!-- 导航栏部分 -->
            <div id="nav">
                <ul id="navli">
                    <li ><a  class="ban" id="one" href="<?php echo APP_PATH;?>">首页<br><span>HOME</span></a></li>
                    <li ><a  class="ban" href="#">学院概括<br><span>SUMMARY</span></a>
                        <ul id="nav1" class="nav">
                            <li><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=20">学院简介</a></li>
                            <li><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=21">组织架构</a></li>
                            <li id="teacher"><a href="#" >双创导师</a>
                                    <ul id="nav2" class="nav2">
                                        <li><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=19">校内导师</a></li>
                                        <li><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=18">校外导师</a></li>
                                    </ul>
                            </li>
                        </ul>
                    </li>
                    <li ><a  class="ban" href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=10">通知公告<br><span>NOTICE</span></a></li>
                    <li ><a  class="ban" href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=11">双创动态<br><span>DYNAMIC</span></a>
                        <ul id="nav3" class="nav">
                            <li><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=22">讲座沙龙</a></li>
                            <li><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=23">创业竞赛</a></li>
                            <li><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=24" >其他</a></li>
                        </ul>
                    </li>
                    <li ><a  class="ban" href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=12">政策服务<br><span>SERVISE</span></a></li>
                    <li ><a  class="ban" href="#">创业基地<br><span>BASE</span></a>
                        <ul id="nav4" class="nav">
                            <li><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=25">校外基地</a></li>
                            <li><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=26">创业园区</a></li>
                        </ul>

                    </li>

                </ul>
            </div>