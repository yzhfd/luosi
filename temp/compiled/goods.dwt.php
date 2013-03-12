<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="format-detection" content="telephone=no">
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<title><?php echo $this->_var['page_title']; ?></title>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<link rel="stylesheet" type="text/css" href="themes/360buy/images/misc/201007/skin/df/pshow20120221.css" media="all" />
<script type="text/javascript" src="themes/360buy/images/misc/lib/js/2012/base-2011.js"></script>
<div class="w">
  <div class="breadcrumb"><?php echo $this->fetch('library/ur_here.lbi'); ?> </div>
</div>

<div class="w">
  <div class="m hide" id="search-result"></div>
</div>
<div class="w main">
  <div class="right-extra">
  <div id="name">
    <h1><?php echo $this->_var['goods']['goods_style_name']; ?></h1>
  </div>
  
  <div id="preview" clstag="shangpin|keycount|product|preview">
    <div id="spec-n1" clstag ="shangpin|keycount|product|spec-n1" class="jqzoom" onclick = "window.open('gallery.php?id=<?php echo $this->_var['goods']['goods_id']; ?>'); return false;"><img onerror="this.src='themes/360buy/images/none_150.gif'" src="<?php if ($this->_var['pictures']): ?><?php echo $this->_var['pictures']['0']['img_url']; ?><?php else: ?><?php echo $this->_var['goods']['goods_img']; ?><?php endif; ?>" width="350" height="350" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" jqimg="<?php echo $this->_var['pictures']['0']['img_url']; ?>"/></div>
    <div id="spec-n5">
      <div class="control" id="spec-left"></div>
      <div class="control" id="spec-right"></div>
      <div id="spec-list">
        <ul class="list-h">
          <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');$this->_foreach['pictures'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['pictures']['total'] > 0):
    foreach ($_from AS $this->_var['picture']):
        $this->_foreach['pictures']['iteration']++;
?>
          <li> <img onerror="this.src='themes/360buy/images/none_50.gif'" src="<?php if ($this->_var['picture']['thumb_url']): ?><?php echo $this->_var['picture']['thumb_url']; ?><?php else: ?><?php echo $this->_var['picture']['img_url']; ?><?php endif; ?>"
                                width="50" height="50" alt="<?php echo $this->_var['goods']['goods_name']; ?>" name="<?php echo $this->_var['picture']['img_url']; ?>" /></li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
      </div>
    </div>
    <ul class="links">
      <li class="enlarge" clstag="shangpin|keycount|product|chakandatu"><b></b><a href="javascript:;" onclick="window.open('gallery.php?id=<?php echo $this->_var['goods']['goods_id']; ?>'); return false;">点击看大图</a></li>
      <li >
        <div style="float:right"> <?php echo $this->fetch('library/share.lbi'); ?> </div>
      </li>

    </ul>
  </div>
  
  <script type="text/javascript"></script>
  <ul id="summary" clstag="shangpin|keycount|product|summary">
    <li><span>商品编号：<?php echo $this->_var['goods']['goods_sn']; ?></span></li>
    <li>
      <div class="fl">售<span style=" padding-left:24px"></span>价：<strong class="price" id="goods_shop_price"><?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price_formated']; ?><?php endif; ?>
        </strong></div>
      <span id="promotion1"></span>
      
      <div class="clr"></div>
    </li>
    <?php if ($this->_var['goods']['goods_brand'] != "" && $this->_var['cfg']['show_brand']): ?>
    <li><span><?php echo $this->_var['lang']['goods_brand']; ?><a href="<?php echo $this->_var['goods']['goods_brand_url']; ?>" ><?php echo $this->_var['goods']['goods_brand']; ?></a></span></li>
    <?php endif; ?>
    <li><span><?php echo $this->_var['lang']['add_time']; ?><?php echo $this->_var['goods']['add_time']; ?></span></li>
    <?php if ($this->_var['cfg']['show_goodsweight']): ?>
    <li><span><?php echo $this->_var['lang']['goods_weight']; ?><?php echo $this->_var['goods']['goods_weight']; ?></span></li>
    <?php endif; ?>
    <li class="clearfix" clstag='shangpin|keycount|product|pingfen'> <span class="fl">商品评分：</span>
      <div class="fl" id="star573692">
        <div class="star sa<?php echo $this->_var['goods']['comment_rank']; ?>"></div>
        <a class="num-comment" href="#comment">(已有<font id="goods_comment_num">0</font>人评价)</a> </div>
    </li>
    <?php if ($this->_var['goods']['give_integral'] > 0): ?>
    <li><span><?php echo $this->_var['lang']['goods_give_integral']; ?><?php echo $this->_var['goods']['give_integral']; ?> <?php echo $this->_var['points_name']; ?></span></li>
    <?php endif; ?>
    <li id="cx" class="hide"></li>
    
    <li id="tz" class="hide"></li>
    <li id="mfms" class="hide"></li>
    <li id="liLargess" class="clearfix hide"></li>
    <li id="nocoupon" class="hide"></li>
    
    <li id="service-trade" class="item hide"></li>
    
  </ul>
  
  <script type="text/javascript">
				var setAmount={
					min:1,
					max:999,
					reg:function(x){
						return new RegExp("^[1-9]\\d*$").test(x);
					},
					amount:function(obj,mode){
						var x=$(obj).val();
						if (this.reg(x)){
							if (mode){
								x++;
							}else{
								x--;
							}
						}else{
							alert("请输入正确的数量！");
							$(obj).val(1);
							$(obj).focus();
						}
						return x;						
					},
					reduce:function(obj){
						var x=this.amount(obj,false);
						if (x>=this.min){
							$(obj).val(x);
						}else{
							alert("商品数量最少为"+this.min);
							$(obj).val(1);
							$(obj).focus();
						}
					},
					add:function(obj){
						var x=this.amount(obj,true);
						if (x<=this.max){
							$(obj).val(x);
						}else{
							alert("商品数量最多为"+this.max);
							$(obj).val(999);
							$(obj).focus();
						}
					},
					modify:function(obj){
						var x=$(obj).val();
						if (x<this.min||x>this.max||!this.reg(x)){
							alert("请输入正确的数量！");
							$(obj).val(1);
							$(obj).focus();
						}
					}
				}

			
				</script>
  <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
  <input type="hidden" name="goodsId" value="<?php echo $this->_var['goods']['goods_id']; ?>" />
    <div class='m' id='choose'>
    
    <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
    <dl class='size'>
      <dt>选择<?php echo $this->_var['spec']['name']; ?>：</dt>
      <dd>
        <?php if ($this->_var['spec']['attr_type'] == 1): ?>
        <?php if ($this->_var['cfg']['goodsattr_style'] == 1): ?>
        <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');$this->_foreach['spec_values'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['spec_values']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
        $this->_foreach['spec_values']['iteration']++;
?>
        <div 
        
        <?php if (($this->_foreach['spec_values']['iteration'] - 1) == 0): ?>
        class='selected'
        <?php endif; ?>
        onclick="changeAtt(this)" name="<?php echo $this->_var['value']['id']; ?>" title="<?php echo $this->_var['value']['label']; ?>"><a  href='javascript:;' style="text-decoration:none"><?php echo $this->_var['value']['label']; ?></a>
      </div>
      <input style="display:none" id="spec_value_<?php echo $this->_var['value']['id']; ?>" type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>"                     
      
      <?php if (($this->_foreach['spec_values']['iteration'] - 1) == 0): ?>
      checked
      <?php endif; ?>
      />
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
      <?php endif; ?>
      <?php endif; ?>
      </dd>
    </dl>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    
    <dl class='amount'>
      <dt>　我要买：</dt>
      <dd><a class='reduce' onclick="setAmount.reduce('#pamount')" href="javascript:void(0)">-</a>
        <input type='text' value='1' id='pamount' onkeyup="setAmount.modify('#pamount')"  name="number"/>
        <a class='add' onclick="setAmount.add('#pamount')" href="javascript:void(0)">+</a></dd>
    </dl>
    <div class='result' id="select_title"></div>
    <div class='btns'><a class='btn-append' href='javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)'>添加到购物车</a>
      <div class='fl ' id='fqPanel'></div>
      <input type='button' class='btn-coll' onclick='javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>)' value='加关注'/>
      <span class='clr'></span></div>
    </div>
  </form>
  <script language="javascript">
	function get_select_goods_attr(){
	    var select_title = '';
		$('.size dd div').each(
			function(i){
				var class_name = $(this).attr('class');
				if (class_name == 'selected'){
					select_title += '<strong>"' + $(this).attr('title') + '"</strong>、';
				}
			}
		);
		
		if (select_title.length > 0){
			select_title = select_title.substring(0, select_title.length - 1);
			select_title = '已选择' + select_title;
			$('#select_title').html(select_title);
		}else{
			$('#select_title').hide();
		}
	}
	get_select_goods_attr();
	</script>
  <div id="Fqfk_Tip" class="Tip360" style="display:none;"></div>
  <div id="Collect_Tip" class="Tip360 w260"></div>
  
  <span class="clr"></span>
  <div class="m hide" id="placeholder-1" flag="1"></div>
  
  <?php if ($this->_var['fittings']): ?>
  <div style="display: block;" class="m recommend hide" id="recommend">
  <ul class="tab">
    <li style="display: list-item;" load="true" class="hide curr" id="tab-fitting">最佳组合<span></span></li>
    <li class="hide" id="tab-group"><span></span></li>
  
  </ul>
  <div style="display: block;" class="mc tabcon hide" id="fitting" clstag="shangpin|keycount|product|fitting">
 
    <div class="tabcon-sub" id="stabcon-fitting">
      <div class="master" style="height:185px">
        <div class="p-img"><a href="javascript:;"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" height="100" width="100"></a></div>
        <div class="p-name"><a href="javascript:;"><?php echo $this->_var['goods']['goods_name']; ?></a></div>
        <div class="icon-add"></div>
      </div>
      <div style="overflow-x: scroll;height:185px" class="suits">
        <ul style="width: 1820px;" class="list">
		<?php $_from = $this->_var['fittings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'fittings_goods');if (count($_from)):
    foreach ($_from AS $this->_var['fittings_goods']):
?>
          <li data="0">
            <div class="p-img"><a target="_blank" href="<?php echo $this->_var['fittings_goods']['url']; ?>"><img alt="<?php echo $this->_var['fittings_goods']['goods_name']; ?>" src="<?php echo $this->_var['fittings_goods']['goods_thumb']; ?>" height="100" width="100"></a></div>
            <div class="p-name"><a target="_blank" href="<?php echo $this->_var['fittings_goods']['url']; ?>"><?php echo $this->_var['fittings_goods']['short_name']; ?></a></div>
            <div class="choose">
              <input name="comb_id" price='<?php if ($this->_var['fittings_goods']['promote_price'] != 0): ?><?php echo $this->_var['fittings_goods']['formated_promote_price']; ?><?php else: ?><?php echo $this->_var['fittings_goods']['shop_price']; ?><?php endif; ?>' onclick="compute_comb_sum_price(this)" value="<?php echo $this->_var['fittings_goods']['goods_id']; ?>"  type="checkbox">
              <span class="p-price"><strong><?php if ($this->_var['fittings_goods']['promote_price'] != 0): ?><?php echo $this->_var['fittings_goods']['formated_promote_price']; ?><?php else: ?><?php echo $this->_var['fittings_goods']['shop_price']; ?><?php endif; ?></strong></span></div>
          </li>
         <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
      </div>
      <div class="infos">
        <div class="selected">已选择<span id="fitting-amount">0</span>个</div>
        <div class="p-price">搭配价：<strong id="fitting-price"><?php if ($this->_var['goods']['is_promote']): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price_formated']; ?><?php endif; ?></strong></div>
        <div class="p-saving hide">获得优惠：<span id="fitting-saving">￥0.00</span></div>
        <div class="btns"><a href="javascript:batchAddCart();" class="btn-buy" id="fitting-buy">立即购买</a></div>
      </div>
    </div>
  </div>
  <script language="javascript">
  function ForDight(Dight,How)
		　　{
			　　var c=Math.pow(10,How);
			　　return Math.round(Dight*c)/c;
		　　}
  function compute_comb_sum_price(obj){
		   		var temp = $('#fitting-price').html();
				temp = temp.replace('￥', '');
				var comb_sum_price = temp * 1;
				temp = $(obj).attr('price');
				temp = temp.replace('￥', '');
				var comb_price = temp * 1;
				if (temp != ''){
					if (obj.checked){
						comb_sum_price = comb_sum_price + comb_price;
					}else{
					    comb_sum_price = comb_sum_price - comb_price;
					}
				}
				$('#fitting-amount').html(getFittingGoodsNum());
				if ($('#fitting-amount').html() == ''){
					$('#fitting-amount').html('0');
				}
		        $('#fitting-price').html('￥'+ForDight(comb_sum_price, 1));
				
		   }
  function batchAddCart(){
		   		var obj = document.getElementsByName('comb_id');
				var comb_id = '';
				
				for (var i = 0; i < obj.length; i ++){
					if (obj[i].checked){
                        comb_id = obj[i].value;
					}
				}
				if (comb_id == ''){
					alert('请选择最佳组合商品！');
					return;
				}
				var _goods_id = document.forms['ECS_FORMBUY'].elements['goodsId'].value;
                addToCart(_goods_id);
				for (var i = 0; i < obj.length; i ++){
					if (obj[i].checked){
					    addToCartEx(obj[i].value);
					}
				}

				
		        
                 location.href = "flow.php?step=cart";
				
		   }
		   
		   function getFittingGoodsNum(){
		   		var obj = document.getElementsByName('comb_id');
				var num = 0;
				
				for (var i = 0; i < obj.length; i ++){
					if (obj[i].checked){
                        num ++;
					}
				}
				return num;
			}
		   
		   function clearFittingGoods(){
		   		var obj = document.getElementsByName('comb_id');
				var comb_id = '';
				
				for (var i = 0; i < obj.length; i ++){
					obj[i].checked = false;
				}
			}	
		   clearFittingGoods();
		   function addToCartEx(goodsId, parentId)
			{
			  var goods        = new Object();
			  var spec_arr     = new Array();
			  var fittings_arr = new Array();
			  var number       = 1;
			  var formBuy      = document.forms['ECS_FORMBUY'];
			  var quick		   = 0;
			
			  goods.quick    = quick;
			  goods.spec     = spec_arr;
			  goods.goods_id = goodsId;
			  goods.number   = number;
			  goods.parent   = (typeof(parentId) == "undefined") ? 0 : parseInt(parentId);
			  Ajax.call('flow.php?step=add_to_cart', 'goods=' + objToJSONString(goods), addToCartResponseEx, 'POST', 'JSON');
			  
			}
			
			function addToCartResponseEx(result)
			{
			  if (result.error > 0)
              {
                // 如果需要缺货登记，跳转
                if (result.error == 2)
                {
                  if (confirm(result.message))
                  {
                    location.href = 'user.php?act=add_booking&id=' + result.goods_id + '&spec=' + result.product_spec;
                  }
                }
                // 没选规格，弹出属性选择框
                else if (result.error == 6)
                {
                  alert('该商品存在规格选择！添加到购物车失败');
                }
                else
                {
                  alert(result.message);
                }
              }
              else
              {
              
              }
			}
  
  </script>
  
  <div class="mc tabcon hide" id="group"></div>
  
  
  
</div>
  <?php endif; ?>
  
  <style>
  .m .tab li{cursor:pointer}
  </style>
  <div class="m" id="detail" clstag="shangpin|keycount|product|detail">
    <ul class="tab">
      <li class="curr">商品介绍<span></span></li>
      <li >规格参数<span></span></li>
      <li >包装清单<span></span></li>
      <li >售后服务<span></span></li>
      <li>购买须知<span></span></li>
      
    </ul>
    <div class="mc fore tabcon">
      <div class="content" style="border:0px"><?php echo $this->_var['goods']['goods_desc']; ?></div>
    </div>
    
    <div class="mc tabcon hide">
      <?php if ($this->_var['properties']): ?>
      <table cellpadding="0" cellspacing="1" width="100%" border="0" class="Ptable">
        <tr>
          <th class="tdTitle" colspan="2" align="center" style="text-align:center">商品属性</th>
        <tr>
          <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?>
          <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
        <tr>
          <td class="tdTitle"><?php echo htmlspecialchars($this->_var['property']['name']); ?></td>
          <td><?php echo $this->_var['property']['value']; ?></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </table>
      <?php endif; ?>
    </div>
    
    <div class="mc tabcon hide" id="service1">
      
	  
	  
    </div>
    
    <div class="mc tabcon hide" id="service2">
	
	
    </div>
    
    <div class='mc tabcon knowledge hide'  id="service3" style="padding-top:10px" > 
	
	
	 </div>
	
	<?php 
		$GLOBALS['smarty']->assign('goods_article_list', get_linked_articlesex($GLOBALS['smarty']->_var['goods']['goods_id']));
	  ?>
      <?php $_from = $this->_var['goods_article_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');$this->_foreach['goods_article_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_article_list']['total'] > 0):
    foreach ($_from AS $this->_var['article']):
        $this->_foreach['goods_article_list']['iteration']++;
?>
      <ul style="display:none;" class="service_art">
        <li class="service_title"><?php echo $this->_var['article']['title']; ?></li>
        <li class="service_content"><?php echo $this->_var['article']['content']; ?></li>
      </ul>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	  <script language="javascript">
	  function get_goods_article(){
	  	$('.service_art').each(
			function(i){
				var title = $(this).children('.service_title').html();
				var content = $(this).children('.service_content').html();
				if (title.indexOf('包装清单') != -1){
					$('#service1').html(content);
				}else if (title.indexOf('售后服务') != -1){
					$('#service2').html(content);
				}else if (title.indexOf('购买须知') != -1){
					$('#service3').html(content);
				}
			}
		);
	  }
	  get_goods_article();
	  </script>
  </div>
  
  <script type="text/javascript">
			$("#detail").jdTab({event:"click"});
			</script>
  
  <script type="text/javascript" src="themes/360buy/images/misc/lib/js/e/jquery.blockUI.js"></script>

  <div class="m" id="comment" class="usercommentlist">
    <ul class="tab">
      <li class="curr" data="0" id="comments_a1" onClick="select_comment(1);">全部评价(<strong id="comments_count1"></strong>)<span></span></li>
      <li data="5" id="comments_a2" onClick="select_comment(2)">好评(<strong id="comments_count2"></strong>)<span></span></li>
      <li data="3" id="comments_a3" onClick="select_comment(3)">中评(<strong id="comments_count3"></strong>)<span></span></li>
      <li data="1" id="comments_a4" onClick="select_comment(4)">差评(<strong id="comments_count4"></strong>)<span></span></li>
    </ul>
	<div id="i-comment">
        <div class="rate"> <strong id="comments_ss0">0%</strong> <br/>
          好评度 </div>
        <div class="percent" style="border-right:0px">
          <dl>
            <dt>好评</dt>
            <dd class="d1">
              <div  id="comments_s1" style="width: 0px;"> </div>
            </dd>
            <dd class="d2" id="comments_ss1"> 0%</dd>
          </dl>
          <dl>
            <dt>中评</dt>
            <dd class="d1">
              <div  id="comments_s2" style="width: 0px;"> </div>
            </dd>
            <dd class="d2" id="comments_ss2"> 0%</dd>
          </dl>
          <dl>
            <dt>差评</dt>
            <dd class="d1">
              <div  id="comments_s3" style="width: 0px;"> </div>
            </dd>
            <dd class="d2" id="comments_ss3"> 0%</dd>
          </dl>
        </div>
        <div class="actor"> 
        </div>
        <div class="btns">
          <div> 我购买过此商品</div>
          <a class="btn-comment" href="javascript:;" onclick="show_comment_form()">我要评价</a> </div>
      </div>
	<script language="javascript">
	var currentCommentIndex = 1;	
	function gotoPage(page, id, type)
	{
	  document.getElementById("ECS_COMMENT").innerHTML = '';
	  $('#comment').block({ 
                message: '<table align="center" style="margin-top:0px;"><tr><td><img src="themes/360buy/images/loading.gif" border="0"/></td><td>正在加载，请稍后...</td></tr></table>',
				overlayCSS: {backgroundColor: '#fff'},
				css: { 
						width: '200px',
						height: '25px',
						border: '1px solid #EED97C'
					}
            }); 
	  $.ajax({
					type:"GET",
					url:"comment.php?act=gotopage",
					cache:false,
					async: true,
					dataType:'json',     //接受数据格式
					data:'page=' + page + '&id=' + id + '&type=' + type,
					success:gotoPageResponse
				});
				
		
	  
	}
	
	function gotoPageResponse(result)
	{
	  document.getElementById("ECS_COMMENT").innerHTML = result.content;
	  for(var i = 1; i <= 4; i ++){
			$('#comments_b'+i).hide();
		}
		$('#comments_b'+currentCommentIndex).show();
		$('#comment').unblock(); 
		
		$('.comments_content').each(
		function(){
		    var content = $(this).html();
			$(this).html(filter_comments(content));
		}
		);
		
		$('.comment_ranks').each(
		function(){
		    var content = $(this).attr("value");
			$(this).css("width", content*20+"%");
		}
		);
	}

function select_comment(index){
    gotoPage(1, <?php echo $this->_var['goods']['goods_id']; ?>, 0);
	for(var i = 1; i <= 4; i ++){
		$('#comments_a'+i).removeClass('curr');
		$('#comments_b'+i).hide();
	}
    $('#comments_a'+index).addClass('curr');
	$('#comments_b'+index).show();
	
	currentCommentIndex = index;
	
}

function pop_comment_div(){
	$.blockUI({ 
					message: $('#comment_form'), 
					fadeIn: 700, 
					fadeOut: 700, 
					showOverlay: false,
					css: { 
						top:  ($(window).height() - 480) /2 + 'px', 
						left: ($(window).width() - 480) /2 + 'px', 
						width: '480px',

						border: 'none' 
					} 
        		}); 

}



function comment_percent(){
	var sum1 = $('#comments_count1').html() * 1;
	var sum2 = $('#comments_count2').html() * 1;
	var sum3 = $('#comments_count3').html() * 1;
	var sum4 = $('#comments_count4').html() * 1;
	
	if (sum1 == 0) sum1 = 1;
	var percent1 = parseInt((sum2/sum1)*100) + '%';
	var percent2 = parseInt((sum3/sum1)*100) + '%';
	var percent3 = parseInt((sum4/sum1)*100) + '%';
    
    
    $('#comments_ss0').html(percent1);
	$('#comments_ss1').html(percent1);
	$('#comments_ss2').html(percent2);
	$('#comments_ss3').html(percent3);
	
	$('#comments_s1').css('width', percent1);
	$('#comments_s2').css('width', percent2);
	$('#comments_s3').css('width', percent3);
}
function show_comment_form(){
    <?php if ($_SESSION['user_id'] > 0): ?>
    $('#comment_form').show();
	location.href = '#comment_form';
	<?php else: ?>
	location.href = 'user.php';
	<?php endif; ?>
	
}
</script>  

    <div id="ECS_COMMENT"> <?php 
$k = array (
  'name' => 'comments',
  'type' => '0',
  'id' => $this->_var['id'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
	
  </div>
  
  <div class="m" id="consult" clstag="shangpin|keycount|product|consult">
    <ul class="tab">
      <li class="curr"  id="qa_a1" style="cursor:pointer; " onclick="select_QA(1)">商品咨询<span></span></li>
      <li  id="qa_a2" style="cursor:pointer" onclick="select_QA(2)">库存配送<span></span></li>
      <li  id="qa_a3" style="cursor:pointer" onclick="select_QA(3)">支付<span></span></li>
      <li  id="qa_a4" style="cursor:pointer" onclick="select_QA(4)">售后<span></span></li>

    </ul>
	<script>
	var currentQAIndex = 1;
	function gotoPage2(page, id, type)
	{
	  document.getElementById("ECS_COMMENT2").innerHTML = '';
	  $('#consult').block({ 
                message: '<table align="center" style="margin-top:0px;"><tr><td><img src="themes/360buy/images/loading.gif" border="0"/></td><td>正在加载，请稍后...</td></tr></table>',
				overlayCSS: {backgroundColor: '#fff'},
				css: { 
						width: '200px',
						height: '25px',
						border: '1px solid #EED97C'
					}
            }); 
	  $.ajax({
					type:"GET",
					url:"comment.php?act=gotopage",
					cache:false,
					async: true,
					dataType:'json',     //接受数据格式
					data:'page=' + page + '&id=' + id + '&type=' + type,
					success:gotoPageResponse2
				});
				
		
	  
	}
	
	function gotoPageResponse2(result)
	{
	  document.getElementById("ECS_COMMENT2").innerHTML = result.content;
	  for(var i = 1; i <= 7; i ++){
			$('#qa_b'+i).hide();
		}
		$('#qa_b'+currentQAIndex).show();
		$('#consult').unblock(); 
	}
	function select_QA(index){
		gotoPage2(1, <?php echo $this->_var['goods']['goods_id']; ?>, 2);
		for(var i = 1; i <= 7; i ++){
			$('#qa_a'+i).removeClass('curr');
			$('#qa_b'+i).hide();
		}
		$('#qa_a'+index).addClass('curr');
		$('#qa_b'+index).show();
		
		currentQAIndex = index;
		
	}
	function pop_qa_div(){
		$.blockUI({ 
						message: $('#qa_form'), 
						fadeIn: 700, 
						fadeOut: 700, 
						showOverlay: false,
						css: { 
							top:  ($(window).height() - 480) /2 + 'px', 
							left: ($(window).width() - 480) /2 + 'px', 
							width: '480px',
	
							border: 'none' 
						} 
					}); 
	
	}
	</script>
	<div class="search">
 
    <div class="i-search2"><strong>温馨提示:</strong>因厂家更改产品包装、产地或者更换随机附件等没有任何提前通知，且每位咨询者购买情况、提问时间等不同，为此以下回复仅对提问者3天内有效，其他网友仅供参考！若由此给您带来不便请多多谅解，谢谢！</div>
  </div>
     <div id="ECS_COMMENT2"> <?php 
$k = array (
  'name' => 'comments',
  'type' => '2',
  'id' => $this->_var['id'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
    
  </div>
  
  
  <div class="m" id="similar">
    <div id="desgoods"></div>
  </div>
  
</div>

<div class="left">
  <div class="m" id="sortlist" clstag="shangpin|keycount|product|sortlist">
    <div class="mt">
      <h2>相关分类</h2>
    </div>
    <div class="mc">
      <ul>
        <?php
		 $parent_cat_id = get_parent_cat_id($GLOBALS['smarty']->_var['goods']['cat_id']);
		 $GLOBALS['smarty']->assign('child_cat',get_child_cat($parent_cat_id));
		  ?>
        <?php $_from = $this->_var['child_cat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['child_cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['child_cat']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['child_cat']['iteration']++;
?>
        <li><a href="<?php echo $this->_var['cat']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['cat']['name']); ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
    </div>
  </div>
  
  <div class="m" id="samekind" clstag="shangpin|keycount|product|samekind">
    <div class="mt">
      <h2>同类品牌</h2>
    </div>
    <div class="mc">
      <ul>
        <?php $GLOBALS['smarty']->assign('get_cat_brands',get_cat_brands($this->_var['goods']['cat_id']));?>
        <?php $_from = $this->_var['get_cat_brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand_cat');$this->_foreach['get_cat_brands'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['get_cat_brands']['total'] > 0):
    foreach ($_from AS $this->_var['brand_cat']):
        $this->_foreach['get_cat_brands']['iteration']++;
?>
        <li><a href="brand.php?id=<?php echo $this->_var['brand_cat']['id']; ?>" title="<?php echo $this->_var['brand_cat']['name']; ?>"><?php echo $this->_var['brand_cat']['name']; ?></a></li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
    </div>
  </div>
  
  
  <?php
			  $cat_info = get_cat_info_ex($GLOBALS['smarty']->_var['goods']['cat_id']);
			 $GLOBALS['smarty']->assign('cat_name',$cat_info['cat_name']);
    ?>
  <div class="m rank" clstag="shangpin|keycount|product|mrank">
    <div class="mt">
      <h2><?php echo $this->_var['cat_name']; ?>热销排行</h2>
    </div>
    <div class="mc">
      <ul class="tab">
        <li class="curr">同类别</li>
        <li>同品牌</li>
        <li>同价位</li>
      </ul>
      <ul class="tabcon">
        <?php
		 $GLOBALS['smarty']->assign('hot_goods', get_cat_recommend_goods('hot', get_children($GLOBALS['smarty']->_var['goods']['cat_id']), 8));

		?>
        <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_item');$this->_foreach['cat_item_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_item_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_item']):
        $this->_foreach['cat_item_goods']['iteration']++;
?>
        <li 
        
        <?php if ($this->_foreach['cat_item_goods']['iteration'] == 1): ?>
        class='fore'
        <?php endif; ?>
        > <span><?php echo $this->_foreach['cat_item_goods']['iteration']; ?></span>
        <div class="p-img"><a href='<?php echo $this->_var['goods_item']['url']; ?>'><img src="<?php echo $this->_var['goods_item']['thumb']; ?>" width="50" height="50" onerror="this.src='themes/360buy/images/none_50.gif'"/></a></div>
        <div class="p-name"><a href='<?php echo $this->_var['goods_item']['url']; ?>' title='<?php echo htmlspecialchars($this->_var['goods_item']['name']); ?>'><?php echo $this->_var['goods_item']['short_style_name']; ?></a></div>
        <div class="p-price"><strong>
          <?php if ($this->_var['goods_item']['promote_price'] != ""): ?>
          <?php echo $this->_var['goods_item']['promote_price']; ?>
          <?php else: ?>
          <?php echo $this->_var['goods_item']['shop_price']; ?>
          <?php endif; ?>
          </strong></div>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
      <ul class="tabcon hide">
        <?php
		 $GLOBALS['smarty']->assign('hot_goods', get_cat_recommend_goods('hot', get_children($GLOBALS['smarty']->_var['goods']['cat_id']), 8, $GLOBALS['smarty']->_var['goods']['brand_id']));

		?>
        <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_item');$this->_foreach['cat_item_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_item_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_item']):
        $this->_foreach['cat_item_goods']['iteration']++;
?>
        <li 
        
        <?php if ($this->_foreach['cat_item_goods']['iteration'] == 1): ?>
        class='fore'
        <?php endif; ?>
        > <span><?php echo $this->_foreach['cat_item_goods']['iteration']; ?></span>
        <div class="p-img"><a href='<?php echo $this->_var['goods_item']['url']; ?>'><img src="<?php echo $this->_var['goods_item']['thumb']; ?>" width="50" height="50" onerror="this.src='themes/360buy/images/none_50.gif'"/></a></div>
        <div class="p-name"><a href='<?php echo $this->_var['goods_item']['url']; ?>' title='<?php echo htmlspecialchars($this->_var['goods_item']['name']); ?>'><?php echo $this->_var['goods_item']['short_style_name']; ?></a></div>
        <div class="p-price"><strong>
          <?php if ($this->_var['goods_item']['promote_price'] != ""): ?>
          <?php echo $this->_var['goods_item']['promote_price']; ?>
          <?php else: ?>
          <?php echo $this->_var['goods_item']['shop_price']; ?>
          <?php endif; ?>
          </strong></div>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
      <ul class="tabcon hide">
        <?php
		 $price_arr = get_goods_min_max_price($GLOBALS['smarty']->_var['goods']['goods_id']);
		   
		 $GLOBALS['smarty']->assign('hot_goods', get_cat_recommend_goods('hot', get_children($GLOBALS['smarty']->_var['goods']['cat_id']), 8, 0, $price_arr['min'], $price_arr['max']));

		?>
        <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_item');$this->_foreach['cat_item_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_item_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_item']):
        $this->_foreach['cat_item_goods']['iteration']++;
?>
        <li 
        
        <?php if ($this->_foreach['cat_item_goods']['iteration'] == 1): ?>
        class='fore'
        <?php endif; ?>
        > <span><?php echo $this->_foreach['cat_item_goods']['iteration']; ?></span>
        <div class="p-img"><a href='<?php echo $this->_var['goods_item']['url']; ?>'><img src="<?php echo $this->_var['goods_item']['thumb']; ?>" width="50" height="50" onerror="this.src='themes/360buy/images/none_50.gif'"/></a></div>
        <div class="p-name"><a href='<?php echo $this->_var['goods_item']['url']; ?>' title='<?php echo htmlspecialchars($this->_var['goods_item']['name']); ?>'><?php echo $this->_var['goods_item']['short_style_name']; ?></a></div>
        <div class="p-price"><strong>
          <?php if ($this->_var['goods_item']['promote_price'] != ""): ?>
          <?php echo $this->_var['goods_item']['promote_price']; ?>
          <?php else: ?>
          <?php echo $this->_var['goods_item']['shop_price']; ?>
          <?php endif; ?>
          </strong></div>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
    </div>
  </div>
  
  <script type="text/javascript">
			$.fn.jdSonny=function(option,callback){
				if(typeof option=="function"){callback=option;option={};};
				var s=$.extend({current:"curr",delay:50,index:0},option||{});
				var _this=this;
				var timer=null;
				$.each(this,function(n){
					$(this).bind("mouseover",function(){
						if(timer!=null)clearTimeout(timer);
						var obj=$(this);
						timer=setTimeout(function(){
							_this.eq(s.index).removeClass(s.current);
							s.index=n;
							_this.eq(s.index).addClass(s.current);
							if (callback){callback(obj);}
						},s.delay);
					})
				})
			}
			
			$(".rank .tabcon").eq(0).find("li").jdSonny({current:"fore"},function(object){
				object.find("img").each(function(){
					var src2=$(this).attr("src2");
					$(this).attr("src",src2);
					$(this).removeAttr("src2");
				})
			});
			
			$(".rank .tabcon").eq(1).find("li").jdSonny({current:"fore"});
			
			$(".rank .tabcon").eq(2).find("li").jdSonny({current:"fore"});
			
			$(".rank").jdTab(function(url,object,n){
				object.find("img").each(function(){
					var src2=$(this).attr("src2");
					$(this).attr("src",src2);
					$(this).removeAttr("src2");
				})
			});
			</script>
  <div id="related-buy" class="m m0">
    <div class="mt">
      <h2>购买过此商品的人还购买过</h2>
    </div>
    <div class="mc">
      <ul>
        <?php $_from = $this->_var['bought_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bought_goods_data');$this->_foreach['bought_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bought_goods']['total'] > 0):
    foreach ($_from AS $this->_var['bought_goods_data']):
        $this->_foreach['bought_goods']['iteration']++;
?>
        <li 
        
        <?php if ($this->_foreach['bought_goods']['iteration'] == 1): ?>
        class='fore'
        <?php endif; ?>
        >
        <div class="p-img"><a href="<?php echo $this->_var['bought_goods_data']['url']; ?>"><img width="100" height="100" alt="<?php echo $this->_var['bought_goods_data']['goods_name']; ?>" onerror="this.src='themes/360buy/images/none_150.gif'" src="<?php echo $this->_var['bought_goods_data']['goods_thumb']; ?>"/></a></div>
        <div class="rate"><?php echo $this->_var['bought_goods_data']['short_name']; ?></div>
        <div class="p-price"><strong>
          <?php if ($this->_var['bought_goods_data']['promote_price'] != 0): ?>
          <?php echo $this->_var['bought_goods_data']['formated_promote_price']; ?>
          <?php else: ?>
          <?php echo $this->_var['bought_goods_data']['shop_price']; ?>
          <?php endif; ?>
          </strong></div>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
    </div>
  </div>
  <div class="m rank hide" id="similar-jdlife"></div>
  
  <?php echo $this->fetch('library/history.lbi'); ?>
  
  
</div>

<span class="clr"></span>
</div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>
<script type="text/javascript" src="themes/360buy/images/misc/201007/js/p.pshow20110623.js"></script>



<script type="text/javascript">
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;


onload = function(){
  changePrice();
  try {}
  catch (e) {}
}


function changeAtt(t) {

var obj = document.getElementById('spec_value_'+t.getAttribute("name"));
if (obj){
	obj.checked='checked';
}
for (var i = 0; i<t.parentNode.childNodes.length;i++) {
        if (t.parentNode.childNodes[i].className == 'selected') {
            t.parentNode.childNodes[i].className = '';
        }
    }
t.className = "selected";
get_select_goods_attr();
changePrice();


}

/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;

  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}

/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;
	
	if (res.shop_price)
      document.getElementById('goods_shop_price').innerHTML = res.shop_price;
	
    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}

</script>
</body>
</html>


