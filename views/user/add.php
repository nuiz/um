{extends file="template.php"}
{block name=body}
<h4>{if isset($form->attr.id)}แก้ไขพนักงาน{else}เพิ่มพนักงาน{/if}</h4>
<div class="form-wrap">
	<small>{$form->error}</small>
	<form method="post">
		<div class="form-group">
			<label>username</label>
			<input type="text" class="form-control" name="username" value="{$form->attr.username}" placeholder="">
		</div>
		<div class="form-group">
			<label>password</label>
			<input type="text" class="form-control" name="password" value="{$form->attr.password}" placeholder="">
		</div>
		<div class="form-group">
			<label>email</label>
			<input type="text" class="form-control" name="email" value="{$form->attr.email}" placeholder="">
		</div>
		<div class="form-group">
			<label>ชื่อ</label>
			<input type="text" class="form-control" name="first_name" value="{$form->attr.first_name}" placeholder="">
		</div>
		<div class="form-group">
			<label>นามสกุล</label>
			<input type="text" class="form-control" name="last_name" value="{$form->attr.last_name}" placeholder="">
		</div>
		<div class="form-group">
			<label>เบอร์โทรศัพท์</label>
			<input type="text" class="form-control" name="tel_number" value="{$form->attr.tel_number}" placeholder="">
		</div>
		<div class="form-group">
			<label>สาขา</label>
			<input type="text" class="form-control" name="branch" value="{$form->attr.branch}" placeholder="">
		</div>
		<button type="submit" class="btn btn-primary">ตกลง</button>
		<a href="{siteUrl url="/user"}" class="btn btn-warning">กลับไปยังรายการ</a>
	</form>
</div>
{/block}