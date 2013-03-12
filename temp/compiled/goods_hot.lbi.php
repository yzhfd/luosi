<div class="m rank">
      <div class="mt">
        <h2>热销排行榜</h2>
      </div>
      <div class="mc">
        <ul class="tabcon">
          <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_49915000_1363075069');$this->_foreach['hot_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['hot_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_49915000_1363075069']):
        $this->_foreach['hot_goods']['iteration']++;
?>
          <?php if ($this->_foreach['hot_goods']['iteration'] == 1): ?>
          <li class="fore"><span><?php echo $this->_foreach['hot_goods']['iteration']; ?></span>
            <div class="p-img"><a href='<?php echo $this->_var['goods_0_49915000_1363075069']['url']; ?>'> <img src="<?php echo $this->_var['goods_0_49915000_1363075069']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_49915000_1363075069']['name']); ?>" width="50" height="50"/></a></div>
            <div class="p-name"><a href='<?php echo $this->_var['goods_0_49915000_1363075069']['url']; ?>'><?php echo $this->_var['goods_0_49915000_1363075069']['short_style_name']; ?></a></div>
            <div class="p-price"><strong ><?php if ($this->_var['goods_0_49915000_1363075069']['promote_price'] != ""): ?><?php echo $this->_var['goods_0_49915000_1363075069']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods_0_49915000_1363075069']['shop_price']; ?><?php endif; ?>
              </strong></div>
          </li>
          <?php else: ?>
          <li><span><?php echo $this->_foreach['hot_goods']['iteration']; ?></span>
            <div class="p-name"><a  href='<?php echo $this->_var['goods_0_49915000_1363075069']['url']; ?>'><?php echo $this->_var['goods_0_49915000_1363075069']['short_style_name']; ?></a></div>
          </li>
          <?php endif; ?>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
      </div>
    </div>
