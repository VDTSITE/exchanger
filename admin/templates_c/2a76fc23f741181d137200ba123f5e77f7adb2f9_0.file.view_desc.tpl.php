<?php /* Smarty version 3.1.25, created on 2016-05-06 23:55:29
         compiled from "/home/vdtvdt/vdt.site/print/admin/templates/view_desc.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:786048233572d04c1157cc4_28917724%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a76fc23f741181d137200ba123f5e77f7adb2f9' => 
    array (
      0 => '/home/vdtvdt/vdt.site/print/admin/templates/view_desc.tpl',
      1 => 1462568104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '786048233572d04c1157cc4_28917724',
  'variables' => 
  array (
    'title' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_572d04c1183b18_16890058',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572d04c1183b18_16890058')) {
function content_572d04c1183b18_16890058 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '786048233572d04c1157cc4_28917724';
?>
<div class="col-lg-12">
						<!-- Box Start -->
						<div class="box">

							<!-- Title Bar Start -->
							<div class="box-title">
								<span class="gray">Добавление описания</span>
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">

								<form action="view_desc.php" method="POST" class="basic-form" enctype="multipart/form-data">

									<label for="title">Введите название</label>
									<input type="text" name="title" placeholder="Введите название описания" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" /><br />

								
									<label for="desc">Введите описание</label>
									<textarea name="desc" id="short_desc3"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</textarea>
									
									<?php echo '<script'; ?>
 type="text/javascript" src="ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
									
									<?php echo '<script'; ?>
 type="text/javascript" src="AjexFileManager/ajex.js"><?php echo '</script'; ?>
>

									<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-1.7.min.js"><?php echo '</script'; ?>
>
									
									<?php echo '<script'; ?>
 type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.4.pack.js"><?php echo '</script'; ?>
>
									
									<link rel="stylesheet" href="js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />

									<?php echo '<script'; ?>
 type="text/javascript">
										
											$('a.fb').fancybox();
										
									<?php echo '</script'; ?>
>

									<?php echo '<script'; ?>
 type="text/javascript">
										
										var ckeditor2 = CKEDITOR.replace( 'short_desc3' );
										
										AjexFileManager.init({
										
										returnTo: 'ckeditor',
										
										editor: ckeditor2
										
										});
									<?php echo '</script'; ?>
>
									<br />


									<input type="submit" name="add" value="Добавить">
									

								</form>

							</div>
							<!-- Content End -->

						</div>
						<!-- Box End -->

					</div>
<?php }
}
?>