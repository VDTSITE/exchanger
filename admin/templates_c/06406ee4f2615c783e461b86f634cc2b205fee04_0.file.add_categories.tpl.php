<?php /* Smarty version 3.1.25, created on 2016-04-25 19:50:06
         compiled from "/home/vdtvdt/vdt.site/yo/admin/templates/add_categories.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1454739476571e4abe21a234_69083902%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06406ee4f2615c783e461b86f634cc2b205fee04' => 
    array (
      0 => '/home/vdtvdt/vdt.site/yo/admin/templates/add_categories.tpl',
      1 => 1461603005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1454739476571e4abe21a234_69083902',
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_571e4abe2316d8_91803074',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571e4abe2316d8_91803074')) {
function content_571e4abe2316d8_91803074 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1454739476571e4abe21a234_69083902';
?>
<div class="col-lg-6">

						<!-- Box Start -->
						<div class="box">

							<!-- Title Bar Start -->
							<div class="box-title">
								<span class="gray">Добавление категории</span>
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">

								<form action="add_categories.php" method="POST" class="basic-form" enctype="multipart/form-data">

									<label for="title">Введите название категории</label>
									<input type="text" name="name" placeholder="Введите название категории" /><br />


									<label for="photo">Выберите обложку для категории</label>
									<input type="file" name="photo" placeholder="Выберите обложку для категории" /><br />

									<label for="new_photo">Выберите наличие подкатегории</label>
									<input type="radio" name="exist" checked="checked" value="1"> Есть
									<input type="radio" name="exist" value="0"> Нет<br /><br />


									<input type="submit" name="add_categorie" value="Добавить">
									

								</form>

							</div>
							<!-- Content End -->

						</div>
						<!-- Box End -->

					</div><?php }
}
?>