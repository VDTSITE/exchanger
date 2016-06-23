<?php /* Smarty version 3.1.25, created on 2016-04-25 20:28:35
         compiled from "/home/vdtvdt/vdt.site/yo/admin/templates/edit_products.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1998747249571e53c3cdc488_13869058%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '682fa08adcab462df490915407b8a26c0d422c18' => 
    array (
      0 => '/home/vdtvdt/vdt.site/yo/admin/templates/edit_products.tpl',
      1 => 1461605315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1998747249571e53c3cdc488_13869058',
  'variables' => 
  array (
    'title' => 0,
    'short_desc' => 0,
    'full_desc' => 0,
    'price' => 0,
    'old_price' => 0,
    'count' => 0,
    'photo' => 0,
    'categories' => 0,
    'id_cat' => 0,
    'sub_categories' => 0,
    'id_sub_cat' => 0,
    'idp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_571e53c3d0b529_26718065',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571e53c3d0b529_26718065')) {
function content_571e53c3d0b529_26718065 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1998747249571e53c3cdc488_13869058';
?>
<div class="col-lg-12">

						<!-- Box Start -->
						<div class="box">

							<!-- Title Bar Start -->
							<div class="box-title">
								<span class="gray">Редактирование товара</span>
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">

								<form action="edit_products.php" method="POST" class="basic-form" enctype="multipart/form-data">

									<label for="title">Введите название товара</label>
									<input type="text" name="title" placeholder="Введите название товара" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" />

									<label for="short_desc">Введите краткое описание</label>
									<textarea name="short_desc" id="textarea" placeholder="Введите краткое описание"><?php echo $_smarty_tpl->tpl_vars['short_desc']->value;?>
</textarea>

									<label for="full_desc">Введите полное описание</label>
									<textarea name="full_desc" id="textarea" placeholder="Введите полное описание"><?php echo $_smarty_tpl->tpl_vars['full_desc']->value;?>
</textarea>

									<label for="price">Введите цену</label>
									<input type="text" name="price" placeholder="Введите цену" value="<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
"/>
									
									<label for="old_price">Введите старую цену</label>
									<input type="text" name="old_price" placeholder="Введите цену" value="<?php echo $_smarty_tpl->tpl_vars['old_price']->value;?>
"/>
									

									<label for="count">Введите количество товара</label>
									<input type="number" name="count" placeholder="Количество" value="<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
" maxlength="3" /> 
									<br />

									<img src="../images/<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" alt="" width="80px;">

									<label for="photo">Заменить фотографию:</label>
									<input type="file" name="new_photo" placeholder="Выберите фотографию" />

									<label for="id_cat">Категория:</label>
									<select id="dropdown" name="id_cat">

									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['categories']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
									
										<?php if ($_smarty_tpl->tpl_vars['id_cat']->value == $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']) {?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</option>
										<?php } else { ?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</option>

										<?php }?>

									<?php endfor; endif; ?>
									</select><br />


									<label for="id_sub_cat">Подкатегория:</label>
									<select id="dropdown" name="id_sub_cat">

									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['sub_categories']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
									
										<?php if ($_smarty_tpl->tpl_vars['id_sub_cat']->value == $_smarty_tpl->tpl_vars['sub_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id']) {?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['sub_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['sub_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</option>
										<?php } else { ?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['sub_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['sub_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</option>

										<?php }?>

									<?php endfor; endif; ?>
									</select><br />

									<input type="hidden" name="idp" value="<?php echo $_smarty_tpl->tpl_vars['idp']->value;?>
">
									<input type="hidden" name="old_photo" value="<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
">
									<input type="submit" name="edit_product" value="Изменить">
									

								</form>

							</div>
							<!-- Content End -->

						</div>
						<!-- Box End -->

					</div>
<?php }
}
?>