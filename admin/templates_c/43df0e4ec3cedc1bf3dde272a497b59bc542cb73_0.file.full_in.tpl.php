<?php /* Smarty version 3.1.25, created on 2016-06-06 15:47:44
         compiled from "/home/vdtvdt/vdt.site/exchanger1/admin/templates/full_in.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1987584916575570f0c05625_69199938%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43df0e4ec3cedc1bf3dde272a497b59bc542cb73' => 
    array (
      0 => '/home/vdtvdt/vdt.site/exchanger1/admin/templates/full_in.tpl',
      1 => 1465217261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1987584916575570f0c05625_69199938',
  'variables' => 
  array (
    'tel' => 0,
    'last_name' => 0,
    'first_name' => 0,
    'na_wm' => 0,
    'summ' => 0,
    'oplata_v' => 0,
    'k_oplate' => 0,
    'komisija' => 0,
    'data' => 0,
    'status' => 0,
    'idi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_575570f0c3d7d3_26663505',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_575570f0c3d7d3_26663505')) {
function content_575570f0c3d7d3_26663505 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1987584916575570f0c05625_69199938';
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
							<div class="box-title red">
								<span>Заявка на пополнение</span>
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
										<th>Пополнение</th>
										<th>На сумму</th>
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
											<p class="subtitle"><?php echo $_smarty_tpl->tpl_vars['na_wm']->value;?>
</p>
										</td>

										<td>
											<p class="subtitle"><?php echo $_smarty_tpl->tpl_vars['summ']->value;?>
</p>
										</td>

										<td>
											<p class="subtitle"><?php echo $_smarty_tpl->tpl_vars['oplata_v']->value;?>
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
											<p class="subtitle"><a href="<?php if ($_smarty_tpl->tpl_vars['status']->value == 0) {?>module_zakaz.php?idi=<?php echo $_smarty_tpl->tpl_vars['idi']->value;?>
&script=request<?php } else { ?>module_zakaz.php?idi=<?php echo $_smarty_tpl->tpl_vars['idi']->value;?>
&script=request_archive<?php }?>"><?php if ($_smarty_tpl->tpl_vars['status']->value == 0) {?>Выполнить<?php } else { ?>Вернуть<?php }?></a></p>
										</td>

										<td class="actions">
											<!-- <a href="#"><i class="fa fa-file-text-o"></i></a> -->
											<a href="delete_request_in.php?idi=<?php echo $_smarty_tpl->tpl_vars['idi']->value;?>
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