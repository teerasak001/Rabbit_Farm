<h4 class="app-page-title">
    <span class="nav-icon">
        <span><i class="fa-solid fa-pen-to-square"></i> จัดการข้อมูลยา - วัคซีน</span>
    </span>  
</h4>
<hr class="mb-4">
<div class="row g-4 settings-section">
    <div class="col-12 col-md-12">
        <div class="app-card app-card-settings shadow-sm p-4">
            <div class="app-card-body">
                <div class=".table-responsive">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModalVaccine"><i class="fa-solid fa-plus"></i> เพิ่มข้อมูล</button>
                    <hr class="mb-3">
                    <div class="table table-borderless mb-0">
                        <table id="myTable" class="table table-bordered" style="width:100%;">
                            <thead>
                                <tr>
                                    <th>ชื่อยา</th>
                                    <th>วิธีใช้</th>
                                    <th>รายละเอียด</th>
                                    <th>แก้ไข</th>
                                    <th>ลบ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ยาแก้ปวด</td>
                                    <td>รับประทานยาห่างกันอย่างน้อย 4 ชั่วโมง</td>
                                    <td>ใช้สำหรับกระต่ายที่ปวดหัว <br> ตัวร้อน</td>
                                    <td><button data-bs-toggle="modal" data-bs-target="#editModalVaccine" class="btn btn-sm btn-warning text-white"><i class="fa-solid fa-pen-to-square"></i></button></td>
                                    <td><button class="btn btn-sm btn-danger text-white"><i class="fa-solid fa-trash"></i></button></td>
                                </tr>
                                <tr>
                                    <td>ยาแก้แพ้</td>
                                    <td>รับประทานยาห่างกันอย่างน้อย 4 ชั่วโมง</td>
                                    <td>ใช้สำหรับกระต่ายที่ปวดหัว ตัวร้อน นอนน้อย ต่อยมวย</td>
                                    <td><button data-bs-toggle="modal" data-bs-target="#editModalVaccine" class="btn btn-sm btn-warning text-white"><i class="fa-solid fa-pen-to-square"></i></button></td>
                                    <td><button class="btn btn-sm btn-danger text-white"><i class="fa-solid fa-trash"></i></bu></td>
                                </tr>                                  
                            </tbody>
                        </table>   
                    </div>
                </div>
            </div><!--//app-card-body-->
        </div><!--//app-card-->
    </div>
</div><!--//row-->

<?php include_once('modal_vaccine.php'); ?>
