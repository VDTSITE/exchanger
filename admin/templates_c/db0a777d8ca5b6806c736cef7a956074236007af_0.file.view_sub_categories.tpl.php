<?php /* Smarty version 3.1.25, created on 2016-04-25 18:36:31
         compiled from "/home/vdtvdt/vdt.site/yo/admin/templates/view_sub_categories.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1321685773571e397fc50282_91817549%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db0a777d8ca5b6806c736cef7a956074236007af' => 
    array (
      0 => '/home/vdtvdt/vdt.site/yo/admin/templates/view_sub_categories.tpl',
      1 => 1461598591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1321685773571e397fc50282_91817549',
  'variables' => 
  array (
    'sub_categories' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_571e397fc8aaa8_70440220',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_571e397fc8aaa8_70440220')) {
function content_571e397fc8aaa8_70440220 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1321685773571e397fc50282_91817549';
?>
<div class="col-lg-8">
						<!-- Box Start -->
						<div class="inbox box green">

							<!-- Title Bar Start -->
							<div class="box-title gray">
								<span>Список подкатегорий</span>
								<!-- <span class="subtitle">// View Messages</span> -->
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">
								<table class="regular-table">
									<thead>
										<!-- <th><input type="checkbox" name="select-all" id="select-all" class="icheck-blue" /></th> -->
										<th>№</th>
										<th>Обложка подкатегории</th>
										<th>Название</th>
										<th>Категория</th>
									</thead>
									<tbody>

									<!-- Table Row Start -->
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
									<tr>
										<!-- <td><input type="checkbox" name="select-example" class="icheck-blue" /></td> -->
										<td>
											<p><?php echo $_smarty_tpl->tpl_vars['count']->value++;?>
</p>
										</td>
										<td>
											<p><img src="../images/<?php echo $_smarty_tpl->tpl_vars['sub_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['photo'];?>
" style="width: 100px;" alt=""></p>
										</td>
										
										<td>
											<p><?php echo $_smarty_tpl->tpl_vars['sub_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</p>
										</td>
										<td>
											<p><?php if ($_smarty_tpl->tpl_vars['sub_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_cat'] == 1) {?>Кухни<?php } elseif ($_smarty_tpl->tpl_vars['sub_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_cat'] == 2) {?>Столы и стулья<?php } elseif ($_smarty_tpl->tpl_vars['sub_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_cat'] == 3) {?>Кухонные уголки<?php } elseif ($_smarty_tpl->tpl_vars['sub_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_cat'] == 4) {?>Шкафы-купе<?php } elseif ($_smarty_tpl->tpl_vars['sub_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_cat'] == 5) {?>Гостинные<?php } elseif ($_smarty_tpl->tpl_vars['sub_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_cat'] == 6) {?>Прихожие<?php } elseif ($_smarty_tpl->tpl_vars['sub_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_cat'] == 7) {?>Диваны и кресла<?php } elseif ($_smarty_tpl->tpl_vars['sub_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_cat'] == 8) {?>Спальни<?php } elseif ($_smarty_tpl->tpl_vars['sub_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_cat'] == 9) {?>Детские комнаты<?php } elseif ($_smarty_tpl->tpl_vars['sub_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_cat'] == 10) {?>Фотообои и фрески<?php } elseif ($_smarty_tpl->tpl_vars['sub_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_cat'] == 11) {?>Офисная мебель<?php } elseif ($_smarty_tpl->tpl_vars['sub_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_cat'] == 12) {?>Кресла и стулья<?php } elseif ($_smarty_tpl->tpl_vars['sub_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_cat'] == 13) {?>Мебель для гостиниц<?php } elseif ($_smarty_tpl->tpl_vars['sub_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_cat'] == 14) {?>Бытовая техника<?php } elseif ($_smarty_tpl->tpl_vars['sub_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_cat'] == 15) {?>Кровати<?php }?></p>
										</td>
										<td class="actions">
											<a href="edit_sub_categories.php?idc=<?php echo $_smarty_tpl->tpl_vars['sub_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"><i class="fa fa-file-text-o" title="Редактировать"></i></a>
											<a href="delete_sub_categories.php?idc=<?php echo $_smarty_tpl->tpl_vars['sub_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
&sub_categories=<?php echo $_smarty_tpl->tpl_vars['sub_categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
"><i class="fa fa-trash-o" title="Удалить"></i></a>
										</td>
										
									</tr>
									<?php endfor; endif; ?>
									<!-- Table Row End -->

									

									</tbody>
								</table>
							</div>
							<!-- Content End -->

						</div>
						<!-- Box End -->
					</div><?php }
}
?>