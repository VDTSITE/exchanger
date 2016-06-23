<?php /* Smarty version 3.1.25, created on 2016-06-14 23:53:33
         compiled from "/home/vdtvdt/vdt.site/exchanger1/templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:163575014457606ecdc28e86_23671593%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e2c4fea623b7493ec06ee475d492da89305ee62' => 
    array (
      0 => '/home/vdtvdt/vdt.site/exchanger1/templates/index.tpl',
      1 => 1465937611,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163575014457606ecdc28e86_23671593',
  'variables' => 
  array (
    'currency_wm' => 0,
    'currency' => 0,
    'categories' => 0,
    'count' => 0,
    'currency1' => 0,
    'sponsors' => 0,
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
  'unifunc' => 'content_57606ecdcb2560_86461107',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57606ecdcb2560_86461107')) {
function content_57606ecdcb2560_86461107 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '163575014457606ecdc28e86_23671593';
?>
<!DOCTYPE HTML>
<html class="" lang="en-US">
<head>
<meta charset="UTF-8">
<title>Shilling.co - финансовые решения</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel='stylesheet'  href='/css/font-awesome.min.css' type='text/css' media='all' />
<link rel='stylesheet'  href='/css/font-awesome.css' type='text/css' media='all' />
<link rel='stylesheet'  href='/css/box.css' type='text/css' media='all' />



<style type="text/css">img.wp-smiley,img.emoji{display:inline!important;border:none!important;box-shadow:none!important;height:1em!important;width:1em!important;margin:0 .07em!important;vertical-align:-0.1em!important;background:none!important;padding:0!important;}</style>


	<link rel='stylesheet'  href='/css/style1.css' type='text/css' media='all' />
<link rel='stylesheet'  href='/css/style2.css' type='text/css' media='all' />
<link rel='stylesheet'  href='/css/style3.css' type='text/css' media='all' />


<link rel='stylesheet' id='us-woocommerce-css' href='/css/us.woocommerce.css' type='text/css' media='all'/>
<link rel='stylesheet' id='us-base-css' href='/css/us-base.css' type='text/css' media='all'/>

<link rel='stylesheet' id='us-font-mdfi-css' href='/css/font-mdfi.css' type='text/css' media='all'/>
<link rel='stylesheet'  href='/css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='us-responsive-css' href='/css/responsive.css' type='text/css' media='all'/>
<link rel='stylesheet' id='bsf-Defaults-css' href='/css/Defaults.css' type='text/css' media='all'/>
<link rel="stylesheet" href="css/style_dialog.css">
<link rel="stylesheet" href="css/red_border.css">

<?php echo '<script'; ?>
 type='text/javascript' src='/js/jquery/jquery.js'><?php echo '</script'; ?>
>
<!-- <?php echo '<script'; ?>
 type='text/javascript' src='/js/jquery/jquery-migrate.min.js'><?php echo '</script'; ?>
> -->

    <!-- Include all compiled plugins (below), or include individual files as needed -->
   <!--  <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
> -->
<?php echo '<script'; ?>
 type='text/javascript' src='/js/scripts.js'><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 src="js/dialog.js"><?php echo '</script'; ?>
>
	<style>
		#test{display:none;}
	</style>



<style id='us-theme-options-css' type="text/css">
body,.header_hor .l-header.pos_fixed{min-width:1300px;}.l-canvas.type_boxed,.l-canvas.type_boxed .l-subheader,.l-canvas.type_boxed~.l-footer .l-subfooter{max-width:1300px;}.header_hor .l-subheader-h,.l-titlebar-h,.l-main-h,.l-section-h,.l-subfooter-h,.w-tabs-section-content-h,.w-blog-post-body{max-width:1140px;}.l-sidebar{width:25%;}.l-content{width:68%;}@media (max-width:767px) {.g-cols.offset_none,.g-cols.offset_none>div{display:block;}.g-cols>div{width:100%!important;margin-left:0!important;margin-right:0!important;margin-bottom:30px;}.l-subfooter.at_top .g-cols>div{margin-bottom:10px;}.g-cols.offset_none>div,.g-cols>div:last-child{margin-bottom:0!important;}}@media (min-width:901px) {.header_hor .l-subheader.at_top{line-height:40px;height:40px;}.header_hor .l-header.sticky .l-subheader.at_top{line-height:0px;height:0px;overflow:hidden;}.header_hor .l-subheader.at_middle{line-height:100px;height:100px;}.header_hor .l-header.sticky .l-subheader.at_middle{line-height:50px;height:50px;}.l-subheader.at_bottom{display:none;}.header_hor .l-subheader.at_bottom{line-height:40px;height:40px;}.header_hor .l-header.sticky .l-subheader.at_bottom{line-height:40px;height:40px;}.header_hor .l-header.pos_fixed~.l-titlebar,.header_hor .l-canvas.titlebar_none.sidebar_left .l-header.pos_fixed~.l-main,.header_hor .l-canvas.titlebar_none.sidebar_right .l-header.pos_fixed~.l-main,.header_hor .l-canvas.titlebar_none.sidebar_none .l-header.pos_fixed~.l-main .l-section:first-child,.header_hor .l-header.pos_static.bg_transparent~.l-titlebar,.header_hor .l-canvas.titlebar_none.sidebar_left .l-header.pos_static.bg_transparent~.l-main,.header_hor .l-canvas.titlebar_none.sidebar_right .l-header.pos_static.bg_transparent~.l-main,.header_hor .l-canvas.titlebar_none.sidebar_none .l-header.pos_static.bg_transparent~.l-main .l-section:first-child{padding-top:140px;}.header_hor .l-header.pos_static.bg_solid+.l-main .l-section.preview_trendy .w-blog-post-preview{top:-140px;}.header_ver{padding-left:300px;position:relative;}.rtl.header_ver{padding-left:0;padding-right:300px;}.header_ver .l-header,.header_ver .l-header .w-cart-notification{width:300px;}.header_ver .l-navigation-item.to_next{left:100px;}.no-touch .header_ver .l-navigation-item.to_next:hover{left:300px;}.rtl.header_ver .l-navigation-item.to_next{right:100px;}.no-touch .rtl.header_ver .l-navigation-item.to_next:hover{right:300px;}.header_ver .w-nav.type_desktop [class*="columns"] .w-nav-list.level_2{width:calc(100vw - 300px);max-width:980px;}}@media (min-width:601px) and (max-width:900px) {.header_hor .l-subheader.at_top{line-height:36px;height:36px;}.header_hor .l-header.sticky .l-subheader.at_top{line-height:0px;height:0px;overflow:hidden;}.header_hor .l-subheader.at_middle{line-height:80px;height:80px;}.header_hor .l-header.sticky .l-subheader.at_middle{line-height:50px;height:50px;}.l-subheader.at_bottom{display:none;}.header_hor .l-subheader.at_bottom{line-height:50px;height:50px;}.header_hor .l-header.sticky .l-subheader.at_bottom{line-height:50px;height:50px;}.header_hor .l-header.pos_fixed~.l-titlebar,.header_hor .l-canvas.titlebar_none.sidebar_left .l-header.pos_fixed~.l-main,.header_hor .l-canvas.titlebar_none.sidebar_right .l-header.pos_fixed~.l-main,.header_hor .l-canvas.titlebar_none.sidebar_none .l-header.pos_fixed~.l-main .l-section:first-child,.header_hor .l-header.pos_static.bg_transparent~.l-titlebar,.header_hor .l-canvas.titlebar_none.sidebar_left .l-header.pos_static.bg_transparent~.l-main,.header_hor .l-canvas.titlebar_none.sidebar_right .l-header.pos_static.bg_transparent~.l-main,.header_hor .l-canvas.titlebar_none.sidebar_none .l-header.pos_static.bg_transparent~.l-main .l-section:first-child{padding-top:116px;}.header_hor .l-header.pos_static.bg_solid+.l-main .l-section.preview_trendy .w-blog-post-preview{top:-116px;}.header_ver .l-header{width:300px;}}@media (max-width:600px) {.l-subheader.at_top{display:none;}.header_hor .l-subheader.at_top{line-height:36px;height:36px;}.header_hor .l-header.sticky .l-subheader.at_top{line-height:0px;height:0px;overflow:hidden;}.header_hor .l-subheader.at_middle{line-height:50px;height:50px;}.header_hor .l-header.sticky .l-subheader.at_middle{line-height:50px;height:50px;}.l-subheader.at_bottom{display:none;}.header_hor .l-subheader.at_bottom{line-height:50px;height:50px;}.header_hor .l-header.sticky .l-subheader.at_bottom{line-height:50px;height:50px;}.header_hor .l-header.pos_fixed~.l-titlebar,.header_hor .l-canvas.titlebar_none.sidebar_left .l-header.pos_fixed~.l-main,.header_hor .l-canvas.titlebar_none.sidebar_right .l-header.pos_fixed~.l-main,.header_hor .l-canvas.titlebar_none.sidebar_none .l-header.pos_fixed~.l-main .l-section:first-child,.header_hor .l-header.pos_static.bg_transparent~.l-titlebar,.header_hor .l-canvas.titlebar_none.sidebar_left .l-header.pos_static.bg_transparent~.l-main,.header_hor .l-canvas.titlebar_none.sidebar_right .l-header.pos_static.bg_transparent~.l-main,.header_hor .l-canvas.titlebar_none.sidebar_none .l-header.pos_static.bg_transparent~.l-main .l-section:first-child{padding-top:50px;}.header_hor .l-header.pos_static.bg_solid+.l-main .l-section.preview_trendy .w-blog-post-preview{top:-50px;}}.ush_text_1 .w-text-value{color:;}@media (min-width:901px) {.ush_text_1{font-size:27px;}}@media (min-width:601px) and (max-width:900px) {.ush_text_1{font-size:24px;}}@media (max-width:600px) {.ush_text_1{font-size:20px;}}.ush_text_1{white-space:nowrap;}.ush_text_2 .w-text-value{color:;}@media (min-width:901px) {.ush_text_2{font-size:14px;}}@media (min-width:601px) and (max-width:900px) {.ush_text_2{font-size:13px;}}@media (max-width:600px) {.ush_text_2{font-size:13px;}}.ush_text_2{white-space:nowrap;}.ush_text_3 .w-text-value{color:;}@media (min-width:901px) {.ush_text_3{font-size:14px;}}@media (min-width:601px) and (max-width:900px) {.ush_text_3{font-size:13px;}}@media (max-width:600px) {.ush_text_3{font-size:13px;}}.ush_text_3{white-space:nowrap;}.ush_text_4 .w-text-value{color:;}@media (min-width:901px) {.ush_text_4{font-size:14px;}}@media (min-width:601px) and (max-width:900px) {.ush_text_4{font-size:13px;}}@media (max-width:600px) {.ush_text_4{font-size:13px;}}.ush_text_4{white-space:nowrap;}.header_hor .ush_menu_1.type_desktop .w-nav-list.level_1>.menu-item>a{padding:0 20px;}.header_ver .ush_menu_1.type_desktop{line-height:40px;}.ush_menu_1.type_desktop .btn.w-nav-item.level_1>.w-nav-anchor{margin:10px;}.ush_menu_1.type_desktop .w-nav-list.level_1>.menu-item>a,.ush_menu_1.type_desktop [class*="columns"] .menu-item-has-children .w-nav-anchor.level_2{font-size:16px;}.ush_menu_1.type_desktop .submenu-languages .menu-item-language>a,.ush_menu_1.type_desktop .w-nav-anchor:not(.level_1){font-size:15px;}.ush_menu_1.type_mobile .w-nav-anchor.level_1{font-size:16px;}.ush_menu_1.type_mobile .menu-item-language>a,.ush_menu_1.type_mobile .w-nav-anchor:not(.level_1){font-size:15px;}@media (min-width:901px) {.ush_search_1.layout_simple{max-width:240px;}.ush_search_1.layout_modern.active{width:240px;}}@media (min-width:601px) and (max-width:900px) {.ush_search_1.layout_simple{max-width:200px;}.ush_search_1.layout_modern.active{width:200px;}}@media (min-width:901px) {.ush_socials_1{font-size:18px;}}@media (min-width:601px) and (max-width:900px) {.ush_socials_1{font-size:18px;}}@media (max-width:600px) {.ush_socials_1{font-size:18px;}}.ush_socials_1 .custom .w-socials-item-link-hover{background-color:#1abc9c;}.ush_socials_1.style_colored .custom .w-socials-item-link{color:#1abc9c;}@media (min-width:901px) {.ush_cart_1 .w-cart-link{font-size:20px;}}@media (min-width:601px) and (max-width:900px) {.ush_cart_1 .w-cart-link{font-size:20px;}}@media (max-width:600px) {.ush_cart_1 .w-cart-link{font-size:20px;}}.l-body{background-color:#e0e0e0;}


</style>


</head>
<body class="page page-id-9 page-template-default l-body us-theme_zephyr_2-10 woocommerce-type_2 columns-3 wpb-js-composer js-comp-ver-4.11.2 vc_responsive">


<div class="l-canvas sidebar_none type_wide titlebar_none">

<div class="l-header layout_extended pos_fixed bg_solid">
<div class="l-subheader at_top">
<div class="l-subheader-h i-cf">
<div class="w-contacts" style="width: 100%;">
<div class="w-contacts-list">
		<div class="w-contacts-item">
	<i class="fa fa-phone"></i>
<span class="w-contacts-item-value"><a href="tel:+380442219191" >+38 (044) 221-91-91</a></span>
</div>

<div class="w-contacts-item">
	<i class="fa fa-phone"></i>
<span class="w-contacts-item-value"><a href="tel:+380501798263" >+38 (050) 179-82-63</a></span>
</div>
	<div class="w-contacts-item">
	<i class="fa fa-phone"></i>
<span class="w-contacts-item-value"><a href="tel:+380975375950" >+38 (097) 537-59-50</a></span>
</div>

		<div class="w-contacts-item" style="float: right;">
	<i class="fa fa-envelope"></i>
<span class="w-contacts-item-value"><a href="mailto:office@shilling.co">office@shilling.co</a></span>
</div>

		<div class="w-contacts-item" style="float: right;">
	<i class="fa fa-skype"></i>
<span class="w-contacts-item-value"><a href="skype:shilling.com.ua?call"> shilling.com.ua</a></span>
</div>


</div>
</div>

</div>
</div>

<div class="l-subheader at_middle">
<div class="l-subheader-h i-cf">
	<div class="w-logo  with_title" style="padding-top: 15px;margin-bottom: -15px;"><a class="w-logo-link" href="/"><img style="height:50px;" src="http://shilling.co/images/logo.png"></a></div>


<nav class="w-nav layout_hor type_desktop animation_mdesign">
<div class="w-nav-control"></div>
<ul class="w-nav-list level_1 hover_none hidden" style="padding-top: 10px;">

	<li id="menu-item-3629" class="columns_3 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children w-nav-item level_1 menu-item-3637"><a class="w-nav-anchor level_1" href="/"><span class="w-nav-title">Главная</span></a>
</li>
	<li id="menu-item-3637" class="columns_3 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children w-nav-item level_1 menu-item-3637"><a class="w-nav-anchor level_1" href="#vovi"><span class="w-nav-title">Ввод/вывод</span></a>
</li>

<li id="menu-item-3637" class="columns_3 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children w-nav-item level_1 menu-item-3637"><a class="w-nav-anchor level_1" href="#sc"><span class="w-nav-title">Акции</span></a>
</li>

	<li id="menu-item-3637" class="columns_3 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children w-nav-item level_1 menu-item-3637"><a class="w-nav-anchor level_1" href="#sc"><span class="w-nav-title">Курс валют</span></a>
</li>

	<li id="menu-item-3637" class="columns_3 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children w-nav-item level_1 menu-item-3637"><a class="w-nav-anchor level_1" href="#pt"><span class="w-nav-title">Партнеры</span></a>
			<li id="menu-item-3637" class="columns_3 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children w-nav-item level_1 menu-item-3637"><a class="w-nav-anchor level_1" href="#ct"><span class="w-nav-title">Контакты</span></a>
</li>



</ul>
</nav>
</div>
</div>
</div>


<div class="l-main">
<div class="l-main-h i-cf">
<div class="l-content">
<section  class="l-section wpb_row height_auto width_full"><div class="l-section-h i-cf"><div class="g-cols offset_medium"><div class=" full-width"><div class="wpb_revslider_element wpb_content_element">
<div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:#4e5256;padding:0px;margin-top:0px;margin-bottom:0px;">

<div id="rev_slider_2_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.2.4.1">
<ul>

	<li data-index="rs-5" data-transition="parallaxvertical" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="500" data-rotate="0" data-saveperformance="off" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

	<img src="/images/business.jpg" alt="" title="shutterstock_215536837" width="1920" height="1198" data-bgposition="left center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="120" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="1" class="rev-slidebg" data-no-retina>


<div class="tp-caption zephyr-03   tp-resizeme" id="slide-5-layer-1" data-x="center" data-hoffset="0" data-y="200" data-width="auto" data-height="auto" data-transform_idle="" data-transform_in="x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:1000;e:Power4.easeOut;" data-transform_out="opacity:0;s:300;" data-start="1000" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.14" style="z-index: 5; white-space: nowrap;text-transform:left;border-color:rgba(0, 0, 0, 1.00);">Webmoney</div>

<div class="tp-caption zephyr-04   tp-resizeme" id="slide-5-layer-2" data-x="center" data-hoffset="0" data-y="150" data-width="auto" data-height="auto" data-transform_idle="" data-transform_in="x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:1000;e:Power4.easeOut;" data-transform_out="auto:auto;s:300;" data-start="2200" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;text-transform:left;font-style:italic;border-color:rgba(255, 255, 255, 1.00);">Самый надежный обменник</div>

<div class="tp-caption black  " id="slide-5-layer-3" data-x="center" data-hoffset="0" data-y="300" data-width="auto" data-height="auto" data-transform_idle="" data-transform_in="x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:1000;e:Power4.easeOut;" data-transform_out="auto:auto;s:300;" data-start="2700" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-captionhidden="on" style="z-index: 7; white-space: nowrap;text-transform:left;"><div class="w-btn-wrapper align_left"><a class="w-btn style_raised size_medium color_white icon_atleft" href="#vovi"  style="width: 185px;"><i class="fa fa-arrow-down"></i><span class="w-btn-label">Перевести деньги</span></a></div>

		<div class="w-btn-wrapper align_left"><a class="w-btn style_raised size_medium color_white icon_atleft" href="#sc" style="width: 185px; background: rgb(225, 225, 225) none repeat scroll 0% 0%;"><span class="w-btn-label">Акционные тарифы</span></a></div>
		</div>
</li>

<li data-index="rs-7" data-transition="zoomout" data-slotamount="1" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="500"data-rotate="0" data-saveperformance="off" data-title="Intro Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

<img src="http://833949.vdtvdt.web.hosting-test.net//images/background-about.jpg" alt="" title="" width="1920" height="1280" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" class="rev-slidebg" data-no-retina>


<div class="tp-caption zephyr-bg   tp-resizeme" id="slide-7-layer-1" data-x="center" data-hoffset="" data-y="center" data-voffset="" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:800;e:Linear.easeNone;" data-transform_out="auto:auto;s:300;" data-start="300" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap; color: rgba(255, 255, 255, 1.00);text-transform:left;background-color:rgba(10, 10, 10, 0.30);border-color:rgba(0, 0, 0, 1.00);"> </div>

<div class="tp-caption zephyr-01   tp-resizeme" id="slide-7-layer-2" data-x="center" data-hoffset="" data-y="center" data-voffset="" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:5;sY:5;skX:0;skY:0;opacity:0;s:500;e:Power3.easeInOut;" data-transform_out="opacity:0;s:500;" data-start="700" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.06" style="z-index: 6; white-space: nowrap; color: rgba(255, 255, 255, 1.00);text-transform:left;border-color:rgba(0, 0, 0, 1.00);">Регулярные акционные предложения </div>
</li>




</ul>

</div>

</div> </div>




<style>

.red { color:#ff0000 !important; }    .white { color:#ffffff !important; }  .brown { color:#990000 !important; }
.blue { color:#0000ff !important; }   .navy { color:#003399 !important; }    .yellow { color:#ff6600 !important; }
.green { color:#006600 !important; }  .green2 { color:#339900 !important; }  .gray { color:#666666 !important; }    .gray2 { color:#999999 !important; }
.bg-yellow { background:#ffffcc; }    .bg-beige { background:#faf2d3; }      .bg-violet { background:#e4e4f7; }
.bg-aqua { background:#c2d7ec; }      .bg-sun { background:#fff6c7; }        .bg-red { background:#ff0000; }
.bg-navy { background:#003399; }      .bg-gray { background:#eeeeee; }       .bg-gray2 { background:#d4d4d4; }



form { margin:0px; padding:0px; }
form .fld { margin:0px; padding:4px; border:1px solid #c4c3c3; border-radius:5px; -moz-border-radius:5px; -khtml-border-radius:5px; -webkit-border-radius:5px; color:#656565; font:normal 12px Tahoma, Geneva, sans-serif; }
form .fld:hover { border:1px solid #d3e5f4 !important; }
form .fld:focus { border:1px solid #a1d7f6 !important; }
form select.fld { padding:2px !important; }
form .btn, a.btn { height:40px; margin:0px; padding:0px; color:#818181; text-align:center; text-decoration:none; background-color:transparent; background-image:url(../images/buttons.png); background-repeat:no-repeat; cursor:pointer; border:0px; }
a.btn { display:block; }

form .err, form .msg_err { font:normal 10px Arial, Helvetica, sans-serif; }
form .ok, form .msg_ok { font:normal 12px Arial, Helvetica, sans-serif; }
form input.readonly, input.textarea { background:#e5e5e5 !important; }


.word_highlight { color:#ff0000 !important; font-weight:bold !important; text-transform:uppercase; }
.search_hint { padding:0 0 20px 0; text-align:left; font-weight:bold; }
form.search table td { padding:2px; vertical-align:middle; text-align:center; }
form.search .fld { width:150px; }
div#search { clear:both; text-align:left; margin:0px; padding:0px; }
div#search:after { display:block; content:"."; visibility:hidden; clear:both; height:1px; font-size:1px; }
div#search div.item { padding:0 0 20px 0;  text-align:left; }

.line { clear:both; height:1px; padding:0px; margin:0px; font-size:1px; line-height:1px; }
.hint { padding:10px !important; border:1px dashed #a1d7f6; background:#dce7ed; border-radius:5px; -moz-border-radius:5px; -khtml-border-radius:5px; -webkit-border-radius:5px; }
.floathint { position:fixed; z-index:12000; display:none; padding:10px !important; border:1px dashed #a1d7f6; background:#dce7ed; border-radius:5px; -moz-border-radius:5px; -khtml-border-radius:5px; -webkit-border-radius:5px; }
.floathint div.tip-top, .floathint div.tip-bottom { font-size:1px; height:1px; }


.fl_left { float:left !important;  }
.fl_right { float:right !important; }
.clearleft { clear:left !important; }
.clearright { clear:right !important; }
.clearfix { clear:both; }
.clearfix:after { display:block; content:"."; visibility:hidden; clear:both; height:1px; font-size:1px; line-height:1px; }



#select_exchange {background-image: url(/images/strelka.png);  border: 3px ridge rgb(212, 212, 212); border-radius: 10px; color:rgb(38, 38, 38);   background-size: contain;background-repeat: no-repeat;background-position: center;}
#select_exchange div.form_top { clear:both; height:138px; }
#select_exchange div.form_bottom { clear:both; height:110px; }
#select_exchange div.fl_left { width:222px; padding:32px 0 0 22px; }
#select_exchange div.form_top div.fl_right { width:300px; }
#select_exchange div.fl_right { width:300px; padding:0px; }
#select_exchange select { clear:both; display:block; width:155px; margin:5px 0; border:1px solid #c4c3c3 !important; border-radius:0px; -moz-border-radius:0px; -khtml-border-radius:0px; -webkit-border-radius:0px; }
#select_exchange input {  line-height:70px; font:bold 30px Arial, Helvetica, sans-serif; background:none;     padding: 8px;
    height: 65px;border: 1px solid rgb(158, 153, 153) !important;    width: 210px; border-radius: 5px ; }
.select_exchangeinput {  line-height:70px; font:bold 30px Arial, Helvetica, sans-serif; background:none;    padding: 14px 7px 7px 7px;margin-left: 50px; color:#000;

    height: 65px;border: 1px solid rgb(158, 153, 153) !important;    width: 225px; border-radius: 5px ; }

#select_exchange input.readonly { background:none !important; color:#c5c6c6 !important; }

#select_exchange div.fl_left select { margin:20px 0 0 0; }
#select_exchange div.fl_right select { margin:0 0 20px 0; }
#select_hint1 { padding:35px 0 0 0 !important; }
#select_hint2 { padding:45px 0 0 22px !important; }

#btn_exchange { width:148px;  background-position:0 -800px; }
#btn_exchange:hover, #btn_exchange:focus { background-position:-200px -800px; }


.screen {padding-left:15%}

   @media screen and (max-width: 720px) {
 .screen {padding-left:0%}
   }

</style>







	<div id="vovi" class="w-tabs layout_default icon_chevron iconpos_right ">
		<div class="w-tabs-list items_3">
			<div class="w-tabs-list-h">

<div class="w-tabs-item active  with_icon"><div class="w-tabs-item-h"><span class="w-tabs-item-title" style="font-weight: bold; font-size: 18px;">Пополнить счет</span></div></div>
<div class="w-tabs-item with_icon"><div class="w-tabs-item-h"><span class="w-tabs-item-title" style="font-weight: bold; font-size: 18px;">Вывести со счета</span></div></div>


</div></div>






		<div class="w-tabs-sections"><div class="w-tabs-sections-h">




			<div class="w-tabs-section with_icon active"><div class="w-tabs-section-header"><div class="w-tabs-section-header-h"><h5 class="w-tabs-section-title">Пополнить счет</h5></div></div><div class="w-tabs-section-content"><div class="w-tabs-section-content-h i-cf" style="margin-bottom: 50px;"><div class="wpb_text_column "><div class="wpb_wrapper">
<h2 style="text-align: center;">Пополнить счет</h2>
</div> </div>





<div class="screen">

<div class="l-section-h i-cf">


 <form action="index.php" name="select_exchange1" id="select_exchange" method="get" style="max-width: 800px;">
 

<div class="g-cols offset_none"><div class=" one-third  vc_custom_1437646393197 color_custom" style="padding: 3%; background: rgba(227, 255, 202, 0.15) none repeat scroll 0% 0%;"><div class="wpb_text_column "><div class="wpb_wrapper">
<h4>К получению</h4>
<input name="frm_mode" value="1" type="hidden">
<input type="number"  name="ammount_refill" id="ammount_refill1" placeholder="0.00">

								 <select name="currency_bill_refill" id="currency_bill_refill1">
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['currency_wm']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
              <option value="<?php echo $_smarty_tpl->tpl_vars['currency_wm']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['buy'];?>
"><span id="currency_name_refill1"><?php echo $_smarty_tpl->tpl_vars['currency_wm']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</span></option>
            <?php endfor; endif; ?>
            </select>

</div> </div> </div>

<div class=" one-third  vc_custom_1437646393198 color_custom"  style="padding: 3%; background: rgba(112, 185, 83, 0.13) none repeat scroll 0% 0%;"><div class="wpb_text_column "><div class="wpb_wrapper">
<h4>К оплате</h4>


<input class="select_exchangeinput" type="number" id="k_oplate_refill1" placeholder="0.00" style="margin: 0px;">



									  <select name="payment_refill" id="payment_refill1">
              <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['currency']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                <option id="myOption" value="<?php echo $_smarty_tpl->tpl_vars['currency']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['buy'];?>
" label="<?php echo $_smarty_tpl->tpl_vars['currency']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['currency']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</option>

              <?php endfor; endif; ?>
			   <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['currency']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
              <input type="hidden" class="perebor" id="<?php echo $_smarty_tpl->tpl_vars['currency']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['currency']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['buy'];?>
">

            <?php endfor; endif; ?>
            </select>




								



</div> </div> </div>

<div class=" one-third  vc_custom_1437646393199 color_custom"  style="padding: 3%; background: rgba(80, 216, 20, 0.21) none repeat scroll 0% 0%;"><div class="wpb_text_column "><div class="wpb_wrapper">



Комиссия: <span id="komisia_refill1">0</span><br />
Курс обмена: <span>0</span><br />

							<input type="hidden" id="ka1" name="ka" value="1"></a>
							<br />
							<br />
							
							<span id="span_send">
							<a id="btn_exchange" style="padding: 6px 27px; border: 2px solid grey; border-radius: 5px;" class="btn_refill" href="javascript:dialog('test.php',{'title':'Пополнение счета'})" >Пополнить</a></span>
							


</div> </div> </div></div>
















  </form>

</div>
</div>



    </div></div></div>

<!-- Вывод -->

			<div class="w-tabs-section with_icon active"><div class="w-tabs-section-header"><div class="w-tabs-section-header-h"><h5 class="w-tabs-section-title">Вывести со счета</h5></div></div><div class="w-tabs-section-content"><div class="w-tabs-section-content-h i-cf"><div class="wpb_text_column "><div class="wpb_wrapper">
<h2 style="text-align: center;">Вывести со счета</h2>
</div> </div>



<div class="screen">
<div class="l-section-h i-cf">


 <form action="index.php" name="select_exchange1" id="select_exchange" method="get" style="max-width: 800px;">
 

<div class="g-cols offset_none"><div class=" one-third  vc_custom_1437646393197 color_custom" style="padding: 3%; background: rgba(227, 255, 202, 0.15) none repeat scroll 0% 0%;"><div class="wpb_text_column "><div class="wpb_wrapper">
<h4>К получению</h4>
<input name="frm_mode" value="1" type="hidden">
<input type="number"  name="ammount_cashing" id="ammount_cashing1" placeholder="0.00">

								 <select name="payment_cashing" id="payment_cashing1">
              <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['currency']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                <option id="myOption_cashing" value="<?php echo $_smarty_tpl->tpl_vars['currency']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['buy'];?>
" label="<?php echo $_smarty_tpl->tpl_vars['currency']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['currency']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</option>

              <?php endfor; endif; ?>
			   <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['currency']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
              <input type="hidden" class="perebor" id="<?php echo $_smarty_tpl->tpl_vars['currency']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['currency']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['buy'];?>
">

            <?php endfor; endif; ?>
            </select>

</div> </div> </div>

<div class=" one-third  vc_custom_1437646393198 color_custom"  style="padding: 3%; background: rgba(112, 185, 83, 0.13) none repeat scroll 0% 0%;"><div class="wpb_text_column "><div class="wpb_wrapper">
<h4>К оплате</h4>



								<input class="select_exchangeinput" type="number" id="k_oplate_cashing1" placeholder="0.00" style="margin:0px;">
								



            <select name="currency_bill_cashing" id="currency_bill_cashing1">
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['currency_wm']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
              <option value="<?php echo $_smarty_tpl->tpl_vars['currency_wm']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['buy'];?>
"><span id="currency_name_cashing1"><?php echo $_smarty_tpl->tpl_vars['currency_wm']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</span></option>
            <?php endfor; endif; ?>
            </select>



						







								



</div> </div> </div>

<div class=" one-third  vc_custom_1437646393199 color_custom"  style="padding: 3%; background: rgba(80, 216, 20, 0.21) none repeat scroll 0% 0%;"><div class="wpb_text_column "><div class="wpb_wrapper">



Комиссия: <span id="komisia_cashing1">0</span><br />
Курс обмена: <span>0</span><br />


							
							
							<span id="span_send_cash">
							<a id="btn_exchange" style="padding: 6px 27px; border: 2px solid grey; border-radius: 5px;"  class="btn btn_cashing" href="javascript:dialog('test.php',{'title':'Вывод средств'})" >Вывести</a></span>
							
						


</div> </div> </div></div>
















  </form>

</div>
</div>







        </div></div></div>

				</div></div></div></div></div></div></section>






	<section id ="sc" class="l-section wpb_row height_small" style="background: rgb(249, 249, 249) none repeat scroll 0% 0%; color: rgb(0, 0, 0); padding-top: 50px;padding-bottom:40px">


	<div class="wpb_wrapper" id="sc" >
<h2 style="text-align: center"><strong>Акции</strong> и Курс валют</h2>
</div>


	<div class="l-section-h i-cf" style="padding:0px"><div class="g-cols offset_none">
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
td, th {
   text-align: center;
   border: 1px solid #ddd;
   padding: 2px;
    font-size: 9px;  }
	
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
        <th scope="col">Заказать</th>

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
		<?php if ($_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['actual'] != 0) {?>

      	      <tr style="background: rgba(210, 210, 210, 0.8) none repeat scroll 0% 0%; text-decoration: line-through; color: rgb(136, 136, 136);">

		<?php } else { ?>
			<?php if ($_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type_operation'] == 0) {?>
			<tr style="background: rgba(240, 254, 223, 0.25) none repeat scroll 0% 0%;">
			<?php } else { ?>
				<tr style="background: rgb(255, 245, 245) none repeat scroll 0% 0%;">
			<?php }?>
		<?php }?>
        <th scope="row"><?php echo $_smarty_tpl->tpl_vars['count']->value++;?>
</th>
        <td><?php if ($_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type_operation'] == 0) {?>Ввод<?php } else { ?>Вывод<?php }?></td>

		    <td><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['l'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['l']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['currency_wm']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
if ($_smarty_tpl->tpl_vars['currency_wm']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['id'] == $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id_currency']) {
echo $_smarty_tpl->tpl_vars['currency_wm']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['name'];
}
endfor; endif; ?></td>


        <td><?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['percent'];?>
 %</td>
        <td><?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['k_oplate'];?>
</td>
		  <td><?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['k_polucheniju'];?>
</td>
		  <td><?php if ($_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['actual'] == 0) {?>

							<span id="span_send_stock" onclick="send_dialog_stock(<?php echo $_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
)">
							<a id="btn_exchange3" class="btn btn_cashing" href="javascript:dialog('test_stock.php',{'title':'Акционные предложения'})" >Оформить заявку</a></span>
							<?php } else { ?><b>Оформить заявку</b><?php }?></td>


      </tr>
    <?php endfor; endif; ?>

	<span id="for_ajax"></span>
    </tbody>
  </table></div> </div> </div>


<!--     <?php echo '<script'; ?>
>
$(function(){
  $("table").click(function(){

    $("html").toggleClass( $(this).attr("class") );

  });
});
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://static.jsbin.com/js/render/edit.js?3.35.12"><?php echo '</script'; ?>
> -->

<div class="one-quarter animate_afr  vc_custom_1437646393203 color_custom animate_start" style="padding: 1%; vertical-align: baseline;"><div class="wpb_text_column "><div class="wpb_wrapper">
	<table class="emp-sales">
    <caption>Курс валют</caption>
    <thead>
      <tr>
        <td></td>
        <th scope="col">Покупка</th>
		    <th scope="col">Продажа</th>


      </tr>
    </thead>
    <tbody>


    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['currency1']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
    	<?php if ($_smarty_tpl->tpl_vars['currency1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'] != "UAH") {?>
        <th scope="row"><?php echo $_smarty_tpl->tpl_vars['currency1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</th>
        <td style="background: rgb(243, 255, 228) none repeat scroll 0% 0%;"><?php echo $_smarty_tpl->tpl_vars['currency1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['buy'];?>
</td>
		<td style="background: rgb(255, 245, 245) none repeat scroll 0% 0%;"><?php echo $_smarty_tpl->tpl_vars['currency1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['sell'];?>
</td>
		<?php }?>
	</tr>
	<?php endfor; endif; ?>


    </tbody>
  </table></div> </div> </div>


		</div></div></section>



	<section id="pt" class="l-section wpb_row height_large color_primary with_img with_video with_overlay" id="more"><div class="l-section-img" style="background-image: url(/images/iphone.jpg);" data-img-width="1280" data-img-height="720"></div><div class="l-section-video"><video loop="loop" autoplay="autoplay" preload="auto" poster="http://zephyr.us-themes.com/wp-content/uploads/iphone.jpg"><source type="video/mp4" src="/images/phone.mp4"/><img src="/images/iphone.jpg" alt=""></video></div><div class="l-section-overlay" style="background-color: rgba(0,0,0,0.66)"></div><div class="l-section-h i-cf"><div class="g-cols offset_medium"><div class=" full-width animate_hfc">

	<h2 style="font-size: 45px;color: #ffffff;line-height: 55px;text-align: center;font-family:font1;font-weight:200;font-style:normal" class="vc_custom_heading">Совершате транзакции через свой смартфон!</h2>


		</div></div></div></section>






<section  class="l-section wpb_row height_small" style="background: rgb(17, 17, 17) none repeat scroll 0% 0%; text-align: center;"><div class="l-section-h i-cf"><div class="g-cols offset_medium">

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['sponsors']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
<div class="one-sixth animate_afb animate_start"><div class="wpb_text_column "><div class="wpb_wrapper">

<img src="images/<?php echo $_smarty_tpl->tpl_vars['sponsors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['photo'];?>
"></div> </div> </div>


<?php endfor; endif; ?>
</div></div></section>




	<section id="ct"  class="l-section wpb_row height_auto width_full"><div class="l-section-h i-cf"><div class="g-cols offset_medium"><div class=" full-width">


<div id='office'></div>


		</div></div></div>

	</section>




</div>
</div>
</div>
</div>


<div id="ct"  class="l-footer">

<div class="l-subfooter at_top">
<div class="l-subfooter-h i-cf">
<div class="g-cols offset_medium">
<div class="one-third">
<div id="text-7" class="widget widget_text"><h4>Shilling.co</h4> <div class="textwidget">Сервис Shilling.co - это площадка для брокерских
	компаний и их пользователей, а так же пользователей системы webmoney.<br /><br />

	Сервис так же предоставляет возможность получени или обмена титульных
знаков вебмани, пополнения счетов, с помощью системы webmoney transfer
путем подбора респондентов.

	</div>
</div>

	</div>


<div class="one-third">
<div id="recent-posts-3" class="widget widget_recent_entries" style="text-align: center;"> <h4>График работы</h4>

	<p style="text-align: center;">
								<b>Пн:</b> <?php echo $_smarty_tpl->tpl_vars['mon']->value;?>
<br>
<b>Вт: </b><?php echo $_smarty_tpl->tpl_vars['tue']->value;?>
<br>
<b>Ср:</b> <?php echo $_smarty_tpl->tpl_vars['wed']->value;?>
<br>
<b>Чт: </b><?php echo $_smarty_tpl->tpl_vars['thu']->value;?>
<br>
<b>Пт: </b><?php echo $_smarty_tpl->tpl_vars['fri']->value;?>
<br><br>
<b>Сб: <?php echo $_smarty_tpl->tpl_vars['sat']->value;?>
<br>
Вс: <?php echo $_smarty_tpl->tpl_vars['sun']->value;?>
 </b>	</p>

</div> </div>
<div class="one-third">



	<div id="text-6" class="widget widget_text" style="margin-top: 20px;"> <div class="textwidget">

		<div class="w-iconbox iconpos_left size_tiny style_default color_contrast"><div class="w-iconbox-icon"><i class="fa fa-hospital-o"></i></div><h4 class="w-iconbox-title">
    ул. Владимирская 71,
    оф. 58, Киев</h4></div>

		<div class="w-iconbox iconpos_left size_tiny style_default color_contrast"><div class="w-iconbox-icon"><i class="fa fa-envelope"></i></div><h4 class="w-iconbox-title"><a href="mailto:office@shilling.co" >office@shilling.co</a></h4></div>
		<div class="w-iconbox iconpos_left size_tiny style_default color_contrast"><div class="w-iconbox-icon"><i class="fa fa-skype"></i></div><h4 class="w-iconbox-title"><a href="skype:shilling.com.ua?call" >shilling.com.ua</a></h4></div>
		<div class="w-iconbox iconpos_left size_tiny style_default color_contrast"><div class="w-iconbox-icon"><i class="fa fa-phone"></i></div><h4 class="w-iconbox-title"><a href="tel:+380442219191" >+38 (044) 221-91-91</a></h4></div>
<div class="w-iconbox iconpos_left size_tiny style_default color_contrast"><div class="w-iconbox-icon"><i class="fa fa-phone"></i></div><h4 class="w-iconbox-title"><a href="tel:+380501798263" >+38 (050) 179-82-63</a> </h4></div>
	<div class="w-iconbox iconpos_left size_tiny style_default color_contrast"><div class="w-iconbox-icon"><i class="fa fa-phone"></i></div><h4 class="w-iconbox-title"><a href="tel:+380975375950" >+38 (097) 537-59-50 </a></h4></div>


		</div>
</div> </div>
</div>
</div>
</div>

<div class="l-subfooter at_bottom">
<div class="l-subfooter-h i-cf">

<nav class="w-nav layout_hor">
<ul class="w-nav-list level_1">
	<li id="menu-item-3693" class="menu-item menu-item-type-post_type menu-item-object-page w-nav-item level_1 menu-item-3693"><a class="w-nav-anchor level_1" href="/"><span class="w-nav-title">Главная</span></a></li>
	<li id="menu-item-3693" class="menu-item menu-item-type-post_type menu-item-object-page w-nav-item level_1 menu-item-3693"><a class="w-nav-anchor level_1" href="#vovi"><span class="w-nav-title">Ввод/Вывод</span></a></li>
	<li id="menu-item-3693" class="menu-item menu-item-type-post_type menu-item-object-page w-nav-item level_1 menu-item-3693"><a class="w-nav-anchor level_1" href="#sc"><span class="w-nav-title">Акции</span></a></li>
	<li id="menu-item-3693" class="menu-item menu-item-type-post_type menu-item-object-page w-nav-item level_1 menu-item-3693"><a class="w-nav-anchor level_1" href="#sc"><span class="w-nav-title">Курс валют</span></a></li>
	<li id="menu-item-3693" class="menu-item menu-item-type-post_type menu-item-object-page w-nav-item level_1 menu-item-3693"><a class="w-nav-anchor level_1" href="#pt"><span class="w-nav-title">Партнеры</span></a></li>

</ul>
</nav>
<div class="w-copyright">© Shilling.co | сайт создан<b> web студией</b> <a href="http://vdt.site/"><b>VDT.site</b></a></div>
</div>
</div>
</div>


<?php echo '<script'; ?>
 type="text/javascript">
	if (window.$us === undefined) window.$us = {};
	$us.canvasOptions = ($us.canvasOptions || {});
	$us.canvasOptions.disableStickyHeaderWidth = 300;
	$us.canvasOptions.disableEffectsWidth = 1000;
	$us.canvasOptions.headerScrollBreakpoint = 100;
	$us.canvasOptions.responsive = true;

	$us.langOptions = ($us.langOptions || {});
	$us.langOptions.magnificPopup = ($us.langOptions.magnificPopup || {});
	$us.langOptions.magnificPopup.tPrev = 'Previous (Left arrow key)' // Alt text on left arrow
	$us.langOptions.magnificPopup.tNext = 'Next (Right arrow key)' // Alt text on right arrow
	$us.langOptions.magnificPopup.tCounter = '%curr% of %total%' // Markup for "1 of 7" counter

	$us.navOptions = ($us.navOptions || {});
	$us.navOptions.mobileWidth = 1000;
	$us.navOptions.togglable = true;
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss=".tp-caption.black,.black{color:#000;text-shadow:none}.tp-caption.zephyr-01,.zephyr-01{font-size:50px;line-height:60px;font-weight:700;font-family:font1;color:rgb(255,255,255);text-decoration:none;background-color:transparent;border-width:0px;border-color:rgb(0,0,0);border-style:none;text-align:center;text-transform:uppercase;letter-spacing:1px;text-shadow:none}.tp-caption.zephyr-03,.zephyr-03{font-size:66px;line-height:76px;font-weight:700;font-family:font1;color:#ffffff;text-decoration:none;background-color:transparent;border-width:0px;border-color:rgb(0,0,0);border-style:none;text-align:center;text-transform:uppercase;letter-spacing:2px;text-shadow:none}.tp-caption.zephyr-04,.zephyr-04{font-size:28px;line-height:28px;font-weight:400;font-family:font1;color:#ffffff;font-style:italic;text-decoration:none;background-color:transparent;border-width:0px;border-color:rgb(255,255,255);border-style:none;text-shadow:none}.tp-caption.zephyr-05,.zephyr-05{font-size:50px;line-height:60px;font-weight:700;font-family:font1;color:#000;text-decoration:none;background-color:transparent;border-width:0px;border-color:rgb(0,0,0);border-style:none;text-align:center;text-transform:uppercase;letter-spacing:1px;text-shadow:none}.tp-caption.zephyr-bg,.zephyr-bg{color:rgb(255,255,255);background-color:rgba(10,10,10,0.3);text-decoration:none;border-width:0px;border-color:rgb(0,0,0);border-style:none;text-shadow:none;top:0px;left:0px;right:0px;bottom:0px}";
				if(htmlDiv) {
					htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
				}else{
					var htmlDiv = document.createElement("div");
					htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
					document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
				}
			<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/javascript">
						/******************************************
				-	PREPARE PLACEHOLDER FOR SLIDER	-
			******************************************/

			var setREVStartSize=function(){
				try{var e=new Object,i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
					e.c = jQuery('#rev_slider_2_1');
					e.gridwidth = [1140];
					e.gridheight = [500];

					e.sliderLayout = "auto";
					if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})

				}catch(d){console.log("Failure at Presize of Slider:"+d)}
			};

			setREVStartSize();

						var tpj=jQuery;
			tpj.noConflict();
			var revapi2;
			tpj(document).ready(function() {
				if(tpj("#rev_slider_2_1").revolution == undefined){
					revslider_showDoubleJqueryError("#rev_slider_2_1");
				}else{
					revapi2 = tpj("#rev_slider_2_1").show().revolution({
						sliderType:"standard",
jsFileLocation:"//zephyr.us-themes.com/wp-content/plugins/revslider/public/assets/js/",
						sliderLayout:"auto",
						dottedOverlay:"none",
						delay:8000,
						navigation: {
							keyboardNavigation:"off",
							keyboard_direction: "horizontal",
							mouseScrollNavigation:"off",
 							mouseScrollReverse:"default",
							onHoverStop:"off",
							touch:{
								touchenabled:"on",
								swipe_threshold: 0.7,
								swipe_min_touches: 1,
								swipe_direction: "horizontal",
								drag_block_vertical: false
							}
							,
							arrows: {
								style:"custom",
								enable:true,
								hide_onmobile:true,
								hide_under:0,
								hide_onleave:false,
								tmp:'',
								left: {
									h_align:"left",
									v_align:"center",
									h_offset:20,
									v_offset:0
								},
								right: {
									h_align:"right",
									v_align:"center",
									h_offset:20,
									v_offset:0
								}
							}
						},
						visibilityLevels:[1240,1024,778,480],
						gridwidth:1140,
						gridheight:500,
						lazyType:"none",
						parallax: {
							type:"mouse",
							origo:"enterpoint",
							speed:400,
							levels:[7,4,3,2,5,4,3,2,1,0,46,47,48,49,50,55],
							type:"mouse",
						},
						shadow:0,
						spinner:"spinner2",
						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,
						shuffle:"off",
						autoHeight:"off",
						disableProgressBar:"on",
						hideThumbsOnMobile:"on",
						hideSliderAtLimit:0,
						hideCaptionAtLimit:600,
						hideAllCaptionAtLilmit:0,
						debugMode:false,
						fallbacks: {
							simplifyAll:"off",
							nextSlideOnWindowFocus:"off",
							disableFocusListener:false,
						}
					});
				}
			});	/*ready*/
		<?php echo '</script'; ?>
>





<?php echo '<script'; ?>
 type='text/javascript' src='/js/jquery/jquery.themepunch.tools.min.js' defer='defer'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='/js/jquery/jquery.themepunch.revolution.min.js' defer='defer'><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type='text/javascript' src='/js/add-to-cart.min.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='/js/jquery/jquery.blockUI.min.js'><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type='text/javascript' src='/js/woocommerce.min.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='/js/jquery/jquery.cookie.min.js'><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type='text/javascript' src='/js/cart-fragments.min.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='/js/jquery.easing.min.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='/js/jquery.magnific-popup.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='/js/jquery.simpleplaceholder.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='/js/imagesloaded.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='/js/us.core.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='/js/us.widgets.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='/js/us.theme.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='/js/comment-reply.min.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='/js/wp-embed.min.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='/js/mediaelement-and-player.min.js'><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 src='https://maps.googleapis.com/maps/api/js?key=&sensor=false&extension=.js'><?php echo '</script'; ?>
> 
 
<?php echo '<script'; ?>
> 
    google.maps.event.addDomListener(window, 'load', init);
    var map;
    function init() {
        var mapOptions = {
            center: new google.maps.LatLng(50.438703,30.511346),
            zoom: 15,
            zoomControl: true,
            zoomControlOptions: {
                style: google.maps.ZoomControlStyle.DEFAULT,
            },
            disableDoubleClickZoom: false,
            mapTypeControl: false,
            scaleControl: false,
            scrollwheel: false,
            panControl: false,
            streetViewControl: false,
            draggable : true,
            overviewMapControl: false,
            overviewMapControlOptions: {
                opened: false,
            },
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            styles: [
  {
    "featureType": "water",
    "elementType": "geometry.fill",
    "stylers": [
      { "color": "#d3d3d3" }
    ]
  },{
    "featureType": "transit",
    "stylers": [
      { "color": "#808080" },
      { "visibility": "off" }
    ]
  },{
    "featureType": "road.highway",
    "elementType": "geometry.stroke",
    "stylers": [
      { "visibility": "on" },
      { "color": "#b3b3b3" }
    ]
  },{
    "featureType": "road.highway",
    "elementType": "geometry.fill",
    "stylers": [
      { "color": "#ffffff" }
    ]
  },{
    "featureType": "road.local",
    "elementType": "geometry.fill",
    "stylers": [
      { "visibility": "on" },
      { "color": "#ffffff" },
      { "weight": 1.8 }
    ]
  },{
    "featureType": "road.local",
    "elementType": "geometry.stroke",
    "stylers": [
      { "color": "#d7d7d7" }
    ]
  },{
    "featureType": "poi",
    "elementType": "geometry.fill",
    "stylers": [
      { "visibility": "on" },
      { "color": "#ebebeb" }
    ]
  },{
    "featureType": "administrative",
    "elementType": "geometry",
    "stylers": [
      { "color": "#a7a7a7" }
    ]
  },{
    "featureType": "road.arterial",
    "elementType": "geometry.fill",
    "stylers": [
      { "color": "#ffffff" }
    ]
  },{
    "featureType": "road.arterial",
    "elementType": "geometry.fill",
    "stylers": [
      { "color": "#ffffff" }
    ]
  },{
    "featureType": "landscape",
    "elementType": "geometry.fill",
    "stylers": [
      { "visibility": "on" },
      { "color": "#efefef" }
    ]
  },{
    "featureType": "road",
    "elementType": "labels.text.fill",
    "stylers": [
      { "color": "#696969" }
    ]
  },{
    "featureType": "administrative",
    "elementType": "labels.text.fill",
    "stylers": [
      { "visibility": "on" },
      { "color": "#737373" }
    ]
  },{
    "featureType": "poi",
    "elementType": "labels.icon",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "poi",
    "elementType": "labels",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "road.arterial",
    "elementType": "geometry.stroke",
    "stylers": [
      { "color": "#d6d6d6" }
    ]
  },{
    "featureType": "road",
    "elementType": "labels.icon",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
  },{
    "featureType": "poi",
    "elementType": "geometry.fill",
    "stylers": [
      { "color": "#dadada" }
    ]
  }
],
        }
        var mapElement = document.getElementById('office');
        var map = new google.maps.Map(mapElement, mapOptions);
        var locations = [
['Office', 'undefined', 'undefined', 'undefined', 'undefined', 50.438402, 30.511172999999985, 'https://mapbuildr.com/assets/img/markers/ellipse-red.png']
        ];
        for (i = 0; i < locations.length; i++) {
			if (locations[i][1] =='undefined'){ description ='';} else { description = locations[i][1];}
			if (locations[i][2] =='undefined'){ telephone ='';} else { telephone = locations[i][2];}
			if (locations[i][3] =='undefined'){ email ='';} else { email = locations[i][3];}
           if (locations[i][4] =='undefined'){ web ='';} else { web = locations[i][4];}
           if (locations[i][7] =='undefined'){ markericon ='';} else { markericon = locations[i][7];}
            marker = new google.maps.Marker({
                icon: markericon,
                position: new google.maps.LatLng(locations[i][5], locations[i][6]),
                map: map,
                title: locations[i][0],
                desc: description,
                tel: telephone,
                email: email,
                web: web
            });
link = '';     }

}
<?php echo '</script'; ?>
>
<style>
    #office {
        height:400px;
        width:100%;
    }
    .gm-style-iw * {
        display: block;
        width: 100%;
    }
    .gm-style-iw h4, .gm-style-iw p {
        margin: 0;
        padding: 0;
    }
    .gm-style-iw a {
        color: #4272db;
    }
</style>









<?php echo '<script'; ?>
>
	function send_dialog_stock(id) {


	//alert(id);

	var id_id = id;

	jQuery.ajax({
		type: "POST",
		url: "result_stock.php",
		data: "id_id=" + id_id,
		success: function(data){

			//document.getElementById("for_ajax").innerHTML=data;
			/*data.each(function() {
				var test = jQuery(this);
				alert(test);
			});*/


			jQuery.each(data, function(){
          		//alert(this);
          	});

            //alert(data[0].type_operation);
            //jQuery('#for_ajax').append
            //alert('<p>' + row.type_operation + '</p><p>' + row.id_currency + '</p>');


	     	//alert( "Data Saved: " + data );
	   	}

	});


	/*jQuery.ajax({
		type: "POST",
		url: "result.php",
		data: "summVvoda_cash="+summVvoda_cash+"&wm_cash="+wm_cash+"&oplata_cash="+oplata_cash+"&marga_cash="+marga_cash+"&k_oplate_cash="+k_oplate_cash
		//data: "name=John&location=Boston",

		//data: {summVvoda_ref: summVvoda_ref, wm_ref: wm_ref, oplata_ref: oplata_ref, k_oplate_ref: k_oplate_ref}
	});
	//select_exchange1.submit();
	//alert("rabotajet1");*/



}
<?php echo '</script'; ?>
>





</body>
</html><?php }
}
?>