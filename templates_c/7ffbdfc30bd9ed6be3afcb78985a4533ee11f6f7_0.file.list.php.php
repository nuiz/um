<?php /* Smarty version 3.1.27, created on 2015-08-06 00:31:23
         compiled from "views\employer\list.php" */ ?>
<?php
/*%%SmartyHeaderCode:2246055c28ebbbc7b62_49468222%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ffbdfc30bd9ed6be3afcb78985a4533ee11f6f7' => 
    array (
      0 => 'views\\employer\\list.php',
      1 => 1438813122,
      2 => 'file',
    ),
    'eee29d89c2b5b7f76479515928af351624f48a5a' => 
    array (
      0 => 'views\\template.php',
      1 => 1438813554,
      2 => 'file',
    ),
    'a600168cce22018407893501951d66ae3d69e383' => 
    array (
      0 => 'a600168cce22018407893501951d66ae3d69e383',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '2246055c28ebbbc7b62_49468222',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55c28ebbc5c286_34828834',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55c28ebbc5c286_34828834')) {
function content_55c28ebbc5c286_34828834 ($_smarty_tpl) {
if (!is_callable('smarty_function_siteUrl')) require_once 'vendor/slim/views/SmartyPlugins\\function.siteUrl.php';
if (!is_callable('smarty_function_currentUrl')) require_once 'vendor/slim/views/SmartyPlugins\\function.currentUrl.php';

$_smarty_tpl->properties['nocache_hash'] = '2246055c28ebbbc7b62_49468222';
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
<nav class="navbar navbar-default">
	<div class="container">
		<ul class="nav navbar-nav">
    		<li <?php ob_start();
echo smarty_function_currentUrl(array(),$_smarty_tpl);
$_tmp1=ob_get_clean();
ob_start();
echo smarty_function_siteUrl(array('url'=>"/employer"),$_smarty_tpl);
$_tmp2=ob_get_clean();
if ($_tmp1 == $_tmp2) {?> class="active" <?php }?>><a href="<?php echo smarty_function_siteUrl(array('url'=>"/employer"),$_smarty_tpl);?>
">นายจ้าง</a></li>
    		<li <?php ob_start();
echo smarty_function_currentUrl(array(),$_smarty_tpl);
$_tmp3=ob_get_clean();
ob_start();
echo smarty_function_siteUrl(array('url'=>"/employee"),$_smarty_tpl);
$_tmp4=ob_get_clean();
if ($_tmp3 == $_tmp4) {?> class="active" <?php }?>><a href="<?php echo smarty_function_siteUrl(array('url'=>"/employee"),$_smarty_tpl);?>
">แม่บ้าน</a></li>
    		<li <?php ob_start();
echo smarty_function_currentUrl(array(),$_smarty_tpl);
$_tmp5=ob_get_clean();
ob_start();
echo smarty_function_siteUrl(array('url'=>"/blacklist"),$_smarty_tpl);
$_tmp6=ob_get_clean();
if ($_tmp5 == $_tmp6) {?> class="active" <?php }?>><a href="<?php echo smarty_function_siteUrl(array('url'=>"/blacklist"),$_smarty_tpl);?>
">แบล็คลิส</a></li>
    		<li <?php ob_start();
echo smarty_function_currentUrl(array(),$_smarty_tpl);
$_tmp7=ob_get_clean();
ob_start();
echo smarty_function_siteUrl(array('url'=>"/visa"),$_smarty_tpl);
$_tmp8=ob_get_clean();
if ($_tmp7 == $_tmp8) {?> class="active" <?php }?>><a href="<?php echo smarty_function_siteUrl(array('url'=>"/visa"),$_smarty_tpl);?>
">รายการ VISA</a></li>
    		<li <?php ob_start();
echo smarty_function_currentUrl(array(),$_smarty_tpl);
$_tmp9=ob_get_clean();
ob_start();
echo smarty_function_siteUrl(array('url'=>"/nationality"),$_smarty_tpl);
$_tmp10=ob_get_clean();
if ($_tmp9 == $_tmp10) {?> class="active" <?php }?>><a href="<?php echo smarty_function_siteUrl(array('url'=>"/nationality"),$_smarty_tpl);?>
">สัญชาติ</a></li>
    		<li <?php ob_start();
echo smarty_function_currentUrl(array(),$_smarty_tpl);
$_tmp11=ob_get_clean();
ob_start();
echo smarty_function_siteUrl(array('url'=>"/race"),$_smarty_tpl);
$_tmp12=ob_get_clean();
if ($_tmp11 == $_tmp12) {?> class="active" <?php }?>><a href="<?php echo smarty_function_siteUrl(array('url'=>"/race"),$_smarty_tpl);?>
">เชื้อชาติ</a></li>
    		<li <?php ob_start();
echo smarty_function_currentUrl(array(),$_smarty_tpl);
$_tmp13=ob_get_clean();
ob_start();
echo smarty_function_siteUrl(array('url'=>"/religious"),$_smarty_tpl);
$_tmp14=ob_get_clean();
if ($_tmp13 == $_tmp14) {?> class="active" <?php }?>><a href="<?php echo smarty_function_siteUrl(array('url'=>"/religious"),$_smarty_tpl);?>
">ศาสนา</a></li>
    		<li><a href="<?php echo smarty_function_siteUrl(array('url'=>"/logout"),$_smarty_tpl);?>
">Logout</a></li>
		</ul>
	</div>
</nav>
<div class="container">
	<?php
$_smarty_tpl->properties['nocache_hash'] = '2246055c28ebbbc7b62_49468222';
?>

<h3>นายจ้าง</h3>
<div>
	<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>ชื่อ-สกุล</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td><a href="">ทดสอบ ทดสอบ</a></td>
				<td>
					<a href=""><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
					<a href=""><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
				</td>
			</tr>
		</tbody>
	</table>
</div>

</div>
</body>
</html><?php }
}
?>