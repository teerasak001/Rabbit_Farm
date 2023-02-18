<!-- Modal Info Rabbit Hybrid -->
<div class="modal fade" id="infoModalRabbitHb" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"><i class="fa-solid fa-plus"></i> เพิ่มข้อมูลการผสมพันธุ์</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row form-group">
          <form action="">
            <div class="row mb-2">
              <div class="col">
                <label class="form-label">รหัสพ่อพันธุ์</label>
                <input type="text" class="form-control" value="RB01" disabled>
              </div>
              <div class="col">
                <label class="form-label">รหัสแม่พันธุ์</label>
                <input type="text" class="form-control" value="RB02" disabled>
              </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <label class="form-label">วันที่ผสมพันธุ์</label>
                    <input type="text" class="form-control" value="10-12-2019" disabled>
                </div>
                <div class="col">
                    <label class="form-label">วันคลอด</label>
                    <input type="text" class="form-control" value="10-01-2019" disabled>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <label class="form-label">สถานะ</label>
                    <input type="text" class="form-control" value="คลอดแล้ว" disabled>
                </div>
            </div>
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
<!-- End Modal Info Rabbit Hybrid -->


<!-- Modal Add Rabbit Hybrid -->
<div class="modal fade" id="addModalRabbitHb" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"><i class="fa-solid fa-plus"></i> เพิ่มข้อมูลการผสมพันธุ์</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row form-group">
          <form action="">
            <div class="row mb-2">
              <div class="col">
                <label class="form-label">รหัสพ่อพันธุ์</label>
                <input type="text" class="form-control" placeholder="รหัสพ่อพันธุ์...">
              </div>
              <div class="col">
                <label class="form-label">รหัสแม่พันธุ์</label>
                <input type="text" class="form-control" placeholder="รหัสแม่พันธุ์...">
              </div>
            </div>
            <div class="row mb-2">
              <div class="col">
                <label class="form-label">วันที่ผสมพันธุ์</label>
                <input type="date" class="form-control">
              </div>
              <div class="col">
                <label class="form-label">สถานะ</label>
                <select class="form-select" aria-label="Default select example">
                  <option selected>---</option>
                  <option value="1">คลอดแล้ว</option>
                  <option value="2">กำลังรอผล</option>
                  <option value="3">ผสมพันธุ์ไม่ติด</option>
              </select>              </div>
            </div>
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
<!-- End Modal Add Rabbit Hybrid -->

<!-- Modal Edit Rabbit Hybrid -->
<div class="modal fade" id="editModalRabbitHb" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"><i class="fa-solid fa-plus"></i> แก้ไขข้อมูลการผสมพันธุ์</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row form-group">
          <form action="">
            <div class="row mb-2">
              <div class="col">
                <label class="form-label">รหัสพ่อพันธุ์</label>
                <input type="text" class="form-control" value="RB024">
              </div>
              <div class="col">
                <label class="form-label">รหัสแม่พันธุ์</label>
                <input type="text" class="form-control" value="RB021">
              </div>
            </div>
            <div class="row mb-2">
              <div class="col">
                <label class="form-label">วันที่ผสมพันธุ์</label>
                <input type="date" class="form-control">
              </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <label class="form-label">สถานะ</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>คลอดแล้ว</option>
                        <option value="2">กำลังรอผล</option>
                        <option value="3">ผสมพันธุ์ไม่ติด</option>
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

<!-- End Modal Edit Rabbit Hybrid -->