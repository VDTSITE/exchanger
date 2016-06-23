<?php /* Smarty version 3.1.25, created on 2016-06-01 22:52:48
         compiled from "/home/vdtvdt/vdt.site/exchanger1/admin/templates/add_stock.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1412662757574f3d105b6b65_95363397%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac51d6bcdb7d34ce842564320819f943441e7690' => 
    array (
      0 => '/home/vdtvdt/vdt.site/exchanger1/admin/templates/add_stock.tpl',
      1 => 1464810767,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1412662757574f3d105b6b65_95363397',
  'variables' => 
  array (
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_574f3d105d4b72_72603513',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_574f3d105d4b72_72603513')) {
function content_574f3d105d4b72_72603513 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1412662757574f3d105b6b65_95363397';
?>
<div class="col-lg-6">

						<!-- Box Start -->
						<div class="box">

							<!-- Title Bar Start -->
							<div class="box-title">
								<span class="gray">Добавление акции</span>
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">

								<form action="add_stock.php" method="POST" class="basic-form" enctype="multipart/form-data">

									<label for="type_operation">Введите тип операции</label>
									<div class="radio">
									  <label>
									    <input type="radio" checked="checked" name="type_operation" id="" value="0">
									   	Ввод
									  </label>
									</div>
									<div class="radio">
									  <label>
									    <input type="radio" name="type_operation" id="" value="1">
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
"><?php echo $_smarty_tpl->tpl_vars['currency']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</option>

										<?php endfor; endif; ?>
									</select>


									<label for="percent">Введите процент</label>
									<input type="text" name="percent" id="" value="">

									<label for="k_oplate">Введите сумму к оплате</label>
									<input type="text" name="k_oplate" id="" value="">

									<label for="k_polucheniju">Введите сумму к получению</label>
									<input type="text" name="k_polucheniju" id="" value="">
									<br />
									<input type="submit" name="add_categorie" value="Добавить">
								</div>


	

									
									

								</form>

							</div>
							<!-- Content End -->

						</div>
						<!-- Box End -->

					</div><?php }
}
?>