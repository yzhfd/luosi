<?php if ($this->_var['comment_type'] == 0): ?>
<div id="comments_b1" class="mc tabcon" style="display: block;">
      <?php
	        
	         $cmt = assign_commentex($GLOBALS['smarty']->_var['id'],   $GLOBALS['smarty']->_var['comment_type'], $GLOBALS['smarty']->_var['pager']['page'], 0);
    		 $GLOBALS['smarty']->assign('comments',     $cmt['comments']);
    		 $GLOBALS['smarty']->assign('pager',        $cmt['pager']);
	  ?>
    <script>
	$('#comments_count1').html('<?php echo $this->_var['pager']['record_count']; ?>');
	$('#goods_comment_num').html('<?php echo $this->_var['pager']['record_count']; ?>');
	</script>
	<?php $_from = $this->_var['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comment');$this->_foreach['comments'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['comments']['total'] > 0):
    foreach ($_from AS $this->_var['comment']):
        $this->_foreach['comments']['iteration']++;
?>
      <div class="item">
        <div class="user">
          <div class="u-icon"> <a> <img width="50" height="50" src="themes/360buy/images/user_logo.gif"/> </a> </div>
          <div class="u-name"> <a><?php if ($this->_var['comment']['username']): ?><?php echo htmlspecialchars($this->_var['comment']['username']); ?><?php else: ?><?php echo $this->_var['lang']['anonymous']; ?><?php endif; ?></a></div>
        </div>
        <div class="i-item">
          <div class="o-topic"><span class="star sa<?php echo $this->_var['comment']['rank']; ?>"></span><span class="date-comment"> <?php echo $this->_var['comment']['add_time']; ?></span></div>
          <div class="comment-content">
            <dl>
              <dt>使用心得：</dt>
              <dd> <?php echo $this->_var['comment']['content']; ?></dd>
            </dl>
         
          </div>
        </div>
        <div class="corner tl"> </div>
        <div class="corner tr"> </div>
        <div class="corner b"> </div>
        <div class="corner bl"> </div>
        <div class="corner br"> </div>
      </div>
	  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    
    <div class="clearfix">
        <div id="commentsPage0" class="pagin fr">
		<form name="selectPageForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" style="margin:0px;">
        <table width="380px" align="right">
          <tr>
            <td align="right"><?php echo $this->_var['lang']['pager_1']; ?><?php echo $this->_var['pager']['record_count']; ?><?php echo $this->_var['lang']['pager_2']; ?> <?php echo $this->_var['pager']['page']; ?>/<?php echo $this->_var['pager']['page_count']; ?></td>
            <td align="right"><a href="<?php echo $this->_var['pager']['page_first']; ?>"><?php echo $this->_var['lang']['page_first']; ?></a> <a href="<?php echo $this->_var['pager']['page_prev']; ?>"><?php echo $this->_var['lang']['page_prev']; ?></a> <a href="<?php echo $this->_var['pager']['page_next']; ?>"><?php echo $this->_var['lang']['page_next']; ?></a> <a href="<?php echo $this->_var['pager']['page_last']; ?>"><?php echo $this->_var['lang']['page_last']; ?></a></td>
          </tr>
        </table>
        <?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_44141000_1363075179');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_44141000_1363075179']):
?>
        <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['item_0_44141000_1363075179']; ?>" />
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </form>
		</div>
      </div>    
    </div>

    <div class="mc tabcon hide" id="comments_b2">
      <?php
	        
	         $cmt = assign_commentex($GLOBALS['smarty']->_var['id'],   $GLOBALS['smarty']->_var['comment_type'], $GLOBALS['smarty']->_var['pager']['page'], 1);
    		 $GLOBALS['smarty']->assign('comments',     $cmt['comments']);
    		 $GLOBALS['smarty']->assign('pager',        $cmt['pager']);
	  ?>
    <script>
	$('#comments_count2').html('<?php echo $this->_var['pager']['record_count']; ?>');

	</script>
	<?php $_from = $this->_var['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comment');$this->_foreach['comments'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['comments']['total'] > 0):
    foreach ($_from AS $this->_var['comment']):
        $this->_foreach['comments']['iteration']++;
?>
      <div class="item">
        <div class="user">
          <div class="u-icon"> <a> <img width="50" height="50" src="themes/360buy/images/user_logo.gif"/> </a> </div>
          <div class="u-name"> <a><?php if ($this->_var['comment']['username']): ?><?php echo htmlspecialchars($this->_var['comment']['username']); ?><?php else: ?><?php echo $this->_var['lang']['anonymous']; ?><?php endif; ?></a></div>
        </div>
        <div class="i-item">
          <div class="o-topic"><span class="star sa<?php echo $this->_var['comment']['rank']; ?>"></span><span class="date-comment"> <?php echo $this->_var['comment']['add_time']; ?></span></div>
          <div class="comment-content">
            <dl>
              <dt>使用心得：</dt>
              <dd> <?php echo $this->_var['comment']['content']; ?></dd>
            </dl>
         
          </div>
        </div>
        <div class="corner tl"> </div>
        <div class="corner tr"> </div>
        <div class="corner b"> </div>
        <div class="corner bl"> </div>
        <div class="corner br"> </div>
      </div>
	  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    
      <div class="clearfix">
        <div id="commentsPage0" class="pagin fr">
		<form name="selectPageForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" style="margin:0px;">
        <table width="380px" align="right">
          <tr>
            <td align="right"><?php echo $this->_var['lang']['pager_1']; ?><?php echo $this->_var['pager']['record_count']; ?><?php echo $this->_var['lang']['pager_2']; ?> <?php echo $this->_var['pager']['page']; ?>/<?php echo $this->_var['pager']['page_count']; ?></td>
            <td align="right"><a href="<?php echo $this->_var['pager']['page_first']; ?>"><?php echo $this->_var['lang']['page_first']; ?></a> <a href="<?php echo $this->_var['pager']['page_prev']; ?>"><?php echo $this->_var['lang']['page_prev']; ?></a> <a href="<?php echo $this->_var['pager']['page_next']; ?>"><?php echo $this->_var['lang']['page_next']; ?></a> <a href="<?php echo $this->_var['pager']['page_last']; ?>"><?php echo $this->_var['lang']['page_last']; ?></a></td>
          </tr>
        </table>
        <?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_44223500_1363075179');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_44223500_1363075179']):
?>
        <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['item_0_44223500_1363075179']; ?>" />
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </form>
		</div>
      </div>  
    </div>
    <div class="mc tabcon hide" id="comments_b3">
      <?php
	        
	         $cmt = assign_commentex($GLOBALS['smarty']->_var['id'],   $GLOBALS['smarty']->_var['comment_type'], $GLOBALS['smarty']->_var['pager']['page'], 2);
    		 $GLOBALS['smarty']->assign('comments',     $cmt['comments']);
    		 $GLOBALS['smarty']->assign('pager',        $cmt['pager']);
	  ?>
    <script>
	$('#comments_count3').html('<?php echo $this->_var['pager']['record_count']; ?>');
	</script>
	<?php $_from = $this->_var['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comment');$this->_foreach['comments'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['comments']['total'] > 0):
    foreach ($_from AS $this->_var['comment']):
        $this->_foreach['comments']['iteration']++;
?>
      <div class="item">
        <div class="user">
          <div class="u-icon"> <a> <img width="50" height="50" src="themes/360buy/images/user_logo.gif"/> </a> </div>
          <div class="u-name"> <a><?php if ($this->_var['comment']['username']): ?><?php echo htmlspecialchars($this->_var['comment']['username']); ?><?php else: ?><?php echo $this->_var['lang']['anonymous']; ?><?php endif; ?></a></div>
        </div>
        <div class="i-item">
          <div class="o-topic"><span class="star sa<?php echo $this->_var['comment']['rank']; ?>"></span><span class="date-comment"> <?php echo $this->_var['comment']['add_time']; ?></span></div>
          <div class="comment-content">
            <dl>
              <dt>使用心得：</dt>
              <dd> <?php echo $this->_var['comment']['content']; ?></dd>
            </dl>
         
          </div>
        </div>
        <div class="corner tl"> </div>
        <div class="corner tr"> </div>
        <div class="corner b"> </div>
        <div class="corner bl"> </div>
        <div class="corner br"> </div>
      </div>
	  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    
      <div class="clearfix">
        <div id="commentsPage0" class="pagin fr">
		<form name="selectPageForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" style="margin:0px;">
        <table width="380px" align="right">
          <tr>
            <td align="right"><?php echo $this->_var['lang']['pager_1']; ?><?php echo $this->_var['pager']['record_count']; ?><?php echo $this->_var['lang']['pager_2']; ?> <?php echo $this->_var['pager']['page']; ?>/<?php echo $this->_var['pager']['page_count']; ?></td>
            <td align="right"><a href="<?php echo $this->_var['pager']['page_first']; ?>"><?php echo $this->_var['lang']['page_first']; ?></a> <a href="<?php echo $this->_var['pager']['page_prev']; ?>"><?php echo $this->_var['lang']['page_prev']; ?></a> <a href="<?php echo $this->_var['pager']['page_next']; ?>"><?php echo $this->_var['lang']['page_next']; ?></a> <a href="<?php echo $this->_var['pager']['page_last']; ?>"><?php echo $this->_var['lang']['page_last']; ?></a></td>
          </tr>
        </table>
        <?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_44305500_1363075179');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_44305500_1363075179']):
?>
        <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['item_0_44305500_1363075179']; ?>" />
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </form>
		</div>
      </div>  
    </div>
    <div class="mc tabcon hide" id="comments_b4">
      <?php
	        
	         $cmt = assign_commentex($GLOBALS['smarty']->_var['id'],   $GLOBALS['smarty']->_var['comment_type'], $GLOBALS['smarty']->_var['pager']['page'], 3);
    		 $GLOBALS['smarty']->assign('comments',     $cmt['comments']);
    		 $GLOBALS['smarty']->assign('pager',        $cmt['pager']);
	  ?>
    <script>
	$('#comments_count4').html('<?php echo $this->_var['pager']['record_count']; ?>');
    comment_percent();
	</script>
	<?php $_from = $this->_var['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comment');$this->_foreach['comments'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['comments']['total'] > 0):
    foreach ($_from AS $this->_var['comment']):
        $this->_foreach['comments']['iteration']++;
?>
      <div class="item">
        <div class="user">
          <div class="u-icon"> <a> <img width="50" height="50" src="themes/360buy/images/user_logo.gif"/> </a> </div>
          <div class="u-name"> <a><?php if ($this->_var['comment']['username']): ?><?php echo htmlspecialchars($this->_var['comment']['username']); ?><?php else: ?><?php echo $this->_var['lang']['anonymous']; ?><?php endif; ?></a></div>
        </div>
        <div class="i-item">
          <div class="o-topic"><span class="star sa<?php echo $this->_var['comment']['rank']; ?>"></span><span class="date-comment"> <?php echo $this->_var['comment']['add_time']; ?></span></div>
          <div class="comment-content">
            <dl>
              <dt>使用心得：</dt>
              <dd> <?php echo $this->_var['comment']['content']; ?></dd>
            </dl>
         
          </div>
        </div>
        <div class="corner tl"> </div>
        <div class="corner tr"> </div>
        <div class="corner b"> </div>
        <div class="corner bl"> </div>
        <div class="corner br"> </div>
      </div>
	  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    
      <div class="clearfix">
        <div id="commentsPage0" class="pagin fr">
		<form name="selectPageForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" style="margin:0px;">
        <table width="380px" align="right">
          <tr>
            <td align="right"><?php echo $this->_var['lang']['pager_1']; ?><?php echo $this->_var['pager']['record_count']; ?><?php echo $this->_var['lang']['pager_2']; ?> <?php echo $this->_var['pager']['page']; ?>/<?php echo $this->_var['pager']['page_count']; ?></td>
            <td align="right"><a href="<?php echo $this->_var['pager']['page_first']; ?>"><?php echo $this->_var['lang']['page_first']; ?></a> <a href="<?php echo $this->_var['pager']['page_prev']; ?>"><?php echo $this->_var['lang']['page_prev']; ?></a> <a href="<?php echo $this->_var['pager']['page_next']; ?>"><?php echo $this->_var['lang']['page_next']; ?></a> <a href="<?php echo $this->_var['pager']['page_last']; ?>"><?php echo $this->_var['lang']['page_last']; ?></a></td>
          </tr>
        </table>
        <?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_44389900_1363075179');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_44389900_1363075179']):
?>
        <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['item_0_44389900_1363075179']; ?>" />
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </form>
		</div>
      </div>  
    </div>
	<a name="comment_form"></a> 
	<style>
	.choose_form{border:1px solid #EED97C;margin-top:10px}
	.choose_form:hover{border:1px solid #DF9A07;border-radius:1px;-moz-border-radius:1px;-moz-box-shadow:0 0 1px #f60;-webkit-border-radius:1px;-webkit-box-shadow:0 0 1px #f60;}
	</style>   
    <div class="mc choose_form" style=" display:none " id="comment_form">
	<form action="javascript:;" onsubmit="submitComment(this)" method="post" name="commentForm" id="commentForm">
      <table border="0" cellspacing="2" cellpadding="0" width="100%">
	    <tr>

          <td  colspan="2"  height="25px" style="font-size:14px; font-weight:bold; padding-left:10px; background-color:#F2F2F2; color:#CC3300">用户评价</td>
        </tr>
        <tr>
          <td width="85" height="25px" align="right"><?php echo $this->_var['lang']['username']; ?>：</td>
          <td <?php if (! $this->_var['enabled_captcha']): ?><?php endif; ?>><?php if ($_SESSION['user_name']): ?>
            <?php echo $_SESSION['user_name']; ?>
            <?php else: ?>
            <?php echo $this->_var['lang']['anonymous']; ?>
            <?php endif; ?></td>
        </tr>
        <tr>
          <td align="right" height="25px">E-mail：</td>
          <td><input type="text" name="email" id="email" class="form_email"  maxlength="100" value="<?php echo htmlspecialchars($_SESSION['email']); ?>" style="border:1px solid #ccc; height:22px; line-height:22px; "/>
          </td>
        </tr>
        <tr>
          <td align="right" height="25px"><?php echo $this->_var['lang']['comment_rank']; ?>：</td>
          <td>
		    <input type="radio" value="5" name="cmt_rank" checked="true" />5星
			<input type="radio" value="4" name="cmt_rank" />4星
			<input type="radio" value="3" name="cmt_rank" />3星
			<input type="radio" value="2" name="cmt_rank" />2星
			<input type="radio" value="1" name="cmt_rank" />1星
		  </td>
        </tr>
        <tr>
          <td align="right" valign="top" height="25px"><?php echo $this->_var['lang']['comment_content']; ?>：</td>
          <td><textarea name="content"  id="comment_content1" style="border:1px solid #ccc; height:100px; width:550px; font-size:12px"></textarea>
            <input type="hidden" name="cmt_type" value="<?php echo $this->_var['comment_type']; ?>" />
            
            <input type="hidden" name="id" value="<?php echo $this->_var['id']; ?>" />
          </td>
        </tr>
        <?php if ($this->_var['enabled_captcha']): ?>
        <tr>
          <td align="right" valign="top" height="25px"><?php echo $this->_var['lang']['comment_captcha']; ?>：</td>
          <td><div style="text-align:left; float:left;">
              <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td><input type="text" name="captcha"  style="border:1px solid #ccc; width:50px;height:22px; line-height:22px;"/></td>
                  <td align="left" style="padding-left:5px;"><img src="captcha.php?<?php echo $this->_var['rand']; ?>" style="cursor:pointer; height:26px" alt="看不清楚，点击刷新！" onClick="change_captcha()" class="captcha" id="captcha1"></td>
                </tr>
              </table>
            </div></td>
        </tr>
        <?php endif; ?>
        <tr>
		<td align="right" height="25px"></td>
          <td height="40px">
		  <input name="" type="submit"  value="  提交  " style="padding:2px 20px">

          </td>
        </tr>
      </table>
    </form>
	</div>
	
<script type="text/javascript">
//<![CDATA[
<?php $_from = $this->_var['lang']['cmt_lang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_44454600_1363075179');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_44454600_1363075179']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item_0_44454600_1363075179']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

/**
 * 提交评论信息
*/





function submitComment(frm)
{
  var cmt = new Object;
  //cmt.username        = frm.elements['username'].value;
  cmt.email           = frm.elements['email'].value;
  cmt.content         = frm.elements['content'].value;
  cmt.type            = frm.elements['cmt_type'].value;
  cmt.id              = frm.elements['id'].value;
  cmt.enabled_captcha = frm.elements['enabled_captcha'] ? frm.elements['enabled_captcha'].value : '0';
  cmt.captcha         = frm.elements['captcha'] ? frm.elements['captcha'].value : '';
  
  var rank = 0;
  var ranks = frm.elements['cmt_rank'];
  for (var i = 0; i < ranks.length; i ++){
  	if (ranks[i].checked){
		rank = ranks[i].value;
	}
  
  }
  cmt.rank = rank;

  if (cmt.rank == 5){
  	cmt.ip = 1;
  }else if (cmt.rank == 4 || cmt.rank == 3){
  	cmt.ip = 2;
  }else{
  	cmt.ip = 3;
  }

  
//  if (cmt.username.length == 0)
//  {
//     alert(cmt_empty_username);
//     return false;
//  }

  if (cmt.email.length > 0)
  {
     if (!(Utils.isEmail(cmt.email)))
     {
        alert(cmt_error_email);
        return false;
      }
   }
   else
   {
        alert(cmt_empty_email);
        return false;
   }

   if (cmt.content.length == 0)
   {
      alert(cmt_empty_content);
      return false;
   }

   if (cmt.enabled_captcha > 0 && cmt.captcha.length == 0 )
   {
      alert(captcha_not_null);
      return false;
   }
   
   Ajax.call('comment.php', 'cmt=' + objToJSONString(cmt), commentResponse, 'POST', 'JSON');

   return false;
}

/**
 * 处理提交评论的反馈信息
*/
  function commentResponse(result)
  {
    
    if (result.message)
    {
      alert(result.message);
    }

    if (result.error == 0)
    {
      document.getElementById('comment_content1').value = '';
      var layer = document.getElementById('ECS_COMMENT');

      if (layer)
      {
        //layer.innerHTML = result.content;
      }
    }
  }

//]]>
</script>
<?php endif; ?>
<?php if ($this->_var['comment_type'] == 2): ?>

<div id="qa_b1" class="mc tabcon fore" style="display: block;">
     <?php
	         $cmt = assign_commentex($GLOBALS['smarty']->_var['id'],   $GLOBALS['smarty']->_var['comment_type'], $GLOBALS['smarty']->_var['pager']['page'], 1);
    		 $GLOBALS['smarty']->assign('comments',     $cmt['comments']);
    		 $GLOBALS['smarty']->assign('pager',        $cmt['pager']);
	  ?>
        <?php $_from = $this->_var['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comment');$this->_foreach['user_qa'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['user_qa']['total'] > 0):
    foreach ($_from AS $this->_var['comment']):
        $this->_foreach['user_qa']['iteration']++;
?>
        <div class="item <?php if ($this->_foreach['user_qa']['iteration'] % 2 == 0): ?>odd<?php endif; ?>">
          <div class="user"> <span class="u-name">用户名：<?php echo $this->_var['comment']['username']; ?></span>
             <span class="date-ask"><?php echo $this->_var['comment']['add_time']; ?></span> </div>
          <dl class="ask">
            <dt>咨询内容：</dt>
            <dd><?php echo $this->_var['comment']['content']; ?></dd>
          </dl>
		  <?php if ($this->_var['comment']['re_content']): ?>
          <dl class="answer">
            <dt> 回复： </dt>
            <dd>
              <div class="content"> <?php echo $this->_var['comment']['re_content']; ?></div>
           
            </dd>
          </dl>
		  <?php endif; ?>
        </div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       <div class="extra clearfix" style="padding-right:0px">
           <div id="commentsPage0" class="pagin fr">
		<form name="selectPageForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" style="margin:0px;">
        <table width="380px" align="right">
          <tr>
            <td align="right"><?php echo $this->_var['lang']['pager_1']; ?><?php echo $this->_var['pager']['record_count']; ?><?php echo $this->_var['lang']['pager_2']; ?> <?php echo $this->_var['pager']['page']; ?>/<?php echo $this->_var['pager']['page_count']; ?></td>
            <td align="right"><a href="<?php echo $this->_var['pager']['page_first']; ?>"><?php echo $this->_var['lang']['page_first']; ?></a> <a href="<?php echo $this->_var['pager']['page_prev']; ?>"><?php echo $this->_var['lang']['page_prev']; ?></a> <a href="<?php echo $this->_var['pager']['page_next']; ?>"><?php echo $this->_var['lang']['page_next']; ?></a> <a href="<?php echo $this->_var['pager']['page_last']; ?>"><?php echo $this->_var['lang']['page_last']; ?></a></td>
          </tr>
        </table>
        <?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_44546900_1363075179');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_44546900_1363075179']):
?>
        <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['item_0_44546900_1363075179']; ?>" />
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </form>
		</div>  
          <div class="join"> 购买之前，如有问题，请咨询。 <a href="#qa_form">[发表咨询]</a> </div>
        </div> 
        
        
      </div>  
    

    <div class="mc tabcon hide" id="qa_b2">
      <?php
	         $cmt = assign_commentex($GLOBALS['smarty']->_var['id'],   $GLOBALS['smarty']->_var['comment_type'], $GLOBALS['smarty']->_var['pager']['page'], 2);
    		 $GLOBALS['smarty']->assign('comments',     $cmt['comments']);
    		 $GLOBALS['smarty']->assign('pager',        $cmt['pager']);
	  ?>
        <?php $_from = $this->_var['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comment');$this->_foreach['user_qa'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['user_qa']['total'] > 0):
    foreach ($_from AS $this->_var['comment']):
        $this->_foreach['user_qa']['iteration']++;
?>
        <div class="item <?php if ($this->_foreach['user_qa']['iteration'] % 2 == 0): ?>odd<?php endif; ?>">
          <div class="user"> <span class="u-name">用户名：<?php echo $this->_var['comment']['username']; ?></span>
             <span class="date-ask"><?php echo $this->_var['comment']['add_time']; ?></span> </div>
          <dl class="ask">
            <dt>咨询内容：</dt>
            <dd><?php echo $this->_var['comment']['content']; ?></dd>
          </dl>
		  <?php if ($this->_var['comment']['re_content']): ?>
          <dl class="answer">
            <dt> 回复： </dt>
            <dd>
              <div class="content"> <?php echo $this->_var['comment']['re_content']; ?></div>
           
            </dd>
          </dl>
		  <?php endif; ?>
        </div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       <div class="extra clearfix" style="padding-right:0px">
           <div id="commentsPage0" class="pagin fr">
		<form name="selectPageForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" style="margin:0px;">
        <table width="380px" align="right">
          <tr>
            <td align="right"><?php echo $this->_var['lang']['pager_1']; ?><?php echo $this->_var['pager']['record_count']; ?><?php echo $this->_var['lang']['pager_2']; ?> <?php echo $this->_var['pager']['page']; ?>/<?php echo $this->_var['pager']['page_count']; ?></td>
            <td align="right"><a href="<?php echo $this->_var['pager']['page_first']; ?>"><?php echo $this->_var['lang']['page_first']; ?></a> <a href="<?php echo $this->_var['pager']['page_prev']; ?>"><?php echo $this->_var['lang']['page_prev']; ?></a> <a href="<?php echo $this->_var['pager']['page_next']; ?>"><?php echo $this->_var['lang']['page_next']; ?></a> <a href="<?php echo $this->_var['pager']['page_last']; ?>"><?php echo $this->_var['lang']['page_last']; ?></a></td>
          </tr>
        </table>
        <?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_44630100_1363075179');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_44630100_1363075179']):
?>
        <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['item_0_44630100_1363075179']; ?>" />
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </form>
		</div>  
          <div class="join"> 购买之前，如有问题，请咨询。 <a href="#qa_form" id="">[发表咨询]</a> </div>
        </div> 
    </div>
    <div class="mc tabcon hide" id="qa_b3">
      <?php
	         $cmt = assign_commentex($GLOBALS['smarty']->_var['id'],   $GLOBALS['smarty']->_var['comment_type'], $GLOBALS['smarty']->_var['pager']['page'], 3);
    		 $GLOBALS['smarty']->assign('comments',     $cmt['comments']);
    		 $GLOBALS['smarty']->assign('pager',        $cmt['pager']);
	  ?>
        <?php $_from = $this->_var['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comment');$this->_foreach['user_qa'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['user_qa']['total'] > 0):
    foreach ($_from AS $this->_var['comment']):
        $this->_foreach['user_qa']['iteration']++;
?>
        <div class="item <?php if ($this->_foreach['user_qa']['iteration'] % 2 == 0): ?>odd<?php endif; ?>">
          <div class="user"> <span class="u-name">用户名：<?php echo $this->_var['comment']['username']; ?></span>
             <span class="date-ask"><?php echo $this->_var['comment']['add_time']; ?></span> </div>
          <dl class="ask">
            <dt>咨询内容：</dt>
            <dd><?php echo $this->_var['comment']['content']; ?></dd>
          </dl>
		  <?php if ($this->_var['comment']['re_content']): ?>
          <dl class="answer">
            <dt> 回复： </dt>
            <dd>
              <div class="content"> <?php echo $this->_var['comment']['re_content']; ?></div>
           
            </dd>
          </dl>
		  <?php endif; ?>
        </div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       <div class="extra clearfix" style="padding-right:0px">
           <div id="commentsPage0" class="pagin fr">
		<form name="selectPageForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" style="margin:0px;">
        <table width="380px" align="right">
          <tr>
            <td align="right"><?php echo $this->_var['lang']['pager_1']; ?><?php echo $this->_var['pager']['record_count']; ?><?php echo $this->_var['lang']['pager_2']; ?> <?php echo $this->_var['pager']['page']; ?>/<?php echo $this->_var['pager']['page_count']; ?></td>
            <td align="right"><a href="<?php echo $this->_var['pager']['page_first']; ?>"><?php echo $this->_var['lang']['page_first']; ?></a> <a href="<?php echo $this->_var['pager']['page_prev']; ?>"><?php echo $this->_var['lang']['page_prev']; ?></a> <a href="<?php echo $this->_var['pager']['page_next']; ?>"><?php echo $this->_var['lang']['page_next']; ?></a> <a href="<?php echo $this->_var['pager']['page_last']; ?>"><?php echo $this->_var['lang']['page_last']; ?></a></td>
          </tr>
        </table>
        <?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_44712000_1363075179');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_44712000_1363075179']):
?>
        <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['item_0_44712000_1363075179']; ?>" />
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </form>
		</div>  
          <div class="join"> 购买之前，如有问题，请咨询。 <a href="#qa_form" id="">[发表咨询]</a> </div>
        </div> 
    </div>
    <div class="mc tabcon hide" id="qa_b4">
      <?php
	         $cmt = assign_commentex($GLOBALS['smarty']->_var['id'],   $GLOBALS['smarty']->_var['comment_type'], $GLOBALS['smarty']->_var['pager']['page'], 4);
    		 $GLOBALS['smarty']->assign('comments',     $cmt['comments']);
    		 $GLOBALS['smarty']->assign('pager',        $cmt['pager']);
	  ?>
        <?php $_from = $this->_var['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comment');$this->_foreach['user_qa'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['user_qa']['total'] > 0):
    foreach ($_from AS $this->_var['comment']):
        $this->_foreach['user_qa']['iteration']++;
?>
        <div class="item <?php if ($this->_foreach['user_qa']['iteration'] % 2 == 0): ?>odd<?php endif; ?>">
          <div class="user"> <span class="u-name">用户名：<?php echo $this->_var['comment']['username']; ?></span>
             <span class="date-ask"><?php echo $this->_var['comment']['add_time']; ?></span> </div>
          <dl class="ask">
            <dt>咨询内容：</dt>
            <dd><?php echo $this->_var['comment']['content']; ?></dd>
          </dl>
		  <?php if ($this->_var['comment']['re_content']): ?>
          <dl class="answer">
            <dt> 回复： </dt>
            <dd>
              <div class="content"> <?php echo $this->_var['comment']['re_content']; ?></div>
           
            </dd>
          </dl>
		  <?php endif; ?>
        </div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       <div class="extra clearfix" style="padding-right:0px">
           <div id="commentsPage0" class="pagin fr">
		<form name="selectPageForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" style="margin:0px;">
        <table width="380px" align="right">
          <tr>
            <td align="right"><?php echo $this->_var['lang']['pager_1']; ?><?php echo $this->_var['pager']['record_count']; ?><?php echo $this->_var['lang']['pager_2']; ?> <?php echo $this->_var['pager']['page']; ?>/<?php echo $this->_var['pager']['page_count']; ?></td>
            <td align="right"><a href="<?php echo $this->_var['pager']['page_first']; ?>"><?php echo $this->_var['lang']['page_first']; ?></a> <a href="<?php echo $this->_var['pager']['page_prev']; ?>"><?php echo $this->_var['lang']['page_prev']; ?></a> <a href="<?php echo $this->_var['pager']['page_next']; ?>"><?php echo $this->_var['lang']['page_next']; ?></a> <a href="<?php echo $this->_var['pager']['page_last']; ?>"><?php echo $this->_var['lang']['page_last']; ?></a></td>
          </tr>
        </table>
        <?php $_from = $this->_var['pager']['search']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_44793400_1363075179');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_44793400_1363075179']):
?>
        <input type="hidden" name="<?php echo $this->_var['key']; ?>" value="<?php echo $this->_var['item_0_44793400_1363075179']; ?>" />
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </form>
		</div>  
          <div class="join"> 购买之前，如有问题，请咨询。 <a href="#qa_form" id="">[发表咨询]</a> </div>
        </div> 
    </div>
    <a name='qa_form'></a>
   <div class="mc  choose_form">
    <form action="javascript:;" onsubmit="submitQA(this)" method="post" name="commentForm" id="commentForm">
        <table border="0" cellspacing="2" cellpadding="0" width="100%">
	    <tr>

          <td  colspan="2"  height="25px" style="font-size:14px; font-weight:bold; padding-left:10px; background-color:#F2F2F2; color:#CC3300">用户咨询</td>
        </tr>
          <tr>
            <td width="85" height="25px" align="right"><?php echo $this->_var['lang']['username']; ?>：</td>
            <td align="left"><?php if ($_SESSION['user_name']): ?>
              <?php echo $_SESSION['user_name']; ?>
              <?php else: ?>
              <?php echo $this->_var['lang']['anonymous']; ?>
              <?php endif; ?></td>
          </tr>
          <tr>
            <td align="right" height="25px">E-mail：</td>
            <td align="left"><input type="text" name="email" id="email"  class="form_email" maxlength="100" value="<?php echo htmlspecialchars($_SESSION['email']); ?>" style="border:1px solid #ccc; height:22px; line-height:22px; "/>
            </td>
          </tr>
          <tr>
            <td align="right" height="25px">提问类型：</td>
            <td align="left">
			<input type="radio" value="1" name="qatype" />商品
			<input type="radio" value="2" name="qatype" />配送
			<input type="radio" value="3" name="qatype" />支付
			<input type="radio" value="4" name="qatype" />售后
			
            </td>
          </tr>
          <tr>
            <td align="right" valign="top" height="25px">内容：</td>
            <td align="left"><textarea name="content" id="comment_content2" style="border:1px solid #ccc; height:100px; width:550px; font-size:12px"></textarea>
              
            </td>
          </tr>
		 
		  <?php if ($this->_var['enabled_captcha']): ?>
          <tr>
		  <td align="right" valign="top" height="25px"><?php echo $this->_var['lang']['comment_captcha']; ?>：</td>
            <td>
              <div style="text-align:left; float:left;">
                <table border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td>
<input type="text" name="captcha"  style="border:1px solid #ccc; width:50px;height:22px; line-height:22px;"/></td>
                    <td align="left" style="padding-left:5px;"><img src="captcha.php?<?php echo $this->_var['rand']; ?>" style="cursor:pointer" alt="看不清楚，点击刷新！" onClick="change_captcha()" class="captcha" id="captcha2"></td>
                  </tr>
                </table>
              </div>
              
            </td>
          </tr>
		  <?php endif; ?>
          <tr>
		  <td align="right" valign="top" height="25px"></td>
            <td  height="40px">
			<input type="hidden" name="cmt_type" value="2" />
			<input type="hidden" name="cmt_rank" value="5" />
            <input type="hidden" name="id" value="<?php echo $this->_var['id']; ?>" />
			<input name="" type="submit"  value="  提交  " style="padding:2px 20px">
			
            </td>
          </tr>
        </table>
      </form>
  </div>


<script type="text/javascript">
//<![CDATA[
<?php $_from = $this->_var['lang']['cmt_lang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item_0_44838500_1363075179');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item_0_44838500_1363075179']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item_0_44838500_1363075179']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

/**
 * 提交评论信息
*/


$('.captcha').attr('src', 'captcha.php?<?php echo $this->_var['rand']; ?>');

function change_captcha(){
    $('.captcha').attr('src', 'captcha.php?'+Math.random());
}

$('.form_email').each(
	function(){
		if ($.trim($(this).val()) == '0'){
			$(this).val('');
		}
	}
);


function submitQA(frm)
{
  var cmt = new Object;

  
  //cmt.username        = frm.elements['username'].value;
  cmt.email           = frm.elements['email'].value;
  cmt.content         = frm.elements['content'].value;
  cmt.type            = frm.elements['cmt_type'].value;
  cmt.id              = frm.elements['id'].value;
  cmt.enabled_captcha = frm.elements['enabled_captcha'] ? frm.elements['enabled_captcha'].value : '0';
  cmt.captcha         = frm.elements['captcha'] ? frm.elements['captcha'].value : '';
  cmt.rank            = 5;
  
  var qatype = 0;
  var type = frm.elements['qatype'];
  for (var i = 0; i < type.length; i ++){
  	if (type[i].checked){
		qatype = type[i].value;
	}
  
  }
  cmt.ip = qatype;
  
//  if (cmt.username.length == 0)
//  {
//     alert(cmt_empty_username);
//     return false;
//  }

  if (cmt.email.length > 0)
  {
     if (!(Utils.isEmail(cmt.email)))
     {
        alert(cmt_error_email);
        return false;
      }
   }
   else
   {
        alert(cmt_empty_email);
        return false;
   }
   
   if (cmt.ip == 0)
   {
      alert('请选择提问类型！');
      return false;
   }

   if (cmt.content.length == 0)
   {
      alert(cmt_empty_content);
      return false;
   }

   if (cmt.enabled_captcha > 0 && cmt.captcha.length == 0 )
   {
      alert(captcha_not_null);
      return false;
   }
   
   Ajax.call('comment.php', 'cmt=' + objToJSONString(cmt), commentResponse2, 'POST', 'JSON');

   return false;
}

/**
 * 处理提交评论的反馈信息
*/
  function commentResponse2(result)
  {
    
    if (result.message)
    {
      alert(result.message);
    }
    
    if (result.error == 0)
    {
	  document.getElementById('comment_content2').value = '';
      var layer = document.getElementById('ECS_COMMENT2');

      if (layer)
      {
        layer.innerHTML = result.content;
      }
    }
  }

//]]>
</script>	
<?php endif; ?>

