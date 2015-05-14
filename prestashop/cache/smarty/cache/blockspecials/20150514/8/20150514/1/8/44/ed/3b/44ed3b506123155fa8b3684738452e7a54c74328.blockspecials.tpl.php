<?php /*%%SmartyHeaderCode:107155554b12ee7b7d3-90705522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44ed3b506123155fa8b3684738452e7a54c74328' => 
    array (
      0 => 'C:\\wamp\\www\\luzozend\\prestashop_1.6.0.14\\prestashop\\themes\\default-bootstrap\\modules\\blockspecials\\blockspecials.tpl',
      1 => 1431611721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107155554b12ee7b7d3-90705522',
  'variables' => 
  array (
    'link' => 0,
    'special' => 0,
    'PS_CATALOG_MODE' => 0,
    'priceDisplay' => 0,
    'specific_prices' => 0,
    'priceWithoutReduction_tax_excl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5554b12f3fc0f8_56089372',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5554b12f3fc0f8_56089372')) {function content_5554b12f3fc0f8_56089372($_smarty_tpl) {?>
<!-- MODULE Block specials -->
<div id="special_block_right" class="block">
	<p class="title_block">
        <a href="http://prestashop.luzoweb/index.php?controller=prices-drop" title="Promotions">
            Promotions
        </a>
    </p>
	<div class="block_content products-block">
    		<ul>
        	<li class="clearfix">
            	<a class="products-block-image" href="http://prestashop.luzoweb/index.php?id_product=7&amp;controller=product">
                    <img 
                    class="replace-2x img-responsive" 
                    src="http://prestashop.luzoweb/img/p/2/0/20-small_default.jpg" 
                    alt="" 
                    title="Robe en mousseline imprimée" />
                </a>
                <div class="product-content">
                	<h5>
                        <a class="product-name" href="http://prestashop.luzoweb/index.php?id_product=7&amp;controller=product" title="Robe en mousseline imprimée">
                            Robe en mousseline imprimée
                        </a>
                    </h5>
                                        	<p class="product-description">
                            Robe en mousseline imprimée à...
                        </p>
                                        <div class="price-box">
                    	                        	<span class="price special-price">
                                                                    19,68 €                            </span>
                                                                                                                                 <span class="price-percent-reduction">-20%</span>
                                                                                         <span class="old-price">
                                                                    24,60 €                            </span>
                                            </div>
                </div>
            </li>
		</ul>
		<div>
			<a 
            class="btn btn-default button button-small" 
            href="http://prestashop.luzoweb/index.php?controller=prices-drop" 
            title="Toutes les promos">
                <span>Toutes les promos<i class="icon-chevron-right right"></i></span>
            </a>
		</div>
    	</div>
</div>
<!-- /MODULE Block specials -->
<?php }} ?>
