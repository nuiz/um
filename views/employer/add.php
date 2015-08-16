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
		<div class="form-group">
			<label>เบอร์โทรศัพท์</label>
			<input type="text" class="form-control" name="tel_number" value="{$form->attr.tel_number}" placeholder="">
		</div>
		<div class="form-group">
			<label>รหัสสประจำตัวประชาชน</label>
			<input type="text" class="form-control" name="id_card" value="{$form->attr.id_card}" placeholder="">
		</div>
		<div class="form-group">
			<label>รหัสลูกค้า</label>
			<input type="text" class="form-control" name="customer_id" value="{$form->attr.customer_id}" placeholder="">
		</div>
		<div class="form-group">
			<label>ที่อยู่</label>
			<input type="text" class="form-control" name="address" value="{$form->attr.address}" placeholder="">
		</div>
		<div class="form-group">
			<label>วันที่แจ้ง</label>
			<input type="text" class="form-control datepicker" name="job_request_date" data-date-format="yyyy-mm-dd" value="{$form->attr.job_request_date}" placeholder="">
		</div>
		<div class="form-group">
			<label>รายละเอียดงาน</label>
			<textarea class="form-control" name="job_description" placeholder="">{$form->attr.job_description}</textarea>
		</div>
		<div class="form-group">
			<label>สถานะ</label>
			<select name="status">
				{foreach item=item from=$form->getOptionStatus()}
				<option value="{$item->id}" {if $item->id eq $form->attr.status}selected{/if}>{$item->name}</option>
				{/foreach}
			</select>
		</div>
		<button type="submit" class="btn btn-primary">ตกลง</button>
		<a href="{siteUrl url="/employer"}" class="btn btn-warning">กลับไปยังรายการ</a>
	</form>
</div>

<script>
$(function(){
	$('.datepicker').datepicker();
});
</script>
{/block}
