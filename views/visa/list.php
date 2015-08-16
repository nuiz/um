{extends file="template.php"}
{block name=body}
<h3>รายงาน visa</h3>
<div>
	<form>
		<input type="hidden" name="page" value="{$searchForm->attr.page}">
		<div class="row">
			<div class="col-md-3 form-group">
			    <label>วันหมดอายุ passport</label>
  				<input type="text" class="form-control datepicker" name="passport_expiry_start" value="{$searchForm->attr.passport_expiry_start}" data-date-format="yyyy-mm-dd">
  				ถึง <input type="text" class="form-control datepicker" name="passport_expiry_end" value="{$searchForm->attr.passport_expiry_end}" data-date-format="yyyy-mm-dd">
			</div>
			<div class="col-md-3 form-group">
			    <label>วันหมดอายุ visa</label>
  				<input type="text" class="form-control datepicker" name="visa_expiry_start" value="{$searchForm->attr.visa_expiry_start}" data-date-format="yyyy-mm-dd">
  				ถึง <input type="text" class="form-control datepicker" name="visa_expiry_end" value="{$searchForm->attr.visa_expiry_end}" data-date-format="yyyy-mm-dd">
			</div>
			<div class="col-md-3 form-group">
			    <label>วันหมดอายุรายงานตัว</label>
  				<input type="text" class="form-control datepicker" name="report_expiry_start" value="{$searchForm->attr.report_expiry_start}" data-date-format="yyyy-mm-dd">
  				ถึง <input type="text" class="form-control datepicker" name="report_expiry_end"  value="{$searchForm->attr.report_expiry_end}" data-date-format="yyyy-mm-dd">
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 form-group">
				<button type="submit" class="btn btn-success">ค้นหา</button>
			</div>
		</div>
	</form>
</div>
<div>
	<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>ชื่อ-สกุล</th>
				<th>passport.no</th>
				<th>วันหมดอายุ passport</th>
				<th>วันหมดอายุ visa</th>
				<th>วันหมดอายุรายงานตัว</th>
			</tr>
		</thead>
		<tbody>
			{foreach key=key item=item from=$items}
			<tr>
				<td>{$item->id}</td>
				<td><a href="">{$item->first_name} {$item->last_name}</a></td>
				<td>{$item->passport_id}</td>
				<td>{$item->passport_expiry}</td>
				<td>{$item->visa_expiry}</td>
				<td>{$item->report_expiry}</td>
			</tr>
			{/foreach}
		</tbody>
	</table>
	<ul class="pagination">
    {if $page gt 1}
    <li>
      <a href="{siteUrl url="/employee?page={$page-1}"}" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    {/if}
    {for $i=1 to $maxPage}
    <li><a href="{siteUrl url="/employee?page=$i"}">{$i}</a></li>
    {/for}
    {if $maxPage gt $page}
    <li>
      <a href="{siteUrl url="/employee?page={$page+1}"}" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
    {/if}
  </ul>
</div>
<script>
$(function(){
	$('.datepicker').datepicker();
});
</script>
{/block}
