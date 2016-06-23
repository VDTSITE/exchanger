<?php /* Smarty version 3.1.25, created on 2016-03-14 13:41:01
         compiled from "/home/vdtvdt/vdt.site/www/p0o9l8m1a2x3/templates/mail.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18803528156e6a34d3a1fe7_63806826%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c373296542d4931ad7aa431a55df5211667fa4df' => 
    array (
      0 => '/home/vdtvdt/vdt.site/www/p0o9l8m1a2x3/templates/mail.tpl',
      1 => 1457955659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18803528156e6a34d3a1fe7_63806826',
  'variables' => 
  array (
    'mail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_56e6a34d3e88f2_62016492',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56e6a34d3e88f2_62016492')) {
function content_56e6a34d3e88f2_62016492 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18803528156e6a34d3a1fe7_63806826';
?>
<!-- Content Start -->
	<div class="content">
		<div class="main-container1">

			<div class="container">
				<div class="row">

					<div class="col-lg-3">
						<div class="content-sidebar">
							<div class="inner">

								<a href="#" class="btn btn-orange btn-full">Compose</a>

								<ul class="inbox-list">
									<li><a href="#"><i class="fa fa-inbox"></i> Inbox <span class="notification green">12</span></a></li>
									<li><a href="#"><i class="fa fa-star-half-full"></i> Starred <span class="notification blue">12</span></a></li>
									<li><a href="#"><i class="fa fa-exclamation-circle"></i> Important <span class="notification gray">12</span></a></li>
									<li><a href="#"><i class="fa fa-location-arrow"></i> Sent Mail <span class="notification yellow">12</span></a></li>
									<li><a href="#"><i class="fa fa-pencil-square-o"></i> Drafts <span class="notification yellow">12</span></a></li>
									<li><a href="#"><i class="fa fa-trash-o"></i> Trash <span class="notification yellow">12</span></a></li>
								</ul>

								<ul class="list inbox-quota">

									<li>
										<div class="progress-bar-container">
											<span>Inbox Quota</span>
											<div class="progress-bar">
												<div class="progress" style="width: 60%;"></div>
											</div>
											<span>60% Full</span>
										</div>
									</li>

									<li>
										<div class="progress-bar-container">
											<span>Outbox Quota</span>
											<div class="progress-bar">
												<div class="progress" style="width: 23%;"></div>
											</div>
											<span>23% Complete</span>
										</div>
									</li>

								</ul>

							</div>
						</div>
					</div>

					<div class="col-lg-9">
						<!-- Box Start -->
						<div class="inbox box green">

							<!-- Title Bar Start -->
							<div class="box-title gray">
								<span>Входящие</span>
								<span class="subtitle">// View Messages</span>
							</div>
							<!-- Title Bar End -->

							<!-- Content Start -->
							<div class="content">
								<table class="regular-table">
									<thead>
										<!-- <th><input type="checkbox" name="select-all" id="select-all" class="icheck-blue" /></th> -->
										<th>От кого</th>
										<th>Пометка</th>
										<th>Тема</th>
										<th>Сообщение</th>
										<th>Дата</th>
										<th></th>
									</thead>
									<tbody>

									<!-- Table Row Start -->
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['mail']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
											<p><?php echo $_smarty_tpl->tpl_vars['mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</p>
										</td>
										<td>
											<span class="label red">Client</span>
										</td>
										<td>
											<p>Welcome</p>
										</td>
										<td>
											<p class="subtitle"><?php echo $_smarty_tpl->tpl_vars['mail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['comment'];?>
</p>
										</td>
										<td>30 May</td>
										<td class="actions">
											<a href="#"><i class="fa fa-file-text-o"></i></a>
											<a href="#"><i class="fa fa-trash-o"></i></a>
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