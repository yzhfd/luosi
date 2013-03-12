<table id="TechSheetTable" class="myDataTable">
    <thead>
       <tr class="even">
           <td><span class="techtablehead">商品货号</span></td>
        <?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
        <td><span class="techtablehead"><?php echo $this->_var['attr']['filter_attr_name']; ?></span></td>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <td><span class="techtablehead">CAD</span></td>
        </tr>
    </thead> 
    <?php $_from = $this->_var['goods_list1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
    <tr>
        <td><a target="_blank" href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['name']; ?></a></td>
        <?php $_from = $this->_var['goods']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
        <td><?php echo $this->_var['attr']['attr_value']; ?></td>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <td><a target="_blank" href="<?php echo $this->_var['goods']['url']; ?>">{CAD}</a></td>
    </tr>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</table>
