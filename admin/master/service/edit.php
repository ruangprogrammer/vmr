<?php 
error_reporting(0);
$id = $_GET['id'];
$queryRowservice = mysql_query("SELECT * FROM service where service_id = '".$id."'");
$rowservice = mysql_fetch_array($queryRowservice);
    if (isset($_POST['ubah'])) {  

      if (!empty($_FILES) && $_FILES['service_images']['size'] >0 && $_FILES['service_images']['error'] == 0){  
           
            $random = "vmrmekanikberdasi-servicer-".substr(number_format(time() * rand(), 0, '', ''), 0, 10);
            $images = $random . str_replace(" ", "", $_FILES['service_images']['name']); 

            $move = move_uploaded_file($_FILES['service_images']['tmp_name'],'../images/service/'.$images);  

            if ($move) {  
                $queryUpdate  = mysql_query("UPDATE service SET 
                                    service_name      = '".$_POST['service_name']."',
                                    service_desc      = '".$_POST['service_desc']."',
                                    service_images    = '".$images."'
                                    WHERE service_id     = '".$id."'
                                     ");
                $file = "assets/images/service/".$rowservice['service_images'];
                unlink($file);
                                             
            }

      }else{  
         $queryUpdate=mysql_query("UPDATE service SET 
                                    service_name      = '".$_POST['service_name']."',
                                    service_desc      = '".$_POST['service_desc']."'
                                    WHERE service_id     = '".$id."'
                                     "); 
                                    
      } 
      if ($queryUpdate) {
         echo "<script> alert('Data Berhasil diubah'); location.href='index.php?hal=master/service/list' </script>";exit;
      }
    }
 ?>
        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Edigt service
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                <form class="cmxform form-horizontal adminex-form" id="commentForm" method="POST" enctype="multipart/form-data"  action="">
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-2" style="text-align: left;">Nama</label>
                                        <div class="col-lg-5">
                                            <input class=" form-control" id="cname" name="service_name" minlength="2" type="text" value="<?php echo $rowservice['service_name']  ?>" required/>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-2" style="text-align: left;">Foto</label>
                                        <div class="col-lg-5">
                                            <img src="assets/images/service/<?php echo $rowservice['service_images']; ?>" width="50%">
                                            <input class=" form-control" id="cname" name="service_images" minlength="2" type="file"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-2" style="text-align: left;">Deskripsi</label>
                                        <div class="col-lg-5">
                                            <textarea class="form-control " id="ccomment" name="service_desc" required><?php echo $rowservice['service_desc']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-5">
                                            <button class="btn btn-primary" type="submit" name="ubah">UPDATE</button>
                                            <a href="?hal=master/service/list">
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

