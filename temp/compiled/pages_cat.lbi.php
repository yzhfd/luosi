<form name="selectPageForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
<div class="m clearfix">
      <div class="pagin fr"> 
	  <?php if ($this->_var['pager']['page_prev']): ?>
	  <a href="<?php echo $this->_var['pager']['page_prev']; ?>" class="prev" >上一页<b></b></a>
	  <?php else: ?>
	  <span class="prev-disabled">上一页<b></b></span>
	  <?php endif; ?>
	  <?php $_from = $this->_var['pager']['page_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_11051500_1362457343');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_11051500_1362457343']):
?>
      <?php if ($this->_var['pager']['page'] == $this->_var['key']): ?>
	  <a href="<?php echo $this->_var['item_0_11051500_1362457343']; ?>" class="current"><?php echo $this->_var['key']; ?></a>
      <?php else: ?>
      <a href="<?php echo $this->_var['item_0_11051500_1362457343']; ?>"><?php echo $this->_var['key']; ?></a>
      <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

	  <?php if ($this->_var['pager']['page_next']): ?>
	  <a href="<?php echo $this->_var['pager']['page_next']; ?>" class="next" >下一页<b></b></a>
	  <?php else: ?>
	  <span class="next-disabled">下一页<b></b></span>
	  <?php endif; ?>
	  </div>
      
    </div>
	<?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_11125500_1362457343');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_11125500_1362457343']):
?>
      <?php if ($this->_var['key'] == 'keywords'): ?>
          <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo urldecode($this->_var['item_0_11125500_1362457343']); ?>" />
        <?php else: ?>
          <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['item_0_11125500_1362457343']; ?>" />
      <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</form>	
