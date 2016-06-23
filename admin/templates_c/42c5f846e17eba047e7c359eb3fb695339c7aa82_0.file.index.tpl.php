<?php /* Smarty version 3.1.25, created on 2016-03-14 02:19:06
         compiled from "/home/vdtvdt/vdt.site/www/p0o9l8m1a2x3/templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:185225513256e6037a11aea6_49507864%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42c5f846e17eba047e7c359eb3fb695339c7aa82' => 
    array (
      0 => '/home/vdtvdt/vdt.site/www/p0o9l8m1a2x3/templates/index.tpl',
      1 => 1457910771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185225513256e6037a11aea6_49507864',
  'variables' => 
  array (
    'pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_56e6037a13dce6_23629043',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56e6037a13dce6_23629043')) {
function content_56e6037a13dce6_23629043 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '185225513256e6037a11aea6_49507864';
?>
<div class="box">



	<!-- Special Offer -->
			<div class="row">

				<div class="col-lg-12 text-center">
					<!-- Box Start -->
					<div class="box">
						<!-- Content Start -->
						<div class="content">
							<h1 style="color:#ff503f;font-weight: bold;">Добро пожаловать в администраторскую часть VDT.site</h1>
							<h3>Здесь Вы сможете с легкостью управлять страницами Вашего сайта!</h3>
						</div>
					</div>
				</div>

			</div>

	<!-- Title Bar Start -->
	<div class="box-title red">
		<span>Управление страницами</span>
	</div>
	<!-- Title Bar End -->

	<!-- Content Start -->
	<div class="content">
		<div class="row">
			<div class="col-lg-6">	
				<table class="regular-table non-stripped bordered hoverable">
					<thead>
					
					<th>Название страницы</th>
					<th>Управление</th>
					
					</thead>

					<tbody>

					<!-- Table Row Start -->
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
					<tr>
						
						<td><a href="<?php echo $_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
.php"><?php echo $_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</a></td>
						<td><a href="edit_pages.php?idp=<?php echo $_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
">Редактировать</a></td>
						
					</tr>
				<?php endfor; endif; ?>
					<!-- Table Row End -->
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- Content End -->

</div>
<?php }
}
?>