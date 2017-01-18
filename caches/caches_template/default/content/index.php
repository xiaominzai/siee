<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!--main-->
    <!-- 轮播图部分 -->
    <!-- <div class="header-down">
            <div class="banner" id="b04">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2daa9beb3365eafec9dc6393d6588a58&action=lists&catid=16&num=5&order=inputtime+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'16','order'=>'inputtime DESC','limit'=>'5',));}?>
                <ul>
                    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                    <li><img src="<?php echo thumb($v[thumb],1003,325);?>" alt="" width="1003px" height="325px" ></li>
                    <?php $n++;}unset($n); ?>
                </ul>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                <a href="javascript:void(0);" class="unslider-arrow04 prev"><img class="arrow" id="al" src="<?php echo IMG_PATH;?>arrowl.png" alt="prev" width="20" height="35"></a>

                <a href="javascript:void(0);" class="unslider-arrow04 next"><img class="arrow" id="ar" src="<?php echo IMG_PATH;?>arrowr.png" alt="next" width="20" height="37"></a>
            </div>
    </div> -->
    
    <img src="<?php echo IMG_PATH;?>01.jpg" alt="" width="1003px" height="225px" >
        </div>
            <div id="content">

                <div class="list-dd" id="sc-dongtai">
                    <div class="lisdd-header">
                        <img src="<?php echo IMG_PATH;?>tubiao3.jpg">
                        <span class="con-nav-font">双创动态</span>
                        <a class="more" href="#"><img src="<?php echo IMG_PATH;?>more.jpg"></a>

                    </div>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=64cfae086a92843427364505b65e3e76&action=lists&catid=11&num=6&order=inputtime+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'11','order'=>'inputtime DESC','limit'=>'6',));}?>
                    <ul class="listdd-down">
                        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                        <li>
                            <img src="<?php echo IMG_PATH;?>dian.jpg" class="dian"><a class="listdd-c" href="<?php echo $v['url'];?>" ><span><?php echo $v['title'];?></span></a>
                            <span class="listdd-t"><?php echo date('Y-m-d',$v[inputtime]);?></span>
                        </li>
                        <?php $n++;}unset($n); ?>
                    </ul>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

                </div>
                <div class="list-dd" id="tongzhi">
                    <div class="lisdd-header">
                        <img src="<?php echo IMG_PATH;?>tubiao2.jpg" />
                        <span class="con-nav-font">通知公告 </span>
                        <a class="more" href="#"><img src="<?php echo IMG_PATH;?>more.jpg"></a>
                    </div>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=687443b5112bba4cb65061ce376a6798&action=lists&catid=10&num=6&order=inputtime+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'10','order'=>'inputtime DESC','limit'=>'6',));}?>
                    <ul class="listdd-down">
                        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                        <li>
                            <img src="<?php echo IMG_PATH;?>dian.jpg" class="dian"><a class="listdd-c" href="<?php echo $v['url'];?>" ><span><?php echo $v['title'];?></span></a>
                            <span class="listdd-t"><?php echo date('Y-m-d',$v[inputtime]);?></span>
                        </li>
                        <?php $n++;}unset($n); ?>
                    </ul>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>


                <div class="list-dd" id="baoming">
                    <div class="lisdd-header">
                        <img src="<?php echo IMG_PATH;?>tubiao6.jpg" />
                        <span class="con-nav-font">报名入口 </span>
                        <a class="more" href="#"><img src="<?php echo IMG_PATH;?>more.jpg"></a>
                    </div>
                    <div class="listdd-down">
                        <div  id="sanjiao"/></div>
                        <div id="baoming-top">
                            <div class="baoming-top"><img src="<?php echo IMG_PATH;?>BMtubiao1.jpg" /></div>
                            <a class="baoming-bottom" href="<?php echo APP_PATH;?>index.php?m=formguide&c=index&a=show&formid=15&siteid=1&pc_hash=GcGxwL">双创班报名</a>
                        </div>
                        <div id="baoming-left">
                            <div class="baoming-top"><img src="<?php echo IMG_PATH;?>BMtubiao2.jpg" /></div>
                            <a class="baoming-bottom" href="<?php echo APP_PATH;?>index.php?m=formguide&c=index&a=show&formid=14&siteid=1&pc_hash=GcGxwL">syb报名</a>
                        </div>
                        <div id="baoming-right">
                            <div class="baoming-top"><img src="<?php echo IMG_PATH;?>BMtubiao3.jpg" /></div>
                            <a class="baoming-bottom" href="<?php echo APP_PATH;?>index.php?m=formguide&c=index&a=show&formid=13&siteid=1&pc_hash=GcGxwL">训练营报名</a>
                            <div class="baoming-sm">暂不公开</div>
                        </div>
                    </div>
                </div>
                <div class="list-dd" id="zhengce">
                    <div class="lisdd-header">
                        <img src="<?php echo IMG_PATH;?>tubiao4.jpg" />
                        <span class="con-nav-font">政策服务 </span>
                        <a class="more" href="#"><img src="<?php echo IMG_PATH;?>more.jpg"></a>
                    </div>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=33f7f61cabec63508058be2ece9ecc10&action=lists&catid=15&num=6&order=inputtime+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'15','order'=>'inputtime DESC','limit'=>'6',));}?>
                    <ul class="listdd-down">
                        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                        <li>
                            <img src="<?php echo IMG_PATH;?>dian.jpg" class="dian"><a class="listdd-c" href="<?php echo $v['url'];?>" ><span><?php echo $v['title'];?></span></a>
                            <span class="listdd-t"><?php echo date('Y-m-d',$v[inputtime]);?></span>
                        </li>
                        <?php $n++;}unset($n); ?>
                    </ul>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>

                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6aeffc6c22a0f5b1ffbb1b8f536dcb69&action=lists&catid=17&num=8&order=inputtime+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'17','order'=>'inputtime DESC','limit'=>'8',));}?>
                <ul id="con-img">
                    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                    <li><img class="con-imga" src="<?php echo thumb($v[thumb],246,174);?>"></li>
                    <?php $n++;}unset($n); ?>
                </ul>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<?php include template("content","footer"); ?>