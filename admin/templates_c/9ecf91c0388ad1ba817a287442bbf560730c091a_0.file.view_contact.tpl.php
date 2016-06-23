<?php /* Smarty version 3.1.25, created on 2016-04-29 01:34:01
         compiled from "/home/vdtvdt/vdt.site/yo/admin/templates/view_contact.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:24787147057228fd91f2201_80667981%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ecf91c0388ad1ba817a287442bbf560730c091a' => 
    array (
      0 => '/home/vdtvdt/vdt.site/yo/admin/templates/view_contact.tpl',
      1 => 1461882840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24787147057228fd91f2201_80667981',
  'variables' => 
  array (
    'mail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_57228fd921db11_74651566',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57228fd921db11_74651566')) {
function content_57228fd921db11_74651566 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '24787147057228fd91f2201_80667981';
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
							<div class="box-title gray">
								<span>Входящие сообщения</span>
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
										<th>Тема</th>
										<th>Сообщение</th>
										<th>Дата</th>
										<th>Удаление</th>
									</thead>
									<tbody>

									<!-- Table Row Start -->
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['mail']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
											<p><?php echo $_smarty_tpl->tpl_vars['mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</p>
										</td>
										
										<td>
											<p class="subtitle"><?php echo $_smarty_tpl->tpl_vars['mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['email'];?>
</p>
										</td>

										<td>
											<p class="subtitle"><?php echo $_smarty_tpl->tpl_vars['mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['subject'];?>
</p>
										</td>

										<td>
											<p class="subtitle"><?php echo $_smarty_tpl->tpl_vars['mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['message'];?>
</p>
										</td>
										
										<td><?php echo $_smarty_tpl->tpl_vars['mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['data'];?>
</td>

										<td class="actions">
											<!-- <a href="#"><i class="fa fa-file-text-o"></i></a> -->
											<a href="delete_contact.php?idc=<?php echo $_smarty_tpl->tpl_vars['mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
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
	<!-- Content End -->

<?php }
}
?>