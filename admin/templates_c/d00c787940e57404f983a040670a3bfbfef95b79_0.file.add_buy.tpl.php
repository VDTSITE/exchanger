<?php /* Smarty version 3.1.25, created on 2016-05-06 20:33:05
         compiled from "/home/vdtvdt/vdt.site/print/admin/templates/add_buy.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15098200572cd551adc5f9_94640746%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd00c787940e57404f983a040670a3bfbfef95b79' => 
    array (
      0 => '/home/vdtvdt/vdt.site/print/admin/templates/add_buy.tpl',
      1 => 1462555983,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15098200572cd551adc5f9_94640746',
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_572cd551b34348_25927594',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572cd551b34348_25927594')) {
function content_572cd551b34348_25927594 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15098200572cd551adc5f9_94640746';
?>
<div class="col-lg-6">

						<!-- Box Start -->
						<div class="box">

							<!-- Title Bar Start -->
							<div class="box-title">
								<span class="gray">Добавление адреса для покупки</span>
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">

								<form action="add_buy.php" method="POST" class="basic-form" enctype="multipart/form-data">

									<label for="title">Введите адрес</label>
									<input type="text" name="adress" placeholder="Введите адрес" /><br />


									<label for="title">Введите телефон</label>
									<input type="text" name="tel" placeholder="Введите телефон" /><br />


	

									<input type="submit" name="add_categorie" value="Добавить">
									

								</form>

							</div>
							<!-- Content End -->

						</div>
						<!-- Box End -->

					</div><?php }
}
?>