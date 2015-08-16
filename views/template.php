<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>UM</title>

	<link rel="stylesheet" type="text/css" href="{siteUrl url='/asset/bootstrap/css/bootstrap.min.css'}">
	<link rel="stylesheet" type="text/css" href="{siteUrl url='/asset/bootstrap/css/bootstrap-theme.min.css'}">
	<link rel="stylesheet" type="text/css" href="{siteUrl url='/asset/datepicker/css/datepicker.css'}">
	<link rel="stylesheet" type="text/css" href="{siteUrl url='/asset/css/style.css'}">

	<script src="{siteUrl url='/asset/jquery/jquery-1.11.3.min.js'}"></script>
	<script src="{siteUrl url='/asset/bootstrap/js/bootstrap.min.js'}"></script>
	<script src="{siteUrl url='/asset/datepicker/js/bootstrap-datepicker.js'}"></script>
	<script src="{siteUrl url=''}"></script>
</head>
<body>
<nav class="navbar navbar-default">
	<div class="container">
		<ul class="nav navbar-nav">
			{if $userlogin->level eq 1}
  		<li {if strpos({currentUrl}, {siteUrl url="/user"}) !== false}  class="active" {/if}><a href="{siteUrl url="/user"}">พนักงาน</a></li>
  		{/if}
  		<li {if strpos({currentUrl}, {siteUrl url="/employer"}) !== false} class="active" {/if}><a href="{siteUrl url="/employer"}">นายจ้าง</a></li>
  		<li {if strpos({currentUrl}, {siteUrl url="/employee"}) !== false} class="active" {/if}><a href="{siteUrl url="/employee"}">แม่บ้าน</a></li>
  		<li {if strpos({currentUrl}, {siteUrl url="/blacklist"}) !== false} class="active" {/if}><a href="{siteUrl url="/blacklist"}">แบล็คลิส</a></li>
  		<li {if strpos({currentUrl}, {siteUrl url="/visa"}) !== false} class="active" {/if}><a href="{siteUrl url="/visa"}">รายการ VISA</a></li>
  		<!-- <li {if {currentUrl} eq {siteUrl url="/nationality"}} class="active" {/if}><a href="{siteUrl url="/nationality"}">สัญชาติ</a></li>
  		<li {if {currentUrl} eq {siteUrl url="/race"}} class="active" {/if}><a href="{siteUrl url="/race"}">เชื้อชาติ</a></li>
  		<li {if {currentUrl} eq {siteUrl url="/religious"}} class="active" {/if}><a href="{siteUrl url="/religious"}">ศาสนา</a></li> -->
  		<li><a href="{siteUrl url="/logout"}">Logout</a></li>
		</ul>
	</div>
</nav>
<div class="container">
	{block name=body}{/block}
</div>
<div class="footer"></div>
<script>
$('.confirm-beforeclick').click(function(e){
	if(!window.confirm('คุณแน่ใจหรือไม่?')){
		e.preventDefault();
		return false;
	}
});
</script>
</body>
</html>
