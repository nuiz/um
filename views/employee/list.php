{extends file="template.php"}
{block name=body}
<h3>แม่บ้าน</h3>
<div>
	<form>
		<div class="row">
  			<div class="col-md-3 form-group">
  			    <label>ชื่อ-สกุล</label>
    			<input type="text" class="form-control">
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
				<th>พนักงาน</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td><a href="">ทดสอบ ทดสอบ</a></td>
				<td>สมศักดิ์ ปัดเป่า</td>
				<td>
					<a href=""><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
					<a href=""><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
				</td>
			</tr>
		</tbody>
	</table>
</div>
{/block}