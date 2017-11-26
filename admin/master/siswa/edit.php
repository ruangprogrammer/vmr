<?php 
//error_reporting(0);
$id = $_GET['id'];
$queryRowsiswa = mysql_query("SELECT * FROM siswa where siswa_id = '".$id."'");
$rowsiswa = mysql_fetch_array($queryRowsiswa);
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
                                    siswa_city    = '".$_POST['siswa_city']."',
                                    siswa_status     ='".$_POST['siswa_status']."'
                                    WHERE siswa_id     = '".$id."'
                                     ");
                                     //echo $sql; exit();
                $file = "../images/siswa/".$rowsiswa['siswa_images'];
                unlink($file);
                                             
            }

      }else{  
         $queryUpdate=mysql_query("UPDATE siswa SET 
                                    siswa_code      = '".$_POST['siswa_code']."',
                                    siswa_name      = '".$_POST['siswa_name']."',
                                    siswa_address      = '".$_POST['siswa_address']."',
                                    siswa_city       ='".$_POST['siswa_city']."',
                                    siswa_status     ='".$_POST['siswa_status']."'
                                    WHERE siswa_id     = '".$id."'
                                     "); 
                                     
                                    
      } 
      if ($queryUpdate) {
         echo "<script> alert('Data Berhasil diubah'); location.href='index.php?hal=master/siswa/list' </script>";exit;
      }
    }
 ?>
        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Edit Data Siswa
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                <form class="cmxform form-horizontal adminex-form" id="commentForm" method="POST" enctype="multipart/form-data"  action="">

                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-2" style="text-align: left;">No. Induk</label>
                                        <div class="col-lg-5">
                                            <input class=" form-control" id="cname" name="siswa_code" minlength="2" type="text" value="<?php echo $rowsiswa['siswa_code']  ?>" required/>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-2" style="text-align: left;">Name</label>
                                        <div class="col-lg-5">
                                            <input class=" form-control" id="cname" name="siswa_name" minlength="2" type="text" value="<?php echo $rowsiswa['siswa_name']  ?>" required/>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-2" style="text-align: left;">Foto</label>
                                        <div class="col-lg-5">
                                            <img src="../images/siswa/<?php echo $rowsiswa['siswa_images']; ?>" width="50%">
                                            <input class=" form-control" id="cname" name="siswa_images" minlength="2" type="file"/>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-2" style="text-align: left;">City</label>
                                        <div class="col-lg-5">
                                           <input class=" form-control" id="cname" name="siswa_city" minlength="2" type="text" value="<?php echo $rowsiswa['siswa_city']  ?>" required/>
                                        </div>
                                    </div>

                                     <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-2" style="text-align: left;">Status</label>
                                        <div class="col-lg-5">
                                           <select class="form-control" name="siswa_status">
                                                <?php if($rowsiswa['siswa_status'] == 'belum_lulus'){ ?>
                                                <option value="belum_lulus" selected="">BELUM LULUS</option>
                                                <option value="lulus">LULUS</option>
                                                <?php }else{ ?>
                                                <option value="belum_lulus">BELUM LULUS</option>
                                                <option value="lulus" selected="">LULUS</option>
                                                <?php } ?>
                                           </select>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-2" style="text-align: left;">Address</label>
                                        <div class="col-lg-5">
                                            <textarea class="form-control " id="ccomment" name="siswa_address" required><?php echo $rowsiswa['siswa_address']; ?></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-5">
                                            <button class="btn btn-primary" type="submit" name="ubah">UPDATE</button>
                                            <a href="?hal=master/siswa/list">
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

