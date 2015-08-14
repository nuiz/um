<?php /* Smarty version 3.1.27, created on 2015-08-11 05:48:26
         compiled from "views\user\add.php" */ ?>
<?php
/*%%SmartyHeaderCode:203555c9708a3de060_48122139%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e80193c6495cf3b4517ddaab9185eab44d3ba994' => 
    array (
      0 => 'views\\user\\add.php',
      1 => 1439264475,
      2 => 'file',
    ),
    'eee29d89c2b5b7f76479515928af351624f48a5a' => 
    array (
      0 => 'views\\template.php',
      1 => 1439264768,
      2 => 'file',
    ),
    'a3b342f29d289c85654ff15bb687210a4731a011' => 
    array (
      0 => 'a3b342f29d289c85654ff15bb687210a4731a011',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '203555c9708a3de060_48122139',
  'variables' => 
  array (
    'userlogin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55c9708a4eda76_45188253',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55c9708a4eda76_45188253')) {
function content_55c9708a4eda76_45188253 ($_smarty_tpl) {
if (!is_callable('smarty_function_siteUrl')) require_once 'vendor/slim/views/SmartyPlugins\\function.siteUrl.php';
if (!is_callable('smarty_function_currentUrl')) require_once 'vendor/slim/views/SmartyPlugins\\function.currentUrl.php';

$_smarty_tpl->properties['nocache_hash'] = '203555c9708a3de060_48122139';
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
	<link rel="stylesheet" type="text/css" href="<?php echo smarty_function_siteUrl(array('url'=>'/asset/css/style.css'),$_smarty_tpl);?>
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
			<?php if ($_smarty_tpl->tpl_vars['userlogin']->value->level == 1) {?>
    		<li <?php ob_start();
echo smarty_function_currentUrl(array(),$_smarty_tpl);
$_tmp1=ob_get_clean();
ob_start();
echo smarty_function_siteUrl(array('url'=>"/user"),$_smarty_tpl);
$_tmp2=ob_get_clean();
if ($_tmp1 == $_tmp2) {?> class="active" <?php }?>><a href="<?php echo smarty_function_siteUrl(array('url'=>"/user"),$_smarty_tpl);?>
">พนักงาน</a></li>
    		<?php }?>
    		<li <?php ob_start();
echo smarty_function_currentUrl(array(),$_smarty_tpl);
$_tmp3=ob_get_clean();
ob_start();
echo smarty_function_siteUrl(array('url'=>"/employer"),$_smarty_tpl);
$_tmp4=ob_get_clean();
if ($_tmp3 == $_tmp4) {?> class="active" <?php }?>><a href="<?php echo smarty_function_siteUrl(array('url'=>"/employer"),$_smarty_tpl);?>
">นายจ้าง</a></li>
    		<li <?php ob_start();
echo smarty_function_currentUrl(array(),$_smarty_tpl);
$_tmp5=ob_get_clean();
ob_start();
echo smarty_function_siteUrl(array('url'=>"/employee"),$_smarty_tpl);
$_tmp6=ob_get_clean();
if ($_tmp5 == $_tmp6) {?> class="active" <?php }?>><a href="<?php echo smarty_function_siteUrl(array('url'=>"/employee"),$_smarty_tpl);?>
">แม่บ้าน</a></li>
    		<li <?php ob_start();
echo smarty_function_currentUrl(array(),$_smarty_tpl);
$_tmp7=ob_get_clean();
ob_start();
echo smarty_function_siteUrl(array('url'=>"/blacklist"),$_smarty_tpl);
$_tmp8=ob_get_clean();
if ($_tmp7 == $_tmp8) {?> class="active" <?php }?>><a href="<?php echo smarty_function_siteUrl(array('url'=>"/blacklist"),$_smarty_tpl);?>
">แบล็คลิส</a></li>
    		<li <?php ob_start();
echo smarty_function_currentUrl(array(),$_smarty_tpl);
$_tmp9=ob_get_clean();
ob_start();
echo smarty_function_siteUrl(array('url'=>"/visa"),$_smarty_tpl);
$_tmp10=ob_get_clean();
if ($_tmp9 == $_tmp10) {?> class="active" <?php }?>><a href="<?php echo smarty_function_siteUrl(array('url'=>"/visa"),$_smarty_tpl);?>
">รายการ VISA</a></li>
    		<!-- <li <?php ob_start();
echo smarty_function_currentUrl(array(),$_smarty_tpl);
$_tmp11=ob_get_clean();
ob_start();
echo smarty_function_siteUrl(array('url'=>"/nationality"),$_smarty_tpl);
$_tmp12=ob_get_clean();
if ($_tmp11 == $_tmp12) {?> class="active" <?php }?>><a href="<?php echo smarty_function_siteUrl(array('url'=>"/nationality"),$_smarty_tpl);?>
">สัญชาติ</a></li>
    		<li <?php ob_start();
echo smarty_function_currentUrl(array(),$_smarty_tpl);
$_tmp13=ob_get_clean();
ob_start();
echo smarty_function_siteUrl(array('url'=>"/race"),$_smarty_tpl);
$_tmp14=ob_get_clean();
if ($_tmp13 == $_tmp14) {?> class="active" <?php }?>><a href="<?php echo smarty_function_siteUrl(array('url'=>"/race"),$_smarty_tpl);?>
">เชื้อชาติ</a></li>
    		<li <?php ob_start();
echo smarty_function_currentUrl(array(),$_smarty_tpl);
$_tmp15=ob_get_clean();
ob_start();
echo smarty_function_siteUrl(array('url'=>"/religious"),$_smarty_tpl);
$_tmp16=ob_get_clean();
if ($_tmp15 == $_tmp16) {?> class="active" <?php }?>><a href="<?php echo smarty_function_siteUrl(array('url'=>"/religious"),$_smarty_tpl);?>
">ศาสนา</a></li> -->
    		<li><a href="<?php echo smarty_function_siteUrl(array('url'=>"/logout"),$_smarty_tpl);?>
">Logout</a></li>
		</ul>
	</div>
</nav>
<div class="container">
	<?php
$_smarty_tpl->properties['nocache_hash'] = '203555c9708a3de060_48122139';
?>

<h4><?php if (isset($_smarty_tpl->tpl_vars['form']->value->attr['id'])) {?>แก้ไขพนักงาน<?php } else { ?>เพิ่มพนักงาน<?php }?></h4>
<div class="form-wrap">
	<small><?php echo $_smarty_tpl->tpl_vars['form']->value->error;?>
</small>
	<form method="post">
		<div class="form-group">
			<label>username</label>
			<input type="text" class="form-control" name="username" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->attr['username'];?>
" placeholder="">
		</div>
		<div class="form-group">
			<label>password</label>
			<input type="text" class="form-control" name="password" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->attr['password'];?>
" placeholder="">
		</div>
		<div class="form-group">
			<label>email</label>
			<input type="text" class="form-control" name="email" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->attr['email'];?>
" placeholder="">
		</div>
		<div class="form-group">
			<label>ชื่อ</label>
			<input type="text" class="form-control" name="first_name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->attr['first_name'];?>
" placeholder="">
		</div>
		<div class="form-group">
			<label>นามสกุล</label>
			<input type="text" class="form-control" name="last_name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->attr['last_name'];?>
" placeholder="">
		</div>
		<div class="form-group">
			<label>เบอร์โทรศัพท์</label>
			<input type="text" class="form-control" name="tel_number" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->attr['tel_number'];?>
" placeholder="">
		</div>
		<div class="form-group">
			<label>สาขา</label>
			<input type="text" class="form-control" name="branch" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->attr['branch'];?>
" placeholder="">
		</div>
		<button type="submit" class="btn btn-primary">ตกลง</button>
		<a href="<?php echo smarty_function_siteUrl(array('url'=>"/user"),$_smarty_tpl);?>
" class="btn btn-warning">กลับไปยังรายการ</a>
	</form>
</div>

</div>
<div class="footer"></div>
<?php echo '<script'; ?>
>
$('.confirm-beforeclick').click(function(e){
	if(!window.confirm('คุณแน่ใจหรือไม่?')){
		e.preventDefault();
		return false;
	}
});
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>