<?php
		$GLOBALS['smarty']->assign('cat_recommend_type',get_cat_recommend_type($GLOBALS['smarty']->_var['goods_cat']['id']));
?>

<div class="w w1" 
<?php if ($this->_var['cat_recommend_type'] == 2): ?>
id="women"
<?php elseif ($this->_var['cat_recommend_type'] == 1): ?>
id="life"
<?php else: ?>
id="digitals"
<?php endif; ?> 
>
  <div class="m catalogue">
    <div class="mt ld"> <b><?php echo $this->_var['goods_cat']['name']; ?></b>
      <h2></h2>
    </div>
    <div class="mc">
      <div class="style1">
        <ul class="lh">
		<?php
			$GLOBALS['smarty']->assign('child_cat',get_hot_cat_tree($GLOBALS['smarty']->_var['goods_cat']['id'], 3));
	    ?>
		<?php $_from = $this->_var['child_cat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_0_77949300_1363162479');if (count($_from)):
    foreach ($_from AS $this->_var['cat_0_77949300_1363162479']):
?>
		<?php if ($this->_var['cat_0_77949300_1363162479']['name']): ?>
          <li><a href="<?php echo $this->_var['cat_0_77949300_1363162479']['url']; ?>"><b>·</b><?php echo htmlspecialchars($this->_var['cat_0_77949300_1363162479']['name']); ?></a></li>
		<?php endif; ?>  
		<?php $_from = $this->_var['cat_0_77949300_1363162479']['child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_child');if (count($_from)):
    foreach ($_from AS $this->_var['cat_child']):
?>
		<?php if ($this->_var['cat_child']['name']): ?>
          <li><a href="<?php echo $this->_var['cat_child']['url']; ?>"><b>·</b><?php echo htmlspecialchars($this->_var['cat_child']['name']); ?></a></li>
		<?php endif; ?>  
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			
        </ul>
		<?php
		 $GLOBALS['smarty']->assign('index_image',get_advlist('首页-分类ID'.$GLOBALS['smarty']->_var['goods_cat']['id'].'-左侧图片', 1));
	  ?>
	  <?php if ($this->_var['index_image']): ?>
        <span>
		<?php $_from = $this->_var['index_image']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad_0_78001300_1363162479');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad_0_78001300_1363162479']):
        $this->_foreach['index_image']['iteration']++;
?>
<a target="_blank" title="" href="<?php echo $this->_var['ad_0_78001300_1363162479']['url']; ?>"><img data-img="2" data-lazyload="<?php echo $this->_var['ad_0_78001300_1363162479']['image']; ?>" width="208" height="170" alt=""></a>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</span>
		<?php endif; ?>
		 </div>
    </div>
  </div>
  
  <div class="m plist" data-widget="tabs">
    <div class="sm fore1 curr" data-widget="tab-item">
      <div class="smt">
        <h3>推荐商品</h3>
      </div>
      <div class="smc" data-widget="tab-content">
        
        <div class="slide" clstag="homepage|keycount|home2012|18c9">
          <div class="slide-itemswrap">
            <div style="width: 900px; top: 0px; left: -225px;" class="slide-items1" id="slide-items<?php echo $this->_var['goods_cat']['id']; ?>">
			<ul>
			<?php
		 $GLOBALS['smarty']->assign('index_image',get_advlist('首页-分类ID'.$GLOBALS['smarty']->_var['goods_cat']['id'].'-中间图片', 4));
	  ?>
	  <?php $_from = $this->_var['index_image']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad_0_78020400_1363162479');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad_0_78020400_1363162479']):
        $this->_foreach['index_image']['iteration']++;
?>
      <li><a href="<?php echo $this->_var['ad_0_78020400_1363162479']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['ad_0_78020400_1363162479']['image']; ?>" height="261" width="225"></a></li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>

            </div>
          </div>
          <div class="slide-crystal"></div>
          <div class="slide-controls"> 
		  <?php $_from = $this->_var['index_image']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad_0_78035400_1363162479');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad_0_78035400_1363162479']):
        $this->_foreach['index_image']['iteration']++;
?>
		      <span <?php if (($this->_foreach['index_image']['iteration'] - 1) == 0): ?>class="curr"<?php endif; ?> onMouseOver="change_slide<?php echo $this->_var['goods_cat']['id']; ?>(<?php echo ($this->_foreach['index_image']['iteration'] - 1); ?>, this)"><?php echo $this->_foreach['index_image']['iteration']; ?></span>
		  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		  </div>
        </div>
		<script language="javascript">
		function change_slide<?php echo $this->_var['goods_cat']['id']; ?>(i, obj){
			$('#slide-items<?php echo $this->_var['goods_cat']['id']; ?>').blinds_change(i);
			
			$(obj).parent().children().removeClass('curr');
			$(obj).addClass('curr');
		}
		$(window).load(function () {
				$('#slide-items<?php echo $this->_var['goods_cat']['id']; ?>').blinds();
			})
		
		</script>
        
        <ul class="lh style1">
		<?php
		 $GLOBALS['smarty']->assign('best_goods', get_cat_recommend_goods('best', get_children($GLOBALS['smarty']->_var['goods_cat']['id']), 8));

		?>
		<?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_78069400_1363162479');$this->_foreach['cat_item_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_item_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_78069400_1363162479']):
        $this->_foreach['cat_item_goods']['iteration']++;
?>
          <li class="fore<?php echo $this->_foreach['cat_item_goods']['iteration']; ?>">
            <div style="opacity: 1;" class="p-img p-img-sys"><a href="<?php echo $this->_var['goods_0_78069400_1363162479']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods_0_78069400_1363162479']['name']); ?>"><img class="err-product" data-lazyload="<?php echo $this->_var['goods_0_78069400_1363162479']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_78069400_1363162479']['name']); ?>" data-img="1" height="110" width="110"></a></div>
            <div class="p-detail">
              <div class="p-name"><a href="<?php echo $this->_var['goods_0_78069400_1363162479']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods_0_78069400_1363162479']['name']); ?>"><?php echo $this->_var['goods_0_78069400_1363162479']['short_style_name']; ?></a></div>
              <div class="p-price"><span><?php if ($this->_var['goods_0_78069400_1363162479']['promote_price'] != ""): ?><?php echo $this->_var['goods_0_78069400_1363162479']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods_0_78069400_1363162479']['shop_price']; ?><?php endif; ?></span></div>
            </div>
          </li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
      </div>
    </div>
	
	<?php
	        $child_cat_index = 1;
			$GLOBALS['smarty']->assign('child_cat',get_child_cat($GLOBALS['smarty']->_var['goods_cat']['id'], 4));
	?>
	<?php $_from = $this->_var['child_cat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_item');$this->_foreach['child_cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['child_cat']['total'] > 0):
    foreach ($_from AS $this->_var['cat_item']):
        $this->_foreach['child_cat']['iteration']++;
?>
    <?php
	        $child_cat_index = $child_cat_index + 1;
			$GLOBALS['smarty']->assign('child_cat_index', $child_cat_index);
	?>
    <div class="sm fore<?php echo $this->_var['child_cat_index']; ?>" data-widget="tab-item" clstag="homepage|keycount|home2012|18d">
      <div class="smt">
        <h3><?php echo htmlspecialchars($this->_var['cat_item']['name']); ?></h3>
      </div>
      <div class="smc" data-widget="tab-content">
        <ul class="lh style2">
		<?php
		 $GLOBALS['smarty']->assign('best_goods', get_cat_recommend_goods('best', get_children($GLOBALS['smarty']->_var['cat_item']['id']), 8));

		?>
		<?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_78129100_1363162479');$this->_foreach['cat_item_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_item_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_78129100_1363162479']):
        $this->_foreach['cat_item_goods']['iteration']++;
?>
          <li class="fore<?php echo $this->_foreach['cat_item_goods']['iteration']; ?>">
            <div class="p-img ld"><a title="<?php echo htmlspecialchars($this->_var['goods_0_78129100_1363162479']['name']); ?>" href="<?php echo $this->_var['goods_0_78129100_1363162479']['url']; ?>" target="_blank"><img width="130" height="130" data-lazyload="<?php echo $this->_var['goods_0_78129100_1363162479']['thumb']; ?>" data-img="1" alt="<?php echo htmlspecialchars($this->_var['goods_0_78129100_1363162479']['name']); ?>"/></a></div>
            <div class="p-name"><a title="<?php echo htmlspecialchars($this->_var['goods_0_78129100_1363162479']['name']); ?>" href="<?php echo $this->_var['goods_0_78129100_1363162479']['url']; ?>" target="_blank"><?php echo $this->_var['goods_0_78129100_1363162479']['short_style_name']; ?></a></div>
            <div class="p-price">售价：<strong><?php if ($this->_var['goods_0_78129100_1363162479']['promote_price'] != ""): ?><?php echo $this->_var['goods_0_78129100_1363162479']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods_0_78129100_1363162479']['shop_price']; ?><?php endif; ?></strong></div>
          </li>
         <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
        </ul>
      </div>
    </div>

	
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </div>
  
	<div class="sm sm2 brands">
		<div class="smt">
			<h3>品牌旗舰店</h3>
			<div class="extra"><a href="brand.php" target="_blank">更多品牌&nbsp;&gt;</a></div>
		</div>
		<div class="smc">
		<ul class="lh">
		<?php
		 $GLOBALS['smarty']->assign('index_image',get_advlist('首页-分类ID'.$GLOBALS['smarty']->_var['goods_cat']['id'].'-品牌图片', 9));
	  ?>

	  <?php $_from = $this->_var['index_image']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad_0_78185000_1363162479');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad_0_78185000_1363162479']):
        $this->_foreach['index_image']['iteration']++;
?>
		<li><a target="_blank" href="<?php echo $this->_var['ad_0_78185000_1363162479']['url']; ?>"><img height="35" width="98" data-img="2" data-lazyload="<?php echo $this->_var['ad_0_78185000_1363162479']['image']; ?>"></a></li>
	   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
		</ul></div>
	</div>

	<div class="sm sm2 infomation">
		<div class="smt">
			<h3>分类资讯</h3>
		</div>
		<div class="smc">
			<ul>
		<?php
		 $GLOBALS['smarty']->assign('index_image',get_advlist('首页-分类ID'.$GLOBALS['smarty']->_var['goods_cat']['id'].'-分类资讯', 5));
	  ?>	
	  <?php $_from = $this->_var['index_image']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad_0_78210400_1363162479');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad_0_78210400_1363162479']):
        $this->_foreach['index_image']['iteration']++;
?>
      <li><a href="<?php echo $this->_var['ad_0_78210400_1363162479']['url']; ?>" target="_blank" title="<?php echo $this->_var['ad_0_78210400_1363162479']['name']; ?>"><b>·</b><?php echo $this->_var['ad_0_78210400_1363162479']['name']; ?></a></li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</ul>
		</div>
	</div>

  
	<div class="da0x100 dam fr">
	<?php
		 $GLOBALS['smarty']->assign('index_image',get_advlist('首页-分类ID'.$GLOBALS['smarty']->_var['goods_cat']['id'].'-右侧图片', 1));
	  ?>
	  <?php $_from = $this->_var['index_image']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad_0_78229900_1363162479');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad_0_78229900_1363162479']):
        $this->_foreach['index_image']['iteration']++;
?>
	<script>
	(function(){var ad=pageConfig.FN_GetRandomData([{width:310,height:100,src:"<?php echo $this->_var['ad_0_78229900_1363162479']['image']; ?>",href:"<?php echo $this->_var['ad_0_78229900_1363162479']['url']; ?>",alt:""}]);
	document.write("<a href=\""+ad.href+"\" target=\"_blank\"><img data-img=\"2\" data-lazyload=\""+ad.src+"\" width=\""+ad.width+"\" height=\""+ad.height+"\" alt=\""+ad.alt+"\" /></a>");})()
	</script>
	 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
  
  <span class="clr"></span> </div>
 


