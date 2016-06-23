<?php /* Smarty version 3.1.25, created on 2016-06-14 18:33:15
         compiled from "/home/vdtvdt/vdt.site/exchanger1/admin/templates/request.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:101562059576023bbbbec69_04148721%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae2b71e2ce2f2f04da362cc5edafed52c537fccf' => 
    array (
      0 => '/home/vdtvdt/vdt.site/exchanger1/admin/templates/request.tpl',
      1 => 1465918392,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101562059576023bbbbec69_04148721',
  'variables' => 
  array (
    'mail' => 0,
    'mail1' => 0,
    'mail2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_576023bbca0662_50169886',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_576023bbca0662_50169886')) {
function content_576023bbca0662_50169886 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '101562059576023bbbbec69_04148721';
?>
<!-- Content Start -->

	<div class="content">
		<div class="main-container1">

			<div class="container">
				<div class="row">

					<div class="col-lg-12 col-md-12">
						<!-- Box Start -->
						<div class="inbox box green">

							<!-- Title Bar Start -->
							<div class="box-title red">
								<span>Заявки на пополнение</span>
								<!-- <span class="subtitle">// View Messages</span> -->
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">
								<table class="regular-table">
									<thead>
										<!-- <th><input type="checkbox" name="select-all" id="select-all" class="icheck-blue" /></th> -->							
										<th>Телефон</th>
										<th>Фамилия</th>
										<th>Имя</th>										
										<th>Статус</th>										
										<th>Подробнее</th>
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
											<p><?php echo $_smarty_tpl->tpl_vars['mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['tel'];?>
</p>
										</td>
										
										<td>
											<p class="subtitle"><?php echo $_smarty_tpl->tpl_vars['mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['last_name'];?>
</p>
										</td>

										<td>
											<p class="subtitle"><?php echo $_smarty_tpl->tpl_vars['mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['first_name'];?>
</p>
										</td>
										<?php if ($_smarty_tpl->tpl_vars['mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status'] == 0) {?>
										<td>
											<form id="status_in1<?php echo $_smarty_tpl->tpl_vars['mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" action="request.php" name="status_in" method="post">
											<select name="select_in<?php echo $_smarty_tpl->tpl_vars['mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" id="select_in1">
												<option value="0" <?php if ($_smarty_tpl->tpl_vars['mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status2'] == 0) {?>selected="selected"<?php }?>>Новая</option>
												<option value="1" <?php if ($_smarty_tpl->tpl_vars['mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status2'] == 1) {?>selected="selected"<?php }?>>В обработке</option>
											</select>

											<input type="hidden" name="id_in" value="<?php echo $_smarty_tpl->tpl_vars['mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
">
											</form>
										</td>

										<?php } else { ?>
										<td>
											<form id="status_in1<?php echo $_smarty_tpl->tpl_vars['mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" action="request_archive.php" name="status_in" method="post">
											<select name="select_in<?php echo $_smarty_tpl->tpl_vars['mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" id="select_in1">
												<option value="2" <?php if ($_smarty_tpl->tpl_vars['mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status2'] == 2) {?>selected="selected"<?php }?>>Завершенная</option>
												<option value="3" <?php if ($_smarty_tpl->tpl_vars['mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status2'] == 3) {?>selected="selected"<?php }?>>Отмененная</option>
											</select>

											<input type="hidden" name="id_in" value="<?php echo $_smarty_tpl->tpl_vars['mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
">
											</form>
										</td>


										<?php }?>
										
										<td>
											<p class="subtitle"><a href="full_in.php?idi=<?php echo $_smarty_tpl->tpl_vars['mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
">Подробнее</a></p>
										</td>
																			
										<td><?php echo $_smarty_tpl->tpl_vars['mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['data'];?>
</td>

										<td class="actions">
											<!-- <a href="#"><i class="fa fa-file-text-o"></i></a> -->
											<a href="delete_request_in.php?idi=<?php echo $_smarty_tpl->tpl_vars['mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
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
					<!-- /////////////////////////////////////////////// -->
				





				<div class="row">
					<div class="col-lg-12 col-md-12">
						<!-- Box Start -->
						<div class="inbox box green">

							<!-- Title Bar Start -->
							<div class="box-title green">
								<span>Заявки на вывод</span>
								<!-- <span class="subtitle">// View Messages</span> -->
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">
								<table class="regular-table">
									<thead>
										<!-- <th><input type="checkbox" name="select-all" id="select-all" class="icheck-blue" /></th> -->
										<th>Телефон</th>
										<th>Фамилия</th>
										<th>Имя</th>
										<th>Статус</th>
										<th>Подробнее</th>
										<th>Дата</th>																		
										<th>Удаление</th>
									</thead>
									<tbody>

									<!-- Table Row Start -->
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['mail1']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
											<p><?php echo $_smarty_tpl->tpl_vars['mail1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['tel'];?>
</p>
										</td>
										
										<td>
											<p class="subtitle"><?php echo $_smarty_tpl->tpl_vars['mail1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['last_name'];?>
</p>
										</td>

										<td>
											<p class="subtitle"><?php echo $_smarty_tpl->tpl_vars['mail1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['first_name'];?>
</p>
										</td>

										<?php if ($_smarty_tpl->tpl_vars['mail1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status'] == 0) {?>
										<td>
											<form id="status_out1<?php echo $_smarty_tpl->tpl_vars['mail1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" name="status_out" action="request.php" method="post">
											<select name="select_out<?php echo $_smarty_tpl->tpl_vars['mail1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" id="select_out1">
												<option value="0" <?php if ($_smarty_tpl->tpl_vars['mail1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status2'] == 0) {?>selected="selected"<?php }?>>Новая</option>
												<option value="1" <?php if ($_smarty_tpl->tpl_vars['mail1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status2'] == 1) {?>selected="selected"<?php }?>>В обработке</option>
											</select>

											<input type="hidden" name="id_out" value="<?php echo $_smarty_tpl->tpl_vars['mail1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
">
											</form>
										</td>


										<?php } else { ?>

										<td>
											<form id="status_out1<?php echo $_smarty_tpl->tpl_vars['mail1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" name="status_out" action="request_archive.php" method="post">
											<select name="select_out<?php echo $_smarty_tpl->tpl_vars['mail1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" id="select_out1">
												<option value="2" <?php if ($_smarty_tpl->tpl_vars['mail1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status2'] == 2) {?>selected="selected"<?php }?>>Завершенная</option>
												<option value="3" <?php if ($_smarty_tpl->tpl_vars['mail1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status2'] == 3) {?>selected="selected"<?php }?>>Отмененная</option>
											</select>

											<input type="hidden" name="id_out" value="<?php echo $_smarty_tpl->tpl_vars['mail1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
">
											</form>
										</td>

										<?php }?>
										
										<td>
											<p class="subtitle"><a href="full_out.php?ido=<?php echo $_smarty_tpl->tpl_vars['mail1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
">Подробнее</a></p>
										</td>
																			
										<td><?php echo $_smarty_tpl->tpl_vars['mail1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['data'];?>
</td>

										<td class="actions">
											<!-- <a href="#"><i class="fa fa-file-text-o"></i></a> -->
											<a href="delete_request_out.php?ido=<?php echo $_smarty_tpl->tpl_vars['mail1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
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




					



				<div class="row">
					<div class="col-lg-12 col-md-12">
						<!-- Box Start -->
						<div class="inbox box green">

							<!-- Title Bar Start -->
							<div class="box-title gray">
								<span>Акционные заявки</span>
								<!-- <span class="subtitle">// View Messages</span> -->
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">
								<table class="regular-table">
									<thead>
										<!-- <th><input type="checkbox" name="select-all" id="select-all" class="icheck-blue" /></th> -->
										<th>Телефон</th>
										<th>Фамилия</th>
										<th>Имя</th>
										<th>Статус</th>
										<th>Подробнее</th>
										<th>Дата</th>																		
										<th>Удаление</th>
									</thead>
									<tbody>

									<!-- Table Row Start -->
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['mail2']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
											<p><?php echo $_smarty_tpl->tpl_vars['mail2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['tel'];?>
</p>
										</td>
										
										<td>
											<p class="subtitle"><?php echo $_smarty_tpl->tpl_vars['mail2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['last_name'];?>
</p>
										</td>

										<td>
											<p class="subtitle"><?php echo $_smarty_tpl->tpl_vars['mail2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['first_name'];?>
</p>
										</td>
										<?php if ($_smarty_tpl->tpl_vars['mail2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status'] == 0) {?>
										<td>
											<form id="status_stock1<?php echo $_smarty_tpl->tpl_vars['mail2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" name="status_stock" action="request.php" method="post">
											<select name="select_stock<?php echo $_smarty_tpl->tpl_vars['mail2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" id="select_stock1">
												<option value="0" <?php if ($_smarty_tpl->tpl_vars['mail2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status2'] == 0) {?>selected="selected"<?php }?>>Новая</option>
												<option value="1" <?php if ($_smarty_tpl->tpl_vars['mail2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status2'] == 1) {?>selected="selected"<?php }?>>В обработке</option>
											</select>

											<input type="hidden" name="id_stock" value="<?php echo $_smarty_tpl->tpl_vars['mail2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
">
											</form>
										</td>


										<?php } else { ?>

										<td>
											<form id="status_stock1<?php echo $_smarty_tpl->tpl_vars['mail2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" name="status_stock" action="request_archive.php" method="post">
											<select name="select_stock<?php echo $_smarty_tpl->tpl_vars['mail2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" id="select_stock1">
												<option value="2" <?php if ($_smarty_tpl->tpl_vars['mail2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status2'] == 2) {?>selected="selected"<?php }?>>Завершенная</option>
												<option value="3" <?php if ($_smarty_tpl->tpl_vars['mail2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status2'] == 3) {?>selected="selected"<?php }?>>Отмененная</option>
											</select>

											<input type="hidden" name="id_stock" value="<?php echo $_smarty_tpl->tpl_vars['mail2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
">
											</form>
										</td>

										<?php }?>
										<td>
											<p class="subtitle"><a href="full_stock.php?ids=<?php echo $_smarty_tpl->tpl_vars['mail2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
">Подробнее</a></p>
										</td>
																			
										<td><?php echo $_smarty_tpl->tpl_vars['mail2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['data'];?>
</td>

										<td class="actions">
											<!-- <a href="#"><i class="fa fa-file-text-o"></i></a> -->
											<a href="delete_request_stock.php?ids=<?php echo $_smarty_tpl->tpl_vars['mail2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
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




<?php echo '<script'; ?>
>




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

var change_in = document.getElementsByName("select_in<?php echo $_smarty_tpl->tpl_vars['mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
");
	for(var i = 0; i < change_in.length; i++) {
		//alert("in");
		change_in[i].onchange=function() {
			//alert("1");
			document.getElementById("status_in1<?php echo $_smarty_tpl->tpl_vars['mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
").submit();
			//alert("2");
		}
}

<?php endfor; endif; ?>

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['mail1']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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

var change_out = document.getElementsByName("select_out<?php echo $_smarty_tpl->tpl_vars['mail1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
");
//alert(change_out.length);
	for(var i = 0; i < change_out.length; i++) {
		//alert("out");
		change_out[i].onchange=function() {
			document.getElementById("status_out1<?php echo $_smarty_tpl->tpl_vars['mail1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
").submit();
		}
	
}

/*document.getElementById("select_stock1").onchange=function() {
	status_stock.submit();

}*/

<?php endfor; endif; ?>






<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['mail2']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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

var change_stock = document.getElementsByName("select_stock<?php echo $_smarty_tpl->tpl_vars['mail2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
");
//alert(change_out.length);
	for(var i = 0; i < change_stock.length; i++) {
		//alert("out");
		change_stock[i].onchange=function() {
			document.getElementById("status_stock1<?php echo $_smarty_tpl->tpl_vars['mail2']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
").submit();
			//alert("sussecc");
		}
	
}

/*document.getElementById("select_stock1").onchange=function() {
	status_stock.submit();

}*/

<?php endfor; endif; ?>







<?php echo '</script'; ?>
>
<?php }
}
?>