<?php /* Smarty version Smarty-3.1.19, created on 2015-05-14 16:30:28
         compiled from "C:\wamp\www\luzozend\prestashop_1.6.0.14\prestashop\admin191sjqxth\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143255554b184822142-85255093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6f967f75b9126e4bd6f9e335e4bbde9042f0ffc' => 
    array (
      0 => 'C:\\wamp\\www\\luzozend\\prestashop_1.6.0.14\\prestashop\\admin191sjqxth\\themes\\default\\template\\content.tpl',
      1 => 1431611739,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143255554b184822142-85255093',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5554b184860959_87904499',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5554b184860959_87904499')) {function content_5554b184860959_87904499($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
