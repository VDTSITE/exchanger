<?php /* Smarty version 3.1.25, created on 2016-04-24 04:08:20
         compiled from "/home/vdtvdt/vdt.site/yo/admin/templates/edit_pages.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:848477081571c1c84603d69_16814430%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '055a1a494a4ccd00189da87dc04018ec233eab2c' => 
    array (
      0 => '/home/vdtvdt/vdt.site/yo/admin/templates/edit_pages.tpl',
      1 => 1461456127,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '848477081571c1c84603d69_16814430',
  'variables' => 
  array (
    'meta_title' => 0,
    'meta_keyword' => 0,
    'meta_description' => 0,
    'title' => 0,
    'content' => 0,
    'idp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_571c1c8461ec29_27610944',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571c1c8461ec29_27610944')) {
function content_571c1c8461ec29_27610944 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '848477081571c1c84603d69_16814430';
?>
<!-- Form Validation Start -->
					<div class="col-lg-6">
						<div class="box">

							<!-- Title Bar Start -->
							<div class="box-title">
								<span class="gray">Редактирование страницы </span>
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">

								<form method="POST" action="edit_pages.php">

									<!-- Required -->
									<label for="name">Отредактируйте meta_title</label>
									<input type="text" name="meta_title" id="name" class="form-control required" value="<?php echo $_smarty_tpl->tpl_vars['meta_title']->value;?>
" />

									<div class="spacer"></div>

									<!-- Required -->
									<label for="email">Отредактируйте meta_keyword</label>
									<input type="text" name="meta_keyword" id="email" class="form-control required" value="<?php echo $_smarty_tpl->tpl_vars['meta_keyword']->value;?>
" placeholder="Введите meta_keyword" />

									<div class="spacer"></div>

									<!-- Required -->
									<label for="url">Отредактируйте meta_description</label>
									<input type="text" name="meta_description" id="url" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['meta_description']->value;?>
" placeholder="Введите meta_description" />

									<div class="spacer"></div>

									<!-- Required -->
									<label for="url">Отредактируйте title</label>
									<input type="text" name="title" id="url" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" placeholder="Введите title" />

									<div class="spacer"></div>

									<!-- Required -->
									<label for="comment">Отредактируйте content</label>
									<textarea name="content" id="email" class="form-control required" placeholder="Введите content" rows="10"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</textarea>

									<div class="spacer"></div>

									<!-- Required -->
									<input type="hidden" name="idp" value="<?php echo $_smarty_tpl->tpl_vars['idp']->value;?>
">

									<div class="row">
										<div class="col-lg-12 text-right">
											<input type="submit" name="edit" value="Редактировать" class="btn btn-success btn-wide"/>
										</div>
									</div>

								</form>

							</div>
							<!-- Content End -->

						</div>
					</div>
					<!-- Form Validation End -->
<?php }
}
?>