<?php /* Smarty version 3.1.25, created on 2016-04-26 18:31:19
         compiled from "/home/vdtvdt/vdt.site/yo/admin/templates/add_portfolio_categories.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:793542887571f89c72e7de9_13467705%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80982a31a20e2044ae03a60adb917a06c3a70328' => 
    array (
      0 => '/home/vdtvdt/vdt.site/yo/admin/templates/add_portfolio_categories.tpl',
      1 => 1461684650,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '793542887571f89c72e7de9_13467705',
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_571f89c730fd47_42778294',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571f89c730fd47_42778294')) {
function content_571f89c730fd47_42778294 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '793542887571f89c72e7de9_13467705';
?>
<div class="col-lg-6">

						<!-- Box Start -->
						<div class="box">

							<!-- Title Bar Start -->
							<div class="box-title">
								<span class="gray">Добавление категории портфолио</span>
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">

								<form action="add_portfolio_categories.php" method="POST" class="basic-form" enctype="multipart/form-data">

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