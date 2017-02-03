<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>style.css">
    <script src="<?php echo JS_PATH;?>jquery-1.11.1.min.js"></script>
    <script src="<?php echo JS_PATH;?>common.js" type="text/javascript"></script>
    <script src="<?php echo JS_PATH;?>unslider.min.js"></script>
    <script src="<?php echo JS_PATH;?>search_common.js"></script>
    <link rel="icon" href="<?php echo IMG_PATH;?>huaguang.ico" type="image/x-icon"/>
    
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
    <title>华南理工大学广州学院创新创业教育学院</title>
</head>
<body onload="detectBrowser()">
 <div id="detectBrowser" class="center" style="display: none;">您的浏览器版本过低，为了您更好的体验，请更换浏览器</div>
    <div id="main">
        <div id="imgfloat">
            <img src="<?php echo IMG_PATH;?>index-icon.jpg" width="96px" alt="" >
            <div style="font-weight: bold;margin-top: 5px;text-align: center;">
                华广双创公众号
            </div>
        </div>
        <div id="header">
            <div class="header-up">
                <img src="<?php echo IMG_PATH;?>headerup.svg"  width="601" height="92" />
                <form id="sousuo" method="get" target="_blank" action="<?php echo APP_PATH;?>index.php">
                    <div id="try">
                        
                        <input type="hidden" name="m" value="search"/>
                        <input type="hidden" name="c" value="index"/>
                        <input type="hidden" name="a" value="init"/>
                        <input type="hidden" name="typeid" value="1" id="typeid"/>
                        <input type="hidden" name="siteid" value="<?php echo $siteid;?>" id="siteid"/>
                        <input type="text" name="q" id="sousuo-text" placeholder="关键字搜索">
                        <input type="submit" id="sousuo-button" value=""/>
                        
                    </div>
                </from>
            </div>
            <!-- 导航栏部分 -->
            <div id="nav">
                <ul id="navli" class="clearfix">
                    <li ><a  class="ban" id="one" href="<?php echo APP_PATH;?>">首页</a></li>
                    <li ><a  class="ban" href="#">学院概括</a>
                        <ul id="nav1" class="nav">
                            <li>
                                <div class="nav_div"><div class="nav_two"><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=20">学院简介</a></div></div>
                            </li>
                            <li><div class="nav_div"><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=21">组织架构</a></div></li>
                            <li id="teacher"><div class="nav_div"><a href="#" class="li_bottom" id="double_li">双创导师</div></a>
                                    <ul id="nav2" class="nav2">
                                        <li><div class="nav_div"><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=19">校内导师</a></div></li>
                                        <li><div class="nav_div"><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=18" class="li_bottom">校外导师</a></div></li>
                                    </ul>
                            </li>
                        </ul>
                    </li>
                    <li ><a  class="ban" href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=10">通知公告</a></li>
                    <li ><a  class="ban" href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=11">双创动态</a>
                        <ul id="nav3" class="nav">
                            <li><div class="nav_div"><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=22">讲座沙龙</a></div></li>
                            <li><div class="nav_div"><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=23">创业竞赛</a></div></li>
                            <li><div class="nav_div"><a class="li_bottom" href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=24" >其他</a></div></li>
                        </ul>
                    </li>
                    <li ><a  class="ban" href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=12">政策服务</a></li>
                    <li ><a  class="ban" href="#">创业基地</a>
                        <ul id="nav4" class="nav">
                            <li><div class="nav_div"><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=25">校外基地</a></div></li>
                            <li><div class="nav_div"><a class="li_bottom" href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=26">创业园区</a></div></li>
                        </ul>

                    </li>

                </ul>
            </div>