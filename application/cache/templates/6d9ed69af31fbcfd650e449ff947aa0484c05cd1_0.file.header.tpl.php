<?php
/* Smarty version 3.1.30, created on 2018-01-16 21:10:03
  from "E:\xampp\htdocs\rpg_web\application\views\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5e5c1b0eb503_44494064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d9ed69af31fbcfd650e449ff947aa0484c05cd1' => 
    array (
      0 => 'E:\\xampp\\htdocs\\rpg_web\\application\\views\\header.tpl',
      1 => 1516133402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5e5c1b0eb503_44494064 (Smarty_Internal_Template $_smarty_tpl) {
?>
<head>
		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	
	<!-- METAS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="author" content="">
    <meta name="theme-color" content="#141619">

	<!-- Search engine related -->
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
	
	<!-- CORE CSS -->
	<link href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
css/bootstrap.min.css" rel="stylesheet">
	<link href='<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
css/theme.min.css' rel="stylesheet">
	<link href='<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
css/custom.css' rel="stylesheet"> 
	<link href='<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
css/helpers.min.css' rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'> 
    
	<!-- PLUGINS -->
	<link href='<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
css/font-awesome.min.css' rel="stylesheet">
	<link href='<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
css/ionicons.min.css' rel="stylesheet">
	<link href='<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
css/animate/animate.min.css' rel="stylesheet">
	<link href='<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
css/animate/animate.delay.css' rel="stylesheet">
	<link href='<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
css/owl.carousel.css' rel="stylesheet">
		
	<!-- FAVICON -->
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
img/favicon.ico">
		
		
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		
	<!-- Load core as Angular and jQuery -->
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
js/vendors/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
js/custom_cookies.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
js/vendors/angular.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
js/vendors/angular-route.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
js/app.js"><?php echo '</script'; ?>
>
	
</head><?php }
}
