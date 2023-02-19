<?php

    include_once('include/connect.php'); 

    if (isset($_REQUEST['btnAddModal'])) {
        try {
           $name = $_REQUEST['imgFile'];
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

?>

<h4 class="app-page-title">
    <span class="nav-icon">
        <span><i class="fa-solid fa-pen-to-square"></i> จัดการข้อมูลแอดมิน</span>
    </span>  
</h4>
<hr class="mb-4">
<div class="row g-4 settings-section">
    <div class="col-12 col-md-12">
        <div class="app-card app-card-settings shadow-sm p-4">
            <div class="app-card-body">
                <div class=".table-responsive">
                    <button data-bs-toggle="modal" data-bs-target="#addModalAdmin" class="btn btn-success"><i class="fa-solid fa-plus"></i> เพิ่มข้อมูล</button>
                    <hr class="mb-3">
                    <div class="table table-borderless mb-0">
                        <table id="myTable" class="table table-bordered" style="width:100%;">
                            <thead>
                                <tr>
                                    <th>รูปภาพ</th>
                                    <th>ชื่อผู้ใ้ช้</th>
                                    <th>รหัสผ่าน</th>
                                    <th>ข้อมูล</th>
                                    <th>แก้ไข</th>
                                    <th>ลบ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img class="img-thumbnail" src="https://ichef.bbci.co.uk/news/800/cpsprodpb/134CC/production/_125325097_roosterofredjunglefowlgettyimages.png" alt="" width="100" height="100"></td>
                                    <td>demoกำทนกำทนกำทน</td>
                                    <td>1234</td>
                                    <td><button data-bs-toggle="modal" data-bs-target="#infoModalAdmin" class="btn btn-sm btn-primary text-white"><i class="fa-solid fa-circle-info"></i></button></td>
                                    <td><button data-bs-toggle="modal" data-bs-target="#editModalAdmin" class="btn btn-sm btn-warning text-white"><i class="fa-solid fa-pen-to-square"></i></button></td>
                                    <td><button class="btn btn-sm btn-danger text-white"><i class="fa-solid fa-trash"></i></button></td>
                                </tr>
                                <tr>
                                    <td><img class="img-thumbnail" src="https://ichef.bbci.co.uk/news/800/cpsprodpb/134CC/production/_125325097_roosterofredjunglefowlgettyimages.png" alt="" width="100" height="100"></td>
                                    <td>demo</td>
                                    <td>12345</td>
                                    <td><button data-bs-toggle="modal" data-bs-target="#infoModalAdmin" class="btn btn-sm btn-primary text-white"><i class="fa-solid fa-circle-info"></i></button></td>
                                    <td><button data-bs-toggle="modal" data-bs-target="#editModalAdmin" class="btn btn-sm btn-warning text-white"><i class="fa-solid fa-pen-to-square"></i></button></td>
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

<?php include_once('modal_admin.php'); ?>
