<!-- Modal Info Rabbit Heal -->
<div class="modal fade" id="infoModalRabbitHeal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"><i class="fa-solid fa-circle-info"></i>แสดงข้อมูลการรับการรักษา</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row form-group">
          <form action="">
            <div class="row mb-2">
              <div class="col">
                <label class="form-label">รหัสกรง</label>
                <input type="text" class="form-control" value="TR01" disabled>
              </div>
              <div class="col">
                <label class="form-label">รหัสกระต่าย</label>
                <input type="text" class="form-control" value="RB02" disabled>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col">
                <label class="form-label">วันที่รักษา</label>
                <input type="text" class="form-control" value="2-12-2022" disabled>
              </div>
              <div class="col">
                <label class="form-label">ลักษณะอาการ</label>
                <input type="text" class="form-control" value="จาม" disabled>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col">
                <label class="form-label">การให้ยา</label>
                <input type="text" class="form-control" value="ให้พารา" disabled>
              </div>
              <div class="col">
                <label class="form-label">สถานะ</label>
                <input type="text" class="form-control" value="หายแล้ว" disabled>
              </div>
            </div>

          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> ปิด</button>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Info Rabbit Heal -->

<!-- Modal Add Rabbit Heal -->
<div class="modal fade" id="addModalRabbitHeal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"><i class="fa-solid fa-plus"></i> เพิ่มข้อมูลการรับการักษา</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row form-group">
          <form action="">
            <div class="row mb-2">
              <div class="col">
                <label class="form-label">รหัสกรง</label>
                <input type="text" class="form-control" placeholder="รหัสกรง">
              </div>
              <div class="col">
                <label class="form-label">รหัสกระต่าย</label>
                <input type="text" class="form-control" placeholder="รหัสกระต่าย">
              </div>
            </div>
            <div class="row mb-2">
              <div class="col">
                <label class="form-label">ลักษณะอาการ</label>
                <input type="text" class="form-control" placeholder="กรอกรายละเอียด">
              </div>
              <div class="col">
                <label class="form-label">การให้ยา</label>
                <input type="text" class="form-control" placeholder="กรอกรายละเอียด">
              </div>
            </div>
            <div class="row mb-2">
              <div class="col">
                <label class="form-label">วันที่รักษา</label>
                <input type="date" class="form-control">
              </div>
              <div class="col">
                <label class="form-label">สถานะ</label>
                <select class="form-select" aria-label="Default select example">
                <option selected>---</option>
                <option value="1">กำลังรักษา</option>
                <option value="2">หายแล้ว</option>
              </select>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> ยกเลิก</button>
        <button type="button" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i>บันทึกข้อมูล</button>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Add Rabbit Heal -->


<!-- Modal Edit Rabbit Heal -->
<div class="modal fade" id="editModalRabbitHeal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"><i class="fa-solid fa-plus"></i>แก้ไขข้อมูลการับการรักษา</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row form-group">
          <form action="">
            <div class="row mb-2">
              <div class="col">
                <label class="form-label">รหัสกรง</label>
                <input type="text" class="form-control" value="TR01">
              </div>
              <div class="col">
                <label class="form-label">รหัสกระต่าย</label>
                <input type="text" class="form-control" value="RB02">
              </div>
            </div>
            <div class="row mb-2">
              <div class="col">
                <label class="form-label">ลักษณะอาการ</label>
                <input type="text" class="form-control" value="กรอกรายละเอียด">
              </div>
              <div class="col">
                <label class="form-label">การให้ยา</label>
                <input type="text" class="form-control" value="กรอกรายละเอียด">
              </div>
            </div>
            <div class="row mb-2">
              <div class="col">
                <label class="form-label">วันที่รักษา</label>
                <input type="date" class="form-control" value="กรอกรายละเอียด">
              </div>
              <div class="col">
                <label class="form-label">สถานะ</label>
                <select class="form-select" aria-label="Default select example">
                <option selected>---</option>
                <option value="1">กำลังรักษา</option>
                <option value="2">หายแล้ว</option>
              </select>
              </div>
            </div>
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
<!-- End Modal Edit Rabbit Heal -->