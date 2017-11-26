<?php 
error_reporting(0);
$id = $_GET['id'];
$queryRowpaket_kursus = mysql_query("SELECT * FROM paket_kursus where paket_kursus_id = '".$id."'");
$rowpaket_kursus = mysql_fetch_array($queryRowpaket_kursus);
    if (isset($_POST['ubah'])) {  
      if (!empty($_FILES) && $_FILES['paket_kursus_images']['size'] >0 && $_FILES['paket_kursus_images']['error'] == 0){  
            $random = "vmrmekanikberdasi-biaya-".substr(number_format(time() * rand(), 0, '', ''), 0, 10);
            $images = $random . str_replace(" ", "", $_FILES['paket_kursus_images']['name']); 
            $move = move_uploaded_file($_FILES['paket_kursus_images']['tmp_name'],'../images/paket_kursus/'.$images);  

            if ($move) {  
                $queryUpdate  = mysql_query("UPDATE paket_kursus SET 
                                    paket_kursus_name      = '".$_POST['paket_kursus_name']."',
                                    paket_kursus_desc      = '".$_POST['paket_kursus_desc']."',
                                    paket_kursus_images    = '".$images."'
                                    WHERE paket_kursus_id     = '".$id."'
                                     ");
                $file = "../images/paket_kursus/".$rowpaket_kursus['paket_kursus_images'];
                unlink($file);
                                             
            }

      }else{  
         $queryUpdate=mysql_query("UPDATE paket_kursus SET 
                                    paket_kursus_name      = '".$_POST['paket_kursus_name']."',
                                    paket_kursus_desc      = '".$_POST['paket_kursus_desc']."'
                                    WHERE paket_kursus_id     = '".$id."'
                                     "); 
                                    
      } 
      if ($queryUpdate) {
         echo "<script> alert('Data Berhasil diubah'); location.href='index.php?hal=master/paket_kursus/list' </script>";exit;
      }
    }
 ?>
        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Edigt paket_kursus
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                <form class="cmxform form-horizontal adminex-form" id="commentForm" method="POST" enctype="multipart/form-data"  action="">

                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-2" style="text-align: left;">Nama</label>
                                        <div class="col-lg-5">
                                            <input class=" form-control" id="cname" name="paket_kursus_name"  type="text" value="<?php echo $rowpaket_kursus['paket_kursus_name']  ?>" required/>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-2" style="text-align: left;">Foto</label>
                                        <div class="col-lg-5">
                                            <img src="../images/paket_kursus/<?php echo $rowpaket_kursus['paket_kursus_images']; ?>" width="50%">
                                            <input class=" form-control" id="cname" name="paket_kursus_images" minlength="2" type="file"/>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-2" style="text-align: left;">Harga</label>
                                        <div class="col-lg-5">
                                            <input class="form-control" id="cname" name="paket_kursus_price"  type="text" value="<?php echo $rowpaket_kursus['paket_kursus_price']  ?>" required="" />
                                        </div>
                                    </div>
                                    
                                    <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-2" style="text-align: left;">Deskripsi</label>
                                        <div class="col-lg-10">
                                            <textarea class="form-control ckeditor" id="ccomment" name="paket_kursus_desc" required><?php echo $rowpaket_kursus['paket_kursus_desc']; ?></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-5">
                                            <button class="btn btn-primary" type="submit" name="ubah">UPDATE</button>
                                            <a href="?hal=master/paket_kursus/list">
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

