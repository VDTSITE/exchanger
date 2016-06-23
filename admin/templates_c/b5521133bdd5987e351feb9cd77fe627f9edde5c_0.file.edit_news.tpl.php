<?php /* Smarty version 3.1.25, created on 2016-04-23 13:37:36
         compiled from "/home/vdtvdt/bf.knu.ua/www/p0o9l8m1a2x3/templates/edit_news.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1333203504571b50708c9678_09913337%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5521133bdd5987e351feb9cd77fe627f9edde5c' => 
    array (
      0 => '/home/vdtvdt/bf.knu.ua/www/p0o9l8m1a2x3/templates/edit_news.tpl',
      1 => 1461407855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1333203504571b50708c9678_09913337',
  'variables' => 
  array (
    'title' => 0,
    'video_html' => 0,
    'photo' => 0,
    'description' => 0,
    'idn' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_571b50708e4c50_97733583',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571b50708e4c50_97733583')) {
function content_571b50708e4c50_97733583 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1333203504571b50708c9678_09913337';
?>
<div class="col-lg-12">

						<!-- Box Start -->
						<div class="box">

							<!-- Title Bar Start -->
							<div class="box-title">
								<span class="gray">Редактирование новости</span>
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">

								<form action="edit_news.php" method="POST" class="basic-form" enctype="multipart/form-data">

									<label for="title1">Введите название новости</label>
									<input type="text" name="title1" id="title" placeholder="Введите название новости" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" /><br />
									

									
									<label for="video">Введите ссылку на видео</label>
									<input type="text" name="video" placeholder="Введите новую ссылку на видео" value="<?php echo $_smarty_tpl->tpl_vars['video_html']->value;?>
" />
									<br />


									<img src="../images/<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" alt="" width="470px;">

									<label for="photo">Заменить фотографию:</label>
									<input type="file" name="new_photo" placeholder="Выберите фотографию" /><br />


									<label for="description1">Введите описание новости</label>
									<textarea name="description1" id="description" placeholder="Введите описание новости"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</textarea>

									

									<br />


									<br />

									<input type="hidden" name="idn" value="<?php echo $_smarty_tpl->tpl_vars['idn']->value;?>
">
									<input type="hidden" name="old_photo" value="<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
">
									<input type="submit" name="edit_news" value="Отредактировать">
									

								</form>

							</div>
							<!-- Content End -->

						</div>
						<!-- Box End -->

					</div>
<?php }
}
?>