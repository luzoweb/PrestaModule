<?php /* Smarty version Smarty-3.1.19, created on 2015-05-14 17:07:06
         compiled from "C:\wamp\www\luzozend\prestashop_1.6.0.14\prestashop\admin191sjqxth\themes\default\template\helpers\kpi\row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187765554ba1a630dc0-91569415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9393c80071feecb7af93558108a484212662bfc2' => 
    array (
      0 => 'C:\\wamp\\www\\luzozend\\prestashop_1.6.0.14\\prestashop\\admin191sjqxth\\themes\\default\\template\\helpers\\kpi\\row.tpl',
      1 => 1431611740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187765554ba1a630dc0-91569415',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'kpis' => 0,
    'kpi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5554ba1a67efd2_86090086',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5554ba1a67efd2_86090086')) {function content_5554ba1a67efd2_86090086($_smarty_tpl) {?>
<div class="panel kpi-container">
	<div class="row">
		<div class="col-lg-2" style="float:right"><button class="close refresh" type="button" onclick="refresh_kpis();"><i class="process-icon-refresh" style="font-size:1em"></i></button></div>
		<?php  $_smarty_tpl->tpl_vars['kpi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kpi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kpis']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kpi']->key => $_smarty_tpl->tpl_vars['kpi']->value) {
$_smarty_tpl->tpl_vars['kpi']->_loop = true;
?>
		<div class="col-sm-5 col-lg-2">
			<?php echo $_smarty_tpl->tpl_vars['kpi']->value;?>

		</div>			
		<?php } ?>
	</div>
</div><?php }} ?>
