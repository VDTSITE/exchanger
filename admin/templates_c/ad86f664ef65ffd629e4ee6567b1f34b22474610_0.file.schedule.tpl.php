<?php /* Smarty version 3.1.25, created on 2016-06-02 02:06:00
         compiled from "/home/vdtvdt/vdt.site/exchanger1/admin/templates/schedule.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:927671044574f6a58b44d26_51208479%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad86f664ef65ffd629e4ee6567b1f34b22474610' => 
    array (
      0 => '/home/vdtvdt/vdt.site/exchanger1/admin/templates/schedule.tpl',
      1 => 1464822355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '927671044574f6a58b44d26_51208479',
  'variables' => 
  array (
    'mon' => 0,
    'tue' => 0,
    'wed' => 0,
    'thu' => 0,
    'fri' => 0,
    'sat' => 0,
    'sun' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_574f6a58b75258_06154718',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_574f6a58b75258_06154718')) {
function content_574f6a58b75258_06154718 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '927671044574f6a58b44d26_51208479';
?>
<div class="col-lg-12">
						<!-- Box Start -->
						<div class="box">

							<!-- Title Bar Start -->
							<div class="box-title">
								<span class="gray">График работы</span>
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">

								<form action="schedule.php" method="POST" class="basic-form" enctype="multipart/form-data">

									<label for="mon">Понедельник</label>
									<input type="text" name="mon" value="<?php echo $_smarty_tpl->tpl_vars['mon']->value;?>
" /><br />

									<label for="tue">Вторник</label>
									<input type="text" name="tue" value="<?php echo $_smarty_tpl->tpl_vars['tue']->value;?>
" /><br />

									<label for="wed">Среда</label>
									<input type="text" name="wed" value="<?php echo $_smarty_tpl->tpl_vars['wed']->value;?>
" /><br />

									<label for="thu">Четверг</label>
									<input type="text" name="thu" value="<?php echo $_smarty_tpl->tpl_vars['thu']->value;?>
" /><br />

									<label for="fri">Пятница</label>
									<input type="text" name="fri" value="<?php echo $_smarty_tpl->tpl_vars['fri']->value;?>
" /><br />

									<label for="sat">Суббота</label>
									<input type="text" name="sat" value="<?php echo $_smarty_tpl->tpl_vars['sat']->value;?>
" /><br />

									<label for="sun">Воскресенье</label>
									<input type="text" name="sun" value="<?php echo $_smarty_tpl->tpl_vars['sun']->value;?>
" /><br />

								
									<br />


									<input type="submit" name="add" value="Сохранить">
									

								</form>

							</div>
							<!-- Content End -->

						</div>
						<!-- Box End -->

					</div>
<?php }
}
?>