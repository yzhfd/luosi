<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'shopping_flow.js')); ?>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
window["\x64\x6f\x63\x75\x6d\x65\x6e\x74"]["\x77\x72\x69\x74\x65"]("\x3c\x6c\x69\x6e\x6b \x68\x72\x65\x66\x3d\x27\x2f\x74\x68\x65\x6d\x65\x73\x2f\x33\x36\x30\x62\x75\x79\x2f\x69\x6d\x61\x67\x65\x73\x2f\x6d\x69\x73\x63\x2f\x6c\x69\x62\x2f\x73\x6b\x69\x6e\x2f\x32\x30\x31\x32\x2f\x62\x61\x73\x65\x2e\x63\x73\x73\x27 \x72\x65\x6c\x3d\x27\x73\x74\x79\x6c\x65\x73\x68\x65\x65\x74\x27 \x74\x79\x70\x65\x3d\x27\x74\x65\x78\x74\/\x63\x73\x73\x27\/\x3e");
</script>
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
<script type="text/javascript" src="themes/360buy/images/misc/lib/js/e/jquery-1.2.6.pack.js"></script>

<script type="text/javascript" src="themes/360buy/images/misc/lib/js/e/transport.js"></script>
<script type="text/javascript" src="themes/360buy/images/misc/lib/js/e/common.js"></script>
<link type="text/css" rel="stylesheet" href="themes/360buy/images/misc/purchase/skin/common.css" />

<link type="text/css" rel="stylesheet" href="themes/360buy/images/misc/purchase/skin/shoppingcart.css" />
<style>
.highlight1{border:1px solid #EFA100;outline:2px solid #FFDC97;*border:2px solid #ffcc66;*padding:3px 2px;}
.highlight2{border:1px solid #f00;outline:1px solid #FFC1C1;color:#f00;}
</style>

</head><body>

<div id="shortcut">
  <div class="w">
    <ul class="fl lh">
      <li class="fore1 ld"><b></b><a href="javascript:add_to_favorite()">收藏<?php echo $this->_var['shop_name']; ?></a></li>
    </ul>
    <ul class="fr lh">
      <li class="fore1 ld" id="loginbar" clstag="homepage|keycount|home2012|01e"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></li>
      <li class="fore2" clstag="homepage|keycount|home2012|01f"><a href="user.php?act=order_list">我的订单</a></li>
      <li class="fore6 menu" data-widget="dropdown" clstag="homepage|keycount|home2012|01j">
        <dl>
          <dt class="ld"><a>客户服务<b></b></a></dt>
          <dd>
            <?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?>
            <div><a href="<?php echo $this->_var['nav']['url']; ?>" 
              
              
              
              
              <?php if ($this->_var['nav']['opennew'] == 1): ?>
              target="_blank"
              <?php endif; ?>
              ><?php echo $this->_var['nav']['name']; ?></a></div>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </dd>
        </dl>
      </li>
    </ul>
    <span class="clr"></span> </div>
</div>
<div class="block">
  <?php if ($this->_var['step'] == "cart"): ?>
  
  
  <?php echo $this->smarty_insert_scripts(array('files'=>'showdiv.js')); ?>
  <script type="text/javascript">
  <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </script>
  <div class="Wrap_cart">
    <div id="Top1_order_step1" class="Header_cart">
      <div class="Logo"><a href="index.php"><img src="themes/360buy/images/logo.gif" /></a></div>
      <ul class="Order_cart" id="Order_cart_S1">
        <li class="step1">1.我的购物车</li>
        <li class="step2">2.填写核对订单信息</li>
        <li class="step3">3.成功提交订单</li>
      </ul>
    </div>
    <div id="Top1_FeeInfo" class="mycart_tip"> <img id='myCartTipImg' src="themes/360buy/images/360buy/purchase/skin/images/cart_001.gif" /> </div>

    


    <div class="List_cart">
      <h2><strong>我挑选的商品</strong></h2>
      <div class="cart_table">
	  
       <form id="formCart" name="formCart" method="post" action="flow.php">
        
        <div id="productList">
		 
          <table class='Table' cellpadding='0' cellspacing='0' width='100%' id='CartTb'>
            <tr class='align_Center Thead'>
              <td width='7%' style='height:30px'>商品编号</td>
              <td>商品名称</td>
			  <td width='8%'><?php echo $this->_var['lang']['goods_attr']; ?></td>
			  <td width='14%'><?php echo $this->_var['lang']['market_prices']; ?></td>
              <td width='14%'><?php echo $this->_var['lang']['shop_prices']; ?></td>


              <td width='9%'>商品数量</td>
			  <td width='8%'><?php echo $this->_var['lang']['subtotal']; ?></td>
              <td width='10%'><?php echo $this->_var['lang']['handle']; ?></td>
            </tr>
			<?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
            <tr>
			<td bgcolor="#ffffff"><?php echo $this->_var['goods']['goods_sn']; ?></td>
              <td bgcolor="#ffffff" align="center">
                <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] != 'package_buy'): ?>
                  <?php if ($this->_var['show_goods_thumb'] == 1): ?>
                    <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank" class="f6"><?php echo $this->_var['goods']['goods_name']; ?></a>
                  <?php elseif ($this->_var['show_goods_thumb'] == 2): ?>
                    <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" border="0" title="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" style="width:50px; height:50px" /></a>
                  <?php else: ?>
				  <table style="border:0px; background-color:#FFFFFF">
				  <tr><Td><a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" border="0" title="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" style="width:50px; height:50px" /></a></Td><Td><a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank" class="f6"><?php echo $this->_var['goods']['goods_name']; ?></a></Td></tr>
				  </table>
                    
                    
                  <?php endif; ?>
                  <?php if ($this->_var['goods']['parent_id'] > 0): ?>
                  <span style="color:#FF0000">（<?php echo $this->_var['lang']['accessories']; ?>）</span>
                  <?php endif; ?>
                  <?php if ($this->_var['goods']['is_gift'] > 0): ?>
                  <span style="color:#FF0000">（<?php echo $this->_var['lang']['largess']; ?>）</span>
                  <?php endif; ?>
                <?php elseif ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] == 'package_buy'): ?>
                  <a href="javascript:void(0)" onclick="setSuitShow(<?php echo $this->_var['goods']['goods_id']; ?>)" class="f6"><?php echo $this->_var['goods']['goods_name']; ?><span style="color:#FF0000;">（<?php echo $this->_var['lang']['remark_package']; ?>）</span></a>
                  <div id="suit_<?php echo $this->_var['goods']['goods_id']; ?>" style="display:none">
                      <?php $_from = $this->_var['goods']['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods_list');if (count($_from)):
    foreach ($_from AS $this->_var['package_goods_list']):
?>
                        <a href="goods.php?id=<?php echo $this->_var['package_goods_list']['goods_id']; ?>" target="_blank" class="f6"><?php echo $this->_var['package_goods_list']['goods_name']; ?></a><br />
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  </div>
                <?php else: ?>
                  <?php echo $this->_var['goods']['goods_name']; ?>
                <?php endif; ?>
              </td>
            
              <td bgcolor="#ffffff" align="center"><?php echo nl2br($this->_var['goods']['goods_attr']); ?></td>
            
              
              <td align="center" bgcolor="#ffffff"><?php echo $this->_var['goods']['market_price']; ?></td>
             
              <td align="center" bgcolor="#ffffff"><?php echo $this->_var['goods']['goods_price']; ?></td>
              <td align="center" bgcolor="#ffffff">
                <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['is_gift'] == 0 && $this->_var['goods']['parent_id'] == 0): ?>
                <input type="text" name="goods_number[<?php echo $this->_var['goods']['rec_id']; ?>]" id="goods_number_<?php echo $this->_var['goods']['rec_id']; ?>" value="<?php echo $this->_var['goods']['goods_number']; ?>" size="4" class="inputBg" style="text-align:center " onkeydown="showdiv(this)"/>
                <?php else: ?>
                <?php echo $this->_var['goods']['goods_number']; ?>
                <?php endif; ?>
              </td>
              <td align="center" bgcolor="#ffffff"><?php echo $this->_var['goods']['subtotal']; ?></td>
              <td align="center" bgcolor="#ffffff">
                <a href="javascript:if (confirm('<?php echo $this->_var['lang']['drop_goods_confirm']; ?>')) location.href='flow.php?step=drop_goods&amp;id=<?php echo $this->_var['goods']['rec_id']; ?>'; "><?php echo $this->_var['lang']['drop']; ?></a>
                <?php if ($_SESSION['user_id'] > 0 && $this->_var['goods']['extension_code'] != 'package_buy'): ?>
                <br><a href="javascript:if (confirm('<?php echo $this->_var['lang']['drop_goods_confirm']; ?>')) location.href='flow.php?step=drop_to_collect&amp;id=<?php echo $this->_var['goods']['rec_id']; ?>'; "><?php echo $this->_var['lang']['drop_to_collect']; ?></a>
                <?php endif; ?>            </td>
            </tr>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <tr>
              <td class='align_Right Tfoot' colspan='8' style='height:30px; font-size:12px; '>
			  <?php if ($this->_var['discount'] > 0): ?><?php echo $this->_var['your_discount']; ?><br /><?php endif; ?>
              <?php echo $this->_var['shopping_money']; ?><?php if ($this->_var['show_marketprice']): ?>，<?php echo $this->_var['market_price_desc']; ?><?php endif; ?>
			  </td>
            </tr>
          </table>
		   
        </div>
        
        
        <ul class="cart_op" style="margin-bottom:0px;">
         
 
          <li class="li2"><a href="#none" onclick="location.href='flow.php?step=clear'">清空购物车</a></li>
          <li class="li1"><a href="javascript:document.formCart.submit()">更新购物车</a></li>
          <li class="li3">
            <div id="submit_info"> </div>
            <div id="submit_btn" style="text-align:right"> <a id='continueBuyBtn' href="./">继续购物</a> <a id='gotoOrderInfo'  href="flow.php?step=checkout">去结算</a> </div>
            <div style="padding-right:9px;text-align:right;border:#fff 1px solid;" id="submit_error"></div>
          </li>
        </ul>
		<input type="hidden" name="step" value="update_cart" />
        </form>
       
      </div>
      <div class="round">
        <div class="lround"></div>
        <div class="rround"></div>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <?php if ($this->_var['step'] == "consignee"): ?>
  
  <?php echo $this->smarty_insert_scripts(array('files'=>'region.js,utils.js')); ?>
  <script type="text/javascript">
          region.isAdmin = false;
          <?php $_from = $this->_var['lang']['flow_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
          var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

          
          onload = function() {
            if (!document.all)
            {
              document.forms['theForm'].reset();
            }
          }
          
        </script>
  
  <div class="Wrap_cart">
    <div id="Top1_order_step1" class="Header_cart">
      <div class="Logo"><a href="index.php"><img src="themes/360buy/images/logo.gif" /></a></div>
      <ul class="Order_cart" id="Order_cart_S2">
        <li class="step1">1.我的购物车</li>
        <li class="step2">2.填写核对订单信息</li>
        <li class="step3">3.成功提交订单</li>
      </ul>
    </div>


    


    <div class="List_cart">
      <h2><strong>填写配送信息</strong></h2>
      <div class="cart_table">
	  
       
  <?php $_from = $this->_var['consignee_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('sn', 'consignee');if (count($_from)):
    foreach ($_from AS $this->_var['sn'] => $this->_var['consignee']):
?>
  <form action="flow.php" method="post" name="theForm" id="theForm" onSubmit="return checkConsignee(this)">
    <div class="flowBox">
      <h6><span><?php echo $this->_var['lang']['consignee_info']; ?></span></h6>
      <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
      <table width="100%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
        <?php if ($this->_var['real_goods_count'] > 0): ?>
        
        <tr>
          <td bgcolor="#ffffff"><?php echo $this->_var['lang']['country_province']; ?>:</td>
          <td colspan="3" bgcolor="#ffffff"><select name="country" id="selCountries_<?php echo $this->_var['sn']; ?>" onchange="region.changed(this, 1, 'selProvinces_<?php echo $this->_var['sn']; ?>')" style="border:1px solid #ccc; height:22px">
              <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['0']; ?></option>
              <?php $_from = $this->_var['country_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'country');if (count($_from)):
    foreach ($_from AS $this->_var['country']):
?>
              <option value="<?php echo $this->_var['country']['region_id']; ?>" <?php if ($this->_var['consignee']['country'] == $this->_var['country']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['country']['region_name']; ?></option>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </select>
            <select name="province" id="selProvinces_<?php echo $this->_var['sn']; ?>" onchange="region.changed(this, 2, 'selCities_<?php echo $this->_var['sn']; ?>')" style="border:1px solid #ccc;height:22px">
              <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['1']; ?></option>
              <?php $_from = $this->_var['province_list'][$this->_var['sn']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'province');if (count($_from)):
    foreach ($_from AS $this->_var['province']):
?>
              <option value="<?php echo $this->_var['province']['region_id']; ?>" <?php if ($this->_var['consignee']['province'] == $this->_var['province']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['province']['region_name']; ?></option>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </select>
            <select name="city" id="selCities_<?php echo $this->_var['sn']; ?>" onchange="region.changed(this, 3, 'selDistricts_<?php echo $this->_var['sn']; ?>')" style="border:1px solid #ccc;height:22px">
              <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['2']; ?></option>
              <?php $_from = $this->_var['city_list'][$this->_var['sn']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'city');if (count($_from)):
    foreach ($_from AS $this->_var['city']):
?>
              <option value="<?php echo $this->_var['city']['region_id']; ?>" <?php if ($this->_var['consignee']['city'] == $this->_var['city']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['city']['region_name']; ?></option>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </select>
            <select name="district" id="selDistricts_<?php echo $this->_var['sn']; ?>" <?php if (! $this->_var['district_list'][$this->_var['sn']]): ?><?php endif; ?> style="border:1px solid #ccc;height:22px">
              <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['3']; ?></option>
              <?php $_from = $this->_var['district_list'][$this->_var['sn']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'district');if (count($_from)):
    foreach ($_from AS $this->_var['district']):
?>
              <option value="<?php echo $this->_var['district']['region_id']; ?>" <?php if ($this->_var['consignee']['district'] == $this->_var['district']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['district']['region_name']; ?></option>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </select>
            <?php echo $this->_var['lang']['require_field']; ?> </td>
        </tr>
        <?php endif; ?>
        <tr>
          <td bgcolor="#ffffff"><?php echo $this->_var['lang']['consignee_name']; ?>:</td>
          <td bgcolor="#ffffff"><input name="consignee" type="text" class="inputBg" id="consignee_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['consignee']); ?>" />
            <?php echo $this->_var['lang']['require_field']; ?> </td>
          <td bgcolor="#ffffff"><?php echo $this->_var['lang']['email_address']; ?>:</td>
          <td bgcolor="#ffffff"><input name="email" type="text" class="inputBg"  id="email_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['email']); ?>" />
            <?php echo $this->_var['lang']['require_field']; ?></td>
        </tr>
        <?php if ($this->_var['real_goods_count'] > 0): ?>
        
        <tr>
          <td bgcolor="#ffffff"><?php echo $this->_var['lang']['detailed_address']; ?>:</td>
          <td bgcolor="#ffffff"><input name="address" type="text" class="inputBg"  id="address_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['address']); ?>" />
            <?php echo $this->_var['lang']['require_field']; ?></td>
          <td bgcolor="#ffffff"><?php echo $this->_var['lang']['postalcode']; ?>:</td>
          <td bgcolor="#ffffff"><input name="zipcode" type="text" class="inputBg"  id="zipcode_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['zipcode']); ?>" /></td>
        </tr>
        <?php endif; ?>
        <tr>
          <td bgcolor="#ffffff"><?php echo $this->_var['lang']['phone']; ?>:</td>
          <td bgcolor="#ffffff"><input name="tel" type="text" class="inputBg"  id="tel_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['tel']); ?>" />
            <?php echo $this->_var['lang']['require_field']; ?></td>
          <td bgcolor="#ffffff"><?php echo $this->_var['lang']['backup_phone']; ?>:</td>
          <td bgcolor="#ffffff"><input name="mobile" type="text" class="inputBg"  id="mobile_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['mobile']); ?>" /></td>
        </tr>
        <?php if ($this->_var['real_goods_count'] > 0): ?>
        
        <tr>
          <td bgcolor="#ffffff"><?php echo $this->_var['lang']['sign_building']; ?>:</td>
          <td bgcolor="#ffffff"><input name="sign_building" type="text" class="inputBg"  id="sign_building_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['sign_building']); ?>" /></td>
          <td bgcolor="#ffffff"><?php echo $this->_var['lang']['deliver_goods_time']; ?>:</td>
          <td bgcolor="#ffffff"><input name="best_time" type="text"  class="inputBg" id="best_time_<?php echo $this->_var['sn']; ?>" value="<?php echo htmlspecialchars($this->_var['consignee']['best_time']); ?>" /></td>
        </tr>
        <?php endif; ?>
        <tr>
          <td colspan="4" align="center" bgcolor="#ffffff"><input type="submit" name="Submit" class="bnt_blue_2" value="<?php echo $this->_var['lang']['shipping_address']; ?>" />
            <?php if ($_SESSION['user_id'] > 0 && $this->_var['consignee']['address_id'] > 0): ?>
            
            <input name="button" type="button" onclick="if (confirm('<?php echo $this->_var['lang']['drop_consignee_confirm']; ?>')) location.href='flow.php?step=drop_consignee&amp;id=<?php echo $this->_var['consignee']['address_id']; ?>'"  class="bnt_blue" value="<?php echo $this->_var['lang']['drop']; ?>" />
            <?php endif; ?>
            <input type="hidden" name="step" value="consignee" />
            <input type="hidden" name="act" value="checkout" />
            <input type="hidden" name="flow_type" value="<?php echo $_SESSION['flow_type']; ?>" />
            <input name="address_id" type="hidden" value="<?php echo $this->_var['consignee']['address_id']; ?>" />
          </td>
        </tr>
      </table>
    </div>
  </form>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       
      </div>
      <div class="round">
        <div class="lround"></div>
        <div class="rround"></div>
      </div>
    </div>
  </div>
  
  
  <?php endif; ?>
  <?php if ($this->_var['step'] == "checkout"): ?>
  
  <div class="Wrap_cart">
    <div id="Top1_order_step1" class="Header_cart">
      <div class="Logo"><a href="index.php"><img src="themes/360buy/images/logo.gif" /></a></div>
      <ul class="Order_cart" id="Order_cart_S2">
        <li class="step1">1.我的购物车</li>
        <li class="step2">2.填写核对订单信息</li>
        <li class="step3">3.成功提交订单</li>
      </ul>
    </div>


    


    <div class="List_cart">
      <h2><strong>填写配送方式/支付方式</strong></h2>
      <div class="cart_table">
	  
      <form action="flow.php" method="post" name="theForm" id="theForm" onSubmit="return checkOrderForm(this)">
    <script type="text/javascript">
        var flow_no_payment = "<?php echo $this->_var['lang']['flow_no_payment']; ?>";
        var flow_no_shipping = "<?php echo $this->_var['lang']['flow_no_shipping']; ?>";
        </script>
    <div class="flowBox">
      <h6><span><?php echo $this->_var['lang']['goods_list']; ?></span>
        <?php if ($this->_var['allow_edit_cart']): ?>
        <a href="flow.php" class="f6"><?php echo $this->_var['lang']['modify']; ?></a>
        <?php endif; ?>
      </h6>
      <table width="100%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
        <tr>
          <th bgcolor="#ffffff"><?php echo $this->_var['lang']['goods_name']; ?></th>
          <th bgcolor="#ffffff"><?php echo $this->_var['lang']['goods_attr']; ?></th>
          <?php if ($this->_var['show_marketprice']): ?>
          <th bgcolor="#ffffff"><?php echo $this->_var['lang']['market_prices']; ?></th>
          <?php endif; ?>
          <th bgcolor="#ffffff"><?php if ($this->_var['gb_deposit']): ?><?php echo $this->_var['lang']['deposit']; ?><?php else: ?><?php echo $this->_var['lang']['shop_prices']; ?><?php endif; ?></th>
          <th bgcolor="#ffffff"><?php echo $this->_var['lang']['number']; ?></th>
          <th bgcolor="#ffffff"><?php echo $this->_var['lang']['subtotal']; ?></th>
        </tr>
        <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
        <tr>
          <td bgcolor="#ffffff" width="50%"><?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] == 'package_buy'): ?>
            <a href="javascript:void(0)" onClick="setSuitShow(<?php echo $this->_var['goods']['goods_id']; ?>)" class="f6"><?php echo $this->_var['goods']['goods_name']; ?><span style="color:#FF0000;">（<?php echo $this->_var['lang']['remark_package']; ?>）</span></a>
            <div id="suit_<?php echo $this->_var['goods']['goods_id']; ?>" style="display:none">
              <?php $_from = $this->_var['goods']['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods_list');if (count($_from)):
    foreach ($_from AS $this->_var['package_goods_list']):
?>
              <a href="goods.php?id=<?php echo $this->_var['package_goods_list']['goods_id']; ?>" target="_blank" class="f6"><?php echo $this->_var['package_goods_list']['goods_name']; ?></a><br />
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>
            <?php else: ?>
            <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank" class="f6"><?php echo $this->_var['goods']['goods_name']; ?></a>
            <?php if ($this->_var['goods']['parent_id'] > 0): ?>
            <span style="color:#FF0000">（<?php echo $this->_var['lang']['accessories']; ?>）</span>
            <?php elseif ($this->_var['goods']['is_gift']): ?>
            <span style="color:#FF0000">（<?php echo $this->_var['lang']['largess']; ?>）</span>
            <?php endif; ?>
            <?php endif; ?>
            <?php if ($this->_var['goods']['is_shipping']): ?>
            (<span style="color:#FF0000"><?php echo $this->_var['lang']['free_goods']; ?></span>)
            <?php endif; ?>
          </td>
          <td bgcolor="#ffffff" align="center"><?php echo nl2br($this->_var['goods']['goods_attr']); ?></td>
          <?php if ($this->_var['show_marketprice']): ?>
          <td align="center" bgcolor="#ffffff"><?php echo $this->_var['goods']['formated_market_price']; ?></td>
          <?php endif; ?>
          <td bgcolor="#ffffff" align="center"><?php echo $this->_var['goods']['formated_goods_price']; ?></td>
          <td bgcolor="#ffffff" align="center"><?php echo $this->_var['goods']['goods_number']; ?></td>
          <td bgcolor="#ffffff" align="center"><?php echo $this->_var['goods']['formated_subtotal']; ?></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php if (! $this->_var['gb_deposit']): ?>
        <tr>
          <td bgcolor="#ffffff" colspan="7" style="color:#A10101; font-size:14px; font-weight:bold"><?php if ($this->_var['discount'] > 0): ?>
            <?php echo $this->_var['your_discount']; ?><br />
            <?php endif; ?>
            <?php echo $this->_var['shopping_money']; ?>
            <?php if ($this->_var['show_marketprice']): ?>
            ，<?php echo $this->_var['market_price_desc']; ?>
            <?php endif; ?>
          </td>
        </tr>
        <?php endif; ?>
      </table>
    </div>
    <div class="blank"></div>
    <div class="flowBox">
      <h6><span><?php echo $this->_var['lang']['consignee_info']; ?></span><a href="flow.php?step=consignee" class="f6"><?php echo $this->_var['lang']['modify']; ?></a></h6>
      <table width="100%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
        <tr>
          <td bgcolor="#ffffff" width="20%"><?php echo $this->_var['lang']['consignee_name']; ?>:</td>
          <td bgcolor="#ffffff" width="30%"><?php echo htmlspecialchars($this->_var['consignee']['consignee']); ?></td>
          <td bgcolor="#ffffff" width="20%"><?php echo $this->_var['lang']['email_address']; ?>:</td>
          <td bgcolor="#ffffff" width="30%"><?php echo htmlspecialchars($this->_var['consignee']['email']); ?></td>
        </tr>
        <?php if ($this->_var['total']['real_goods_count'] > 0): ?>
        <tr>
          <td bgcolor="#ffffff"><?php echo $this->_var['lang']['detailed_address']; ?>:</td>
          <td bgcolor="#ffffff"><?php echo htmlspecialchars($this->_var['consignee']['address']); ?> </td>
          <td bgcolor="#ffffff"><?php echo $this->_var['lang']['postalcode']; ?>:</td>
          <td bgcolor="#ffffff"><?php echo htmlspecialchars($this->_var['consignee']['zipcode']); ?></td>
        </tr>
        <?php endif; ?>
        <tr>
          <td bgcolor="#ffffff"><?php echo $this->_var['lang']['phone']; ?>:</td>
          <td bgcolor="#ffffff"><?php echo $this->_var['consignee']['tel']; ?> </td>
          <td bgcolor="#ffffff"><?php echo $this->_var['lang']['backup_phone']; ?>:</td>
          <td bgcolor="#ffffff"><?php echo htmlspecialchars($this->_var['consignee']['mobile']); ?></td>
        </tr>
        <?php if ($this->_var['total']['real_goods_count'] > 0): ?>
        <tr>
          <td bgcolor="#ffffff"><?php echo $this->_var['lang']['sign_building']; ?>:</td>
          <td bgcolor="#ffffff"><?php echo htmlspecialchars($this->_var['consignee']['sign_building']); ?> </td>
          <td bgcolor="#ffffff"><?php echo $this->_var['lang']['deliver_goods_time']; ?>:</td>
          <td bgcolor="#ffffff"><?php echo htmlspecialchars($this->_var['consignee']['best_time']); ?></td>
        </tr>
        <?php endif; ?>
      </table>
    </div>
    <div class="blank"></div>
    <?php if ($this->_var['total']['real_goods_count'] != 0): ?>
    <div class="flowBox">
      <h6><span><?php echo $this->_var['lang']['shipping_method']; ?></span></h6>
      <table width="100%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd" id="shippingTable">
        <tr>
          <th bgcolor="#ffffff" width="5%">&nbsp;</th>
          <th bgcolor="#ffffff" width="25%"><?php echo $this->_var['lang']['name']; ?></th>
          <th bgcolor="#ffffff"><?php echo $this->_var['lang']['describe']; ?></th>
          <th bgcolor="#ffffff" width="15%"><?php echo $this->_var['lang']['fee']; ?></th>
          <th bgcolor="#ffffff" width="15%"><?php echo $this->_var['lang']['free_money']; ?></th>
          <th bgcolor="#ffffff" width="15%"><?php echo $this->_var['lang']['insure_fee']; ?></th>
        </tr>
        <?php $_from = $this->_var['shipping_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'shipping');if (count($_from)):
    foreach ($_from AS $this->_var['shipping']):
?>
        <tr>
          <td bgcolor="#ffffff" valign="top"><input name="shipping" type="radio" value="<?php echo $this->_var['shipping']['shipping_id']; ?>" <?php if ($this->_var['order']['shipping_id'] == $this->_var['shipping']['shipping_id']): ?>checked="true"<?php endif; ?> supportCod="<?php echo $this->_var['shipping']['support_cod']; ?>" insure="<?php echo $this->_var['shipping']['insure']; ?>" onClick="selectShipping(this)" />
          </td>
          <td bgcolor="#ffffff" valign="top"><strong><?php echo $this->_var['shipping']['shipping_name']; ?></strong></td>
          <td bgcolor="#ffffff" valign="top"><?php echo $this->_var['shipping']['shipping_desc']; ?></td>
          <td bgcolor="#ffffff" align="right" valign="top"><?php echo $this->_var['shipping']['format_shipping_fee']; ?></td>
          <td bgcolor="#ffffff" align="right" valign="top"><?php echo $this->_var['shipping']['free_money']; ?></td>
          <td bgcolor="#ffffff" align="right" valign="top"><?php if ($this->_var['shipping']['insure'] != 0): ?><?php echo $this->_var['shipping']['insure_formated']; ?><?php else: ?><?php echo $this->_var['lang']['not_support_insure']; ?><?php endif; ?></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <tr>
          <td colspan="6" bgcolor="#ffffff" align="right"><label for="ECS_NEEDINSURE">
            <input name="need_insure" id="ECS_NEEDINSURE" type="checkbox"  onclick="selectInsure(this.checked)" value="1" <?php if ($this->_var['order']['need_insure']): ?>checked="true"<?php endif; ?> <?php if ($this->_var['insure_disabled']): ?>disabled="true"<?php endif; ?>  />
            <?php echo $this->_var['lang']['need_insure']; ?> </label></td>
        </tr>
      </table>
    </div>
    <div class="blank"></div>
    <?php else: ?>
    <input name = "shipping" type="radio" value = "-1" checked="checked"  style="display:none"/>
    <?php endif; ?>
    <?php if ($this->_var['is_exchange_goods'] != 1 || $this->_var['total']['real_goods_count'] != 0): ?>
    <div class="flowBox">
      <h6><span><?php echo $this->_var['lang']['payment_method']; ?></span></h6>
      <table width="100%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd" id="paymentTable">
        <tr>
          <th width="5%" bgcolor="#ffffff">&nbsp;</th>
          <th width="20%" bgcolor="#ffffff"><?php echo $this->_var['lang']['name']; ?></th>
          <th bgcolor="#ffffff"><?php echo $this->_var['lang']['describe']; ?></th>
          <th bgcolor="#ffffff" width="15%"><?php echo $this->_var['lang']['pay_fee']; ?></th>
        </tr>
        <?php $_from = $this->_var['payment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'payment');if (count($_from)):
    foreach ($_from AS $this->_var['payment']):
?>
        
        <tr>
          <td valign="top" bgcolor="#ffffff"><input type="radio" name="payment" value="<?php echo $this->_var['payment']['pay_id']; ?>" <?php if ($this->_var['order']['pay_id'] == $this->_var['payment']['pay_id']): ?>checked<?php endif; ?> isCod="<?php echo $this->_var['payment']['is_cod']; ?>" onclick="selectPayment(this)" <?php if ($this->_var['cod_disabled'] && $this->_var['payment']['is_cod'] == "1"): ?>disabled="true"<?php endif; ?>/></td>
          <td valign="top" bgcolor="#ffffff"><strong><?php echo $this->_var['payment']['pay_name']; ?></strong></td>
          <td valign="top" bgcolor="#ffffff"><?php echo $this->_var['payment']['pay_desc']; ?></td>
          <td align="right" bgcolor="#ffffff" valign="top"><?php echo $this->_var['payment']['format_pay_fee']; ?></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </table>
    </div>
    <?php else: ?>
    <input name = "payment" type="radio" value = "-1" checked="checked"  style="display:none"/>
    <?php endif; ?>
    <div class="blank"></div>
    <?php if ($this->_var['pack_list']): ?>
    <div class="flowBox">
      <h6><span><?php echo $this->_var['lang']['goods_package']; ?></span></h6>
      <table width="100%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd" id="packTable">
        <tr>
          <th width="5%" scope="col" bgcolor="#ffffff">&nbsp;</th>
          <th width="35%" scope="col" bgcolor="#ffffff"><?php echo $this->_var['lang']['name']; ?></th>
          <th width="22%" scope="col" bgcolor="#ffffff"><?php echo $this->_var['lang']['price']; ?></th>
          <th width="22%" scope="col" bgcolor="#ffffff"><?php echo $this->_var['lang']['free_money']; ?></th>
          <th scope="col" bgcolor="#ffffff"><?php echo $this->_var['lang']['img']; ?></th>
        </tr>
        <tr>
          <td valign="top" bgcolor="#ffffff"><input type="radio" name="pack" value="0" <?php if ($this->_var['order']['pack_id'] == 0): ?>checked="true"<?php endif; ?> onClick="selectPack(this)" /></td>
          <td valign="top" bgcolor="#ffffff"><strong><?php echo $this->_var['lang']['no_pack']; ?></strong></td>
          <td valign="top" bgcolor="#ffffff">&nbsp;</td>
          <td valign="top" bgcolor="#ffffff">&nbsp;</td>
          <td valign="top" bgcolor="#ffffff">&nbsp;</td>
        </tr>
        <?php $_from = $this->_var['pack_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pack');if (count($_from)):
    foreach ($_from AS $this->_var['pack']):
?>
        <tr>
          <td valign="top" bgcolor="#ffffff"><input type="radio" name="pack" value="<?php echo $this->_var['pack']['pack_id']; ?>" <?php if ($this->_var['order']['pack_id'] == $this->_var['pack']['pack_id']): ?>checked="true"<?php endif; ?> onClick="selectPack(this)" />
          </td>
          <td valign="top" bgcolor="#ffffff"><strong><?php echo $this->_var['pack']['pack_name']; ?></strong></td>
          <td valign="top" bgcolor="#ffffff" align="right"><?php echo $this->_var['pack']['format_pack_fee']; ?></td>
          <td valign="top" bgcolor="#ffffff" align="right"><?php echo $this->_var['pack']['format_free_money']; ?></td>
          <td valign="top" bgcolor="#ffffff" align="center"><?php if ($this->_var['pack']['pack_img']): ?>
            <a href="data/packimages/img/<?php echo $this->_var['pack']['pack_img']; ?>" target="_blank" class="f6"><?php echo $this->_var['lang']['view']; ?></a>
            <?php else: ?>
            <?php echo $this->_var['lang']['no']; ?>
            <?php endif; ?>
          </td>
        </tr>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </table>
    </div>
    <div class="blank"></div>
    <?php endif; ?>
    <?php if ($this->_var['card_list']): ?>
    <div class="flowBox">
      <h6><span><?php echo $this->_var['lang']['goods_card']; ?></span></h6>
      <table width="100%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd" id="cardTable">
        <tr>
          <th bgcolor="#ffffff" width="5%" scope="col">&nbsp;</th>
          <th bgcolor="#ffffff" width="35%" scope="col"><?php echo $this->_var['lang']['name']; ?></th>
          <th bgcolor="#ffffff" width="22%" scope="col"><?php echo $this->_var['lang']['price']; ?></th>
          <th bgcolor="#ffffff" width="22%" scope="col"><?php echo $this->_var['lang']['free_money']; ?></th>
          <th bgcolor="#ffffff" scope="col"><?php echo $this->_var['lang']['img']; ?></th>
        </tr>
        <tr>
          <td bgcolor="#ffffff" valign="top"><input type="radio" name="card" value="0" <?php if ($this->_var['order']['card_id'] == 0): ?>checked="true"<?php endif; ?> onClick="selectCard(this)" /></td>
          <td bgcolor="#ffffff" valign="top"><strong><?php echo $this->_var['lang']['no_card']; ?></strong></td>
          <td bgcolor="#ffffff" valign="top">&nbsp;</td>
          <td bgcolor="#ffffff" valign="top">&nbsp;</td>
          <td bgcolor="#ffffff" valign="top">&nbsp;</td>
        </tr>
        <?php $_from = $this->_var['card_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'card');if (count($_from)):
    foreach ($_from AS $this->_var['card']):
?>
        <tr>
          <td valign="top" bgcolor="#ffffff"><input type="radio" name="card" value="<?php echo $this->_var['card']['card_id']; ?>" <?php if ($this->_var['order']['card_id'] == $this->_var['card']['card_id']): ?>checked="true"<?php endif; ?> onClick="selectCard(this)"  />
          </td>
          <td valign="top" bgcolor="#ffffff"><strong><?php echo $this->_var['card']['card_name']; ?></strong></td>
          <td valign="top" align="right" bgcolor="#ffffff"><?php echo $this->_var['card']['format_card_fee']; ?></td>
          <td valign="top" align="right" bgcolor="#ffffff"><?php echo $this->_var['card']['format_free_money']; ?></td>
          <td valign="top" align="center" bgcolor="#ffffff"><?php if ($this->_var['card']['card_img']): ?>
            <a href="data/cardimages/img/<?php echo $this->_var['card']['card_img']; ?>" target="_blank" class="f6"><?php echo $this->_var['lang']['view']; ?></a>
            <?php else: ?>
            <?php echo $this->_var['lang']['no']; ?>
            <?php endif; ?>
          </td>
        </tr>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <tr>
          <td bgcolor="#ffffff"></td>
          <td bgcolor="#ffffff" valign="top"><strong><?php echo $this->_var['lang']['bless_note']; ?>:</strong></td>
          <td bgcolor="#ffffff" colspan="3"><textarea name="card_message" cols="60" rows="3" style="width:auto; border:1px solid #ccc;"><?php echo htmlspecialchars($this->_var['order']['card_message']); ?></textarea></td>
        </tr>
      </table>
    </div>
    <div class="blank"></div>
    <?php endif; ?>
    <div class="flowBox">
      <h6><span><?php echo $this->_var['lang']['other_info']; ?></span></h6>
      <table width="100%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
        <?php if ($this->_var['allow_use_surplus']): ?>
        <tr>
          <td width="20%" bgcolor="#ffffff"><strong><?php echo $this->_var['lang']['use_surplus']; ?>: </strong></td>
          <td bgcolor="#ffffff"><input name="surplus" type="text" class="input"  style="border:1px solid #ccc; height:18px" id="ECS_SURPLUS" size="10" value="<?php echo empty($this->_var['order']['surplus']) ? '0' : $this->_var['order']['surplus']; ?>" onBlur="changeSurplus(this.value)" <?php if ($this->_var['disable_surplus']): ?>disabled="disabled"<?php endif; ?> />
            <?php echo $this->_var['lang']['your_surplus']; ?><?php echo empty($this->_var['your_surplus']) ? '0' : $this->_var['your_surplus']; ?> <span id="ECS_SURPLUS_NOTICE" class="notice"></span></td>
        </tr>
        <?php endif; ?>
        <?php if ($this->_var['allow_use_integral']): ?>
        <tr>
          <td bgcolor="#ffffff"><strong><?php echo $this->_var['lang']['use_integral']; ?></strong></td>
          <td bgcolor="#ffffff"><input name="integral" type="text" class="input"  style="border:1px solid #ccc; height:18px" id="ECS_INTEGRAL" onBlur="changeIntegral(this.value)" value="<?php echo empty($this->_var['order']['integral']) ? '0' : $this->_var['order']['integral']; ?>" size="10" />
            <?php echo $this->_var['lang']['can_use_integral']; ?>:<?php echo empty($this->_var['your_integral']) ? '0' : $this->_var['your_integral']; ?> <?php echo $this->_var['points_name']; ?>，<?php echo $this->_var['lang']['noworder_can_integral']; ?><?php echo $this->_var['order_max_integral']; ?>  <?php echo $this->_var['points_name']; ?>. <span id="ECS_INTEGRAL_NOTICE" class="notice"></span></td>
        </tr>
        <?php endif; ?>
        <?php if ($this->_var['allow_use_bonus']): ?>
        <tr>
          <td bgcolor="#ffffff"><strong><?php echo $this->_var['lang']['use_bonus']; ?>:</strong></td>
          <td bgcolor="#ffffff" align="left"><table align="left">
              <tr>
                <td><?php echo $this->_var['lang']['select_bonus']; ?>
                  <select name="bonus" onChange="changeBonus(this.value)" id="ECS_BONUS" style="border:1px solid #ccc; height:22px">
                    <option value="0" <?php if ($this->_var['order']['bonus_id'] == 0): ?>selected<?php endif; ?>><?php echo $this->_var['lang']['please_select']; ?></option>
                    <?php $_from = $this->_var['bonus_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bonus');if (count($_from)):
    foreach ($_from AS $this->_var['bonus']):
?>
                    <option value="<?php echo $this->_var['bonus']['bonus_id']; ?>" <?php if ($this->_var['order']['bonus_id'] == $this->_var['bonus']['bonus_id']): ?>selected<?php endif; ?>><?php echo $this->_var['bonus']['type_name']; ?>[<?php echo $this->_var['bonus']['bonus_money_formated']; ?>]</option>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  </select>
                  <?php echo $this->_var['lang']['input_bonus_no']; ?>
                  <input name="bonus_sn" type="text" class="inputBg" size="15" value="<?php echo $this->_var['order']['bonus_sn']; ?>" style="height:18px" /></td>
                <td><input name="validate_bonus" type="button" class="bnt_blue_1" value="<?php echo $this->_var['lang']['validate_bonus']; ?>" onClick="validateBonus(document.forms['theForm'].elements['bonus_sn'].value)" style="vertical-align:middle;" /></td>
              </tr>
            </table></td>
        </tr>
        <?php endif; ?>
        <?php if ($this->_var['inv_content_list']): ?>
        <tr>
          <td bgcolor="#ffffff"><strong><?php echo $this->_var['lang']['invoice']; ?>:</strong>
            <input name="need_inv" type="checkbox"  class="input" id="ECS_NEEDINV" onClick="changeNeedInv()" value="1" <?php if ($this->_var['order']['need_inv']): ?>checked="true"<?php endif; ?> />
          </td>
          <td bgcolor="#ffffff"><?php if ($this->_var['inv_type_list']): ?>
            <?php echo $this->_var['lang']['invoice_type']; ?>
            <select name="inv_type" id="ECS_INVTYPE" <?php if ($this->_var['order']['need_inv'] != 1): ?>disabled="true"<?php endif; ?> onChange="changeNeedInv()" style="border:1px solid #ccc;">
              
                <?php echo $this->html_options(array('options'=>$this->_var['inv_type_list'],'selected'=>$this->_var['order']['inv_type'])); ?>
            </select>
            <?php endif; ?>
            <?php echo $this->_var['lang']['invoice_title']; ?>
            <input name="inv_payee" type="text"  class="input" id="ECS_INVPAYEE" size="20" <?php if (! $this->_var['order']['need_inv']): ?>disabled="true"<?php endif; ?> value="<?php echo $this->_var['order']['inv_payee']; ?>" onBlur="changeNeedInv()" />
            <?php echo $this->_var['lang']['invoice_content']; ?>
            <select name="inv_content" id="ECS_INVCONTENT" <?php if ($this->_var['order']['need_inv'] != 1): ?>disabled="true"<?php endif; ?>  onchange="changeNeedInv()" style="border:1px solid #ccc;">
              

                <?php echo $this->html_options(array('values'=>$this->_var['inv_content_list'],'output'=>$this->_var['inv_content_list'],'selected'=>$this->_var['order']['inv_content'])); ?>

                
            </select></td>
        </tr>
        <?php endif; ?>
        <tr>
          <td valign="top" bgcolor="#ffffff"><strong><?php echo $this->_var['lang']['order_postscript']; ?>:</strong></td>
          <td bgcolor="#ffffff"><textarea name="postscript" cols="80" rows="3" id="postscript" style="border:1px solid #ccc;"><?php echo htmlspecialchars($this->_var['order']['postscript']); ?></textarea></td>
        </tr>
        <?php if ($this->_var['how_oos_list']): ?>
        <tr>
          <td bgcolor="#ffffff"><strong><?php echo $this->_var['lang']['booking_process']; ?>:</strong></td>
          <td bgcolor="#ffffff"><?php $_from = $this->_var['how_oos_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('how_oos_id', 'how_oos_name');if (count($_from)):
    foreach ($_from AS $this->_var['how_oos_id'] => $this->_var['how_oos_name']):
?>
            <label>
            <input name="how_oos" type="radio" value="<?php echo $this->_var['how_oos_id']; ?>" <?php if ($this->_var['order']['how_oos'] == $this->_var['how_oos_id']): ?>checked<?php endif; ?> onClick="changeOOS(this)" />
            <?php echo $this->_var['how_oos_name']; ?></label>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </td>
        </tr>
        <?php endif; ?>
      </table>
    </div>
    <div class="blank"></div>
    <div class="flowBox">
      <h6><span><?php echo $this->_var['lang']['fee_total']; ?></span></h6>
      <?php echo $this->fetch('library/order_total.lbi'); ?>
      <div align="center" style="margin:8px auto; text-align:center">
        <input type="image" src="themes/360buy/images/bnt_subOrder.gif" />
        <input type="hidden" name="flow_type" value="<?php echo $_SESSION['flow_type']; ?>" />
        <input type="hidden" name="step" value="done" />
      </div>
    </div>
  </form>
       
      </div>
      <div class="round">
        <div class="lround"></div>
        <div class="rround"></div>
      </div>
    </div>
  </div>
  
  
  
  <?php endif; ?>
  <?php if ($this->_var['step'] == "done"): ?>
  
  <div class="Wrap_cart">
    <div id="Top1_order_step1" class="Header_cart">
      <div class="Logo"><a href="index.php"><img src="themes/360buy/images/logo.gif" /></a></div>
      <ul class="Order_cart" id="Order_cart_S3">
        <li class="step1">1.我的购物车</li>
        <li class="step2">2.填写核对订单信息</li>
        <li class="step3">3.成功提交订单</li>
      </ul>
    </div>


    


    <div class="List_cart">
      <h2><strong>订单提交成功</strong></h2>
      <div class="cart_table">
	  
      
  <div class="flowBox">
    <h6 style="text-align:center; height:30px; line-height:30px;"><?php echo $this->_var['lang']['remember_order_number']; ?>: <font style="color:red"><?php echo $this->_var['order']['order_sn']; ?></font></h6>
    <table width="100%" align="center" border="0" cellpadding="15" cellspacing="0" bgcolor="#fff" style="border:1px solid #ddd; margin:20px auto;" >
      <tr>
        <td align="center" bgcolor="#FFFFFF"><?php if ($this->_var['order']['shipping_name']): ?>
          <?php echo $this->_var['lang']['select_shipping']; ?>: <strong><?php echo $this->_var['order']['shipping_name']; ?></strong>，
          <?php endif; ?>
          <?php echo $this->_var['lang']['select_payment']; ?>: <strong><?php echo $this->_var['order']['pay_name']; ?></strong>。<?php echo $this->_var['lang']['order_amount']; ?>: <strong><?php echo $this->_var['total']['amount_formated']; ?></strong> </td>
      </tr>
      <tr>
        <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['order']['pay_desc']; ?></td>
      </tr>
      <?php if ($this->_var['pay_online']): ?>
      
      <tr>
        <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['pay_online']; ?></td>
      </tr>
      <?php endif; ?>
    </table>
    <?php if ($this->_var['virtual_card']): ?>
    <div style="text-align:center;overflow:hidden;border:1px solid #E2C822;background:#FFF9D7;margin:10px;padding:10px 50px 30px;">
      <?php $_from = $this->_var['virtual_card']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vgoods');if (count($_from)):
    foreach ($_from AS $this->_var['vgoods']):
?>
      <h3 style="color:#2359B1; font-size:12px;"><?php echo $this->_var['vgoods']['goods_name']; ?></h3>
      <?php $_from = $this->_var['vgoods']['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'card');if (count($_from)):
    foreach ($_from AS $this->_var['card']):
?>
      <ul style="list-style:none;padding:0;margin:0;clear:both">
        <?php if ($this->_var['card']['card_sn']): ?>
        <li style="margin-right:50px;float:left;"> <strong><?php echo $this->_var['lang']['card_sn']; ?>:</strong><span style="color:red;"><?php echo $this->_var['card']['card_sn']; ?></span> </li>
        <?php endif; ?>
        <?php if ($this->_var['card']['card_password']): ?>
        <li style="margin-right:50px;float:left;"> <strong><?php echo $this->_var['lang']['card_password']; ?>:</strong><span style="color:red;"><?php echo $this->_var['card']['card_password']; ?></span> </li>
        <?php endif; ?>
        <?php if ($this->_var['card']['end_date']): ?>
        <li style="float:left;"> <strong><?php echo $this->_var['lang']['end_date']; ?>:</strong><?php echo $this->_var['card']['end_date']; ?> </li>
        <?php endif; ?>
      </ul>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
    <?php endif; ?>
    <p style="text-align:center; margin-bottom:20px;"><?php echo $this->_var['order_submit_back']; ?></p>
  </div>
       
      </div>
      <div class="round">
        <div class="lround"></div>
        <div class="rround"></div>
      </div>
    </div>
  </div>
  
  
  
  
  <?php endif; ?>
  <?php if ($this->_var['step'] == "login"): ?>
  <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js,user.js')); ?>
  <script type="text/javascript">
        <?php $_from = $this->_var['lang']['flow_login_register']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
          var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

        
        function checkLoginForm(frm) {
          if (Utils.isEmpty(frm.elements['username'].value)) {
            alert(username_not_null);
            return false;
          }

          if (Utils.isEmpty(frm.elements['password'].value)) {
            alert(password_not_null);
            return false;
          }

          return true;
        }

        function checkSignupForm(frm) {
          if (Utils.isEmpty(frm.elements['username'].value)) {
            alert(username_not_null);
            return false;
          }

          if (Utils.trim(frm.elements['username'].value).match(/^\s*$|^c:\\con\\con$|[%,\'\*\"\s\t\<\>\&\\]/))
          {
            alert(username_invalid);
            return false;
          }

          if (Utils.isEmpty(frm.elements['email'].value)) {
            alert(email_not_null);
            return false;
          }

          if (!Utils.isEmail(frm.elements['email'].value)) {
            alert(email_invalid);
            return false;
          }

          if (Utils.isEmpty(frm.elements['password'].value)) {
            alert(password_not_null);
            return false;
          }

          if (frm.elements['password'].value.length < 6) {
            alert(password_lt_six);
            return false;
          }

          if (frm.elements['password'].value != frm.elements['confirm_password'].value) {
            alert(password_not_same);
            return false;
          }
          return true;
        }
        
        </script>
  
  
  <div class="Wrap_cart">
    <div id="Top1_order_step1" class="Header_cart">
      <div class="Logo"><a href="index.php"><img src="themes/360buy/images/logo.gif" /></a></div>
      <ul class="Order_cart" id="Order_cart_S2">
        <li class="step1">1.我的购物车</li>
        <li class="step2">2.填写核对订单信息</li>
        <li class="step3">3.成功提交订单</li>
      </ul>
    </div>


    


    <div class="List_cart">
      <h2><strong>用户登录/注册</strong></h2>
      <div class="cart_table">
	  
       <div class="flowBox">
    <table width="100%" align="center" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
      <tr>
        <td width="50%" valign="top" bgcolor="#ffffff"><h6><span>用户登录：</span></h6>
          <form action="flow.php?step=login" method="post" name="loginForm" id="loginForm" onSubmit="return checkLoginForm(this)">
            <table width="90%" border="0" cellpadding="8" cellspacing="1" class="table">
              <tr style="height:50px">
                <td bgcolor="#ffffff"><div align="right"><strong><?php echo $this->_var['lang']['username']; ?></strong></div></td>
                <td bgcolor="#ffffff"><input name="username" type="text" class="inputBg" id="username" /></td>
              </tr>
              <tr>
                <td bgcolor="#ffffff"><div align="right"><strong><?php echo $this->_var['lang']['password']; ?></strong></div></td>
                <td bgcolor="#ffffff"><input name="password" class="inputBg" type="password" style="width:149px" />
                  <a href="user.php?act=get_password" class="f6">忘记密码？</a> </td>
              </tr>
              <?php if ($this->_var['enabled_login_captcha']): ?>
              <tr>
                <td bgcolor="#ffffff"><div align="right"><strong><?php echo $this->_var['lang']['comment_captcha']; ?>:</strong></div></td>
                <td bgcolor="#ffffff" style="padding-left:0px"><table align="left">
                    <tr>
                      <td style="padding-left:0px"><input type="text" size="8" name="captcha" class="inputBg"  style="width:45px; margin-left:0px" /></td>
                      <td><img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()"  /></td>
                    </tr>
                  </table></td>
              </tr>
              <?php endif; ?>
              <tr>
                <td bgcolor="#ffffff"></td>
                <td bgcolor="#ffffff"><input type="checkbox" value="1" name="remember" id="remember" />
                  <label for="remember"><?php echo $this->_var['lang']['remember']; ?></label></td>
              </tr>
              <tr>
                <td bgcolor="#ffffff"></td>
                <td bgcolor="#ffffff"><input type="submit" class="bnt_blue" name="login" value=" <?php echo $this->_var['lang']['forthwith_login']; ?> " />
                  <?php if ($this->_var['anonymous_buy'] == 1): ?>
                  <input type="button" class="bnt_blue_2" value="<?php echo $this->_var['lang']['direct_shopping']; ?>" onClick="location.href='flow.php?step=consignee&amp;direct_shopping=1'" />
                  <?php endif; ?>
                  <input name="act" type="hidden" value="signin" />
                </td>
              </tr>
            </table>
          </form></td>
        <td valign="top" bgcolor="#ffffff"><h6><span>用户注册：</span></h6>
          <form action="flow.php?step=login" method="post" name="formUser" id="registerForm" onSubmit="return checkSignupForm(this)">
            <table width="98%" border="0" cellpadding="8" cellspacing="1" class="table" style="margin-top:15px">
              <tr>
                <td bgcolor="#ffffff" align="right" width="25%"><strong><?php echo $this->_var['lang']['username']; ?></strong></td>
                <td bgcolor="#ffffff"><input name="username" type="text" class="inputBg" id="username" onBlur="is_registered(this.value);" />
                  <br />
                  <div id="username_notice" style="color:#FF0000; padding-top:10px"></div></td>
              </tr>
              <tr>
                <td bgcolor="#ffffff" align="right"><strong><?php echo $this->_var['lang']['email_address']; ?></strong></td>
                <td bgcolor="#ffffff"><input name="email" type="text" class="inputBg" id="email" onBlur="checkEmail(this.value);" />
                  <br />
                  <div id="email_notice" style="color:#FF0000; padding-top:10px"></div></td>
              </tr>
              <tr>
                <td bgcolor="#ffffff" align="right"><strong><?php echo $this->_var['lang']['password']; ?></strong></td>
                <td bgcolor="#ffffff"><input name="password" class="inputBg" type="password" id="password1" onBlur="check_password(this.value);" onKeyUp="checkIntensity(this.value)"  style="width:149px"/>
                  <br />
                  <div style="color:#FF0000; padding-top:10px" id="password_notice"></div></td>
              </tr>
              <tr>
                <td bgcolor="#ffffff" align="right"><strong><?php echo $this->_var['lang']['confirm_password']; ?></strong></td>
                <td bgcolor="#ffffff"><input name="confirm_password" class="inputBg" type="password" id="confirm_password" onBlur="check_conform_password(this.value);"  style="width:149px"/>
                  <br />
                  <div style="color:#FF0000; padding-top:10px" id="conform_password_notice"></div></td>
              </tr>
              <?php if ($this->_var['enabled_register_captcha']): ?>
              <tr>
                <td bgcolor="#ffffff" align="right"><strong><?php echo $this->_var['lang']['comment_captcha']; ?>:</strong></td>
                <td bgcolor="#ffffff"><input type="text" size="8" name="captcha" class="inputBg"  style="width:45px"/>
                  <img src="captcha.php?<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?'+Math.random()" /> </td>
              </tr>
              <?php endif; ?>
              <tr>
                <td bgcolor="#ffffff" align="right"></td>
                <td bgcolor="#ffffff"><input type="submit" name="Submit" class="bnt_blue_1" value="<?php echo $this->_var['lang']['forthwith_register']; ?>" />
                  <input name="act" type="hidden" value="signup" /></td>
              </tr>
            </table>
          </form></td>
      </tr>
      <?php if ($this->_var['need_rechoose_gift']): ?>
      <tr>
        <td colspan="2" align="center" style="border-top:1px #ccc solid; padding:5px; color:red;"><?php echo $this->_var['lang']['gift_remainder']; ?></td>
      </tr>
      <?php endif; ?>
    </table>
  </div>
       
      </div>
      <div class="round">
        <div class="lround"></div>
        <div class="rround"></div>
      </div>
    </div>
  </div>
  
  
  
  <?php endif; ?>
</div>
<div class="blank5"></div>
<div class="blank5"></div>
<div class="blank5"></div>
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
	  <?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
        <div><a href="help.php?id=<?php echo $this->_var['item']['article_id']; ?>" target="_blank"><?php echo $this->_var['item']['short_title']; ?> </a></div>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </dd>
    </dl>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    
    
    <span class="clr"></span> </div>
</div>

<div class="w">
  <div id="footer">
    <div class="links">
	<?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?>
	<a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a><?php if (! ($this->_foreach['nav_bottom_list']['iteration'] == $this->_foreach['nav_bottom_list']['total'])): ?>|<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
    <div class="copyright">
      
	   <?php echo $this->_var['copyright']; ?>&nbsp;<?php if ($this->_var['icp_number']): ?>
	  <?php echo $this->_var['lang']['icp_number']; ?>:<a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo $this->_var['icp_number']; ?></a>
	  <?php endif; ?></div>
    <div class="authentication"><a href="#" target="_blank"><img src="themes/360buy/images/da/108_40_zZOKnl.gif" width="108" height="40" alt="经营性网站备案中心"></a>
      <a href="#" tabindex="-1" id="urlknet" target="_blank"><img name="seal" border="true" src="themes/360buy/images/da/112_40_EAWZul.jpg" width="112" height="40"></a><a href="#" target="_blank"><img src="themes/360buy/images/da/108_40_OaNIwt.jpg" width="108" height="40" alt="海淀网络警察"></a><a href="#" target="_blank"><img src="themes/360buy/images/da/112_40_WvArIl.png" width="112" height="40"></a></div>
  </div>
</div>


<SCRIPT LANGUAGE="JavaScript"><!--Hide
function killErrors() {return true;} window.onerror = killErrors;//--></SCRIPT>
<script language="javascript">$('#service').hide();</script>
</body>
<script language="javascript">
(function($) {
	$('.inputBg').focus(
		function(){
			$(this).addClass('highlight1');
		}
	).blur(
		function(){
			$(this).removeClass('highlight1');
		}
	);
})(jQuery);
</script>

<script type="text/javascript">

var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>
</html>

