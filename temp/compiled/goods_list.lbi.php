<form method="GET" class="sort" name="listform">
	<script language="javascript">
function display_mode(mode){
	document.listform.display.value = mode;
	document.listform.submit();
}

function display_order(sort, order){
	document.listform.sort.value = sort;
	document.listform.order.value = order;
	document.listform.submit();
}

</script>
    <div id="filter"  clstag="thirdtype|keycount|thirdtype|filter">
      <div class="fore item">排序&nbsp;</div>
      <ul class="item tab">
        <li <?php if ($this->_var['pager']['sort'] == 'sell_number' && $this->_var['pager']['order'] == 'DESC'): ?>class='curr'<?php endif; ?>><a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=sell_number&order=DESC">销量</a><span></span></li>
		<?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'ASC'): ?>
		<li class='price curr up'><b></b><a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=shop_price&order=DESC" rel='nofollow'>价格</a><span></span></li>
		<?php elseif ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'DESC'): ?>
		<li class='price curr down'><b></b><a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=shop_price&order=ASC" rel='nofollow'>价格</a><span></span></li>
		<?php else: ?>
        <li  ><b></b><a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=shop_price&order=ASC" rel='nofollow'>价格</a><span></span></li>
		<?php endif; ?>
		
        <li <?php if ($this->_var['pager']['sort'] == 'comment_count' && $this->_var['pager']['order'] == 'DESC'): ?>class='curr'<?php endif; ?>><a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=comment_count&order=DESC" rel='nofollow'>评论数</a><span></span></li>
        <li <?php if ($this->_var['pager']['sort'] == 'goods_id' && $this->_var['pager']['order'] == 'DESC'): ?>class='curr'<?php endif; ?>><a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=goods_id&order=DESC" rel='nofollow'>上架时间</a><span></span></li>
      </ul>
      <div class="pagin pagin-m fr">
	  <span class="text"><?php echo $this->_var['pager']['page']; ?>/<?php echo $this->_var['pager']['page_count']; ?></span>
	  <?php if ($this->_var['pager']['page_prev']): ?>
	  <a href="<?php echo $this->_var['pager']['page_prev']; ?>" class="prev" >上一页<b></b></a>
	  <?php else: ?>
	  <span class="prev-disabled">上一页<b></b></span>
	  <?php endif; ?>
	  <?php if ($this->_var['pager']['page_next']): ?>
	  <a href="<?php echo $this->_var['pager']['page_next']; ?>" class="next" >下一页<b></b></a>
	  <?php else: ?>
	  <span class="next-disabled">下一页<b></b></span>
	  <?php endif; ?>

	  </div>
      <span class="clr" style="display:block;overflow:hidden;clear:both;height:0;line-height:0;font-size:0;"></span>
      <div class="extra">
        <div class='total fr'><span>共<strong><?php echo $this->_var['pager']['record_count']; ?></strong>个商品</span></div>
        <span class='clr' style="display:block;overflow:hidden;clear:both;height:0;line-height:0;font-size:0;"></span></div>
    </div>
	<input type="hidden" name="category" value="<?php echo $this->_var['category']; ?>" />
  <input type="hidden" name="display" value="<?php echo $this->_var['pager']['display']; ?>" id="display" />
  <input type="hidden" name="brand" value="<?php echo $this->_var['brand_id']; ?>" />
  <input type="hidden" name="price_min" value="<?php echo $this->_var['price_min']; ?>" />
  <input type="hidden" name="price_max" value="<?php echo $this->_var['price_max']; ?>" />
  <input type="hidden" name="filter_attr" value="<?php echo $this->_var['filter_attr']; ?>" />
  <input type="hidden" name="page" value="<?php echo $this->_var['pager']['page']; ?>" />
  <input type="hidden" name="sort" value="<?php echo $this->_var['pager']['sort']; ?>" />
  <input type="hidden" name="order" value="<?php echo $this->_var['pager']['order']; ?>" />
  </form>
    
<div class="m" id="plist">
	<?php if ($this->_var['goods_list']): ?>
      <ul class="list-h">
        
		<?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
    <?php if ($this->_var['goods']['goods_id']): ?>
        <li>
          <div class='p-img'><a target='_blank' href='<?php echo $this->_var['goods']['url']; ?>'><img onerror="this.src='themes/360buy/images/none_150.gif'" src='<?php echo $this->_var['goods']['goods_thumb']; ?>' width="160" height="160" alt='<?php echo htmlspecialchars($this->_var['goods']['name']); ?>' /></a>
             <?php if ($this->_var['goods']['is_promote']): ?>
             <div class="pi7"></div>
			 <?php elseif ($this->_var['goods']['is_hot']): ?>
			 <div class="pi2"></div>
			 <?php elseif ($this->_var['goods']['is_best']): ?>
			 <div class="pi8"></div>
			 <?php elseif ($this->_var['goods']['is_new']): ?>
			 <div class="pi1"></div>
			 <?php endif; ?> 
          </div>
          <div class='p-name'><a target='_blank' href='<?php echo $this->_var['goods']['url']; ?>'><?php echo $this->_var['goods']['goods_name']; ?><font style='color:#ff0000' class='adwords' name='573692'></font></a></div>
          <div  class='p-price' style="color:#FF0000; font-weight:bold"><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></div>
          <div class='extra'><span class='evaluate'><a target='_blank' href='<?php echo $this->_var['goods']['url']; ?>'>已有<?php echo $this->_var['goods']['comment_count']; ?>人评价</a></span><span class='reputation'>(95%好评)</span></div>
          <div class='btns' style="text-align:center; padding-left:60px "><a href='javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)' class='btn-buy'>购买</a>
            <input type='button' class='btn-coll' value='收藏' onclick='javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>);' />
            
          </div>
        </li>
        <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		
      </ul>
	<?php else: ?>  
	<div style="font-size: 14px; text-align: center;">抱歉！没有找到符合条件的结果</div>
	 <?php endif; ?> 
    </div>    
    
<script type="text/javascript">
window.onload = function()
{
  //Compare.init();
  fixpng();
}
<?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_07771700_1362457343');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_07771700_1362457343']):
?>
<?php if ($this->_var['key'] != 'button_compare'): ?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item_0_07771700_1362457343']; ?>";
<?php else: ?>
var button_compare = '';
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>
