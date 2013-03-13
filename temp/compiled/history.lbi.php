<div class="m" id="recent">
      <div class="mt">
        <h2>最近浏览过的商品</h2>
        <div class="extra"><a href="javascript:clear_history()" id="clearRec">清空</a></div>
      </div>
      <div class="mc">
        <?php
				 $GLOBALS['smarty']->assign('historys', get_history());
		       ?>
        <ul id="history_list">
          <?php if ($this->_var['historys']): ?>
          <?php $_from = $this->_var['historys']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item_0_61962700_1363164340');$this->_foreach['historys'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['historys']['total'] > 0):
    foreach ($_from AS $this->_var['item_0_61962700_1363164340']):
        $this->_foreach['historys']['iteration']++;
?>
          <li>
            <div class="p-img"><a href="<?php echo $this->_var['item_0_61962700_1363164340']['url']; ?>"><img src="<?php echo $this->_var['item_0_61962700_1363164340']['goods_thumb']; ?>" width="50" height="50" /></a></div>
            <div class="p-name"><a href="<?php echo $this->_var['item_0_61962700_1363164340']['url']; ?>"><?php echo $this->_var['item_0_61962700_1363164340']['short_name']; ?></a></div>
          </li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          <?php else: ?>
          <li>
            <div class='norecode'>暂无记录!</div>
          </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
    <script type="text/javascript">

function clear_history()
{
	Ajax.call('user.php', 'act=clear_history',clear_history_Response, 'GET', 'TEXT',1,1);
}
function clear_history_Response(res)
{
document.getElementById('history_list').innerHTML = '<li><div class="norecode">暂无记录!</div></li>';
}
</script>
    
