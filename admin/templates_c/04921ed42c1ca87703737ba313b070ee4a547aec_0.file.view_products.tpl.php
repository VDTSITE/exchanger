<?php /* Smarty version 3.1.25, created on 2016-04-26 18:01:43
         compiled from "/home/vdtvdt/vdt.site/yo/admin/templates/view_products.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1189533182571f82d7e0fa46_81362479%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04921ed42c1ca87703737ba313b070ee4a547aec' => 
    array (
      0 => '/home/vdtvdt/vdt.site/yo/admin/templates/view_products.tpl',
      1 => 1461682903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1189533182571f82d7e0fa46_81362479',
  'variables' => 
  array (
    'products_list' => 0,
    'active_page' => 0,
    'array_page' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_571f82d7e5ab44_22195230',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571f82d7e5ab44_22195230')) {
function content_571f82d7e5ab44_22195230 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1189533182571f82d7e0fa46_81362479';
?>
<div class="col-lg-12">
						<!-- Box Start -->
						<div class="inbox box green">

							<!-- Title Bar Start -->
							<div class="box-title gray">
								<span>Список товаров</span>
								<!-- <span class="subtitle">// View Messages</span> -->
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">
								<table class="regular-table">
									<thead>
										<!-- <th><input type="checkbox" name="select-all" id="select-all" class="icheck-blue" /></th> -->
										<th>№</th>
										<th>Фото</th>
										<th>Название</th>
										<th>Краткое описание</th>
										<th>Полное описание</th>
										<th>Цена</th>
										<th>Старая цена</th>
										<th>Количество</th>
										<th>Категория</th>
										<th>Подкатегория</th>
										<th>Управление</th>
										
									</thead>
									<tbody>

									<!-- Table Row Start -->
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['products_list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
									<tr>
										<!-- <td><input type="checkbox" name="select-example" class="icheck-blue" /></td> -->
										<td>
											<p><?php echo $_smarty_tpl->tpl_vars['products_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['skip']+1;?>
</p>
										</td>
										<td>
											<p><img src="../images/<?php echo $_smarty_tpl->tpl_vars['products_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['photo'];?>
" alt="" width="80px;"></p>
										</td>
										<td>
											<p><?php echo $_smarty_tpl->tpl_vars['products_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>
</p>
										</td>
										<td>
											<p><?php echo $_smarty_tpl->tpl_vars['products_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['short_desc'];?>
...</p>
										</td>
										<td>
											<p><?php echo $_smarty_tpl->tpl_vars['products_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['full_desc'];?>
...</p>
										</td>
										<td>
											<p><?php echo $_smarty_tpl->tpl_vars['products_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['price'];?>
</p>
										</td>
										<td>
											<p><?php echo $_smarty_tpl->tpl_vars['products_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['old_price'];?>
</p>
										</td>
										<td>
											<p><?php echo $_smarty_tpl->tpl_vars['products_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['count'];?>
</p>
										</td>
										<td>
											<p><?php if ($_smarty_tpl->tpl_vars['products_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_cat'] == 1) {?>Мужская<?php } elseif ($_smarty_tpl->tpl_vars['products_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_cat'] == 2) {?>Женская<?php } else { ?>Нет категории<?php }?></p>
										</td>
										<td>
											<p><?php if ($_smarty_tpl->tpl_vars['products_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_sub_cat'] == 1) {?>Платья<?php } elseif ($_smarty_tpl->tpl_vars['products_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_sub_cat'] == 2) {?>Юбки<?php } elseif ($_smarty_tpl->tpl_vars['products_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_sub_cat'] == 3) {?>Футболки<?php } elseif ($_smarty_tpl->tpl_vars['products_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_sub_cat'] == 4) {?>Толстовки<?php } elseif ($_smarty_tpl->tpl_vars['products_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_sub_cat'] == 5) {?>Шорты<?php } elseif ($_smarty_tpl->tpl_vars['products_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_sub_cat'] == 6) {?>Тенниски<?php } else { ?>Нет подкатегории<?php }?></p>
										</td>
										<td class="actions">
											<a href="edit_products.php?idp=<?php echo $_smarty_tpl->tpl_vars['products_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"><i class="fa fa-file-text-o" title="Редактировать"></i></a>
											<a href="delete_products.php?idp=<?php echo $_smarty_tpl->tpl_vars['products_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
&product=<?php echo $_smarty_tpl->tpl_vars['products_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>
"><i class="fa fa-trash-o" title="Удалить"></i></a>
										</td>
										
									</tr>
									<?php endfor; endif; ?>
									<!-- Table Row End -->
									

									</tbody>
								</table>




						<table border='1' style="width: 5%; text-align: center; margin-left: auto; margin-right: auto; margin-top: 25px;">
							<tr>

								<td>
									<?php if ($_smarty_tpl->tpl_vars['active_page']->value != 1) {?> 
										<a href='view_products.php?page=<?php echo $_smarty_tpl->tpl_vars['active_page']->value-1;?>
'> << </a>
									<?php } else { ?>
										<<
									<?php }?>
								</td>

							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['array_page']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
								
								<td>
								<?php if ($_smarty_tpl->tpl_vars['active_page']->value != $_smarty_tpl->tpl_vars['array_page']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['p']) {?>
									<a href="view_products.php?page=<?php echo $_smarty_tpl->tpl_vars['array_page']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['p'];?>
"><?php echo $_smarty_tpl->tpl_vars['array_page']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['p'];?>
</a>
								<?php } else { ?>
									<?php echo $_smarty_tpl->tpl_vars['array_page']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['p'];?>

								<?php }?>
								</td>


							<?php endfor; endif; ?>
							
								<td>
								<?php if ($_smarty_tpl->tpl_vars['active_page']->value != $_smarty_tpl->tpl_vars['pages']->value) {?> 
									<a href='view_products.php?page=<?php echo $_smarty_tpl->tpl_vars['active_page']->value+1;?>
'> >> </a> 
								<?php } else { ?>
									>>
								<?php }?>
								</td>


							</tr>
						</table>
							</div>
							<!-- Content End -->

						</div>
						<!-- Box End -->
					</div><?php }
}
?>