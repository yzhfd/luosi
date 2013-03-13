<?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_0_61128100_1363164340');if (count($_from)):
    foreach ($_from AS $this->_var['cat_0_61128100_1363164340']):
?>
	<?php if ($this->_var['cat_0_61128100_1363164340']['id'] == $this->_var['top_cat_id']): ?>
<div class="m" id="sortlist">
      <div class="mt">
        <h2><?php echo htmlspecialchars($this->_var['cat_0_61128100_1363164340']['name']); ?></h2>
      </div>
      <div class="mc">
	  
	  <?php $_from = $this->_var['cat_0_61128100_1363164340']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child_0_61149400_1363164340');if (count($_from)):
    foreach ($_from AS $this->_var['child_0_61149400_1363164340']):
?>
        <div id="child_<?php echo $this->_var['child_0_61149400_1363164340']['id']; ?>" class='item <?php if ($this->_var['child_0_61149400_1363164340']['id'] == $this->_var['category']): ?>current<?php endif; ?>'>
          <h3><b></b><?php echo htmlspecialchars($this->_var['child_0_61149400_1363164340']['name']); ?></h3>
          <ul>
		  <?php $_from = $this->_var['child_0_61149400_1363164340']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer_0_61171000_1363164340');if (count($_from)):
    foreach ($_from AS $this->_var['childer_0_61171000_1363164340']):
?>
		  <?php if ($this->_var['childer_0_61171000_1363164340']['id'] == $this->_var['category']): ?>
		  <script language="javascript">
		  $('#child_<?php echo $this->_var['child_0_61149400_1363164340']['id']; ?>').addClass("current");
		  </script>
		  <?php endif; ?>
            <li><a href="<?php echo $this->_var['childer_0_61171000_1363164340']['url']; ?>" <?php if ($this->_var['childer_0_61171000_1363164340']['id'] == $this->_var['category']): ?>style="color:#FF0000"<?php endif; ?>><?php echo htmlspecialchars($this->_var['childer_0_61171000_1363164340']['name']); ?></a></li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </ul>
        </div>
	 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>		
       
      </div>
    </div>
<?php endif; ?>	  
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
    
<script type="text/javascript">
            $("#sortlist h3").bind("click",function(){
	            var element=$(this).parent();
	            if (element.hasClass("current")){
		            element.removeClass("current");
	            }else{
		            element.addClass("current");
	            }
            })
            </script>    
