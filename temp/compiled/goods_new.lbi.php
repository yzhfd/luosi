<div class="hide m m0" id="finalbuy" style="display: block;">
      <div class="mt">
        <h2>新品推荐</h2>
      </div>
      <div class="mc">
	  <?php if ($this->_var['new_goods']): ?>
        <ul>
		<?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_53082900_1363072140');$this->_foreach['hot_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['hot_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_53082900_1363072140']):
        $this->_foreach['hot_goods']['iteration']++;
?>
          <li class="fore">
            <div class="p-img"><a target="_blank" title="<?php echo htmlspecialchars($this->_var['goods_0_53082900_1363072140']['name']); ?>" href="<?php echo $this->_var['goods_0_53082900_1363072140']['url']; ?>"><img width="100" height="100" alt="" src="<?php echo $this->_var['goods_0_53082900_1363072140']['thumb']; ?>"/></a>
			<?php if ($this->_var['goods_0_53082900_1363072140']['is_promote']): ?>
              <div class="pi7"></div>
			 <?php elseif ($this->_var['goods_0_53082900_1363072140']['is_hot']): ?>
			 <div class="pi2"></div>
			 <?php endif; ?> 
            </div>
            <div class="rate"><a target="_blank" title="<?php echo htmlspecialchars($this->_var['goods_0_53082900_1363072140']['name']); ?>" href="<?php echo $this->_var['goods_0_53082900_1363072140']['url']; ?>"><?php echo $this->_var['goods_0_53082900_1363072140']['short_style_name']; ?></a></div>
            <div class="p-price"><strong><?php if ($this->_var['goods_0_53082900_1363072140']['promote_price'] != ""): ?><?php echo $this->_var['goods_0_53082900_1363072140']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods_0_53082900_1363072140']['shop_price']; ?><?php endif; ?></strong></div>
          </li>
         <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
        <div class="more"><a href="search.php?intro=new&category=<?php echo $this->_var['top_cat_id']; ?>" title="查看更多" target="_blank">查看更多新品</a></div>
		<?php endif; ?>
      </div>
    </div>
