<?php /* Smarty version 3.1.25, created on 2016-04-20 14:40:11
         compiled from "/home/vdtvdt/bf.knu.ua/www/p0o9l8m1a2x3/templates/add_slider.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:126193191857176a9b19d9b8_48738814%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e35b7da0e736e3f8a20d240c18c3dd356fd95e8' => 
    array (
      0 => '/home/vdtvdt/bf.knu.ua/www/p0o9l8m1a2x3/templates/add_slider.tpl',
      1 => 1461152409,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126193191857176a9b19d9b8_48738814',
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_57176a9b1cfcd3_35464173',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57176a9b1cfcd3_35464173')) {
function content_57176a9b1cfcd3_35464173 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '126193191857176a9b19d9b8_48738814';
?>
<!-- Form Validation Start -->
					<div class="col-lg-6">
						<div class="box">

							<!-- Title Bar Start -->
							<div class="box-title">
								<span class="gray">Добавление слайда </span>
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">

								<form method="POST" action="add_slider.php" name="form_slider" enctype="multipart/form-data">

									<!-- Required -->
									<label for="name">Добавьте название слайда</label>
									<input type="text" name="title_slider1" id="title_slider" class="form-control required" placeholder="Введите название слайда"/>
									<span id="title_slider_error" style="color: #cc0000;"></span>

									<div class="spacer"></div>

									<!-- Required -->
									<label for="email">Добавьте фотографию для слайда</label>
									<input type="file" name="photo_slider1" id="photo_slider" class="form-control required"  />

									<div class="spacer"></div>



									<div class="row">
										<div class="col-lg-12 text-right">
											<span id="send_slider_error" style="color: #cc0000;">&nbsp;&nbsp;</span>
											<input type="button" name="add_slide1" id="add_slide" value="Добавить" class="btn btn-success btn-wide"/>
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