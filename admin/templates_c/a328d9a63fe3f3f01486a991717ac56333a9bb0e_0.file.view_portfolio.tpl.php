<?php /* Smarty version 3.1.25, created on 2016-05-06 12:38:02
         compiled from "/home/vdtvdt/vdt.site/yo/admin/templates/view_portfolio.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:886604668572c65faa777f6_36014999%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a328d9a63fe3f3f01486a991717ac56333a9bb0e' => 
    array (
      0 => '/home/vdtvdt/vdt.site/yo/admin/templates/view_portfolio.tpl',
      1 => 1462527482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '886604668572c65faa777f6_36014999',
  'variables' => 
  array (
    'photos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_572c65faaa41c6_36758028',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572c65faaa41c6_36758028')) {
function content_572c65faaa41c6_36758028 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '886604668572c65faa777f6_36014999';
?>
<div class="col-lg-10">
	<div class="row">
		Привет
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['photos']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
			<div class="col-lg-3">
				<img src="../images/<?php echo $_smarty_tpl->tpl_vars['photos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['photo'];?>
" alt="">
			</div>
			<div class="col-lg-3">
				<img src="../images/<?php echo $_smarty_tpl->tpl_vars['photos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['photo'];?>
" alt="">
			</div>
			<div class="col-lg-3">
				<img src="../images/<?php echo $_smarty_tpl->tpl_vars['photos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['photo'];?>
" alt="">
			</div>
		<?php endfor; endif; ?>
	</div>
</div><?php }
}
?>