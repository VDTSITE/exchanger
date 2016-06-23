<?php /* Smarty version 3.1.25, created on 2016-05-06 21:06:00
         compiled from "/home/vdtvdt/vdt.site/print/admin/templates/edit_buy.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:773711105572cdd080d0960_14425652%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad0df0a3f426274e20744d2cfb721787bb593a95' => 
    array (
      0 => '/home/vdtvdt/vdt.site/print/admin/templates/edit_buy.tpl',
      1 => 1462557959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '773711105572cdd080d0960_14425652',
  'variables' => 
  array (
    'adress' => 0,
    'tel' => 0,
    'idc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_572cdd08100136_53338379',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572cdd08100136_53338379')) {
function content_572cdd08100136_53338379 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '773711105572cdd080d0960_14425652';
?>
<div class="col-lg-6">

						<!-- Box Start -->
						<div class="box">

							<!-- Title Bar Start -->
							<div class="box-title">
								<span class="gray">Редактирование категории</span>
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">

								<form action="edit_buy.php" method="POST" class="basic-form" enctype="multipart/form-data">

									<label for="title">Введите адрес</label>
									<input type="text" name="adress" placeholder="Введите название категории" value="<?php echo $_smarty_tpl->tpl_vars['adress']->value;?>
" /><br />

									<input type="text" name="tel" placeholder="Введите название категории" value="<?php echo $_smarty_tpl->tpl_vars['tel']->value;?>
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