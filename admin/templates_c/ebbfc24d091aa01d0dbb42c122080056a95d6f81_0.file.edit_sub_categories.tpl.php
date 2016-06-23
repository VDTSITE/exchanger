<?php /* Smarty version 3.1.25, created on 2016-04-25 18:46:33
         compiled from "/home/vdtvdt/vdt.site/yo/admin/templates/edit_sub_categories.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1430089490571e3bd9e64fd1_65681898%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebbfc24d091aa01d0dbb42c122080056a95d6f81' => 
    array (
      0 => '/home/vdtvdt/vdt.site/yo/admin/templates/edit_sub_categories.tpl',
      1 => 1461599138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1430089490571e3bd9e64fd1_65681898',
  'variables' => 
  array (
    'name' => 0,
    'cat' => 0,
    'idc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_571e3bd9e893c5_14824363',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571e3bd9e893c5_14824363')) {
function content_571e3bd9e893c5_14824363 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1430089490571e3bd9e64fd1_65681898';
?>
<div class="col-lg-6">

						<!-- Box Start -->
						<div class="box">

							<!-- Title Bar Start -->
							<div class="box-title">
								<span class="gray">Редактирование подкатегории</span>
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">

								<form action="edit_sub_categories.php" method="POST" class="basic-form" enctype="multipart/form-data">

									<label for="title">Введите название подкатегории</label>
									<input type="text" name="name" placeholder="Введите название подкатегории" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" /><br />

									<label for="photo">Выберите обложку подкатегории</label>
									<input type="file" name="new_photo" placeholder="Выберите обложку подкатегории" /><br />


									<label for="id_cat">Выберите категорию:</label>
									<select id="dropdown" name="id_cat">
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['cat']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
										<option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</option>
										<?php endfor; endif; ?>
										
									</select><br />

									<input type="hidden" name="idc" value=<?php echo $_smarty_tpl->tpl_vars['idc']->value;?>
>
									<input type="submit" name="edit_sub_categorie" value="Редактировать">
									

								</form>

							</div>
							<!-- Content End -->

						</div>
						<!-- Box End -->

					</div><?php }
}
?>