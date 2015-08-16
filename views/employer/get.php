{extends file="template.php"}
{block name=body}
<div class="">
  <div class="section top-section">
    <div class="row">
      <div class="col-md-5"><strong>ชื่อ:</strong> </div>
      <div class="col-md-5"><strong>หมายเลขบัตรประชาชน: </strong></div>
      <div class="col-md-2"><strong>รหัสลูกค้า</strong></div>
    </div>
    <div class="row">
      <div class="col-md-6">222/195 บลาๆๆๆๆ ๆ ๆ ๆ ๆ ๆ ๆ  บลาๆๆๆๆ ๆ ๆ ๆ ๆ ๆ ๆ </div>
      <div class="col-md-6">เบอร์โทร 096-6666666</div>
    </div>
    <div class="row">
      <div class="col-md-1 underline"><strong>วันที่แจ้ง</strong></div>
      <div class="col-md-9 underline"><strong>รายละเอียดงาน</strong></div>
      <div class="col-md-2">ครั้งที่ 2 : 27 พ.ค. 58</div>
    </div>
    <div class="row">
      <div class="col-md-1">27 พ.ค. 58</div>
      <div class="col-md-9">ต้องการแม่บ้าน 2 คน มีลูก 3 หมา 4 สามี 5 แต่เด็กโตแล้วไม่ต้องดูแล เงินเเดือน 9000 บาท/เดือน หยุด 4 วัน/เดือน โอที 300 บาท</div>
    </div>
  </div>
  <div class="section section-jobList">
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
