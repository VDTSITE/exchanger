<?php /* Smarty version 3.1.25, created on 2016-05-06 03:27:21
         compiled from "/home/vdtvdt/vdt.site/yo/admin/templates/full_view_orders.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1218183381572be4e9122940_65214586%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45d542d411a675ea241fae6038cdd2bd6f694665' => 
    array (
      0 => '/home/vdtvdt/vdt.site/yo/admin/templates/full_view_orders.tpl',
      1 => 1462494438,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1218183381572be4e9122940_65214586',
  'variables' => 
  array (
    'order' => 0,
    'mark' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_572be4e9156a48_93760977',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572be4e9156a48_93760977')) {
function content_572be4e9156a48_93760977 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1218183381572be4e9122940_65214586';
?>
<div class="col-lg-12">
						<!-- Box Start -->
						<div class="inbox box green">

							<!-- Title Bar Start -->
							<div class="box-title gray">
								<span>Список заказов</span>
								<!-- <span class="subtitle">// View Messages</span> -->
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">
								<table class="regular-table">

								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['order']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
								<?php if ($_smarty_tpl->tpl_vars['order']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['priznak'] != $_smarty_tpl->tpl_vars['order']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['clients_id']) {?>
									<thead>
										<!-- <th><input type="checkbox" name="select-all" id="select-all" class="icheck-blue" /></th> -->

										<th>№</th>
										<th>ФИО</th>
										<th>Email</th>
										<th>Телефон</th>
										
										<th>Коммент</th>
										<th>Дата</th>
										<th>Статус</th>
									
										
									</thead>


									<tbody>

									<!-- Table Row Start -->
										<!-- <td><input type="checkbox" name="select-example" class="icheck-blue" /></td> -->
										<td>
											<p><?php echo $_smarty_tpl->tpl_vars['order']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['clients_id'];?>
</p>
										</td>
										<td>
											<p><?php echo $_smarty_tpl->tpl_vars['order']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</p>
										</td>
										<td>
											<p><?php echo $_smarty_tpl->tpl_vars['order']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['email'];?>
</p>
										</td>
										<td>
											<p><?php echo $_smarty_tpl->tpl_vars['order']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['tel'];?>
</p>
										</td>
										
										<td>
											<p><?php echo $_smarty_tpl->tpl_vars['order']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['comment'];?>
</p>
										</td>
										<td>
											<p><?php echo $_smarty_tpl->tpl_vars['order']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['data'];?>
</p>
										</td>
										<td>
											<p><?php if ($_smarty_tpl->tpl_vars['mark']->value == 5) {?><a href="module_zakaz.php?clients_id=<?php echo $_smarty_tpl->tpl_vars['order']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['clients_id'];?>
&script=archive">Восстановить</a><?php } else { ?><a href="module_zakaz.php?clients_id=<?php echo $_smarty_tpl->tpl_vars['order']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['clients_id'];?>
&script=order">Выполнить</a><?php }?></p>
										</td>
									
										
									
									<!-- Table Row End -->
									</tbody>

									<thead>
										<!-- <th><input type="checkbox" name="select-all" id="select-all" class="icheck-blue" /></th> -->
										<th>Фото</th>
										<th>Название</th>
										<th>Цена</th>
										<th>Количество</th>
										<th>Стоимость</th>
									
									
										
									</thead>
								<?php }?>
									<tbody>

									<!-- Table Row Start -->
										<!-- <td><input type="checkbox" name="select-example" class="icheck-blue" /></td> -->
										<td>
											<p><img src="../images/<?php echo $_smarty_tpl->tpl_vars['order']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['photo'];?>
" width="80px;" alt=""></p>
										</td>
										<td>
											<p><?php echo $_smarty_tpl->tpl_vars['order']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>
</p>
										</td>
										<td>
											<p><?php echo $_smarty_tpl->tpl_vars['order']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['price'];?>
</p>
										</td>
										<td>
											<p><?php echo $_smarty_tpl->tpl_vars['order']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['count_tovarov'];?>
</p>
										</td>
										<td>
											<p><?php echo $_smarty_tpl->tpl_vars['order']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['total_summ'];?>
</p>
										</td>

									<!-- Table Row End -->
									</tbody>


									<?php if ($_smarty_tpl->tpl_vars['order']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['count_count'] == $_smarty_tpl->tpl_vars['order']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['count_id']) {?>
									<tbody>

									<!-- Table Row Start -->
										<!-- <td><input type="checkbox" name="select-example" class="icheck-blue" /></td> -->
										<th colspan="9">Итого:</th>
										<th ><?php echo $_smarty_tpl->tpl_vars['order']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['total_res'];?>
</th>
									

									<!-- Table Row End -->
									</tbody>
									<?php }?>
									<?php endfor; endif; ?>



								</table>
							</div>
							<!-- Content End -->

						</div>
						<!-- Box End -->
					</div><?php }
}
?>