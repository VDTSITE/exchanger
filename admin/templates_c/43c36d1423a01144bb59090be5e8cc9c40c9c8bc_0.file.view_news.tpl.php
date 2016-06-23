<?php /* Smarty version 3.1.25, created on 2016-05-03 18:10:30
         compiled from "/home/vdtvdt/vdt.site/yo/admin/templates/view_news.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9252918265728bf668ded37_03305522%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43c36d1423a01144bb59090be5e8cc9c40c9c8bc' => 
    array (
      0 => '/home/vdtvdt/vdt.site/yo/admin/templates/view_news.tpl',
      1 => 1462288229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9252918265728bf668ded37_03305522',
  'variables' => 
  array (
    'mail1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_5728bf66920335_45283712',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5728bf66920335_45283712')) {
function content_5728bf66920335_45283712 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9252918265728bf668ded37_03305522';
?>
<!-- Content Start -->
	<div class="content">
		<div class="main-container1">

			<div class="container">
				<div class="row">


					<div class="col-lg-12">
						<!-- Box Start -->
						<div class="inbox box green">

							<!-- Title Bar Start -->
							<div class="box-title gray">
								<span>Новости</span>
								<!-- <span class="subtitle">// View Messages</span> -->
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">
								<table class="regular-table">
									<thead>
										<!-- <th><input type="checkbox" name="select-all" id="select-all" class="icheck-blue" /></th> -->
										<th>Название</th>
										<th>Видео</th>
										<th>Фото</th>
										<!-- <th>Описание</th> -->
										<th>Дата</th>
										<th>Редактировать</th>
										<th>Удалить</th>
										
									</thead>
									<tbody>

									<!-- Table Row Start -->
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['mail1']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
											<p><?php echo $_smarty_tpl->tpl_vars['mail1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>
</p>
										</td>
										<td>
											<p><?php echo $_smarty_tpl->tpl_vars['mail1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['video'];?>
</p>
										</td>
										<td>
											<p>
												<img src="../images/<?php echo $_smarty_tpl->tpl_vars['mail1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['photo'];?>
" alt="" style="width: 100px;">
											</p>
										</td>
										<!-- <td>
											<p><?php echo $_smarty_tpl->tpl_vars['mail1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['desc'];?>
</p>
										</td>
										 -->
										<td><?php echo $_smarty_tpl->tpl_vars['mail1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['data'];?>
</td>

										<td class="actions">
											<a href="edit_news.php?idn=<?php echo $_smarty_tpl->tpl_vars['mail1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"><i class="fa fa-file-text-o"></i></a>
										</td>
										<td class="actions">
											<a href="delete_news.php?idn=<?php echo $_smarty_tpl->tpl_vars['mail1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
&news_title=<?php echo $_smarty_tpl->tpl_vars['mail1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>
"><i class="fa fa-trash-o"></i></a>
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
					</div>


				</div>
			</div>

		</div>
	</div>
	<!-- Content End -->

<?php }
}
?>