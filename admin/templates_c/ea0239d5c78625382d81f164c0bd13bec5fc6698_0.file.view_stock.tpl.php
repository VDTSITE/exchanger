<?php /* Smarty version 3.1.25, created on 2016-06-09 19:02:32
         compiled from "/home/vdtvdt/vdt.site/exchanger1/admin/templates/view_stock.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:84170409157599318b1c779_60725225%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea0239d5c78625382d81f164c0bd13bec5fc6698' => 
    array (
      0 => '/home/vdtvdt/vdt.site/exchanger1/admin/templates/view_stock.tpl',
      1 => 1465488150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84170409157599318b1c779_60725225',
  'variables' => 
  array (
    'categories' => 0,
    'count' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25',
  'unifunc' => 'content_57599318bb99f7_74849814',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57599318bb99f7_74849814')) {
function content_57599318bb99f7_74849814 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '84170409157599318b1c779_60725225';
?>
<div class="three-quarters animate_afl  vc_custom_1437646393204 color_custom animate_start" style="padding: 1%; vertical-align: baseline;"><div class="wpb_text_column "><div class="wpb_wrapper">


	<style>


table {
    border-collapse: collapse;
    width: 100%;
}
  p, h1 {
    margin: 2em 0;
  }
td, th {
   text-align: center;
   border: 1px solid #ddd;
   padding:.5em 5px;
    font-size: 1.2em;
}
  th {
    background-color:#f4f4f4;
    font-weight: normal;
  }
caption {
    margin: 0;
    font-weight: bold;
    font-size: 1.3em;
    background: #eee;
    padding: 10px;
    border: 1px solid #ddd;
 }


  /* queries */
@media screen and (max-width: 520px){

  html:not(.emp-sales) .emp-sales th,
  html:not(.emp-sales) .emp-sales td {
    font-size: 0;
    padding: 0;
    content: "";
    height: 7px;
  }
  html:not(.emp-sales) table {
    position: relative;
    overflow: hidden;
  }
  html:not(.emp-sales) table:before {
    content: "Table: Tap to View";
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,.6);
    color: #fff;
    font-weight: bold;
    font-size: 1.6em;
    text-align: center;
    vertical-align: middle;
    z-index: 100;
    font-family: Helvetica, sans-serif;

  }
 html.emp-sales table:before {
    content: "";
    display: block;
    background: #333;
    padding: 10px;
  }

  html.emp-sales table:before{
    content: "Back";
    position: absolute;
    top: 0;
    left: 15px;
    padding: .5em 1em;
    margin: 10px 0;
    font-weight: bold;
    color: #fff;
    background: #000;
    border: 1px solid #fff;
  }

}

</style>

	<table class="emp-sales">
    <caption>Акции</caption>
    <thead>
      <tr>
        <td></td>
        <th scope="col">Тип</th>
		   <th scope="col">Валюта</th>
        <th scope="col">Процент</th>
        <th scope="col">К оплате</th>
        <th scope="col">К получению</th>
        <th scope="col">Статус</th>
        <th scope="col" colspan="2">Редактирование</th>

      </tr>
    </thead>
    <tbody>




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

      <tr style="<?php if ($_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['actual'] != 0) {?>background: rgba(210, 210, 210, 0.8) none repeat scroll 0% 0%; text-decoration: line-through; color: rgb(136, 136, 136);<?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type_operation'] == 0) {?>background: rgba(240, 254, 223, 0.25) none repeat scroll 0% 0%; 
        <?php } else { ?>
        background: rgb(255, 245, 245) none repeat scroll 0% 0%;
        <?php }?>
        <?php }?>">
        <th scope="row"><?php echo $_smarty_tpl->tpl_vars['count']->value++;?>
</th>
        <td><?php if ($_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type_operation'] == 0) {?>Ввод<?php } else { ?>Вывод<?php }?></td>
        
		    <td><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['l'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['l']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['currency']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['name'] = 'l';
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total']);
if ($_smarty_tpl->tpl_vars['currency']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['id'] == $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_currency']) {
echo $_smarty_tpl->tpl_vars['currency']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['name'];
}
endfor; endif; ?></td>

        
        <td><?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['percent'];?>
 %</td>
        <td><?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['k_oplate'];?>
</td>
		  <td><?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['k_polucheniju'];?>
</td>
		  <td><?php if ($_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['actual'] == 0) {?><a href="view_stock.php?actual=finish&ids=<?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"><b>Завершить</b></a><?php } else { ?><a href="view_stock.php?actual=active&ids=<?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
"><b>Сделать активной</b></a><?php }?></td>
      <td><a href="edit_stock.php?ids=<?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
">Изменить</a></td>
      <td><a href="delete_stock.php?ids=<?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
">Удалить</a></td>

      </tr>
    <?php endfor; endif; ?>



    </tbody>
  </table></div> </div> </div><?php }
}
?>