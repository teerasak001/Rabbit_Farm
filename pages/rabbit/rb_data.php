<h4 class="app-page-title">
    <span class="nav-icon">
        <span><i class="fa-solid fa-pen-to-square"></i> จัดการข้อมูลกระต่าย</span>
    </span>  
</h4>
<hr class="mb-4">
<div class="row g-4 settings-section">
    <div class="col-12 col-md-12">
        <div class="app-card app-card-settings shadow-sm p-4">
            <div class="app-card-body">
                <div class=".table-responsive">
                    <button data-bs-toggle="modal" data-bs-target="#addModalRabbitData" class="btn btn-success"><i class="fa-solid fa-plus"></i> เพิ่มข้อมูล</button>
                    <hr class="mb-3">
                    <div class="table table-borderless mb-0">
                        <table id="myTable" class="table table-bordered" style="width:100%;">
                            <thead>
                                <tr>
                                    <th>รหัสกรง</th>
                                    <th>รหัสกระต่าย</th>
                                    <th>สถานะ</th>
                                    <th>ข้อมูล</th>
                                    <th>แก้ไข</th>
                                    <th>ลบ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>TR01</td>
                                    <td>RB01</td>
                                    <td><span class="badge bg-warning">พ่อพันธุ์</span></td>
                                    <td><button data-bs-toggle="modal" data-bs-target="#infoModalRabbitData" class="btn btn-sm btn-primary text-white"><i class="fa-solid fa-circle-info"></i></button></td>
                                    <td><button data-bs-toggle="modal" data-bs-target="#editModalRabbitData" class="btn btn-sm btn-warning text-white"><i class="fa-solid fa-pen-to-square"></i></button></td>
                                    <td><button class="btn btn-sm btn-danger text-white"><i class="fa-solid fa-trash"></i></button></td>
                                </tr>
                                <tr>
                                    <td>BR02</td>
                                    <td>RB02</td>
                                    <td><span class="badge bg-warning">แม่พันธุ์</span></td>
                                    <td><button data-bs-toggle="modal" data-bs-target="#infoModalRabbitData" class="btn btn-sm btn-primary text-white"><i class="fa-solid fa-circle-info"></i></button></td>
                                    <td><button data-bs-toggle="modal" data-bs-target="#editModalRabbitData" class="btn btn-sm btn-warning text-white"><i class="fa-solid fa-pen-to-square"></i></button></td>
                                    <td><button class="btn btn-sm btn-danger text-white"><i class="fa-solid fa-trash"></i></button></td>
                                </tr>
                                <tr>
                                    <td>TB02</td>
                                    <td>RB03</td>
                                    <td><span class="badge bg-success">ว่าง</span></td>
                                    <td><button data-bs-toggle="modal" data-bs-target="#infoModalRabbitData" class="btn btn-sm btn-primary text-white"><i class="fa-solid fa-circle-info"></i></button></td>
                                    <td><button data-bs-toggle="modal" data-bs-target="#editModalRabbitData" class="btn btn-sm btn-warning text-white"><i class="fa-solid fa-pen-to-square"></i></button></td>
                                    <td><button class="btn btn-sm btn-danger text-white"><i class="fa-solid fa-trash"></i></button></td>
                                </tr>                                
                            </tbody>
                        </table>   
                    </div>
                </div>
            </div><!--//app-card-body-->
        </div><!--//app-card-->
    </div>
</div><!--//row-->

<?php include_once('modal_rb_data.php'); ?>
