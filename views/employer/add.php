{extends file="template.php"}
{block name=body}
<h4>{if isset($form->attr.id)}แก้ไขนายจ้าง{else}เพิ่มนายจ้าง{/if}</h4>
<div class="form-wrap">
	<small>{$form->error}</small>
	<form method="post">
		<div class="form-group">
			<label>ชื่อ</label>
			<input type="text" class="form-control" name="first_name" value="{$form->attr.first_name}" placeholder="">
		</div>
		<div class="form-group">
			<label>นามสกุล</label>
			<input type="text" class="form-control" name="last_name" value="{$form->attr.last_name}" placeholder="">
		</div>
		<button type="submit" class="btn btn-primary">ตกลง</button>
		<a href="{siteUrl url="/employer"}" class="btn btn-warning">กลับไปยังรายการ</a>
	</form>
</div>
{/block}
