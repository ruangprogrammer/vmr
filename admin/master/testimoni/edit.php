<?php 
error_reporting(0);
$id = $_GET['id'];
$queryRowtestimoni = mysql_query("SELECT * FROM testimoni where testimoni_id = '".$id."'");
$rowtestimoni = mysql_fetch_array($queryRowtestimoni);
    if (isset($_POST['ubah'])) {   //print_r($_FILES); exit();
      if (!empty($_FILES) && $_FILES['testimoni_images']['size'] >0 && $_FILES['testimoni_images']['error'] == 0){  
            $random = substr(number_format(time() * rand(), 0, '', ''), 0, 10);
            $images = $random . str_replace(" ", "", $_FILES['testimoni_images']['name']);  // echo $images; exit();
            $move = move_uploaded_file($_FILES['testimoni_images']['tmp_name'],'../images/testimoni/'.$images);  

            if ($move) {  
                $queryUpdate  = mysql_query("UPDATE testimoni SET 
                                    testimoni_name      = '".$_POST['testimoni_name']."',
                                    testimoni_city      ='".$_POST['testimoni_city']."',
                                    testimoni_desc      = '".$_POST['testimoni_desc']."',
                                    testimoni_images    = '".$images."'
                                    WHERE testimoni_id     = '".$id."'
                                     ");
                $file = "../images/testimoni/".$rowtestimoni['testimoni_images'];
                unlink($file);
                                             
            }

      }else{  
         $queryUpdate=mysql_query("UPDATE testimoni SET 
                                    testimoni_name      = '".$_POST['testimoni_name']."',
                                    testimoni_city      = '".$_POST['testimoni_city']."',
                                    testimoni_desc      = '".$_POST['testimoni_desc']."'
                                    WHERE testimoni_id     = '".$id."'
                                     "); 
                                    
      } 
      if ($queryUpdate) {
         echo "<script> alert('Data Berhasil diubah'); location.href='index.php?hal=master/testimoni/list' </script>";exit;
      }
    }
 ?>
        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Edit testimoni
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                <form class="cmxform form-horizontal adminex-form" id="commentForm" method="POST" enctype="multipart/form-data"  action="">

                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-2" style="text-align: left;">Nama</label>
                                        <div class="col-lg-5">
                                            <input class=" form-control" id="cname" name="testimoni_name" minlength="2" type="text" value="<?php echo $rowtestimoni['testimoni_name']  ?>" required/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-2" style="text-align: left;">City</label>
                                        <div class="col-lg-5">
                                            <input class=" form-control" id="cname" name="testimoni_city" minlength="2"
                                                   type="text" value="<?php echo $rowtestimoni['testimoni_city']  ?>" required/>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-2" style="text-align: left;">Foto</label>
                                        <div class="col-lg-5">
                                            <img src="../images/testimoni/<?php echo $rowtestimoni['testimoni_images']; ?>" width="50%">
                                            <input class=" form-control" id="cname" name="testimoni_images" minlength="2" type="file"/>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-2" style="text-align: left;">Deskripsi</label>
                                        <div class="col-lg-10">
                                            <textarea class="form-control " id="ccomment" name="testimoni_desc" required><?php echo $rowtestimoni['testimoni_desc']; ?></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-5">
                                            <button class="btn btn-primary" type="submit" name="ubah">UPDATE</button>
                                            <a href="?hal=master/testimoni/list">
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

