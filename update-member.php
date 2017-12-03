<?php
require_once('admin/config.php');
/*
$var_id = htmlentities($_POST['']);
$var_noinduk = htmlentities($_POST['']);
$var_name = htmlentities($_POST['']);
$var_email = htmlentities($_POST['']);
$var_username = htmlentities($_POST['']);
$var_password = htmlentities($_POST['']);
$var_kota = htmlentities($_POST['']);
$var_alamat = htmlentities($_POST['']);

$sqlMember = "";

if($sqlMember == TRUE){

}else {
e


}*/
error_reporting(0);
$id = $_POST['id'];
$queryRowsiswa = mysql_query("SELECT * FROM siswa where siswa_id = '".$id."'");
$rowsiswa = mysql_fetch_array($queryRowsiswa);
//echo $rowsiswa['siswa_images']; exit();
//echo "JASHAS"; exit();



 if (!empty($_FILES) && $_FILES['siswa_images']['size'] >0 && $_FILES['siswa_images']['error'] == 0){   // echo "JASHAS"; exit();
            $random = "vmrmekanikberdasi-siswa-".substr(number_format(time() * rand(), 0, '', ''), 0, 10);
            $images = $random . str_replace(" ", "", $_FILES['siswa_images']['name']);
            $move = move_uploaded_file($_FILES['siswa_images']['tmp_name'],'images/siswa/'.$images);  

            if ($move) {  

                $queryUpdate  = mysql_query("UPDATE siswa SET 
                                    siswa_name      = '".$_POST['siswa_name']."',
                                    siswa_images    = '".$images."',
                                    siswa_address      = '".$_POST['siswa_address']."',
                                    siswa_city    = '".$_POST['siswa_city']."'
                                    WHERE siswa_id     = '".$id."'
                                     ");
                                    // echo $sql; exit();
                $file = "images/siswa/".$rowsiswa['siswa_images']; //echo $file; exit();
               // $file = "/images/siswa/vmrmekanikberdasi-siswa-2029022568foto.jpg";
                unlink($file);
                                             
            }

      }else{   
        $queryUpdate=mysql_query("UPDATE siswa SET 
                                    siswa_name      = '".$_POST['siswa_name']."',
                                    siswa_address      = '".$_POST['siswa_address']."',
                                    siswa_city       ='".$_POST['siswa_city']."'
                                    WHERE siswa_id     = '".$id."'
                                     ");
                                    // echo $sql; exit();
                                     
                                    
      } 

      if ($queryUpdate) {

         echo "<script> alert('Data Berhasil diubah'); location.href='member-edit-".$id.".html' </script>";exit;
      
      }


?>