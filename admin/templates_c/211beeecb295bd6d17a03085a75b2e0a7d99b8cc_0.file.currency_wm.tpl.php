<?php /* Smarty version 3.1.25, created on 2016-06-13 12:23:18
         compiled from "/home/vdtvdt/vdt.site/exchanger1/admin/templates/currency_wm.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1072199566575e7b86623194_06443560%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '211beeecb295bd6d17a03085a75b2e0a7d99b8cc' => 
    array (
      0 => '/home/vdtvdt/vdt.site/exchanger1/admin/templates/currency_wm.tpl',
      1 => 1465809797,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1072199566575e7b86623194_06443560',
  'variables' => 
  array (
    'currency' => 0,
    'active_buy' => 0,
    'active_sell' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_575e7b86658400_35258490',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_575e7b86658400_35258490')) {
function content_575e7b86658400_35258490 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1072199566575e7b86623194_06443560';
?>
<!-- Content Start -->
	<div class="content">
		<div class="main-container1">

			<div class="container">
				<div class="row">

					<div class="col-lg-9">
						<!-- Box Start -->
						<div class="inbox box green">

							<!-- Title Bar Start -->
							<div class="box-title red">
								<span>Курс валют</span>
								<!-- <span class="subtitle">// View Messages</span> -->
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">
								<form action="currency_wm.php" method="post">
									<table class="regular-table">
										<thead>
											<!-- <th><input type="checkbox" name="select-all" id="select-all" class="icheck-blue" /></th> -->
											<th>Название</th>
											<th>Покупка</th>
											<th>Продажа</th>
											<th>Редактирование</th>
											<th>Удаление</th>

										</thead>
										<tbody>

										<!-- Table Row Start -->
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
										<tr <?php if ($_smarty_tpl->tpl_vars['currency']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['act'] == 1) {?>style="background: rgba(210, 210, 210, 0.8) none repeat scroll 0% 0%; text-decoration: line-through; color: rgb(136, 136, 136);"<?php }?>>
											<!-- <td><input type="checkbox" name="select-example" class="icheck-blue" /></td> -->
											<td>
												<p><?php echo $_smarty_tpl->tpl_vars['currency']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</p>
											</td>
											<td>
												<p><input type="text" name="buy<?php echo $_smarty_tpl->tpl_vars['currency']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['currency']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['buy'];?>
"></p>
											</td>
											<td>
												<p><input type="text" name="sell<?php echo $_smarty_tpl->tpl_vars['currency']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['currency']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['sell'];?>
"></p>
											</td>
											
											

											<td class="actions">
												
												<a href="<?php if ($_smarty_tpl->tpl_vars['currency']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['act'] == 0) {?>currency_wm.php?act_currency=1&ida=<?php echo $_smarty_tpl->tpl_vars['currency']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];
} else { ?>currency_wm.php?act_currency=0&ida=<?php echo $_smarty_tpl->tpl_vars['currency']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];
}?>"><?php if ($_smarty_tpl->tpl_vars['currency']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['act'] == 0) {?>Скрыть<?php } else { ?>Показать<?php }?></a>
											</td>
											<td class="actions">
												<!-- <a href="#"><i class="fa fa-file-text-o"></i></a> -->
												<a href="delete_currency_wm.php?idc=<?php echo $_smarty_tpl->tpl_vars['currency']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"><i class="fa fa-trash-o"></i></a>
											</td>
										</tr>
										<input type="hidden" name="param" value="<?php echo $_smarty_tpl->tpl_vars['currency']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
">
										<input type="hidden" name="active_buy" value="<?php echo $_smarty_tpl->tpl_vars['active_buy']->value;?>
">
										<input type="hidden" name="active_sell" value="<?php echo $_smarty_tpl->tpl_vars['active_sell']->value;?>
">
										<?php endfor; endif; ?>
										<!-- Table Row End -->

										

										</tbody>
									</table>
									<input type="submit" name="recount" value="Сохранить">
								</form>
							</div>
							<!-- Content End -->

						</div>
						<!-- Box End -->
					</div>
					<div class="col-lg-3">
					<form name="change_currency" action="currency_wm.php" method="post">
						<label for="select_currency">Выберите основную валюту</label>
						<select name="select_currency" id="select_currency1">
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
" <?php if ($_smarty_tpl->tpl_vars['currency']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status'] == 1) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['currency']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</option>
						<?php endfor; endif; ?>
						</select>
					</form>
					</div>


				</div>
			</div>

		</div>
	</div>
	<!-- Content End -->

<?php }
}
?>