<?php /* Smarty version Smarty-3.1.19, created on 2015-05-14 16:06:55
         compiled from "C:\wamp\www\luzozend\prestashop_1.6.0.14\prestashop\themes\default-bootstrap\modules\crossselling\crossselling.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68845554abffee9431-29078522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7367c15bc627dd53b26f4a76fe46902018c8d878' => 
    array (
      0 => 'C:\\wamp\\www\\luzozend\\prestashop_1.6.0.14\\prestashop\\themes\\default-bootstrap\\modules\\crossselling\\crossselling.tpl',
      1 => 1431611720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68845554abffee9431-29078522',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orderProducts' => 0,
    'page_name' => 0,
    'orderProduct' => 0,
    'crossDisplayPrice' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
    'static_token' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5554ac004276c9_44964107',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5554ac004276c9_44964107')) {function content_5554ac004276c9_44964107($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['orderProducts']->value)&&count($_smarty_tpl->tpl_vars['orderProducts']->value)) {?>
    <section id="crossselling" class="page-product-box">
    	<h3 class="productscategory_h2 page-product-heading">
            <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='product') {?>
                <?php echo smartyTranslate(array('s'=>'Customers who bought this product also bought:','mod'=>'crossselling'),$_smarty_tpl);?>

            <?php } else { ?>
                <?php echo smartyTranslate(array('s'=>'We recommend','mod'=>'crossselling'),$_smarty_tpl);?>

            <?php }?>
        </h3>
    	<div id="crossselling_list">
            <ul id="crossselling_list_car" class="clearfix">
                <?php  $_smarty_tpl->tpl_vars['orderProduct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['orderProduct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orderProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['orderProduct']->key => $_smarty_tpl->tpl_vars['orderProduct']->value) {
$_smarty_tpl->tpl_vars['orderProduct']->_loop = true;
?>
                    <li class="product-box item" itemprop="isRelatedTo" itemscope itemtype="http://schema.org/Product">
                        <a class="lnk_img product-image" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['name']);?>
" >
                            <img itemprop="image" src="<?php echo $_smarty_tpl->tpl_vars['orderProduct']->value['image'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['name']);?>
" />
                        </a>
                        <div class="s_title_block">
                            <h5 itemprop="name" class="product-name">
                                <a itemprop="url" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['name']);?>
">
                                    <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['orderProduct']->value['name'],15,'...'), ENT_QUOTES, 'UTF-8', true);?>

                                </a>
                            </h5>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['crossDisplayPrice']->value&&$_smarty_tpl->tpl_vars['orderProduct']->value['show_price']==1&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                            <p class="price_display">
                                <span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['orderProduct']->value['displayed_price']),$_smarty_tpl);?>
</span>
                            </p>
                        <?php }?>
                        <div class="clearfix" style="margin-top:5px">
                            <?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&($_smarty_tpl->tpl_vars['orderProduct']->value['allow_oosp']||$_smarty_tpl->tpl_vars['orderProduct']->value['quantity']>0)) {?>
                                <div class="no-print">
                                    <a class="exclusive button ajax_add_to_cart_button" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['orderProduct']->value['id_product']);?>
<?php $_tmp18=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,null,"qty=1&amp;id_product=".$_tmp18."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value)."&amp;add"), ENT_QUOTES, 'UTF-8', true);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['orderProduct']->value['id_product']);?>
" title="<?php echo smartyTranslate(array('s'=>'Add to cart','mod'=>'crossselling'),$_smarty_tpl);?>
">
                                        <span><?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
</span>
                                    </a>
                                </div>
                            <?php }?>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </section>
<?php }?>
<?php }} ?>
