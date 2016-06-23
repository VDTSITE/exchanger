<?php /* Smarty version 3.1.25, created on 2016-05-03 18:15:59
         compiled from "/home/vdtvdt/vdt.site/yo/admin/templates/edit_news.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8598937415728c0af4b2016_67836055%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db71ef3386228cec6b5118fd4a2b1111a092c0df' => 
    array (
      0 => '/home/vdtvdt/vdt.site/yo/admin/templates/edit_news.tpl',
      1 => 1462288551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8598937415728c0af4b2016_67836055',
  'variables' => 
  array (
    'title' => 0,
    'video_html' => 0,
    'photo' => 0,
    'short_desc' => 0,
    'description' => 0,
    'idn' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_5728c0af4d3ea1_13319133',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5728c0af4d3ea1_13319133')) {
function content_5728c0af4d3ea1_13319133 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8598937415728c0af4b2016_67836055';
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

										
									
									<label for="description1">Введите краткое описание новости</label>
									<textarea name="short_desc1" id="short_desc3" placeholder="Введите описание новости"><?php echo $_smarty_tpl->tpl_vars['short_desc']->value;?>
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
										
										var ckeditor3 = CKEDITOR.replace( 'short_desc3' );
										
										AjexFileManager.init({
										
										returnTo: 'ckeditor',
										
										editor: ckeditor3
										
										});
									<?php echo '</script'; ?>
>
									





									<label for="description1">Введите полное описание новости</label>
									<textarea name="description1" id="description3" placeholder="Введите описание новости"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</textarea>


									
									<?php echo '<script'; ?>
 type="text/javascript" src="ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
									
									<?php echo '<script'; ?>
 type="text/javascript" src="AjexFileManager/ajex.js"><?php echo '</script'; ?>
>

									
									
									<?php echo '<script'; ?>
 type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.4.pack.js"><?php echo '</script'; ?>
>
									
									<link rel="stylesheet" href="js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />

									

									<?php echo '<script'; ?>
 type="text/javascript">
										
										var ckeditor4 = CKEDITOR.replace( 'description3' );
										
										AjexFileManager.init({
										
										returnTo: 'ckeditor',
										
										editor: ckeditor4
										
										});
									<?php echo '</script'; ?>
>
									

									

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

<!-- 


<?php echo '<script'; ?>
 type="text/javascript" src="fckeditor/fckeditor.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript">




var sBasePath = document.location.href.substring(0,document.location.href.lastIndexOf("edit_news.php")) ; 
var oFCKeditor3 = new FCKeditor("description1","100%", "400" ) ; 
oFCKeditor3.BasePath = sBasePath+"fckeditor/" ; 
oFCKeditor3.Config['CustomConfigurationsPath']=sBasePath+'js/config.js'; 
oFCKeditor3.ToolbarSet="Custom";
oFCKeditor3.ReplaceTextarea() ;




<?php echo '</script'; ?>
> 



 -->
<?php }
}
?>