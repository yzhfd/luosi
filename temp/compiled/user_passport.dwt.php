<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<title><?php echo $this->_var['page_title']; ?></title>
<link type="text/css" rel="stylesheet" href="themes/360buy/images/passport/new/misc/skin/df/regist.entry.css"/>
<link type="text/css" rel="stylesheet" href="themes/360buy/images/passport/new/misc/skin/df/regist.personal.css"/>
<?php echo $this->smarty_insert_scripts(array('files'=>'user.js')); ?>
</head>
<body>
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


<div id="o-header" style=" margin-bottom:0px">
<div class="w" id="header">
<div id="logo" class="ld"><a href="index.php" hidefocus="true"><b></b><img src="themes/360buy/images/logo.gif" width="259" height="50"></a></div>


</div>


</div>



<div id="body" style="margin-bottom:20px; margin-top:0px">
  <?php if ($this->_var['action'] == 'login'): ?>
  <form name="formLogin" action="user.php" method="post" onSubmit="return userLogin()">
    <div class="w" id="entry">
      <div class="mt">
        <h2>用户登录</h2>
        <b></b> </div>
      <div class="mc" style="padding-top:20px;">
        <div class="form">
          <div class="item"> <span class="label">用户名：</span>
            <div class="fl">
              <input type="text" id="username" name="username" class="text" tabindex="1"
                               value=""/>
              <label id="loginname_succeed" class="blank invisible"></label>
              <span class="clr"></span>
              <label id="loginname_error"></label>
            </div>
          </div>
          <div class="item"> <span class="label">密码：</span>
            <div class="fl">
              <input type="password" id="password" name="password" class="text" tabindex="2"/>
              <label id="loginpwd_succeed" class="blank invisible"></label>
              <label><a href="user.php?act=get_password"
                                  class="flk13">忘记密码?</a></label>
              <span class="clr"></span>
              <label id="loginpwd_error"></label>
            </div>
          </div>
		  <?php if ($this->_var['enabled_captcha']): ?>
          <div class="item" id="o-authcode"> <span class="label">验证码：</span>
            <div class="fl">
              <input type="text" id="captcha" style="ime-mode:disabled" name="captcha" class="text text-1"
                               tabindex="6"/>
              <label class="img"> <img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()"  id="login_captcha"/> </label>
              <label class="ftx23">&nbsp;看不清？<a href="javascript:void(0)" onclick="verc()"
                                                          class="flk13">换一张</a></label>
              <label id="authcode_succeed" class="blank invisible"></label>
              <span class="clr"></span>
              <label id="authcode_error"></label>
            </div>
          </div>
		  <script language="javascript">
		  function verc(){
		  	$('#login_captcha').attr('src', 'captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>');
		  }
		  </script>
		  <?php endif; ?>
          <div class="item" id="autoentry"> <span class="label">&nbsp;</span>
            <div class="fl">
			<table cellpadding="0" cellspacing="0">
			<tr><td style="padding:0px"><input type="checkbox" value="1" name="remember" id="remember" /></td>
			<td style="padding:0px">记住用户名</td></tr>
			</table>
			

            </div>
          </div>
          <div class="item"> <span class="label">&nbsp;</span>
		  <input type="hidden" name="act" value="act_login" />
            <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
            <input type="submit" name="submit" class="btn-img btn-entry" value="登录" tabindex="8"/>
          </div>
        </div>
        <!--[if !ie]>form end<![endif]-->
        <div id="guide">
          <h5>还不是商城用户？</h5>
          <div class="content">现在免费注册成为商城用户，便能立刻享受便宜又放心的购物乐趣。</div>
          <a href="user.php?act=register" class="btn-link btn-personal">注册新用户</a> </div>
        <!--[if !ie]>guide end<![endif]-->
        <span class="clr"></span> </div>
      <!--[if !ie]>mc end<![endif]-->
    </div>
    <!--[if !ie]>regist end<![endif]-->
  </form>

  <?php endif; ?>
  <?php if ($this->_var['action'] == 'register'): ?>
  <div class="w" id="regist">
    <div class="mt">
      <h2> 注册新用户</h2>
      <b></b><span>我已经注册，现在就&nbsp;<a href="user.php" class="flk13">登录</a></span> </div>
    <div class="mc">
	<style>
	.reg_table td{padding-top:10px; padding-bottom:10px;}
	.reg_table .title{font-size:14px}
	</style>
	<form action="user.php" method="post" name="formUser" onsubmit="return register();">
      <table width="100%"  border="0" align="left" cellpadding="5" cellspacing="3" class="reg_table">
        <tr>
          <td width="35%" align="right" class="title"><?php echo $this->_var['lang']['label_username']; ?></td>
          <td width="65%">
          <input name="username" type="text" size="25" id="username" onblur="is_registered(this.value);" class="text"/>
            <span id="username_notice" style="color:#FF0000"> *</span>
          </td>
        </tr>
        <tr>
          <td align="right" class="title"><?php echo $this->_var['lang']['label_email']; ?></td>
          <td>
          <input name="email" type="text" size="25" id="email" onblur="checkEmail(this.value);"  class="text"/>
            <span id="email_notice" style="color:#FF0000"> *</span>
          </td>
        </tr>
        <tr>
          <td align="right" class="title"><?php echo $this->_var['lang']['label_password']; ?></td>
          <td>
          <input name="password" type="password" id="password1" onblur="check_password(this.value);" onkeyup="checkIntensity(this.value)" class="text"  />
            <span style="color:#FF0000" id="password_notice"> *</span>
          </td>
        </tr>
        <tr>
          <td align="right" class="title"><?php echo $this->_var['lang']['label_password_intensity']; ?></td>
          <td>
            <table width="248" border="0" cellspacing="0" cellpadding="1" bgcolor="#f2f2f2" style=" height:20px; border:1px solid  #FFFFFF">
              <tr align="center">
                <td width="33%" id="pwd_lower" style="padding:5px 0px" class="title"><?php echo $this->_var['lang']['pwd_lower']; ?></td>
                <td width="33%" id="pwd_middle" style="padding:0px" class="title"><?php echo $this->_var['lang']['pwd_middle']; ?></td>
                <td width="33%" id="pwd_high" style="padding:0px" class="title"><?php echo $this->_var['lang']['pwd_high']; ?></td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td align="right" class="title"><?php echo $this->_var['lang']['label_confirm_password']; ?></td>
          <td>
          <input name="confirm_password" type="password" id="conform_password" onblur="check_conform_password(this.value);"  class="text" />
            <span style="color:#FF0000" id="conform_password_notice"> *</span>
          </td>
        </tr>
        <?php $_from = $this->_var['extend_info_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'field');if (count($_from)):
    foreach ($_from AS $this->_var['field']):
?>
	<?php if ($this->_var['field']['id'] == 6): ?>

	<?php else: ?>
        <tr>
          <td  class="title" align="right" <?php if ($this->_var['field']['is_need']): ?>id="extend_field<?php echo $this->_var['field']['id']; ?>i"<?php endif; ?>><?php echo $this->_var['field']['reg_field_name']; ?>
          <td>
          <input name="extend_field<?php echo $this->_var['field']['id']; ?>" type="text" size="25" class="text" /><?php if ($this->_var['field']['is_need']): ?><span style="color:#FF0000"> *</span><?php endif; ?>
          </td>
        </tr>
	<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php if ($this->_var['enabled_captcha']): ?>
      <tr>
      <td align="right" class="title"><?php echo $this->_var['lang']['comment_captcha']; ?></td>
      <td>
	  <table cellpadding="0" cellspacing="0">
	  <tr><td><input type="text" size="8" name="captcha" class="text" style="width:100px" maxlength="4" /></td>
	  <td style="padding-left:2px"><img src="captcha.php?<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?'+Math.random()" /></td></tr>
	  </table>
	  
       </td>
      </tr>
      <?php endif; ?>
        <tr>
          <td>&nbsp;</td>
          <td><label>
            <input name="agreement" type="checkbox" value="1" checked="checked" />
            <?php echo $this->_var['lang']['agreement']; ?></label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td align="left">
          <input name="act" type="hidden" value="act_register" >
          <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
          <input  name="Submit" type="submit" class="btn-img btn-regist" value="同意协议，提交" tabindex="8"/>
          </td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
      
      </table>
    </form>
      
    </div>
    <!--[if !ie]>mc end<![endif]-->
  </div>
  <?php endif; ?>
  <?php if ($this->_var['action'] == 'get_password'): ?>
  <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
  <script type="text/javascript">
    <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
      var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </script>
  <div class="w" id="entry">
    <div class="mt">
      <h2>找回密码</h2>
      <b></b> </div>
	  <form action="user.php" method="post" name="getPassword" onsubmit="return submitPwdInfo();">
    <div class="mc" style="padding-top:20px;">
      <div class="form">
        <div class="ac flk13 ftx24" style="width:480px;height:21px;line-height:21px;padding:2px 4px;margin:0 auto 20px;">忘记了密码？请输入用户名和注册时填写的邮箱，我们会把重设密码邮件发送到您的邮箱！</div>
        <div class="item"> <span class="label">用户名：</span>
          <div class="fl">
            <input type="text" id="user_name" name="user_name" class="text" tabindex="1"/>
            <label id="tbxNickname_succeed" class="blank invisible"></label>
            <span class="clr"></span>
            <label id="tbxNickname_error"></label>
          </div>
        </div>
        <script type="text/javascript">
			</script>
        <div class="item"> <span class="label">邮箱：</span>
          <div class="fl">
            <input type="text" id="email" name="email" class="text" tabindex="2"/>
            <label id="tbxEmail_succeed" class="blank invisible"></label>
            <span class="clr"></span>
            <div id="tbxEmail_error"></div>
          </div>
        </div>
        
        <div class="item"> <span class="label">&nbsp;</span>
		<input type="hidden" name="act" value="send_pwd_email" />
          <input  type="submit" name="submit" class="btn-img btn-entry" value="完成" tabindex="5"/>
        </div>
      </div>
      <!--[if !ie]>form end<![endif]-->
      <span class="clr"></span> </div>
	  
	  </form>
    <!--[if !ie]>mc end<![endif]-->
  </div>
  
  
  <?php endif; ?>
  <?php if ($this->_var['action'] == 'reset_password'): ?>
  <script type="text/javascript">
    <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
      var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </script>
	<div class="w" id="entry">
    <div class="mt">
      <h2>重设密码</h2>
      <b></b> </div>
	   <form action="user.php" method="post" name="getPassword2" onSubmit="return submitPwd()">
    <div class="mc" style="padding-top:20px;">
      <div class="form">
       
        <div class="item"> <span class="label"><?php echo $this->_var['lang']['new_password']; ?>：</span>
          <div class="fl">
            <input type="password" id="new_password" name="new_password" class="text" tabindex="1"/>
            <label id="tbxNickname_succeed" class="blank invisible"></label>
            <span class="clr"></span>
            <label id="tbxNickname_error"></label>
          </div>
        </div>
        <script type="text/javascript">
			</script>
        <div class="item"> <span class="label"><?php echo $this->_var['lang']['confirm_password']; ?>：</span>
          <div class="fl">
            <input type="password" id="confirm_password" name="confirm_password" class="text" tabindex="2"/>
            <label id="tbxEmail_succeed" class="blank invisible"></label>
            <span class="clr"></span>
            <div id="tbxEmail_error"></div>
          </div>
        </div>
        
        <div class="item"> <span class="label">&nbsp;</span>
		 <input type="hidden" name="act" value="act_edit_password" />
            <input type="hidden" name="uid" value="<?php echo $this->_var['uid']; ?>" />
            <input type="hidden" name="code" value="<?php echo $this->_var['code']; ?>" />
          <input  type="submit" name="submit" class="btn-img btn-entry" value="完成" tabindex="5"/>
        </div>
      </div>
      <!--[if !ie]>form end<![endif]-->
      <span class="clr"></span> </div>
	  
	  </form>
    <!--[if !ie]>mc end<![endif]-->
  </div>
  <?php endif; ?>
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
<script language="javascript">
(function($) {
	$('.text').focus(
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
<script language="javascript">$('#service').hide();</script>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
</script>
</body>
</html>

