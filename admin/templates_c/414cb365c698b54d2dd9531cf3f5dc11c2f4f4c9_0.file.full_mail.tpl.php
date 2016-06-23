<?php /* Smarty version 3.1.25, created on 2016-03-17 01:06:21
         compiled from "/home/vdtvdt/sweetbox.cool/www/p0o9l8m1a2x3/templates/full_mail.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:141025486956e9e6edd94e49_44845328%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '414cb365c698b54d2dd9531cf3f5dc11c2f4f4c9' => 
    array (
      0 => '/home/vdtvdt/sweetbox.cool/www/p0o9l8m1a2x3/templates/full_mail.tpl',
      1 => 1458169575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141025486956e9e6edd94e49_44845328',
  'variables' => 
  array (
    'full_mail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_56e9e6ede12754_85928859',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56e9e6ede12754_85928859')) {
function content_56e9e6ede12754_85928859 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '141025486956e9e6edd94e49_44845328';
?>
<!-- Content Start -->
	<div class="content">
		<div class="main-container1">

			<div class="container">
				<div class="row">

					<div class="col-lg-12">
						<!-- Box Start -->
						<div class="inbox box green">

							<!-- Title Bar Start -->
							<div class="box-title gray">
								<span>Входящие</span>
								<!-- <span class="subtitle">// View Messages</span> -->
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">
								<table class="regular-table">
									<thead>
										<!-- <th><input type="checkbox" name="select-all" id="select-all" class="icheck-blue" /></th> -->
										<th>От кого:</th>
										<th>Email</th>
										<th>Телефон</th>
										<th>Тип BOX'a</th>
										<th>Размер BOX'a</th>
										<th>Способ доставки</th>
										<th>Способ оплаты</th>
										<th>Адрес доставки</th>
										<th>Комментарий</th>
										<th>Дата</th>
										<th></th>
									</thead>
									<tbody>

									<!-- Table Row Start -->
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['full_mail']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
										<!-- <td><input type="checkbox" name="select-example" class="icheck-blue" /></td> -->
										<td>
											<p><?php echo $_smarty_tpl->tpl_vars['full_mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</p>
										</td>
										<td>
											<p><?php echo $_smarty_tpl->tpl_vars['full_mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['email'];?>
</p>
										</td>
										<td>
											<p><?php echo $_smarty_tpl->tpl_vars['full_mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['tel'];?>
</p>
										</td>
										<td>
											<p>
												<?php if ($_smarty_tpl->tpl_vars['full_mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['box_country'] == 0) {?>
													Европейский
												<?php } elseif ($_smarty_tpl->tpl_vars['full_mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['box_country'] == 1) {?>
													Американский
												<?php } else { ?>
													Японский
												<?php }?>
											</p>
										</td>
										<td>
											<p>
												<?php if ($_smarty_tpl->tpl_vars['full_mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['box_size'] == 0) {?>
													Маленький BOX
												<?php } elseif ($_smarty_tpl->tpl_vars['full_mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['box_size'] == 1) {?>
													Средний BOX
												<?php } else { ?>
													Большой BOX
												<?php }?>
											</p>
										</td>
										<td>
											<p>
												<?php if ($_smarty_tpl->tpl_vars['full_mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['sposob_dostavki'] == 0) {?>
													Новая Почта
												<?php } elseif ($_smarty_tpl->tpl_vars['full_mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['sposob_dostavki'] == 1) {?>
													Курьером по Киеву
												<?php } else { ?>
													Самовывоз
												<?php }?>
											</p>
										</td>
										<td>
											<p>
												<?php if ($_smarty_tpl->tpl_vars['full_mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['sposob_oplati'] == 0) {?>
													Безналичный рассчёт
												<?php } elseif ($_smarty_tpl->tpl_vars['full_mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['sposob_oplati'] == 1) {?>
													Наличными курьеру
												<?php } elseif ($_smarty_tpl->tpl_vars['full_mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['sposob_oplati'] == 2) {?>
													Наложенный платёж
												<?php } elseif ($_smarty_tpl->tpl_vars['full_mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['sposob_oplati'] == 3) {?>
													WebMoney
												<?php } else { ?>
													PayPal
												<?php }?>
											</p>
										</td>
										<td>
											<p><?php echo $_smarty_tpl->tpl_vars['full_mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['adress_dostavki'];?>
</p>
										</td>
										<td>
											<p class="subtitle"><?php echo $_smarty_tpl->tpl_vars['full_mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['comment'];?>
</p>
										</td>
										
										<td>30 May</td>

										<td class="actions">
											<!-- <a href="#"><i class="fa fa-file-text-o"></i></a> -->
											<a href="delete_mail_idc.php?idc=<?php echo $_smarty_tpl->tpl_vars['full_mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"><i class="fa fa-trash-o"></i></a>
										</td>
									</tr>
									<?php endfor; endif; ?>
									<!-- Table Row End -->

									

									</tbody>
								</table>
							</div>
							<!-- Content End -->

						</div>
						<!-- Box End -->
					</div>


				</div>
			</div>

		</div>
	</div>
	<!-- Content End --><?php }
}
?>