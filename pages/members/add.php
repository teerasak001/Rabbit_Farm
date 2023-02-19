<?php

    // include_once('include/connect.php'); 

    // if (isset($_POST['btnAddModal'])) {
    //     try {
    //        $name = $_POST['username'];
    //        $pass = $_POST['password'];
    //        $imgFile = $_FILES['imgFile']['name'];
    //        $type = $_FILES['imgFile']['type'];
    //        $size = $_FILES['imgFile']['size'];
    //        $temp = $_FILES['imgFile']['tmp_name'];

    //        $path = "upload/" . $imgFile;

    //        if (empty($name)) {
    //             $errorMsg = "please enter name";

    //        }else if(empty($imgFile)){
    //             $errorMsg = "please select img";
    //        }else if($type == "image/jpg" || $type == "image/jpeg" || $type == "image/png"){
    //             if (!file_exists($path)) {
    //                 if ($size < 5000000) {
    //                     move_uploaded_file($temp,'upload/'.$imgFile);
    //                 }else{
    //                     $errorMsg = "you file to large";
    //                 }
    //             }else{
    //                 $errorMsg = "file assasdy exit upload";
    //             }  
    //        }else{
    //             $errorMsg = "uploads jpg png file foena";
    //        }
    //        if (!isset($errorMsg)) {
    //            $insert_stmt = $db->prepare('INSERT INTO members(img, username, password) VALUE (:img,:username,:password)');
    //            $insert_stmt->bindParam(':img', $imgFile); 
    //            $insert_stmt->bindParam(':username', $name); 
    //            $insert_stmt->bindParam(':password', $pass); 
    //            if ($insert_stmt->execute()) {
    //                 $insertMsg = "success uploads file";
    //                 header('Location: admin.php');
    //            }
    //        }

    //     } catch (PDOException $e) {
    //         $e->getMessage();
    //     }
    // }


    
?>