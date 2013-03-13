<style>
#sortlist .mt{background-color:#D80000}
#sortlist .mt{height:24px;padding:3px 8px;background-color:#D80000;background-position:0 0;line-height:24px;}
#sortlist h2{color:#fff; text-align:center}
#sortlist .mc{border:solid #E6E6E6;border-width:0 1px 1px; background-color:#FCF4EA}
#sortlist ul{padding:6px 0 6px 6px;overflow:hidden;zoom:1;}
#sortlist li{float:left;width:95px;height:18px;padding:3px 6px 3px 0;overflow:hidden;}
.userMenu img{display:none}
</style>
<div class="m" id="sortlist">
    <div class="mt">
      <h2>会员中心</h2>
    </div>
    <div class="mc">
      <div class="userMenu" >
<a href="user.php" <?php if ($this->_var['action'] == 'default'): ?>class="curs"<?php endif; ?>><img src="themes/360buy/images/u1.gif"> 欢迎首页</a>
<a href="user.php?act=profile"<?php if ($this->_var['action'] == 'profile'): ?>class="curs"<?php endif; ?>><img src="themes/360buy/images/u2.gif"> <?php echo $this->_var['lang']['label_profile']; ?></a>
<a href="user.php?act=order_list"<?php if ($this->_var['action'] == 'order_list' || $this->_var['action'] == 'order_detail'): ?>class="curs"<?php endif; ?>><img src="themes/360buy/images/u3.gif"> <?php echo $this->_var['lang']['label_order']; ?></a>
<a href="user.php?act=address_list"<?php if ($this->_var['action'] == 'address_list'): ?>class="curs"<?php endif; ?>><img src="themes/360buy/images/u4.gif"> <?php echo $this->_var['lang']['label_address']; ?></a>
<a href="user.php?act=collection_list"<?php if ($this->_var['action'] == 'collection_list'): ?>class="curs"<?php endif; ?>><img src="themes/360buy/images/u5.gif"> <?php echo $this->_var['lang']['label_collection']; ?></a>
<a href="user.php?act=message_list"<?php if ($this->_var['action'] == 'message_list'): ?>class="curs"<?php endif; ?>><img src="themes/360buy/images/u6.gif"> <?php echo $this->_var['lang']['label_message']; ?></a>
<a href="user.php?act=tag_list"<?php if ($this->_var['action'] == 'tag_list'): ?>class="curs"<?php endif; ?>><img src="themes/360buy/images/u7.gif"> <?php echo $this->_var['lang']['label_tag']; ?></a>
<a href="user.php?act=booking_list"<?php if ($this->_var['action'] == 'booking_list'): ?>class="curs"<?php endif; ?>><img src="themes/360buy/images/u8.gif"> <?php echo $this->_var['lang']['label_booking']; ?></a>
<a href="user.php?act=bonus"<?php if ($this->_var['action'] == 'bonus'): ?>class="curs"<?php endif; ?>><img src="themes/360buy/images/u9.gif"> <?php echo $this->_var['lang']['label_bonus']; ?></a>
<?php if ($this->_var['affiliate']['on'] == 1): ?><a href="user.php?act=affiliate"<?php if ($this->_var['action'] == 'affiliate'): ?>class="curs"<?php endif; ?>><img src="themes/360buy/images/u10.gif"> <?php echo $this->_var['lang']['label_affiliate']; ?></a><?php endif; ?>
<a href="user.php?act=comment_list"<?php if ($this->_var['action'] == 'comment_list'): ?>class="curs"<?php endif; ?>><img src="themes/360buy/images/u11.gif"> <?php echo $this->_var['lang']['label_comment']; ?></a>
<!--<a href="user.php?act=group_buy"><?php echo $this->_var['lang']['label_group_buy']; ?></a>-->
<a href="user.php?act=track_packages"<?php if ($this->_var['action'] == 'track_packages'): ?>class="curs"<?php endif; ?>><img src="themes/360buy/images/u12.gif"> <?php echo $this->_var['lang']['label_track_packages']; ?></a>
<a href="user.php?act=account_log"<?php if ($this->_var['action'] == 'account_log'): ?>class="curs"<?php endif; ?>><img src="themes/360buy/images/u13.gif"> <?php echo $this->_var['lang']['label_user_surplus']; ?></a>
<?php if ($this->_var['show_transform_points']): ?>
<a href="user.php?act=transform_points"<?php if ($this->_var['action'] == 'transform_points'): ?>class="curs"<?php endif; ?>><img src="themes/360buy/images/u14.gif"> <?php echo $this->_var['lang']['label_transform_points']; ?></a>
<?php endif; ?>
<a href="user.php?act=logout" style=" color: #FF0000">退出中心</a>
</div>
    </div>
  </div>

