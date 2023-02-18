<h4 class="app-page-title">
    <span class="nav-icon">
        <span><i class="fa-solid fa-pen-to-square"></i> จัดการข้อมูลการผสมพันธุ์</span>
    </span>  
</h4>
<hr class="mb-4">
<div class="row g-4 settings-section">
    <div class="col-12 col-md-12">
        <div class="app-card app-card-settings shadow-sm p-4">
            <div class="app-card-body">
                <div class=".table-responsive">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModalRabbitHb"><i class="fa-solid fa-plus"></i> เพิ่มข้อมูล</button>                    
                    <hr class="mb-3">
                    <div class="table table-borderless mb-0">
                        <table id="myTable" class="table table-bordered" style="width:100%;">
                            <thead>
                                <tr>
                                    <th>รหัสพ่อพันธุ์</th>
                                    <th>รหัสแม่พันธุ์</th>
                                    <th>สถานะ</th>
                                    <th>รายละเอียด</th>
                                    <th>แก้ไข</th>
                                    <th>ลบ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>RB07</td>
                                    <td>RB01</td>
                                    <td><span class="badge bg-success">คลอดแล้ว</span></td>
                                    <td><button data-bs-toggle="modal" data-bs-target="#infoModalRabbitHb" class="btn btn-sm btn-primary text-white"><i class="fa-solid fa-circle-info"></i></button></td>
                                    <td><button data-bs-toggle="modal" data-bs-target="#editModalRabbitHb" class="btn btn-sm btn-warning text-white"><i class="fa-solid fa-pen-to-square"></i></button></td>
                                    <td><button data-toggle="modal" class="btn btn-sm btn-danger text-white"><i class="fa-solid fa-trash"></i></button></td>
                                </tr>
                                <tr>
                                    <td>RB05</td>
                                    <td>RB02</td>
                                    <td><span class="badge bg-warning">กำลังตั้งท้อง</span></td>
                                    <td><button data-bs-toggle="modal" data-bs-target="#infoModalRabbitHb" class="btn btn-sm btn-primary text-white"><i class="fa-solid fa-circle-info"></i></button></td>
                                    <td><button data-bs-toggle="modal" data-bs-target="#editModalRabbitHb" class="btn btn-sm btn-warning text-white"><i class="fa-solid fa-pen-to-square"></i></button></td>
                                    <td><button data-toggle="modal" class="btn btn-sm btn-danger text-white"><i class="fa-solid fa-trash"></i></button></td>
                                </tr>
                                <tr>
                                    <td>RB08</td>
                                    <td>RB037</td>
                                    <td><span class="badge bg-danger">ผสมพันธุ์ไม่ติด</span></td>
                                    <td><button data-bs-toggle="modal" data-bs-target="#infoModalRabbitData" class="btn btn-sm btn-primary text-white"><i class="fa-solid fa-circle-info"></i></button></td>
                                    <td><button data-bs-toggle="modal" data-bs-target="#editModalRabbitHb" class="btn btn-sm btn-warning text-white"><i class="fa-solid fa-pen-to-square"></i></button></td>
                                    <td><button data-toggle="modal" class="btn btn-sm btn-danger text-white"><i class="fa-solid fa-trash"></i></button></td>
                                </tr>                                  
                            </tbody>
                        </table>   
                    </div>
                </div>
            </div><!--//app-card-body-->
        </div><!--//app-card-->
    </div>
</div><!--//row-->

<?php include_once('modal_rb_hb.php'); ?>
