<?php /* Smarty version 3.1.25, created on 2016-06-02 00:57:16
         compiled from "/home/vdtvdt/vdt.site/exchanger1/admin/templates/edit_stock.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:587925746574f5a3c8ef883_11499344%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13fe265fdb44f68856ccfb53fb799fe4f24a4fc0' => 
    array (
      0 => '/home/vdtvdt/vdt.site/exchanger1/admin/templates/edit_stock.tpl',
      1 => 1464818235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '587925746574f5a3c8ef883_11499344',
  'variables' => 
  array (
    'type_operation' => 0,
    'currency' => 0,
    'id_currency' => 0,
    'percent' => 0,
    'k_oplate' => 0,
    'k_polucheniju' => 0,
    'ids' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_574f5a3c91f186_37453506',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_574f5a3c91f186_37453506')) {
function content_574f5a3c91f186_37453506 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '587925746574f5a3c8ef883_11499344';
?>
<div class="col-lg-6">

						<!-- Box Start -->
						<div class="box">

							<!-- Title Bar Start -->
							<div class="box-title">
								<span class="gray">Редактирование акции</span>
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">

								<form action="edit_stock.php" method="POST" class="basic-form" enctype="multipart/form-data">

									<label for="type_operation">Введите тип операции</label>
									<div class="radio">
									  <label>
									    <input type="radio" <?php if ($_smarty_tpl->tpl_vars['type_operation']->value == 0) {?>checked="checked"<?php }?> name="type_operation" id="" value="0">
									   	Ввод
									  </label>
									</div>
									<div class="radio">
									  <label>
									    <input type="radio" <?php if ($_smarty_tpl->tpl_vars['type_operation']->value == 1) {?>checked="checked"<?php }?> name="type_operation" id="" value="1">
									   	Вывод
									  </label>
									</div>



									

									<label for="id_currency">Выберите валюту</label>
									<select name="id_currency" id="">
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['currency']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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

										<option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['id_currency']->value == $_smarty_tpl->tpl_vars['currency']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['currency']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</option>

										<?php endfor; endif; ?>
									</select>


									<label for="percent">Введите процент</label>
									<input type="text" name="percent" id="" value="<?php echo $_smarty_tpl->tpl_vars['percent']->value;?>
">

									<label for="k_oplate">Введите сумму к оплате</label>
									<input type="text" name="k_oplate" id="" value="<?php echo $_smarty_tpl->tpl_vars['k_oplate']->value;?>
">

									<label for="k_polucheniju">Введите сумму к получению</label>
									<input type="text" name="k_polucheniju" id="" value="<?php echo $_smarty_tpl->tpl_vars['k_polucheniju']->value;?>
">
									<input type="hidden" name="ids" id="" value="<?php echo $_smarty_tpl->tpl_vars['ids']->value;?>
">
									<br />
									<input type="submit" name="edit_categorie" value="Изменить">
								</div>


	

									
									

								</form>

							</div>
							<!-- Content End -->

						</div>
						<!-- Box End -->

					</div><?php }
}
?>