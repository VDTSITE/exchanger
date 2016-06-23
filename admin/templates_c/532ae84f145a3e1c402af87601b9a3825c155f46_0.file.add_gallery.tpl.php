<?php /* Smarty version 3.1.25, created on 2016-04-23 18:33:37
         compiled from "/home/vdtvdt/bf.knu.ua/www/p0o9l8m1a2x3/templates/add_gallery.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:262322214571b95d14c2fd9_08488554%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '532ae84f145a3e1c402af87601b9a3825c155f46' => 
    array (
      0 => '/home/vdtvdt/bf.knu.ua/www/p0o9l8m1a2x3/templates/add_gallery.tpl',
      1 => 1461425613,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '262322214571b95d14c2fd9_08488554',
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_571b95d14da789_51745751',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571b95d14da789_51745751')) {
function content_571b95d14da789_51745751 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '262322214571b95d14c2fd9_08488554';
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

								<form method="post" action="add_gallery.php" name="form_gallery" enctype="multipart/form-data">

									<!-- Required -->
									<label for="photo_news1">Выберите фотографию для галереи</label>
									<input type="file" name="photo" id="photo_for_gallery" class="form-control required"  />

									<div class="spacer"></div>

									<div class="row">
										<div class="col-lg-12 text-right">
											<span id="send_gallery_error" style="color: #cc0000;">&nbsp;&nbsp;</span>
											<input type="button" id="add_gall" name="add_gallery" value="Добавить" class="btn btn-success btn-wide"/>
										</div>
									</div>

								</form>

							</div>
							<!-- Content End -->

						</div>
					</div>
					<!-- Form Validation End -->


<?php echo '<script'; ?>
 type="text/javascript">

		//
		document.getElementById("add_gall").onclick=function() {
			
			var photo1 = document.getElementById("photo_for_gallery").value;
			if(photo1 != "") {
				/*alert("test");*/
				form_gallery.submit();
			}

			else {

				document.getElementById("send_gallery_error").innerHTML="Выберите фотографию";
			}
		}

<?php echo '</script'; ?>
><?php }
}
?>