<?php /* Smarty version 3.1.25, created on 2016-06-06 15:48:10
         compiled from "/home/vdtvdt/vdt.site/exchanger1/admin/templates/full_out.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17548892565755710ac362c7_33654291%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a27328fab60c623b5e18e6a7648780a8606703ee' => 
    array (
      0 => '/home/vdtvdt/vdt.site/exchanger1/admin/templates/full_out.tpl',
      1 => 1465217288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17548892565755710ac362c7_33654291',
  'variables' => 
  array (
    'tel' => 0,
    'last_name' => 0,
    'first_name' => 0,
    's_wm' => 0,
    'summ' => 0,
    'v_currency' => 0,
    'k_oplate' => 0,
    'komisija' => 0,
    'data' => 0,
    'status' => 0,
    'ido' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_5755710ac78fb0_09414231',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5755710ac78fb0_09414231')) {
function content_5755710ac78fb0_09414231 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17548892565755710ac362c7_33654291';
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
							<div class="box-title green">
								<span>Заявка на вывод</span>
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
										<th>Вывод с</th>
										<th>Сумма вывода</th>
										<th>Оплата в</th>
										<th>К оплате</th>
										<th>Комиссия</th>
										<th>Дата</th>
										<th>Выполнить</th>															
										<th>Удаление</th>
									</thead>
									<tbody>

									<!-- Table Row Start -->
								
									<tr>
										<!-- <td><input type="checkbox" name="select-example" class="icheck-blue" /></td> -->
										<td>
											<p><?php echo $_smarty_tpl->tpl_vars['tel']->value;?>
</p>
										</td>
										
										<td>
											<p class="subtitle"><?php echo $_smarty_tpl->tpl_vars['last_name']->value;?>
</p>
										</td>

										<td>
											<p class="subtitle"><?php echo $_smarty_tpl->tpl_vars['first_name']->value;?>
</p>
										</td>
										
										<td>
											<p class="subtitle"><?php echo $_smarty_tpl->tpl_vars['s_wm']->value;?>
</p>
										</td>

										<td>
											<p class="subtitle"><?php echo $_smarty_tpl->tpl_vars['summ']->value;?>
</p>
										</td>

										<td>
											<p class="subtitle"><?php echo $_smarty_tpl->tpl_vars['v_currency']->value;?>
</p>
										</td>

										<td>
											<p class="subtitle"><?php echo $_smarty_tpl->tpl_vars['k_oplate']->value;?>
</p>
										</td>

										<td>
											<p class="subtitle"><?php echo $_smarty_tpl->tpl_vars['komisija']->value;?>
</p>
										</td>
																	
										<td><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</td>

										<td>
											<p class="subtitle"><a href="<?php if ($_smarty_tpl->tpl_vars['status']->value == 0) {?>module_zakaz.php?ido=<?php echo $_smarty_tpl->tpl_vars['ido']->value;?>
&script=request<?php } else { ?>module_zakaz.php?ido=<?php echo $_smarty_tpl->tpl_vars['ido']->value;?>
&script=request_archive<?php }?>"><?php if ($_smarty_tpl->tpl_vars['status']->value == 0) {?>Выполнить<?php } else { ?>Вернуть<?php }?></a></p>
										</td>

										<td class="actions">
											<!-- <a href="#"><i class="fa fa-file-text-o"></i></a> -->
											<a href="delete_request_out.php?ido=<?php echo $_smarty_tpl->tpl_vars['ido']->value;?>
"><i class="fa fa-trash-o"></i></a>
										</td>
									</tr>
									
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