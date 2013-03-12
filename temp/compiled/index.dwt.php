<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<title><?php echo $this->_var['page_title']; ?></title>
<link rel="stylesheet" href="themes/360buy/images/misc/product/skin/2012/home.css">
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<script>$('#_JD_ALLSORT').show();</script>
<div class="w w1">
  <div id="slide" class="slide m" clstag="homepage|keycount|home2012|09a" >
  
   <?php echo $this->fetch('library/index_ad.lbi'); ?> 
   </div>

  
  <div id="slogens" class="m" data-widget="dropdown" clstag="homepage|keycount|home2012|10a">
    <dl id="slogens-fore1" data-widget="dropdown">
      <dt><a target="_blank"><b></b><strong>货到</strong><strong>付款</strong></a></dt>
      <dd> <strong>货到付款</strong>
        <p>京东商城在全国204个地区提供货到付款服务。</p>
        <div class="extra">&nbsp;</div>
      </dd>
    </dl>
    <dl id="slogens-fore2" data-widget="dropdown">
      <dt><a target="_blank"><b></b><strong>满39元</strong><strong>免运费</strong></a></dt>
      <dd> <strong>满39元免运费</strong>
        <p>金额不足39元的订单收取5元运费，钻石级别（一至五钻）会员享受全场免运费的特别优惠。</p>
        <div class="extra">&nbsp;</div>
      </dd>
    </dl>
    <dl id="slogens-fore3" data-widget="dropdown">
      <dt><a target="_blank"><b></b><strong>售后</strong><strong>上门</strong></a></dt>
      <dd> <strong>售后上门</strong>
        <p>若您自购买之日15天内（含15天）因商品质量问题提交退换申请且审核通过，京东免费提供上门取件服务。</p>
        <div class="extra">&nbsp;</div>
      </dd>
    </dl>
    <span class="clr"></span> </div>
  
  <style>
  #jdnews .mc .p-img{display:none}
  </style>
  <div id="jdnews" class="m m1" clstag="homepage|keycount|home2012|11a"> 
<?php $this->assign('articles',$this->_var['articles_9']); ?><?php $this->assign('articles_cat',$this->_var['articles_cat_9']); ?><?php echo $this->fetch('library/cat_articles.lbi'); ?>
 </div>
  
  <div id="virtuals" class="m m3" data-widget="tabs">
    <div class="fore1 curr" data-widget="tab-item">
      <div class="mt">
        <h2>订单查询</h2>
      </div>
      <div class="mc" data-widget="tab-content" >
        <script>var invalid_order_sn = "无效订单号"</script>
      <div class="boxCenterList" style=" padding-left:6px; padding-top:8px">
        <form name="ecsOrderQuery">
          <input type="text" name="order_sn" class="inputBg" style="border:1px solid #CCCCCC; height:20px; line-height:20px" />
          <br />
          <div class="blank" style="height:2px"></div>
		  
          <input type="button" value="查询该订单号" class="bnt_blue_2" onclick="orderQuery()" />
        </form>
        <div id="ECS_ORDER_QUERY" > </div>
      </div>
		
      </div>
    </div>
    <div class="fore2" data-widget="tab-item">
      <div class="mt">
        <h2>最新订单</h2>
      </div>
      <div class="mc" data-widget="tab-content">
          <div id="scrollDiv" style=" padding-left:6px; padding-top:8px">
                <div style="overflow:hidden; height: 95px;padding-top:10px">
        
				  <ul id="marquee">
				  <?php $_from = $this->_var['invoice_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'invoice');if (count($_from)):
    foreach ($_from AS $this->_var['invoice']):
?>
					<li style="padding-top:6px; padding-left:10px">
					  <table width="100%" cellpadding="0" cellspacing="0" border="0">
						<tr>
						  <td width="45%" align="left">&nbsp;订单号:&nbsp;</td>
						  <td><?php echo $this->_var['invoice']['order_sn']; ?></td>
						</tr>
						<tr >
						  <td align="left">&nbsp;发货单:&nbsp;</td>
						  <td ><?php echo $this->_var['invoice']['invoice_no']; ?></td>
						</tr>
					  </table>
					  <div style="height:10px; border-bottom:1px dashed #ccc; width:190px;"></div>
					</li>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				  </ul>
      
       
      			</div>
	  </div>
	  <script type="text/javascript" src="themes/360buy/images/misc/lib/js/e/jQuery.textSlider.js" charset=utf-8></script>
	  <script>
	$(document).ready(function(){
        $("#scrollDiv").textSlider({line:2,speed:1000,timer:1000});
});


	  </script>
	   
      </div>
    </div>
    <div class="fore3" data-widget="tab-item">
      <div class="mt">
        <h2>在线调查</h2>
      </div>
      <div class="mc" data-widget="tab-content">
        
		<?php 
$k = array (
  'name' => 'vote',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>


		
      </div>
    </div>
  </div>
  
  <span class="clr"></span> </div>

<div class="w w1">
  <div class="m m3" id="hot" data-widget="tabs">
    <div class="fore1 curr" data-widget="tab-item" clstag="homepage|keycount|home2012|13a">
      <div class="mt">
        <h2>疯狂抢购</h2>
      </div>
      <div class="mc" data-widget="tab-content">
        <ul class="lh">
          <?php $_from = $this->_var['promotion_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['index_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['index_goods']['iteration']++;
?>
          <li class="fore<?php echo $this->_foreach['index_goods']['iteration']; ?>">
            <div class="p-img ld"> <a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank">
		
			<img src="<?php echo $this->_var['goods']['thumb']; ?>" width="130" height="130" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"></a> </div>
            <div class="p-name"><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" target="_blank"><?php echo $this->_var['goods']['short_style_name']; ?></a></div>
            <div class="p-price">售价：<strong>
              <?php if ($this->_var['goods']['promote_price'] != ""): ?>
              <?php echo $this->_var['goods']['promote_price']; ?>
              <?php else: ?>
              <?php echo $this->_var['goods']['shop_price']; ?>
              <?php endif; ?>
              </strong></div>
          </li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
      </div>
    </div>
    <div class="fore2" data-widget="tab-item" clstag="homepage|keycount|home2012|13b">
      <div class="mt">
        <h2>热卖商品</h2>
      </div>
      <div class="mc" data-widget="tab-content">
        <ul class="lh">
          <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['index_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['index_goods']['iteration']++;
?>
          <li class="fore<?php echo $this->_foreach['index_goods']['iteration']; ?>">
            <div class="p-img ld"> <a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank"><img data-src="<?php echo $this->_var['goods']['thumb']; ?>" width="130" height="130" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" data-img="1"></a> </div>
            <div class="p-name"><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" target="_blank"><?php echo $this->_var['goods']['short_style_name']; ?></a></div>
            <div class="p-price">售价：<strong>
              <?php if ($this->_var['goods']['promote_price'] != ""): ?>
              <?php echo $this->_var['goods']['promote_price']; ?>
              <?php else: ?>
              <?php echo $this->_var['goods']['shop_price']; ?>
              <?php endif; ?>
              </strong></div>
          </li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
      </div>
    </div>
    <div class="fore3" data-widget="tab-item" clstag="homepage|keycount|home2012|13c">
      <div class="mt">
        <h2>推荐商品</h2>
      </div>
      <div class="mc" data-widget="tab-content">
        <ul class="lh">
          <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['index_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['index_goods']['iteration']++;
?>
          <li class="fore<?php echo $this->_foreach['index_goods']['iteration']; ?>">
            <div class="p-img ld"> <a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank"><img data-src="<?php echo $this->_var['goods']['thumb']; ?>" width="130" height="130" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" data-img="1"></a> </div>
            <div class="p-name"><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" target="_blank"><?php echo $this->_var['goods']['short_style_name']; ?></a></div>
            <div class="p-price">售价：<strong>
              <?php if ($this->_var['goods']['promote_price'] != ""): ?>
              <?php echo $this->_var['goods']['promote_price']; ?>
              <?php else: ?>
              <?php echo $this->_var['goods']['shop_price']; ?>
              <?php endif; ?>
              </strong></div>
          </li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
      </div>
    </div>
    <div class="fore4" data-widget="tab-item" clstag="homepage|keycount|home2012|13d">
      <div class="mt">
        <h2>新品上架</h2>
      </div>
      <div class="mc" data-widget="tab-content">
        <ul class="lh">
          <?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['index_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['index_goods']['iteration']++;
?>
          <li class="fore<?php echo $this->_foreach['index_goods']['iteration']; ?>">
            <div class="p-img ld"> <a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank"><img data-src="<?php echo $this->_var['goods']['thumb']; ?>" width="130" height="130" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" data-img="1"></a> </div>
            <div class="p-name"><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" target="_blank"><?php echo $this->_var['goods']['short_style_name']; ?></a></div>
            <div class="p-price">售价：<strong>
              <?php if ($this->_var['goods']['promote_price'] != ""): ?>
              <?php echo $this->_var['goods']['promote_price']; ?>
              <?php else: ?>
              <?php echo $this->_var['goods']['shop_price']; ?>
              <?php endif; ?>
              </strong></div>
          </li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
      </div>
    </div>
    <div class="fore5" data-widget="tab-item" data-boole="1" clstag="homepage|keycount|home2012|13e">
      <div class="mt">
        <h2>猜您喜欢</h2>
      </div>
      <div class="mc" data-widget="tab-content">
        <ul class="lh">
          <?php $_from = $this->_var['historys']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['index_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['index_goods']['iteration']++;
?>
          <li class="fore<?php echo $this->_foreach['index_goods']['iteration']; ?>">
            <div class="p-img ld"> <a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" width="130" height="130" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" data-img="1"></a> </div>
            <div class="p-name"><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" target="_blank"><?php echo $this->_var['goods']['short_name']; ?></a></div>
            <div class="p-price">售价：<strong> <?php echo $this->_var['goods']['shop_price']; ?> </strong></div>
          </li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
      </div>
    </div>
  </div>
  
  <div id="first" class="m m2" clstag="homepage|keycount|home2012|14a">
    <div class="mt">
      <h2>网站首发</h2>
      <div class="extra"></div>
    </div>
    <div class="mc">
	<?php
		 $GLOBALS['smarty']->assign('index_image',get_advlist('网站首发广告', 2));
	  ?>
	  <?php $_from = $this->_var['index_image']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_image']['iteration']++;
?>
      <div class="item fore<?php echo $this->_foreach['index_image']['iteration']; ?>">
        <div class="p-img"><a href="<?php echo $this->_var['ad']['url']; ?>" target="_blank" title="<?php echo $this->_var['ad']['name']; ?>"><img class="err-product" src="<?php echo $this->_var['ad']['image']; ?>" alt="<?php echo $this->_var['ad']['name']; ?>" data-img="1" height="100" width="100"></a></div>
        <div class="p-name" style="padding-top:30px"><a href="<?php echo $this->_var['ad']['url']; ?>" target="_blank" title="<?php echo $this->_var['ad']['name']; ?>"><?php echo $this->_var['ad']['name']; ?></a><span>首发</span></div>
        
      </div>
	  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      
    </div>
  </div>
  
  <span class="clr"></span> </div>

<script type="text/javascript" src="themes/360buy/images/misc/lib/js/e/jquery.timer.js"></script>
<div class="w w1">
  <div class="m m2" id="timed" clstag="homepage|keycount|home2012|15a">
    <div class="mt">
      <h2>限时抢购</h2>
      <div class="extra"></div>
    </div>
    <div class="mc">
      <ul class="lh">
        <?php
				$GLOBALS['smarty']->assign('group_buy_goods',    index_get_group_buyex());
		?>
        <?php $_from = $this->_var['group_buy_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'buy_goods');$this->_foreach['group_buy_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['group_buy_goods']['total'] > 0):
    foreach ($_from AS $this->_var['buy_goods']):
        $this->_foreach['group_buy_goods']['iteration']++;
?>
        <?php if (($this->_foreach['group_buy_goods']['iteration'] - 1) > 0): ?>
        <?php
		    $GLOBALS['smarty']->assign('goods_save', get_goods_saving($GLOBALS['smarty']->_var['buy_goods']['last_price_no_format'], $GLOBALS['smarty']->_var['buy_goods']['market_price_no_format']));
		  ?>
        <li class="fore<?php echo ($this->_foreach['group_buy_goods']['iteration'] - 1); ?>" id="timed<?php echo ($this->_foreach['group_buy_goods']['iteration'] - 1); ?>">
          <div id="timer<?php echo $this->_var['buy_goods']['group_buy_id']; ?>" class="countdown"></div>
          <div class="p-img ld"><a title="<?php echo htmlspecialchars($this->_var['buy_goods']['goods_name']); ?>" target="_blank" href="<?php echo $this->_var['buy_goods']['url']; ?>"><b id="icon39" class="pi pix1" style=""><span><?php echo $this->_var['goods_save']['save_rate']; ?></span><br/>
            折</b><img width="130" height="130" alt="<?php echo htmlspecialchars($this->_var['buy_goods']['goods_name']); ?>" data-img="1" src="<?php echo $this->_var['buy_goods']['thumb']; ?>"/></a></div>
          <div class="p-name"><a target="_blank" title="<?php echo htmlspecialchars($this->_var['buy_goods']['goods_name']); ?>" href="<?php echo $this->_var['buy_goods']['url']; ?>"><?php echo htmlspecialchars($this->_var['buy_goods']['short_style_name']); ?></a></div>
          <div class="p-price"><span>抢购价：</span><strong><?php echo $this->_var['buy_goods']['last_price']; ?></strong></div>
        </li>
        <script>

$('#timer<?php echo $this->_var['buy_goods']['group_buy_id']; ?>').everyTime(1000, function() {

   Temp = get_group_buy_time("<?php echo empty($this->_var['buy_goods']['end_time']) ? '0' : $this->_var['buy_goods']['end_time']; ?>");
  $(this).html(Temp);

  });

	               
	     </script>
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
    </div>
  </div>
  
  <div class="m m2" id="group" clstag="homepage|keycount|home2012|16a">
    <div class="mt">
      <h2>今日团购</h2>
      <div class="extra"><a href="group_buy.php" target="_blank">更多团购&nbsp;&gt;</a></div>
    </div>
    <?php $_from = $this->_var['group_buy_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['group_buy_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['group_buy_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['group_buy_goods']['iteration']++;
?>
    <?php if (($this->_foreach['group_buy_goods']['iteration'] - 1) == 0): ?>
    <div class="mc">
      <div class="p-img"><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>"><img data-lazyload="<?php echo $this->_var['goods']['thumb']; ?>" width="100" height="100" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" data-img="1"></a></div>
      <div class="p-name"><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank"><?php echo $this->_var['goods']['act_desc']; ?></a></div>
      <div class="p-market" style=" padding-left:5px; padding-right:0px;">原价：<del><?php echo $this->_var['goods']['market_price_no_format']; ?></del></div>
      <span class="clr" style="height:0px"></span>
      <div class="p-detail"> <a href="<?php echo $this->_var['goods']['url']; ?>" class="btn-tuan" target="_blank">参团</a> <span>团购价：</span><strong><?php echo $this->_var['goods']['last_price']; ?></strong> </div>
    </div>
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </div>
  
  <div class="da0x100 fr" id="group_buy_goods_div"> 
<?php $this->assign('ads_id','1'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
 </div>
  <script type="text/javascript">
  if(pageConfig.wideVersion){
  	$('#group_buy_goods_div table img').attr("width", '310');
  
  }else{
    $('#group_buy_goods_div').attr("style", 'width:210px');
  	$('#group_buy_goods_div img').attr("width", '210');
  }
  
  </script>
  <span class="clr"></span> </div>

<script type="text/javascript" src="themes/360buy/images/misc/lib/js/e/jquery.blinds-0.9.js"></script>

<?php $this->assign('cat_goods',$this->_var['cat_goods_1']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_1']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_3']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_3']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_4']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_4']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_5']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_5']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_6']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_6']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_8']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_8']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>


<div class="w w1">
  <div class="m m1 club" id="share" clstag="homepage|keycount|home2012|30a">
    <div class="mt">
      <h2>热门评论</h2>
      <div class="extra"></div>
    </div>
    <div class="mc">
      <ul>
        <?php
			$GLOBALS['smarty']->assign('msg_lists',    get_new_comment(0, 16));
		?>
        <?php $_from = $this->_var['msg_lists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'msg');$this->_foreach['message_lists'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['message_lists']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['msg']):
        $this->_foreach['message_lists']['iteration']++;
?>
        <?php if (($this->_foreach['message_lists']['iteration'] - 1) < 8): ?>
        <li>
          <div class="p-img ld"> <a href="<?php echo $this->_var['msg']['url']; ?>" target="_blank" title="<?php echo $this->_var['msg']['goods_name']; ?>"><img src="<?php echo $this->_var['msg']['goods_thumb']; ?>" width="50" height="50" alt="<?php echo $this->_var['msg']['goods_name']; ?>" data-img="1"><b class="ci cix2"></b></a> </div>
          <div class="p-name"><a href="<?php echo $this->_var['msg']['url']; ?>" target="_blank" title="<?php echo $this->_var['msg']['goods_name']; ?>"><?php echo sub_str($this->_var['msg']['goods_name'],15); ?></a></div>
          <div class="p-detail"><a href="<?php echo $this->_var['msg']['url']; ?>" target="_blank"><?php echo sub_str($this->_var['msg']['content'],30); ?></a></div>
        </li>
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
    </div>
  </div>
  <div class="m m1 club" id="comment" clstag="homepage|keycount|home2012|30b">
    <div class="mt">
      <h2></h2>
      <div class="extra"></div>
    </div>
    <div class="mc">
      <ul>
        <?php $_from = $this->_var['msg_lists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'msg');$this->_foreach['message_lists'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['message_lists']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['msg']):
        $this->_foreach['message_lists']['iteration']++;
?>
        <?php if (($this->_foreach['message_lists']['iteration'] - 1) >= 8): ?>
        <li>
          <div class="p-img ld"> <a href="<?php echo $this->_var['msg']['url']; ?>" target="_blank" title="<?php echo $this->_var['msg']['goods_name']; ?>"><img data-lazyload="<?php echo $this->_var['msg']['goods_thumb']; ?>" width="50" height="50" alt="<?php echo $this->_var['msg']['goods_name']; ?>" data-img="1"><b class="ci cix2"></b></a> </div>
          <div class="p-name"><a href="<?php echo $this->_var['msg']['url']; ?>" target="_blank" title="<?php echo $this->_var['msg']['goods_name']; ?>"><?php echo sub_str($this->_var['msg']['goods_name'],15); ?></a></div>
          <div class="p-detail"><a href="<?php echo $this->_var['msg']['url']; ?>" target="_blank"><?php echo sub_str($this->_var['msg']['content'],30); ?></a></div>
        </li>
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
    </div>
  </div>

  <div class="m m1" id="reading" clstag="homepage|keycount|home2012|31a"> 
<?php $this->assign('articles',$this->_var['articles_10']); ?><?php $this->assign('articles_cat',$this->_var['articles_cat_10']); ?><?php echo $this->fetch('library/cat_articles.lbi'); ?>
 </div>
  <div class="m" id="subscription">
    <div class="mt">
      <h2>订阅促销信息</h2>
    </div>
    <div class="mc">
      <div class="form">
        <input type="text" name="" class="text" id="subscription-val" value="请输入您的Email地址" onfocus="if(this.value=='请输入您的Email地址'){this.value='';this.style.color='#333'};$('#subscription-prompt').hide()" onblur="if(this.value==''){this.value='请输入您的Email地址';this.style.color='#999'}">
        <input type="button" value="订阅" class="button" id="subscription-submit"  onclick="add_email_list();" clstag="homepage|keycount|home2012|32a">
        <span class="clr"></span>
        <div id="subscription-prompt"></div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
var email = document.getElementById('subscription-val');
function add_email_list()
{
  if (check_email())
  {
    Ajax.call('user.php?act=email_list&job=add&email=' + email.value, '', rep_add_email_list, 'GET', 'TEXT');
  }
}
function rep_add_email_list(text)
{
  alert(text);
}

function check_email()
{
  if (Utils.isEmail(email.value))
  {
    return true;
  }
  else
  {
    alert('<?php echo $this->_var['lang']['email_invalid']; ?>');
    return false;
  }
}
</script>
  <span class="clr"></span> </div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>
<script type="text/javascript" src="themes/360buy/images/misc/product/js/2012/home.js"></script>

</body>
</html>


