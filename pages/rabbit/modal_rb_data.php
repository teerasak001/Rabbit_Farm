<!-- Modal Info Rabbit Data -->
<div class="modal fade" id="infoModalRabbitData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"><i class="fa-solid fa-circle-info"></i> แสดงข้อมูลกระต่าย</h1>
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
                <label class="form-label">เพศ</label>
                <input type="text" class="form-control" value="ผู้" disabled>
              </div>
              <div class="col">
                <label class="form-label">อายุ</label>
                <input type="text" class="form-control" value="102 วัน" disabled>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col">
                <label class="form-label">วันเกิด</label>
                <input type="text" class="form-control" value="12-02-2019" disabled>
              </div>
              <div class="col">
                <label class="form-label">สถานะ</label>
                <input type="text" class="form-control" value="พ่อพันธ์ุ" disabled>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col">
                <label class="form-label">สายพันธุ์</label>
                <input type="text" class="form-control" value="กระต่ายพื้นเมือง" disabled>
              </div>
              <div class="col">
                <label class="form-label">ประเภท</label>
                <input type="text" class="form-control" value="กระต่ายเนื้อ" disabled>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col">
                <label class="form-label">รหัสพ่อพันธุ์</label>
                <input type="text" class="form-control" value="00221" disabled>
              </div>
              <div class="col">
                <label class="form-label">รหัสแม่พันธุ์</label>
                <input type="text" class="form-control" value="00021" disabled>
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
<!-- End Modal Info Rabbit Data -->

<!-- Modal Add Rabbit Data -->
<div class="modal fade" id="addModalRabbitData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"><i class="fa-solid fa-plus"></i> เพิ่มข้อมูลกระต่าย</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row form-group">
          <form action="">
            <div class="row mb-2">
              <div class="col">
                <label class="form-label">รหัสกรง</label>
                <input type="text" class="form-control">
              </div>
              <div class="col">
                <label class="form-label">รหัสกระต่าย</label>
                <input type="text" class="form-control">
              </div>
            </div>
            <div class="row mb-2">
              <div class="col">
                <label class="form-label">เพศ</label>
                <select class="form-select" aria-label="Default select example">
                  <option selected>---</option>
                  <option value="1">เพศผู้</option>
                  <option value="2">เพศเมีย</option>
                </select>
              </div>
              <div class="col">
                <label class="form-label">วันเกิด</label>
                <input type="date" class="form-control">
              </div>
            </div>
            <div class="row mb-2">
              <div class="col">
                <label class="form-label">สถานะ</label>
                <select class="form-select" aria-label="Default select example">
                  <option selected>---</option>
                  <option value="1">ว่าง</option>
                  <option value="1">พ่อพันธุ์</option>
                  <option value="2">แม่พันธุ์</option>
                </select>
              </div>
              <div class="col">
                <label class="form-label">สายพันธุ์</label>
                <select class="form-select" aria-label="Default select example">
                  <option selected>---</option>
                  <option value="1">กระต่ายพื้นเมือง</option>
                  <option value="2">พันธุ์คาลิฟอร์เนียน</option>
                  <option value="3">พันธุ์ชินชินล่า</option>
                </select>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col">
                <label class="form-label">ประเภท</label>
                <select class="form-select" aria-label="Default select example">
                  <option selected>---</option>
                  <option value="1">กระต่ายเนื้อ</option>
                  <option value="2">กระต่ายขน</option>
                  <option value="2">กระต่ายสวยงาม</option>
                </select>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col">
                <label class="form-label">รหัสพ่อพันธุ์</label>
                <input type="text" class="form-control">
              </div>
              <div class="col">
                <label class="form-label">รหัสแม่พันธุ์</label>
                <input type="text" class="form-control">
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
<!-- End Modal Add Rabbit Data -->


<!-- Modal Edit Rabbit Data -->
<div class="modal fade" id="editModalRabbitData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"><i class="fa-solid fa-plus"></i> แก้ไขข้อมูลกระต่าย</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row form-group">
            <form action="">
              <div class="row mb-2">
                <div class="col">
                  <label class="form-label">รหัสกรง</label>
                  <input type="text" class="form-control" value="">
                </div>
                <div class="col">
                  <label class="form-label">รหัสกระต่าย</label>
                  <input type="text" class="form-control" value="">
                </div>
              </div>
              <div class="row mb-2">
                <div class="col">
                  <label class="form-label">เพศ</label>
                  <input type="text" class="form-control" value="">
                </div>
                <div class="col">
                  <label class="form-label">อายุ</label>
                  <input type="text" class="form-control" value="">
                </div>
              </div>
              <div class="row mb-2">
                <div class="col">
                  <label class="form-label">วันเกิด</label>
                  <input type="date" class="form-control">
                </div>
                <div class="col">
                  <label class="form-label">สถานะ</label>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>คลอดแล้ว</option>
                    <option value="2">ผสมพันธุ์ติด</option>
                    <option value="3">ผสมพันธุ์ไม่ติด</option>
                </select>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col">
                  <label class="form-label">สายพันธุ์</label>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>กระต่ายพื้นเมือง</option>
                    <option value="2">พันธุ์คาลิฟอร์เนียน</option>
                    <option value="3">พันธุ์ชินชินล่า</option>
                  </select>
                </div>
                <div class="col">
                  <label class="form-label">ประเภท</label>
                  <select class="form-select" aria-label="Default select example">
                    <option selected>กระต่ายเนื้อ</option>
                    <option value="2">กระต่ายขน</option>
                    <option value="2">กระต่ายสวยงาม</option>
                </select>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col">
                  <label class="form-label">รหัสพ่อพันธุ์</label>
                  <input type="text" class="form-control">
                </div>
                <div class="col">
                  <label class="form-label">รหัสแม่พันธุ์</label>
                  <input type="text" class="form-control">
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
<!-- End Modal Edit Rabbit Data -->

