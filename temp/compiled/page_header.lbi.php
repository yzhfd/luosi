<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
<script type="text/javascript" src="themes/360buy/images/misc/lib/js/e/jquery-1.2.6.pack.js"></script>
<script type="text/javascript" src="themes/360buy/images/misc/lib/js/2012/base-2011.js"></script>
<script type="text/javascript" src="themes/360buy/images/misc/lib/js/2012/base-v1.js"></script>
<script type="text/javascript" src="themes/360buy/images/misc/lib/js/e/transport.js"></script>
<script type="text/javascript" src="themes/360buy/images/misc/lib/js/e/common.js"></script>

<div id="shortcut">
  <div class="w">
    <ul class="fl lh">
      <li class="fore1 ld"><b></b><a href="javascript:add_to_favorite('http://www.360xd.com/', '360向导网')">收藏<?php echo $this->_var['shop_name']; ?></a></li>
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


<div id="o-header">
<div class="w" id="header">
<div id="logo" class="ld"><a href="index.php"><b></b><img src="themes/360buy/images/logo.gif" width="259" height="50"></a></div>

<div id="search">
<div class="i-search ld">
<b></b><s></s>
<ul id="shelper" class="hide">
</ul>
<div class="form">
<script type="text/javascript">
		
		<!--
		function checkSearchForm()
		{
			if(document.getElementById('key').value)
			{
				return true;
			}
			else
			{
				alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
				return false;
			}
		}
		-->
		
		</script>
<form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()">
<input type="text" class="text" accesskey="s" id="key"  name="keywords" autocomplete="off" onkeydown="javascript:if(event.keyCode==13) return checkSearchForm();"/>
<input type="submit" value="搜索" class="button" clstag="homepage|keycount|home2012|03a"/>
</form>
</div>
</div>
<script> (function(){

var B=["请输入商品关键字"];
B=pageConfig.FN_GetRandomData(B);$("#key").val(B).bind("focus",function(){if (this.value==B){this.value="";this.style.color="#333"}}).bind("blur",function(){if (!this.value){this.value=B;this.style.color="#999"}});
})();</script>
<div id="hotwords" clstag="homepage|keycount|home2012|03b"> <strong>热门搜索：</strong> <?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?> <a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>"><?php echo $this->_var['val']; ?></a> <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> </div>
</div>

<div id="my360buy" clstag="homepage|keycount|home2012|04a">
  <dl load='1'>
    <dt class="ld"><s></s><img src="themes/360buy/images/misc/lib/img/e/blank.gif" width="24" height="24" alt="头像"><a href="user.php">用户中心</a><b></b></dt>
    <dd>
	<?php if ($_SESSION['user_id'] > 0): ?>
	<div class="prompt">  <span class="fl"><strong><?php echo $_SESSION['user_name']; ?></strong></span><span class="fr"><a href="user.php">去我的用户中心首页 &gt;</a></span>            </div>
	<?php else: ?>
      <div class="prompt"> <span class="fl">您好，请登录</span> <span class="fr"><a class="btn-login" href="user.php">登录商城</a></span> </div>
	<?php endif; ?>  
      <div class="uclist">
        <ul class="fore1 fl">
          <li><a href="user.php?act=profile" target="_blank">用户信息 &gt;</a></li>
          <li><a href="user.php?act=order_list" target="_blank">我的订单 &gt;</a></li>
          <li><a href="user.php?act=address_list" target="_blank">收货地址 &gt;</a></li>
          <li><a href="user.php?act=collection_list" target="_blank">我的收藏 &gt;</a></li>
        </ul>
        <ul class="fore2 fl">
          <li><a href="user.php?act=message_list" target="_blank">我的留言 &gt;</a></li>
          <li><a href="user.php?act=bonus" target="_blank">我的红包 &gt;</a></li>
          <li><a href="user.php?act=comment_list" target="_blank">我的评论 &gt;</a></li>
          <li><a href="user.php?act=account_log" target="_blank">资金管理 &gt;</a></li>
        </ul>
      </div>
      <?php
				 $GLOBALS['smarty']->assign('historys', get_history());
		       ?>
      <?php if ($this->_var['historys']): ?>
      <div class="viewlist">
        <div class="smt">
          <h4>最近浏览的商品：</h4>
        </div>
        <div id="jduc-viewlist" class="smc">
          <div class="loading-style1" style="display: none;">加载中，请稍候...</div>
          <ul class="lh hide" style="display: block;">
            <?php $_from = $this->_var['historys']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');$this->_foreach['historys'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['historys']['total'] > 0):
    foreach ($_from AS $this->_var['item']):
        $this->_foreach['historys']['iteration']++;
?>
            <li><a title="<?php echo htmlspecialchars($this->_var['item']['name']); ?>" target="_blank" href="<?php echo $this->_var['item']['url']; ?>"><img width="50" height="50" alt="<?php echo htmlspecialchars($this->_var['item']['name']); ?>" src="<?php echo $this->_var['item']['goods_thumb']; ?>"/></a></li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </ul>
        </div>
      </div>
      <?php endif; ?>
    </dd>
  </dl>
</div>

<div id="settleup" clstag="homepage|keycount|home2012|05a">
  <dl>
    <dt class="ld"> <s><span id="shopping-amount"></span></s> <a href="flow.php">去购物车结算</a> <b></b> </dt>
    <dd>
      <?php
	  $GLOBALS['smarty']->assign('cart_info',get_cart_info());	
	  $cart_goods = get_cart_goodsex();
      $GLOBALS['smarty']->assign('cart_goods_list', $cart_goods['goods_list']);
      $GLOBALS['smarty']->assign('total_cart', $cart_goods['total']);
	  ?>
      <?php if (! $this->_var['cart_goods_list']): ?>
      <div class="prompt">购物车中还没有商品，赶紧选购吧！</div>
      <?php else: ?>
      <div class="sm">
        <div class="smt">
          <h4 class="fl">最新加入的宝贝</h4>
        </div>
        <div class="smc">
          <ul>
            <?php $_from = $this->_var['cart_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_items');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods_items']):
        $this->_foreach['goods_list']['iteration']++;
?>
            <li class="style1">
              <div class="p-img fl"><a target="_blank" href="goods.php?id=<?php echo $this->_var['goods_items']['goods_id']; ?>"><img width="50" height="50" alt="<?php echo $this->_var['goods_items']['goods_name']; ?>" src="<?php echo $this->_var['goods_items']['goods_thumb']; ?>"/></a></div>
              <div class="p-name fl"><a href="goods.php?id=<?php echo $this->_var['goods_items']['goods_id']; ?>"><?php echo $this->_var['goods_items']['goods_name']; ?></a></div>
              <div class="p-detail fr ar"> <span class="p-price"><strong><?php echo $this->_var['goods_items']['goods_price']; ?></strong>×<?php echo $this->_var['goods_items']['goods_number']; ?></span><br/>
                <a href="javascript:if (confirm('您确定要删除该商品吗？')) location.href='flow.php?step=drop_goods&amp;id=<?php echo $this->_var['goods_items']['rec_id']; ?>';" name="RemoveGift" id="15150418" class="delete">删除</a> </div>
              <span style="display:block;overflow:hidden;clear:both;height:0;line-height:0;font-size:0;"></span> </li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </ul>
        </div>
        <div class="smb ar">共<b><?php echo $this->_var['total_cart']['real_goods_count']; ?></b>件商品　共计<strong><?php echo $this->_var['total_cart']['goods_price']; ?></strong><br/>
          <a id="btn-payforgoods" title="去购物车结算" href="user.php">去购物车结算</a></div>
      </div>
      <?php endif; ?>
    </dd>
  </dl>
</div>

</div>

<div class="w">
  <div id="nav">
    <div id="categorys">
      <div class="mt ld" clstag="homepage|keycount|home2012|06a">
        <h2><a href="catalog.php">全部商品分类<b></b></a></h2>
      </div>
      <div id="_JD_ALLSORT" class="mc" clstag="homepage|keycount|home2012|06b">
        <?php
         $GLOBALS['smarty']->assign('categories', get_categories_tree(0));
		?>
        <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['categories'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['categories']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['categories']['iteration']++;
?>
        <div class="item fore<?php echo $this->_foreach['categories']['iteration']; ?>"><span>
          <h3 style="text-align:left"><a href="<?php echo $this->_var['cat']['url']; ?>" style="text-decoration:none"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></h3>
          <s></s></span>
          <div class="i-mc" style="top:3px;">
            <div class="close" onclick="$(this).parent().parent().removeClass('hover')"></div>
            <div class="subitem">
              <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['cat_cat_id'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_cat_id']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['cat_cat_id']['iteration']++;
?>
              <dl class="fore<?php echo $this->_foreach['cat_cat_id']['iteration']; ?>">
                <dt> <a href="<?php echo $this->_var['child']['url']; ?>" style="text-decoration:none"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a> </dt>
                <dd>
                  <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');if (count($_from)):
    foreach ($_from AS $this->_var['childer']):
?>
                  <em><a href="<?php echo $this->_var['childer']['url']; ?>" style="text-decoration:none"><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a></em>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </dd>
              </dl>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>
            <div class="fr">
              <dl class="categorys-brands">
                <dt>推荐品牌</dt>
                <dd>
                  <ul>
				  <?php
					 $GLOBALS['smarty']->assign('get_cat_brands', get_cat_brands($GLOBALS['smarty']->_var['cat']['id']));
					?>
				  <?php $_from = $this->_var['get_cat_brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand_cat');if (count($_from)):
    foreach ($_from AS $this->_var['brand_cat']):
?>
                    <li style="float:left;width:97px;"><a target="_blank" href="<?php echo $this->_var['brand_cat']['url']; ?>"><?php echo $this->_var['brand_cat']['name']; ?></a></li>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                   
                  </ul>
                </dd>
              </dl>
			  <?php
	     $cat_info = get_cat_info_ex($GLOBALS['smarty']->_var['cat']['id']);

		 $GLOBALS['smarty']->assign('index_image',get_advlist('导航菜单-'.$cat_info['cat_name'].'-右侧-促销专题', 5));
	  ?>
               <?php if ($this->_var['index_image']): ?>
              <dl class="categorys-promotions">
                <dt>促销活动</dt>
                <dd>
                  <ul>
				  <?php $_from = $this->_var['index_image']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_image']['iteration']++;
?>
                    <li><a target="_blank" href="<?php echo $this->_var['ad']['url']; ?>"><?php echo $this->_var['ad']['name']; ?></a></li>
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                  </ul>
                </dd>
              </dl>
			  <?php endif; ?>
            </div>
          </div>
        </div>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <div class="extra"><a href="catalog.php">全部商品分类</a></div>
      </div>
    </div>
    <div id="treasure"></div>
    <ul id="navitems">
      <li class="fore1<?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> curr<?php endif; ?>" ><a href="index.php"><?php echo $this->_var['lang']['home']; ?></a></li>
      <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
      <li class="fore2<?php if ($this->_var['nav']['active'] == 1): ?> curr<?php endif; ?>"> <a  href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a> </li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
  </div>
</div>
</div>



