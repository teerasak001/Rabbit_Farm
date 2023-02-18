<!-- Modal Info Employee Data -->
<div class="modal fade" id="infoModalemp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"><i class="fa-solid fa-circle-info"></i> แสดงข้อมูลพนักงาน</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row form-group">
          <form action="">
            <div class="row mb-2">
              <div class="col text-center justify-content-center">
                <label class="form-label">รูปภาพ</label>
                <div class="" >
                  <img class="img-thumbnail" src="https://ichef.bbci.co.uk/news/800/cpsprodpb/134CC/production/_125325097_roosterofredjunglefowlgettyimages.png" alt="" width="100" height="100">
                </div>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col">
                <label class="form-label">ชื่อผู้ใช้</label>
                <input type="text" class="form-control" value="" disabled>
              </div>
              <div class="col">
                <label class="form-label">รหัสผ่าน</label>
                <input type="text" class="form-control" value="" disabled>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col">
                <label class="form-label">เพศ</label>
                <input type="text" class="form-control" value="" disabled>
              </div>
              <div class="col">
                <label class="form-label">อายุ</label>
                <input type="text" class="form-control" value="" disabled>
              </div>
            </div>
            <div class="row mb-2">
              <div class="col">
                <label class="form-label">วันเกิด</label>
                <input type="text" class="form-control" value="" disabled>
              </div>
              <div class="col">
                  <label class="form-label">เบอร์โทร</label>
                  <input type="email" class="form-control" value="" disabled>
                </div>
              </div>
            <div class="row mb-2">
              <div class="col">
                <label class="form-label">อีเมล</label>
                <input type="text" class="form-control" value="" disabled>
              </div>
              <div class="col">
                <label class="form-label">ที่อยู่</label>
                <input type="text" class="form-control" value="" disabled>
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
<!-- End Modal Info Employee -->

<!-- Modal Add Data Employee -->
<div class="modal fade" id="addModalemp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"><i class="fa-solid fa-plus"></i>เพิ่มข้อมูลพนักงาน</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row form-group">
          <form action="">
            <div class="row mb-2">
              <div class="col">
                <label class="form-label">รูปภาพ</label>               
                <input type="file" class="form-control" id="inputGroupFile02">
              </div>
            </div>
            <div class="row mb-2">
              <div class="col">
                <label class="form-label">ชื่อผู้ใช้</label>
                <input type="text" class="form-control" placelholder="">
              </div>
              <div class="col">
                <label class="form-label">รหัสผ่าน</label>
                <input type="text" class="form-control" placelholder="">
              </div>
              
            </div>
            <div class="row mb-2">
              <div class="col">
                <label class="form-label">เพศ</label>
                <input type="text" class="form-control" placelholder="">
              </div>
              <div class="col">
                <label class="form-label">วันเกิด</label>
                <input type="date" class="form-control">
              </div>
            </div>
            <div class="row mb-2">
              <div class="col">
                  <label class="form-label">เบอร์โทร</label>
                  <input type="email" class="form-control" placelholder="">
              </div>
                <div class="col">
                  <label class="form-label">ที่อยู่</label>
                  <textarea class="form-control" aria-label="With textarea"></textarea>
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
<!--End Modal Add Data Employee -->


<!-- Modal Edit Employee -->
<div class="modal fade" id="editModalemp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"><i class="fa-solid fa-plus"></i> แก้ไขข้อมูลพนักงาน</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row form-group">
          <form action="">
            <div class="row mb-2">
              <div class="col text-center">
                <label class="form-label">รูปภาพ</label>
                <input type="file" class="form-control" id="inputGroupFile02">
              </div>
            </div>
            <div class="row mb-2">
              <div class="col">
                <label class="form-label">ชื่อผู้ใช้</label>
                <input type="text" class="form-control" value="">
              </div>
              <div class="col">
                <label class="form-label">รหัสผ่าน</label>
                <input type="text" class="form-control" value="">
              </div>
            </div>
            <div class="row mb-2">
              <div class="col">
                <label class="form-label">เพศ</label>
                <input type="text" class="form-control" value="">
              </div>
              <div class="col">
                <label class="form-label">วันเกิด</label>
                <input type="date" class="form-control">
              </div>
            </div>
            <div class="row mb-2">
              <div class="col">
                <label class="form-label">เบอร์โทร</label>
                <input type="text" class="form-control" value="">
              </div>
              <div class="col">
                  <label class="form-label">อีเมล</label>
                  <input type="email" class="form-control" value="">
                </div>
              </div>
            <div class="row mb-2">
              <div class="col">
                <label class="form-label">ที่อยู่</label>
                <textarea class="form-control" aria-label="With textarea"></textarea>
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
<!-- End Modal Edit Data Employee -->