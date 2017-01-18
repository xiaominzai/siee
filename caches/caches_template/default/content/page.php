<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div id="content">

<?php include template("content","sideBar"); ?>
<div id="article-right">
    <div class="article-header">
        <div id="list-header">
                        <a href="#">首页</a>
                        <span>&gt;</span>
                        <a href="#">学院概括</a>
                        <span>&gt;</span>
                        <a href="#">简介</a>
                    </div>
    </div>
    <div class="article">
        <div class="ar-t"><?php echo $title;?></div>
        <div class="ar-c">
            <?php echo $content;?>
        </div>
    </div>
</div>
<?php include template("content","footer"); ?>