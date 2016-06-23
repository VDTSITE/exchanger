<?php /* Smarty version 3.1.25, created on 2016-04-23 03:35:43
         compiled from "/home/vdtvdt/bf.knu.ua/www/p0o9l8m1a2x3/templates/add_news.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:543123350571ac35f908a27_17014345%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ddd8d23077e249ea3f5bb43e504b74ad2c40e79' => 
    array (
      0 => '/home/vdtvdt/bf.knu.ua/www/p0o9l8m1a2x3/templates/add_news.tpl',
      1 => 1461371574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '543123350571ac35f908a27_17014345',
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_571ac35f9203c1_78822236',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571ac35f9203c1_78822236')) {
function content_571ac35f9203c1_78822236 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '543123350571ac35f908a27_17014345';
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


									<label for="desc_news1">Введите описание новости</label>
									<textarea type="text" name="desc_news1" id="desc_news" class="form-control required" placeholder="Введите описание новости"/></textarea>
									<span id="desc_news_error" style="color: #cc0000;"></span>

									<div class="spacer"></div>

									<div class="row">
										<div class="col-lg-12 text-right">
											<span id="send_news_error" style="color: #cc0000;">&nbsp;&nbsp;</span>
											<input type="button" name="add_news1" id="add_news" value="Добавить" class="btn btn-success btn-wide"/>
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