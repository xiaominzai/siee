<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!--main-->
<!--contnet-->
            <div id="content">
                <?php include template("content","sideBar"); ?>
                <div id="list-right">
                <div id="list-header">
                        <a href="<?php echo APP_PATH;?>">首页</a><span> &gt; </span><a href=""><?php echo catpos($catid);?>列表</a>
                    </div>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e359c8b35332ffbd460732aa5d38d416&action=lists&catid=%24catid&num=17&order=inputtime+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 17;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'inputtime DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'inputtime DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                    <ul>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <li><a  class="list-tc" href="<?php echo $r['url'];?>" ><span><?php echo $r['title'];?></span></a>
                        <span class="list-tt"><?php echo date('Y-m-d',$r[inputtime]);?></span>
                        </li>
                        <?php $n++;}unset($n); ?>
                    </ul>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    <ul class="pagination">
                        <?php echo $pages;?>                   
                    </ul>
                </div>
                <!--content-->
<?php include template("content","footer"); ?>