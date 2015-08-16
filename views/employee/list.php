{extends file="template.php"}
{block name=body}
<h3>แม่บ้าน</h3>
<div>
	<form>
		<div class="row">
			<input type="hidden" name="page" value="{$searchForm->attr.page}">
			<div class="col-md-3 form-group">
			    <label>ชื่อ-สกุล</label>
  				<input type="text" name="keyword" value="{$searchForm->attr.keyword}">
			</div>
		</div>
	</form>
</div>
<div>
	<div>
		<a href="{siteUrl url="/employee/add"}" class="btn btn-info">
			<i class="glyphicon glyphicon-plus-sign"></i> เพิ่ม
		</a>
	<div>
	<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>ชื่อ-สกุล</th>
				<th>พนักงาน</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			{foreach key=key item=item from=$items}
			<tr>
				<td>{$item->id}</td>
				<td><a href="">{$item->first_name} {$item->last_name}</a></td>
				<td>{$item->user->username}</td>
				<td>
					<a href="{siteUrl url="/employee/edit/{$item->id}"}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
					<a class="confirm-beforeclick" href="{siteUrl url="/employee/delete/{$item->id}"}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
				</td>
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
{/block}
