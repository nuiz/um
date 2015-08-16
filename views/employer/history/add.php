{extends file="template.php"}
{block name=body}
<h4>{if isset($form->attr.id)}แก้ไขประวัติ{else}เพิ่มประวัติ{/if}</h4>
<div class="form-wrap">
  {if $form->error}
  <div class="alert alert-danger" role="alert">
    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
    <span class="sr-only">Error:</span>
    {$form->error}
  </div>
  {/if}
	<form method="post">
		<div class="form-group">
			<label>ครั้งที่</label>
			<input type="text" class="form-control" name="term_at" value="{$form->attr.term_at}" placeholder="">
		</div>
		<div class="form-group">
			<label>วันที่/เลขที่สัญญา</label>
			<input type="text" class="form-control" name="contract_no" value="{$form->attr.contract_no}" placeholder="">
		</div>
		<div class="form-group">
			<label>รายละเอียดลูกจ้าง/วันที่สัญญา</label>
			<textarea class="form-control" name="contract_description" placeholder="">{$form->attr.contract_description}</textarea>
		</div>

		<div class="form-group">
			<label>ซ่อมครั้งที่ 1</label>
			<textarea class="form-control" name="repair_1" placeholder="">{$form->attr.repair_1}</textarea>
		</div>

		<div class="form-group">
			<label>ซ่อมครั้งที่ 2</label>
			<textarea class="form-control" name="repair_2" placeholder="">{$form->attr.repair_2}</textarea>
		</div>

		<div class="form-group">
			<label>ซ่อมครั้งที่ 3</label>
			<textarea class="form-control" name="repair_3" placeholder="">{$form->attr.repair_3}</textarea>
		</div>
		<button type="submit" class="btn btn-primary">ตกลง</button>
		<a href="{siteUrl url="/employer"}" class="btn btn-warning">กลับไปยังรายการ</a>
	</form>
</div>
{/block}
