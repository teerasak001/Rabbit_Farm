<?php  

include_once('include/connect.php');

if (isset($_POST) && !empty($_POST)) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $phone = $_POST['tel'];
  $email = $_POST['email'];
  $role = $_POST['role'];

  $sql_insert = "INSERT INTO members (`username`,`password`,`tel`,`email`,`role`) VALUE ('$username','$password','$phone','$email','$role')";
  if (mysqli_query($conn,$sql_insert)) {
    echo "success";
  }else{
    echo "Error";
  }  
}
mysqli_close($conn);

?>

<!-- Table Addmin -->
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
                                    <th>ชื่อผู้ใช้</th>
                                    <th>รหัสผ่าน</th>
                                    <th>ข้อมูล</th>
                                    <th>แก้ไข</th>
                                    <th>ลบ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include_once('include/connect.php');
                                    $sql_get_data = "SELECT * FROM members";
                                    $result = mysqli_query($conn, $sql_get_data);

                                    while($row = $result->fetch_assoc()) : ?>
                                        <tr>
                                            <td><img class="img-thumbnail" src="https://ichef.bbci.co.uk/news/800/cpsprodpb/134CC/production/_125325097_roosterofredjunglefowlgettyimages.png" alt="" width="100" height="100"></td>
                                            <td><?=$row['username'];?></td>
                                            <td><?=$row['password'];?></td>
                                            <td><button data-bs-toggle="modal" data-bs-target="#infoModalAdmin" class="btn btn-sm btn-primary text-white"><i class="fa-solid fa-circle-info"></i></button></td>
                                            <td><button data-bs-toggle="modal" data-bs-target="#editModalAdmin" class="btn btn-sm btn-warning text-white"><i class="fa-solid fa-pen-to-square"></i></button></td>
                                            <td><button class="btn btn-sm btn-danger text-white"><i class="fa-solid fa-trash"></i></button></td>
                                        </tr>   
                                <?php endwhile; ?>                              
                            </tbody>
                        </table>   
                    </div>
                </div>
            </div><!--//app-card-body-->
        </div><!--//app-card-->
    </div>
</div><!--//row-->

<?php include_once('modal_admin.php'); ?>
