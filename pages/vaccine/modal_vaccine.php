<!-- Modal Add Vaccine -->
<div class="modal fade" id="addModalVaccine" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"><i class="fa-solid fa-plus"></i> เพิ่มข้อมูลยา - วัคซีน</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row form-group">
          <form action="">
            <div class="col-12 mb-2">
              <label for="#" class="form-label">ชื่อยา</label>
              <input type="text" class="form-control" id="#" placeholder="ชื่อยา..." required>
            </div>
            <div class="col-12 mb-2">
              <label for="address" class="form-label">วิธีใช้</label>
              <input type="text" class="form-control" id="#" placeholder="วิธีใช้..." required>
            </div>
            <div class="col-12 mb-2">
              <label for="#" class="form-label">รายละเอียด</label>
              <textarea class="form-control" aria-label="With textarea"></textarea>            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> ยกเลิก</button>
        <button type="button" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> บันทึกข้อมูล</button>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Add Vaccine -->

<!-- Modal Edit Vaccine -->
<div class="modal fade" id="editModalVaccine" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"><i class="fa-solid fa-plus"></i> แก้ไขข้อมูลยา - วัคซีน</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row form-group">
            <form action="">
              <div class="col-12 mb-2">
                <label for="#" class="form-label">ชื่อยา</label>
                <input type="text" class="form-control" id="#" value="แก้ปวด" required>
              </div>
              <div class="col-12 mb-2">
                <label for="#" class="form-label">วิธีใช้</label>
                <input type="text" class="form-control" id="#" value="รับประทานยาห่างกันอย่างน้อย 4 ชั่วโมง" required>
              </div>
              <div class="col-12 mb-2">
                <label for="#" class="form-label">รายละเอียด</label>
                <textarea class="form-control" aria-label="With textarea"></textarea>              </div>
            </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> ยกเลิก</button>
        <button type="button" class="btn btn-success"><i class="fa-solid fa-square-check"></i> อัปเดต</button>
      </div>
    </div>
  </div>
</div>
<!--End Modal Edit Vaccine -->