<?php 
error_reporting(0);
$id = $_GET['id'];
$queryRowdownload = mysql_query("SELECT * FROM download where download_id = '".$id."'");
$rowdownload = mysql_fetch_array($queryRowdownload);
    if (isset($_POST['ubah'])) {  
      if (!empty($_FILES) && $_FILES['download_file']['size'] >0 && $_FILES['user_foto']['error'] == 0){  
            $random = "vmrmekanikberdasi-downlaod-".substr(number_format(time() * rand(), 0, '', ''), 0, 10);
            $images = $random . str_replace(" ", "", $_FILES['download_file']['name']); 
            $move = move_uploaded_file($_FILES['download_file']['tmp_name'],'../images/download/'.$images);  

            if ($move) {  
                $queryUpdate  = mysql_query("UPDATE download SET 
                                    download_name      = '".$_POST['download_name']."',
                                    download_desc      = '".$_POST['download_desc']."',
                                    download_file    = '".$images."'
                                    WHERE download_id     = '".$id."'
                                     ");
                $file = "../images/download/".$rowdownload['download_file'];
                unlink($file);
                                             
            }

      }else{  
         $queryUpdate=mysql_query("UPDATE download SET 
                                    download_name      = '".$_POST['download_name']."',
                                    download_desc      = '".$_POST['download_desc']."'
                                    WHERE download_id     = '".$id."'
                                     "); 
                                    
      } 
      if ($queryUpdate) {
         echo "<script> alert('Data Berhasil diubah'); location.href='index.php?hal=master/download/list' </script>";exit;
      }
    }
 ?>
        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Edigt download
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                <form class="cmxform form-horizontal adminex-form" id="commentForm" method="POST" enctype="multipart/form-data"  action="">

                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-2" style="text-align: left;">Nama</label>
                                        <div class="col-lg-5">
                                            <input class=" form-control" id="cname" name="download_name" minlength="2" type="text" value="<?php echo $rowdownload['download_name']  ?>" required/>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-2" style="text-align: left;">Foto</label>
                                        <div class="col-lg-5">
                                            <img src="assets/images/download/<?php echo $rowdownload['download_file']; ?>" width="50%">
                                            <input class=" form-control" id="cname" name="download_file" minlength="2" type="file"/>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-2" style="text-align: left;">Deskripsi</label>
                                        <div class="col-lg-5">
                                            <textarea class="form-control " id="ccomment" name="download_desc" required><?php echo $rowdownload['download_desc']; ?></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-5">
                                            <button class="btn btn-primary" type="submit" name="ubah">UPDATE</button>
                                            <a href="?hal=master/download/list">
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

