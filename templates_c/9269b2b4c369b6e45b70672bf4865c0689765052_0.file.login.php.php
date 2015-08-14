<?php /* Smarty version 3.1.27, created on 2015-08-10 21:56:05
         compiled from "views\login.php" */ ?>
<?php
/*%%SmartyHeaderCode:2201455c901d580c790_28084416%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9269b2b4c369b6e45b70672bf4865c0689765052' => 
    array (
      0 => 'views\\login.php',
      1 => 1439236562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2201455c901d580c790_28084416',
  'variables' => 
  array (
    'loginForm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55c901d5869b88_64086289',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55c901d5869b88_64086289')) {
function content_55c901d5869b88_64086289 ($_smarty_tpl) {
if (!is_callable('smarty_function_siteUrl')) require_once 'vendor/slim/views/SmartyPlugins\\function.siteUrl.php';

$_smarty_tpl->properties['nocache_hash'] = '2201455c901d580c790_28084416';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>UM</title>

	<link rel="stylesheet" type="text/css" href="<?php echo smarty_function_siteUrl(array('url'=>'/asset/bootstrap/css/bootstrap.min.css'),$_smarty_tpl);?>
">
	<link rel="stylesheet" type="text/css" href="<?php echo smarty_function_siteUrl(array('url'=>'/asset/bootstrap/css/bootstrap-theme.min.css'),$_smarty_tpl);?>
">

	<?php echo '<script'; ?>
 src="<?php echo smarty_function_siteUrl(array('url'=>'/asset/jquery/jquery-1.11.3.min.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo smarty_function_siteUrl(array('url'=>'/asset/bootstrap/js/bootstrap.min.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
</head>
<body>
<style>
    body {
        background: url(http://localhost/um_old/public/images/bg_login.jpg);
    }

    .jumbotron {
        text-align: center;
        width: 30rem;
        border-radius: 0.5rem;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        position: absolute;
        margin: 4rem auto;
        background-color: #fff;
        padding: 2rem;
        height: 430px;
    }

    .container .glyphicon-list-alt {
        font-size: 10rem;
        margin-top: 3rem;
        color: #f96145;
    }

    input {
        width: 100%;
        margin-bottom: 1.4rem;
        padding: 1rem;
        background-color: #ecf2f4;
        border-radius: 0.2rem;
        border: none;
    }

    h2 {
        margin-bottom: 3rem;
        font-weight: bold;
        color: #ababab;
    }

    .btn {
        border-radius: 0.2rem;
    }

    .btn .glyphicon {
        font-size: 3rem;
        color: #fff;
    }

    .full-width {
        background-color: #8eb5e2;
        width: 100%;
        -webkit-border-top-right-radius: 0;
        -webkit-border-bottom-right-radius: 0;
        -moz-border-radius-topright: 0;
        -moz-border-radius-bottomright: 0;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    .box {
        position: absolute;
        bottom: 0;
        left: 0;
        margin-bottom: 3rem;
        margin-left: 3rem;
        margin-right: 3rem;
    }
</style>
<div class="jumbotron">
    <div class="container">
        <span class="glyphicon glyphicon-list-alt"></span>

        <h2>Login</h2>

        <div class="box">
            <form data-toggle="validator" role="form" name="loginForm" id="loginForm" method="post">
                <input type="username" placeholder="username" required name="username"
                    <?php if (isset($_smarty_tpl->tpl_vars['loginForm']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['loginForm']->value->attr['username'];?>
"<?php }?>>
                <input type="password" placeholder="password" required name="password">
                <button class="btn btn-primary full-width"><span class="glyphicon glyphicon-ok"></span></button>
            </form>
            <?php if (isset($_smarty_tpl->tpl_vars['loginForm']->value)) {?><small><?php echo $_smarty_tpl->tpl_vars['loginForm']->value->error;?>
</small><?php }?>
        </div>
    </div>
</div>
</body>
</html><?php }
}
?>