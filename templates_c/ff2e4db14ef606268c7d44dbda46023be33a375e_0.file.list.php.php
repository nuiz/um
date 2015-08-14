<?php /* Smarty version 3.1.27, created on 2015-08-11 05:46:10
         compiled from "views\user\list.php" */ ?>
<?php
/*%%SmartyHeaderCode:1770955c970021ecd94_88741855%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff2e4db14ef606268c7d44dbda46023be33a375e' => 
    array (
      0 => 'views\\user\\list.php',
      1 => 1439264557,
      2 => 'file',
    ),
    'eee29d89c2b5b7f76479515928af351624f48a5a' => 
    array (
      0 => 'views\\template.php',
      1 => 1439264768,
      2 => 'file',
    ),
    '9564828693568d9ef0f783866306b17c77918006' => 
    array (
      0 => '9564828693568d9ef0f783866306b17c77918006',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1770955c970021ecd94_88741855',
  'variables' => 
  array (
    'userlogin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55c97002332949_53096571',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55c97002332949_53096571')) {
function content_55c97002332949_53096571 ($_smarty_tpl) {
if (!is_callable('smarty_function_siteUrl')) require_once 'vendor/slim/views/SmartyPlugins\\function.siteUrl.php';
if (!is_callable('smarty_function_currentUrl')) require_once 'vendor/slim/views/SmartyPlugins\\function.currentUrl.php';

$_smarty_tpl->properties['nocache_hash'] = '1770955c970021ecd94_88741855';
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
$_smarty_tpl->properties['nocache_hash'] = '1770955c970021ecd94_88741855';
?>

<h3>พนักงาน</h3>
<div>
	<div>
		<a href="<?php echo smarty_function_siteUrl(array('url'=>"/user/add"),$_smarty_tpl);?>
" class="btn btn-info">
			<i class="glyphicon glyphicon-plus-sign"></i> เพิ่ม
		</a>
	<div>
	<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>บัญชีผู้ใช้</th>
				<th>ชื่อ-สกุล</th>
				<th>เบอร์โทรศัพท์</th>
				<th>สาขา</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php
$_from = $_smarty_tpl->tpl_vars['items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value->username;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value->first_name;?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value->last_name;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value->tel_number;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value->branch;?>
</td>
				<td>
					<a href="<?php echo smarty_function_siteUrl(array('url'=>"/user/edit/".((string)$_smarty_tpl->tpl_vars['item']->value->id)),$_smarty_tpl);?>
"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
					<a class="confirm-beforeclick" href="<?php echo smarty_function_siteUrl(array('url'=>"/user/delete/".((string)$_smarty_tpl->tpl_vars['item']->value->id)),$_smarty_tpl);?>
"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
				</td>
			</tr>
			<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
		</tbody>
	</table>
	<ul class="pagination">
    <?php if ($_smarty_tpl->tpl_vars['page']->value > 1) {?>
    <li>
      <a href="<?php echo smarty_function_siteUrl(array('url'=>"/user?page=".((string)($_smarty_tpl->tpl_vars['page']->value-1))),$_smarty_tpl);?>
" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php }?>
    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['maxPage']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['maxPage']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
    <li><a href="<?php echo smarty_function_siteUrl(array('url'=>"/user?page=".((string)$_smarty_tpl->tpl_vars['i']->value)),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
    <?php }} ?>
    <?php if ($_smarty_tpl->tpl_vars['maxPage']->value > $_smarty_tpl->tpl_vars['page']->value) {?>
    <li>
      <a href="<?php echo smarty_function_siteUrl(array('url'=>"/user?page=".((string)($_smarty_tpl->tpl_vars['page']->value+1))),$_smarty_tpl);?>
" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
    <?php }?>
  </ul>
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