<?php /* Smarty version 3.1.25, created on 2016-05-06 21:46:03
         compiled from "/home/vdtvdt/vdt.site/print/admin/templates/edit_rent.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:185015342572ce66b48dca5_11775562%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '985ab9751ce11981b0a484e9bd8adb6524c3f671' => 
    array (
      0 => '/home/vdtvdt/vdt.site/print/admin/templates/edit_rent.tpl',
      1 => 1462560358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185015342572ce66b48dca5_11775562',
  'variables' => 
  array (
    'adress' => 0,
    'tel' => 0,
    'idc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_572ce66b4a8829_71449392',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572ce66b4a8829_71449392')) {
function content_572ce66b4a8829_71449392 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '185015342572ce66b48dca5_11775562';
?>
<div class="col-lg-6">

						<!-- Box Start -->
						<div class="box">

							<!-- Title Bar Start -->
							<div class="box-title">
								<span class="gray">Редактирование Адреса</span>
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">

								<form action="edit_rent.php" method="POST" class="basic-form" enctype="multipart/form-data">

									<label for="title">Введите адрес</label>
									<input type="text" name="adress" placeholder="Введите адрес" value="<?php echo $_smarty_tpl->tpl_vars['adress']->value;?>
" /><br />

									<input type="text" name="tel" placeholder="Введите телефон" value="<?php echo $_smarty_tpl->tpl_vars['tel']->value;?>
" /><br />
									<br />


									<input type="hidden" name="idc" value=<?php echo $_smarty_tpl->tpl_vars['idc']->value;?>
>
									<input type="hidden" name="idc" value=<?php echo $_smarty_tpl->tpl_vars['idc']->value;?>
>
									
									<input type="submit" name="edit_categorie" value="Редактировать">
									

								</form>

							</div>
							<!-- Content End -->

						</div>
						<!-- Box End -->

					</div><?php }
}
?>