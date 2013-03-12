
<?php if ($this->_var['user_info']): ?>

您好，<?php echo $this->_var['user_info']['username']; ?>！<a class="link-logout" href="user.php?act=logout">[退出]</a>
<?php else: ?>
您好！欢迎来到<?php echo $this->_var['shop_name']; ?>！<a href="user.php">[登录]</a>&nbsp;<a href="user.php?act=register">[免费注册]</a>
<?php endif; ?>
