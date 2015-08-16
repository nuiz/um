{extends file="template.php"}
{block name=body}
<div class="">
  <div class="section top-section">
    <div class="row">
      <div class="col-md-5"><strong>ชื่อ: {$item->first_name} {$item->last_name}</strong> </div>
      <div class="col-md-5"><strong>หมายเลขบัตรประชาชน: {$item->id_card}</strong></div>
      <div class="col-md-2"><strong>รหัสลูกค้า {$item->customer_id}</strong></div>
    </div>
    <div class="row">
      <div class="col-md-6">{$item->address}</div>
      <div class="col-md-6">เบอร์โทร {$item->tel_number}</div>
    </div>
    <div class="row">
      <div class="col-md-2 underline"><strong>วันที่แจ้ง</strong></div>
      <div class="col-md-10 underline"><strong>รายละเอียดงาน</strong></div>
    </div>
    <div class="row">
      <div class="col-md-2">{$item->job_request_date}</div>
      <div class="col-md-10">{$item->job_description}</div>
    </div>
  </div>
  <div class="section section-jobList">
    <div class="pull-right">
      <a href="{siteUrl url="/employer/{$item->id}/history/add"}" class="btn btn-info">
        <i class="glyphicon glyphicon-plus-sign"></i> เพิ่ม
      </a>
    </div>
    <table class="table table-bordered table-jobList">
      <thead>
        <tr>
          <th>ครั้งที่</th>
          <th>วันที่/เลขที่สัญญา</th>
          <th>รายละเอียดลูกจ้าง/วันที่สัญญา</th>
          <th>ซ่อมครั้งที่ 1</th>
          <th>ซ่อมครั้งที่ 2</th>
          <th>ซ่อมครั้งที่ 3</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<style>
.top-section .row {
  margin-bottom: 12px;
}
.table-jobList,
.table-jobList>tbody>tr>td,
.table-jobList>tbody>tr>th,
.table-jobList>tfoot>tr>td,
.table-jobList>tfoot>tr>th,
.table-jobList>thead>tr>td,
.table-jobList>thead>tr>th {
  border: 2px solid #000000;
}
</style>
{/block}
