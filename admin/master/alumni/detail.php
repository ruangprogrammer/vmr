<?php 
//error_reporting(0);
$id = $_GET['id'];
$queryRowsiswa = mysql_query("SELECT * FROM siswa where siswa_id = '".$id."'");
$rowsiswa = mysql_fetch_array($queryRowsiswa);
/*    
    if (isset($_POST['ubah'])) {  
      if (!empty($_FILES) && $_FILES['siswa_images']['size'] >0 && $_FILES['siswa_images']['error'] == 0){  
      
            $random = "vmrmekanikberdasi-siswa-".substr(number_format(time() * rand(), 0, '', ''), 0, 10);
            $images = $random . str_replace(" ", "", $_FILES['siswa_images']['name']); 

            $move = move_uploaded_file($_FILES['siswa_images']['tmp_name'],'../images/siswa/'.$images);  

            if ($move) {  
                $queryUpdate  = mysql_query("UPDATE siswa SET 
                                    siswa_code     ='".$_POST['siswa_code']."',
                                    siswa_name      = '".$_POST['siswa_name']."',
                                    siswa_images    = '".$images."',
                                    siswa_address      = '".$_POST['siswa_address']."',
                                    siswa_city    = '".$_POST['siswa_city']."'
                                    WHERE siswa_id     = '".$id."'
                                     ");
                                     //echo $sql; exit();
                $file = "assets/images/siswa/".$rowsiswa['siswa_images'];
                unlink($file);

            }

      }else{  
         $queryUpdate=mysql_query("UPDATE siswa SET 
                                    siswa_code      = '".$_POST['siswa_code']."',
                                    siswa_name      = '".$_POST['siswa_name']."',
                                    siswa_address      = '".$_POST['siswa_address']."',
                                    siswa_city       ='".$_POST['siswa_city']."'
                                    WHERE siswa_id     = '".$id."'
                                     "); 
                                           
      } 
      if ($queryUpdate) {
         echo "<script> alert('Data Berhasil diubah'); location.href='index.php?hal=master/siswa/list' </script>";exit;
      }
    }*/
 ?>
        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Edigt siswa
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                <form class="cmxform form-horizontal adminex-form" id="commentForm" method="POST" enctype="multipart/form-data"  action="">

                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-2" style="text-align: left;">Kode ID</label>
                                        <div class="col-lg-5">
                                           <?php echo $rowsiswa['siswa_code']  ?>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-2" style="text-align: left;">Name</label>
                                        <div class="col-lg-5">
                                            <?php echo $rowsiswa['siswa_name']  ?>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-2" style="text-align: left;">Foto</label>
                                        <div class="col-lg-5">
                                            <img src="../images/siswa/<?php echo $rowsiswa['siswa_images']; ?>" width="50%">
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-2" style="text-align: left;">City</label>
                                        <div class="col-lg-5">
                                           <?php echo $rowsiswa['siswa_city']  ?>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-2" style="text-align: left;">Address</label>
                                        <div class="col-lg-5">
                                           <?php echo $rowsiswa['siswa_address']; ?>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-5">
                                              <a href="../cetak/cetak-sertifikat.php?id=<?php echo $rowsiswa['siswa_id']; ?>" target='_blank'>
                                            <button class="btn btn-primary" type="button" name="ubah">
                                                <i class="fa fa-print" aria-hidden="true"></i> CETAK SERTIFIKAT</button></a>
                                                <a href="?hal=master/alumni/list">
                                            <button class="btn btn-default" type="button">Cancel</button>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!--body wrapper end-->

