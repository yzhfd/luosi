

<div class="mt">
      <h2><?php echo htmlspecialchars($this->_var['articles_cat']['name']); ?></h2>
      <div class="extra"><a href="<?php echo $this->_var['articles_cat']['url']; ?>" target="_blank">更多&nbsp;&gt;</a></div>
    </div>
    <div class="mc">
	<div class="p-img">
	<?php
		 $GLOBALS['smarty']->assign('index_image',get_advlist('首页-在线读书-左侧图片', 1));
	  ?>
	  <?php $_from = $this->_var['index_image']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_image']['iteration']++;
?>
<a href="<?php echo $this->_var['ad']['url']; ?>" target="_blank" title=""><img class="err-product" src="<?php echo $this->_var['ad']['image']; ?>" alt="" data-img="1" height="100" width="100"></a>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
      <ul>
	  <?php $_from = $this->_var['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article_item');$this->_foreach['articles'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['articles']['total'] > 0):
    foreach ($_from AS $this->_var['article_item']):
        $this->_foreach['articles']['iteration']++;
?>
        <li <?php if ($this->_foreach['articles']['iteration'] % 2 == 1): ?>class="odd"<?php endif; ?>><a href="<?php echo $this->_var['article_item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article_item']['title']); ?>" target="_blank"><?php echo $this->_var['article_item']['short_title']; ?></a></li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
    </div>




