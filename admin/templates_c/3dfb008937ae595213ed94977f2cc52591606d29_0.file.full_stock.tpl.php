<?php /* Smarty version 3.1.25, created on 2016-06-09 18:49:57
         compiled from "/home/vdtvdt/vdt.site/exchanger1/admin/templates/full_stock.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:583440891575990257e4f50_76973008%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3dfb008937ae595213ed94977f2cc52591606d29' => 
    array (
      0 => '/home/vdtvdt/vdt.site/exchanger1/admin/templates/full_stock.tpl',
      1 => 1465487396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '583440891575990257e4f50_76973008',
  'variables' => 
  array (
    'tel' => 0,
    'last_name' => 0,
    'first_name' => 0,
    'type_operation' => 0,
    'currency' => 0,
    'percent' => 0,
    'k_oplate' => 0,
    'k_polucheniju' => 0,
    'data' => 0,
    'status' => 0,
    'ids' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_575990258288a2_81111993',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_575990258288a2_81111993')) {
function content_575990258288a2_81111993 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '583440891575990257e4f50_76973008';
?>
<!-- Content Start -->
	<div class="content">
		<div class="main-container1">

			<div class="container">
				<div class="row">

					<div class="col-lg-12">
						<!-- Box Start -->
						<div class="inbox box gray">

							<!-- Title Bar Start -->
							<div class="box-title gray">
								<span>Акционная заявка</span>
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
										<th>Тип операции</th>
										<th>Валюта</th>
										<th>Процент</th>
										<th>К оплате</th>
										<th>К получению</th>
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
											<p class="subtitle">
											<?php if ($_smarty_tpl->tpl_vars['type_operation']->value == 0) {?>
											Пополнение
											<?php } else { ?>
											Вывод
											<?php }?>
											</p>
										</td>

										<td>
											<p class="subtitle">
											<?php if ($_smarty_tpl->tpl_vars['currency']->value == 1) {?>
											WMZ
											<?php } elseif ($_smarty_tpl->tpl_vars['currency']->value == 2) {?>
											WME
											<?php } elseif ($_smarty_tpl->tpl_vars['currency']->value == 3) {?>
											WMR
											<?php } else { ?>
											WMU
											</p>
											<?php }?>
										</td>

										<td>
											<p class="subtitle"><?php echo $_smarty_tpl->tpl_vars['percent']->value;?>
</p>
										</td>

										<td>
											<p class="subtitle"><?php echo $_smarty_tpl->tpl_vars['k_oplate']->value;?>
</p>
										</td>

										<td>
											<p class="subtitle"><?php echo $_smarty_tpl->tpl_vars['k_polucheniju']->value;?>
</p>
										</td>
																	
										<td><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</td>

										<td>
											<p class="subtitle"><a href="<?php if ($_smarty_tpl->tpl_vars['status']->value == 0) {?>module_zakaz.php?ids=<?php echo $_smarty_tpl->tpl_vars['ids']->value;?>
&script=request<?php } else { ?>module_zakaz.php?ids=<?php echo $_smarty_tpl->tpl_vars['ids']->value;?>
&script=request_archive<?php }?>"><?php if ($_smarty_tpl->tpl_vars['status']->value == 0) {?>Выполнить<?php } else { ?>Вернуть<?php }?></a></p>
										</td>

										<td class="actions">
											<!-- <a href="#"><i class="fa fa-file-text-o"></i></a> -->
											<a href="delete_request_stock.php?ids=<?php echo $_smarty_tpl->tpl_vars['ids']->value;?>
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