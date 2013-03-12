<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
<meta name="Generator" content="ECSHOP v2.7.1" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
        <meta name="Description" content="<?php echo $this->_var['description']; ?>" />
        <title><?php echo $this->_var['page_title']; ?></title>
        <link rel="stylesheet" type="text/css" href="themes/360buy/images/misc/201007/skin/df/plist20120221.css" media="all" />

    </head>
    <body>

        <?php echo $this->fetch('library/page_header.lbi'); ?>

        <div class="w">
            <div class="breadcrumb"> <?php echo $this->fetch('library/ur_here.lbi'); ?> </div>
        </div>
        
        <div class="w main">
            <div class="right-extra">
                <?php
                $top_cat_id = get_top_class_cat($GLOBALS['smarty']->_var['category']);
                $GLOBALS['smarty']->assign('best_goods', get_cat_recommend_goods('best', get_children($top_cat_id), 3));
                ?>

                <?php if ($this->_var['best_goods']): ?>
                <div class="m" id="i-right">
                    <div id="hotsale" clstag="thirdtype|keycount|thirdtype|hotsaleM">
                        <div class="mt">
                            <h2>热卖推荐</h2>
                        </div>
                        <div class="mc list-h" rfid=326>
                            <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['best_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['best_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['best_goods']['iteration']++;
?>
                            <dl>
                                <dt><a target="_blank" href='<?php echo $this->_var['goods']['url']; ?>'  title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" width="100" height="100" alt='<?php echo htmlspecialchars($this->_var['goods']['name']); ?>' /></a></dt>
                                <dd>
                                    <div class="p-name"><a target="_blank" href='<?php echo $this->_var['goods']['url']; ?>' title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['name']; ?></a></div>
                                    <div class="p-price" >特价：<strong><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?>
                                        </strong></div>
                                    <div class="btns"><a target="_blank" href="<?php echo $this->_var['goods']['url']; ?>">立即抢购</a></div>
                                </dd>
                            </dl>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>


                        </div>
                    </div>
                    <div id="market" clstag="thirdtype|keycount|thirdtype|market">
                        <div class="mt">
                            <h2>促销活动</h2>
                        </div>
                        <div class="mc">
                            <ul>
                                <?php
                                $top_cat_id = get_top_class_cat($GLOBALS['smarty']->_var['category']);
                                $cat_info = get_cat_info_ex($top_cat_id);
                                $GLOBALS['smarty']->assign('index_cat_right_text',get_advlist('分类页-分类ID'.$top_cat_id.'-促销广告', 5));
                                ?>
                                <?php $_from = $this->_var['index_cat_right_text']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');if (count($_from)):
    foreach ($_from AS $this->_var['ad']):
?>
                                <li>·<a  Target="_blank"  href="<?php echo $this->_var['ad']['url']; ?>"><?php echo $this->_var['ad']['name']; ?> </a></li>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <?php endif; ?>
                <?php if ($this->_var['is_goods']): ?>
                  <?php
                $cat_info = get_cat_info_ex($GLOBALS['smarty']->_var['category']);
                $GLOBALS['smarty']->assign('cat_name',$cat_info['cat_name']);
                ?>
                <div class="description">
                    <div class="imgbox">
                        <img src="<?php echo $this->_var['cat_info']['cat_img']; ?>"/>
                    </div>
                </div>
                <div class="tableContainer" style="width:745px">
               <?php echo $this->fetch('library/goods_list1.lbi'); ?>
                </div>
               <div class="tech">
                   <div class="title">技术信息</div>
                   <div class="install"><?php echo $this->_var['cat_info']['use_img']; ?></div>
                   
                   <div class="installl_info">
                       <div class=""><?php echo $this->_var['cat_info']['cat_desc']; ?></div>
                       <div class=""><?php echo $this->_var['cat_info']['cat_video']; ?></div>
                   </div>
               </div>
                <?php else: ?>
                <?php if ($this->_var['brands']['1'] || $this->_var['price_grade']['1'] || $this->_var['filter_attr_list']): ?>
                <?php
                $cat_info = get_cat_info_ex($GLOBALS['smarty']->_var['category']);
                $GLOBALS['smarty']->assign('cat_name',$cat_info['cat_name']);
                ?>
                <div id="select" class="m" clstag="thirdtype|keycount|thirdtype|select">
                    <div class="mt">
                        <h1><?php echo $this->_var['cat_name']; ?></h1>
                        <strong>&nbsp;-&nbsp;商品筛选</strong>
                        <div class="extra"><a href="category.php?id=<?php echo $this->_var['category']; ?>">重置筛选条件</a></div>
                    </div>
                    <?php if ($this->_var['brands']['1']): ?>
                    <dl  class='fore'  id='select-brand'>
                        <dt>品牌：</dt>
                        <dd>
                            <div class='content'>
                                <?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['brand']):
?>
                                <div><a href='<?php echo $this->_var['brand']['url']; ?>' <?php if ($this->_var['brand']['selected']): ?>class="curr"<?php endif; ?>><?php echo $this->_var['brand']['brand_name']; ?></a></div>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </div>
                        </dd>
                    </dl>
                    <?php endif; ?>
                    <?php if ($this->_var['price_grade']['1']): ?>
                    <dl  >
                        <dt>价格：</dt>
                        <dd>
                            <?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'grade');if (count($_from)):
    foreach ($_from AS $this->_var['grade']):
?>
                            <div><a href='<?php echo $this->_var['grade']['url']; ?>' <?php if ($this->_var['grade']['selected']): ?>class="curr"<?php endif; ?>><?php echo $this->_var['grade']['price_range']; ?></a></div>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </dd>
                    </dl>
                    <?php endif; ?>

                    <?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_41813400_1363072140');if (count($_from)):
    foreach ($_from AS $this->_var['filter_attr_0_41813400_1363072140']):
?>
                    <dl  >
                        <dt><?php echo htmlspecialchars($this->_var['filter_attr_0_41813400_1363072140']['filter_attr_name']); ?> ：</dt>
                        <dd>
                            <?php $_from = $this->_var['filter_attr_0_41813400_1363072140']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
                            <div><a href='<?php echo $this->_var['attr']['url']; ?>' <?php if ($this->_var['attr']['selected']): ?>class="curr"<?php endif; ?>><?php echo $this->_var['attr']['attr_value']; ?></a></div>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </dd>
                    </dl>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </div>
                
                <div id="advanced" style="border:0px; margin-bottom:10px"> </div>
                <?php endif; ?>



                <?php echo $this->fetch('library/goods_list.lbi'); ?>

                <?php echo $this->fetch('library/pages_cat.lbi'); ?>
                <?php endif; ?>
            </div>
            

            <div class="left">
                <?php
                $GLOBALS['smarty']->assign('top_cat_id', get_top_class_cat($GLOBALS['smarty']->_var['category']));
                $GLOBALS['smarty']->assign('categories',       get_categories_tree($GLOBALS['smarty']->_var['top_cat_id'])); // 分类树
                ?>
                <?php echo $this->fetch('library/cat_tree.lbi'); ?>
                <div class="m limitbuy hide" id="limitbuy537" clstag="thirdtype|keycount|thirdtype|limitbuy536">
                    <div class="mt">
                        <h2>消费电子限时抢购</h2>
                    </div>
                    <div class="mc">
                        <div class="clock" id="clock537">正在加载…</div>
                        <div id="limit537"></div>
                    </div>
                </div>
                
                <?php
                $top_cat_id = get_top_class_cat($GLOBALS['smarty']->_var['category']);
                $GLOBALS['smarty']->assign('top_cat_id', $top_cat_id);
                $GLOBALS['smarty']->assign('new_goods', get_cat_recommend_goods('new', get_children($top_cat_id), 5));
                ?>
                <?php echo $this->fetch('library/goods_new.lbi'); ?>
                
                <?php
                $top_cat_id = get_top_class_cat($GLOBALS['smarty']->_var['category']);
                $GLOBALS['smarty']->assign('hot_goods', get_cat_recommend_goods('hot', get_children($top_cat_id), 10));
                ?>
                <?php echo $this->fetch('library/goods_hot.lbi'); ?>
                
                <div id="alsobuy" class="hide m m0"></div>
                
                <?php echo $this->fetch('library/history.lbi'); ?>
                <div class="m" clstag="thirdtype|keycount|thirdtype|m" id="da211x261-1"> </div>
            </div>
            
            <span class="clr"></span>
            <div id="Collect_Tip" class="Tip360 w260"></div>
        </div>
        <?php echo $this->fetch('library/page_footer.lbi'); ?>

    </body>
</html>

