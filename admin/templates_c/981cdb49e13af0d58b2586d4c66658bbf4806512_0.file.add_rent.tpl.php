<?php /* Smarty version 3.1.25, created on 2016-05-06 21:22:12
         compiled from "/home/vdtvdt/vdt.site/print/admin/templates/add_rent.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:71178579572ce0d48ce8c3_05670343%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '981cdb49e13af0d58b2586d4c66658bbf4806512' => 
    array (
      0 => '/home/vdtvdt/vdt.site/print/admin/templates/add_rent.tpl',
      1 => 1462558862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71178579572ce0d48ce8c3_05670343',
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_572ce0d48e42c6_85207701',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572ce0d48e42c6_85207701')) {
function content_572ce0d48e42c6_85207701 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '71178579572ce0d48ce8c3_05670343';
?>
<div class="col-lg-6">

						<!-- Box Start -->
						<div class="box">

							<!-- Title Bar Start -->
							<div class="box-title">
								<span class="gray">Добавление адреса для аренды</span>
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">

								<form action="add_rent.php" method="POST" class="basic-form" enctype="multipart/form-data">

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