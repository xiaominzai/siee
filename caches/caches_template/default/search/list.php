<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template('content', 'header'); ?>


<div id="content">
<?php include template("content","sideBar"); ?>
<div id="list-right">
    <div id="list-header">
        <a href="<?php echo APP_PATH;?>">首页</a>
        <span>></span>
        <a href="#">搜索结果</a>
    </div>
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=703b0e137f7e137cb8cdfbfdf1791550&sql=SELECT+%2A+FROM+%60siee_news%60+where+title+like+%27%25%24q%25%27+order+by+id+DESC+&num=17&page=%24page&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$pagesize = 17;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$r = $get_db->sql_query("SELECT COUNT(*) as count FROM (SELECT * FROM `siee_news` where title like '%$q%' order by id DESC ) T");$s = $get_db->fetch_next();$pages=pages($s['count'], $page, $pagesize, $urlrule);$r = $get_db->sql_query("SELECT * FROM `siee_news` where title like '%$q%' order by id DESC  LIMIT $offset,$pagesize");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
    <?php if($data=="") { ?>
        <p style="text-align: center;font-size: 28px">抱歉没有搜索结果</p>
    <?php } ?>
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



<?php if($setting['suggestenable']) { ?>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.suggest.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>search_suggest.js"></script>
<?php } ?>
<?php include template('content', 'footer'); ?>
