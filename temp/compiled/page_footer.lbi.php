<script type="text/javascript" src="themes/360buy/images/misc/lib/js/2012/lib-v1.js"></script>
<div class="w">
  <div id="service">
  <?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');$this->_foreach['helps'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['helps']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat']):
        $this->_foreach['helps']['iteration']++;
?>
    <dl class="fore<?php echo $this->_foreach['helps']['iteration']; ?>" clstag="homepage|keycount|home2012|33a">
      <dt><b></b><strong><?php echo $this->_var['help_cat']['cat_name']; ?></strong></dt>
      <dd>
	  <?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item_0_16483300_1363162479');if (count($_from)):
    foreach ($_from AS $this->_var['item_0_16483300_1363162479']):
?>
        <div><a href="help.php?id=<?php echo $this->_var['item_0_16483300_1363162479']['article_id']; ?>" target="_blank"><?php echo $this->_var['item_0_16483300_1363162479']['short_title']; ?> </a></div>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </dd>
    </dl>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    
    
    <span class="clr"></span> </div>
</div>

<div class="w">
  <div id="footer">
    <div class="links">
	<?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav_0_16499400_1363162479');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav_0_16499400_1363162479']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?>
	<a href="<?php echo $this->_var['nav_0_16499400_1363162479']['url']; ?>" <?php if ($this->_var['nav_0_16499400_1363162479']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav_0_16499400_1363162479']['name']; ?></a><?php if (! ($this->_foreach['nav_bottom_list']['iteration'] == $this->_foreach['nav_bottom_list']['total'])): ?>|<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
    <div class="copyright">
      
	   <?php echo $this->_var['copyright']; ?>&nbsp;<?php if ($this->_var['icp_number']): ?>
	  <?php echo $this->_var['lang']['icp_number']; ?>:<a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo $this->_var['icp_number']; ?></a>
	  <?php endif; ?>
	  <br>
	  <?php if ($this->_var['stats_code']): ?>
    <div><?php echo $this->_var['stats_code']; ?></div>
    <?php endif; ?>
	  </div>
    <div class="authentication"><a href="#" target="_blank"><img src="themes/360buy/images/da/108_40_zZOKnl.gif" width="108" height="40" alt="经营性网站备案中心"></a>
      <a href="#" tabindex="-1" id="urlknet" target="_blank"><img name="seal" border="true" src="themes/360buy/images/da/112_40_EAWZul.jpg" width="112" height="40"></a><a href="#" target="_blank"><img src="themes/360buy/images/da/108_40_OaNIwt.jpg" width="108" height="40" alt="海淀网络警察"></a><a href="#" target="_blank"><img src="themes/360buy/images/da/112_40_WvArIl.png" width="112" height="40"></a></div>
  </div>
</div>


<SCRIPT LANGUAGE="JavaScript"><!--Hide
function killErrors() {return true;} window.onerror = killErrors;//--></SCRIPT>
<script language="javascript" src="http://code.54kefu.net/kefu/js/76/230676.js" charset="utf-8"></script>
