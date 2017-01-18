<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div id="content">
				<?php include template("content","sideBar"); ?>
				<div id="article-right">
					<div class="article-header">
						<div class="crumbs"><a href="<?php echo APP_PATH;?>">首页</a><span> &gt; </span><a href=""><?php echo catpos($catid);?>列表</a> </div>
					</div>
					<div class="article">
						<div class="ar-t"><?php echo $title;?></div>
						<div class="ar-tt">发布日期：<?php echo $inputtime;?><span>点击：<span id="hits"></span>次</span></div>
						<div class="ar-c">
							<?php if($allow_visitor==1) { ?>
				<?php echo $content;?>
				<?php } ?>
						</div>
					</div>
					
				</div>

<?php include template("content","footer"); ?>