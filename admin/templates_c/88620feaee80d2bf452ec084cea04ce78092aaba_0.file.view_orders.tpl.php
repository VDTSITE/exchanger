<?php /* Smarty version 3.1.25, created on 2016-04-29 03:16:48
         compiled from "/home/vdtvdt/vdt.site/yo/admin/templates/view_orders.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1447748175722a7f08128f8_50133376%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88620feaee80d2bf452ec084cea04ce78092aaba' => 
    array (
      0 => '/home/vdtvdt/vdt.site/yo/admin/templates/view_orders.tpl',
      1 => 1461888970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1447748175722a7f08128f8_50133376',
  'variables' => 
  array (
    'order' => 0,
    'schetchik' => 0,
    'mark' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_5722a7f0871916_92007190',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5722a7f0871916_92007190')) {
function content_5722a7f0871916_92007190 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1447748175722a7f08128f8_50133376';
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
								


								<thead>
										<!-- <th><input type="checkbox" name="select-all" id="select-all" class="icheck-blue" /></th> -->

										<th>№</th>
										<th>ФИО</th>
										<th>Email</th>
										<th>Телефон</th>
										<!-- <th>Новая почта</th>
										<th>Комментарий</th> -->
										
										<th>Дата</th>
										<th>Статус</th>
										<th>Подробнее</th>
										<th>Удаление</th>
									
										
									</thead>


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
									


									<tbody>

									<!-- Table Row Start -->
										<!-- <td><input type="checkbox" name="select-example" class="icheck-blue" /></td> -->
										<td>
											<p><?php echo $_smarty_tpl->tpl_vars['schetchik']->value++;?>
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
										<!-- <td>
											<p><?php echo $_smarty_tpl->tpl_vars['order']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['np_near'];?>
</p>
										</td>
										<td>
											<p><?php echo $_smarty_tpl->tpl_vars['order']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['comment'];?>
</p>
										</td> -->
										
										<td>
											<p><?php echo $_smarty_tpl->tpl_vars['order']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['data'];?>
</p>
										</td>
										<td>
											<p><?php if ($_smarty_tpl->tpl_vars['mark']->value == 5) {?><a href="module_zakaz.php?clients_id=<?php echo $_smarty_tpl->tpl_vars['order']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['clients_id'];?>
&script=archive">Восстановить</a><?php } else { ?><a href="module_zakaz.php?clients_id=<?php echo $_smarty_tpl->tpl_vars['order']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['clients_id'];?>
&script=order">Выполнить</a><?php }?></p>
										</td>
										<td>
											<p><a href="full_view_orders.php?clients_id=<?php echo $_smarty_tpl->tpl_vars['order']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['clients_id'];?>
">Подробнее</a></p>
										</td>
										<td class="actions">
											<!-- <a href="#"><i class="fa fa-file-text-o"></i></a> -->
											<a href="delete_orders.php?clients_id=<?php echo $_smarty_tpl->tpl_vars['order']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['clients_id'];?>
&name=<?php echo $_smarty_tpl->tpl_vars['order']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
&products_id=<?php echo $_smarty_tpl->tpl_vars['order']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['products_id'];?>
&count_tovarov=<?php echo $_smarty_tpl->tpl_vars['order']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['count_tovarov'];?>
 "><i class="fa fa-trash-o"></i></a>
										</td>
									
										
									
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