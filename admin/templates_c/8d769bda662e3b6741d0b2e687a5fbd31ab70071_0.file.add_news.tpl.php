<?php /* Smarty version 3.1.25, created on 2016-05-03 21:57:55
         compiled from "/home/vdtvdt/vdt.site/yo/admin/templates/add_news.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:21076350155728f4b3919733_64099744%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d769bda662e3b6741d0b2e687a5fbd31ab70071' => 
    array (
      0 => '/home/vdtvdt/vdt.site/yo/admin/templates/add_news.tpl',
      1 => 1462288555,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21076350155728f4b3919733_64099744',
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_5728f4b39a54d4_57998425',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5728f4b39a54d4_57998425')) {
function content_5728f4b39a54d4_57998425 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21076350155728f4b3919733_64099744';
?>


<!-- Form Validation Start -->
					<div class="col-lg-12">
						<div class="box">

							<!-- Title Bar Start -->
							<div class="box-title">
								<span class="gray">Добавление новости </span>
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">

								<form method="POST" action="add_news.php" name="form_news" enctype="multipart/form-data">

									<!-- Required -->
									<label for="title_news1">Введите название новости</label>
									<input type="text" name="title_news1" id="title_news" class="form-control required" placeholder="Введите название новости"/>
									<span id="title_news_error" style="color: #cc0000;"></span>

									<div class="spacer"></div>


									<!-- Required -->
									<label for="video_news1">Вставьте html-код видео</label>
									<input type="text" name="video_news1" id="video_news" class="form-control required"  placeholder="Вставьте html-код видео" />

									<div class="spacer"></div>


									<!-- Required -->
									<label for="photo_news1">Выберите фотографию для новости</label>
									<input type="file" name="photo_news1" id="photo_news" class="form-control required"  />

									<div class="spacer"></div>


									<label for="desc_news1">Введите краткое описание новости</label>
									<textarea name="short_desc1" id="short_desc3"></textarea>
									
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
									
									<span id="desc_news_error" style="color: #cc0000;"></span>

									<div class="spacer"></div>




									<label for="desc_news1">Введите полное описание новости</label>
									<textarea name="desc_news1" id="desc_news3"></textarea>
									
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
										
										var ckeditor1 = CKEDITOR.replace( 'desc_news3' );
										
										AjexFileManager.init({
										
										returnTo: 'ckeditor',
										
										editor: ckeditor1
										
										});
									<?php echo '</script'; ?>
>
									
									<span id="desc_news_error" style="color: #cc0000;"></span>

									<div class="spacer"></div>

									<div class="row">
										<div class="col-lg-12 text-right">
											<span id="send_news_error" style="color: #cc0000;">&nbsp;&nbsp;</span>
											<input type="submit" name="add_news1" id="add_news" value="Добавить" class="btn btn-success btn-wide"/>
										</div>
									</div>

								</form>

							</div>
							<!-- Content End -->

						</div>
					</div>
					<!-- Form Validation End -->




<!-- <?php echo '<script'; ?>
 type="text/javascript" src="/AjexFileManager/ajex.js"><?php echo '</script'; ?>
> -->


<!-- <?php echo '<script'; ?>
 type="text/javascript" src="fckeditor/fckeditor.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript">




var sBasePath = document.location.href.substring(0,document.location.href.lastIndexOf("add_news.php")) ; 
var oFCKeditor3 = new FCKeditor("desc_news1","100%", "400" ) ; 
oFCKeditor3.BasePath = sBasePath+"fckeditor/" ; 
oFCKeditor3.Config['CustomConfigurationsPath']=sBasePath+'js/config.js'; 
oFCKeditor3.ToolbarSet="Custom";
oFCKeditor3.ReplaceTextarea() ;




<?php echo '</script'; ?>
> -->




<?php }
}
?>