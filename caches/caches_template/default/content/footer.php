<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>				<div id="bottom-list">
				<img src="<?php echo IMG_PATH;?>tubiao5.jpg"><span>二级学院:</span>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=709bd381183fd6b73714938e35657259&action=type_list&typeid=53&siteid=%24siteid&order=listorder+DESC&num=10&return=dat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$dat = $link_tag->type_list(array('typeid'=>'53','siteid'=>$siteid,'order'=>'listorder DESC','limit'=>'10',));}?>
                 <select class="select" onchange="top.location.href = this.options[this.selectedIndex].value;" name="select1" target=_blank>
			          <option selected="selected" value="">--二级学院--</option>
			         
					<?php $n=1;if(is_array($dat)) foreach($dat AS $v) { ?>
			          <option value="<?php echo $v['url'];?>"><?php echo $v['name'];?></option>
					<?php $n++;}unset($n); ?>
			       </select>
			    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

					<img src="<?php echo IMG_PATH;?>tubiao5.jpg" style="margin-left:100px;"><span>职能部门:</span>

				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=391e1c4833be141990c141521da30748&action=type_list&typeid=54&siteid=%24siteid&order=listorder+DESC&num=10&return=dat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$dat = $link_tag->type_list(array('typeid'=>'54','siteid'=>$siteid,'order'=>'listorder DESC','limit'=>'10',));}?>
                 <select class="select" onchange="top.location.href = this.options[this.selectedIndex].value;" name="select1" target=_blank>
			          <option selected="selected" value="">--职能部门--</option>
			         
						<?php $n=1;if(is_array($dat)) foreach($dat AS $v) { ?>
			          <option value="<?php echo $v['url'];?>"><?php echo $v['name'];?></option>
						<?php $n++;}unset($n); ?>

			       </select>
			       <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

			       <img src="<?php echo IMG_PATH;?>tubiao5.jpg" style="margin-left:100px"><span>常用链接:</span>

					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=a9619a698b2cb24c21573755ba7b6511&action=type_list&typeid=55&siteid=%24siteid&order=listorder+DESC&num=10&return=dat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$dat = $link_tag->type_list(array('typeid'=>'55','siteid'=>$siteid,'order'=>'listorder DESC','limit'=>'10',));}?>
		            <select class="select" onchange="location.href = this.options[this.selectedIndex].value;" name="select2">
					          <option selected="selected" value="">--友情链接--</option>
					          <?php $n=1;if(is_array($dat)) foreach($dat AS $v) { ?>
					          <option value="<?php echo $v['url'];?>" target=_blank><?php echo $v['name'];?></option>
					          <?php $n++;}unset($n); ?>
					</select>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</div>
				<div id="bottom">
					<span>Copyright © 2016 华南理工大学广州学院创新创业教育学院版权所有</span>
					<span>技术支持：学生传媒中心前端技术部&nbsp;&nbsp;学校地址:&nbsp;广州市花都区新华街学府路一号&nbsp;&nbsp;&nbsp;联系方式:020-36907036　邮编：510800</span>
				</div>
			</div>
	</div>
	<script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script> 
</body>
</html>
