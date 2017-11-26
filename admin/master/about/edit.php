<?php 
error_reporting(0);
$id = $_GET['id'];
$queryRowabout = mysql_query("SELECT * FROM about where about_id = '".$id."'");
$rowabout = mysql_fetch_array($queryRowabout);
    if (isset($_POST['ubah'])) {  
      if (!empty($_FILES) && $_FILES['about_images']['size'] >0 && $_FILES['user_about']['error'] == 0){  

            $random = "vmrmekanikberdasi-about-".substr(number_format(time() * rand(), 0, '', ''), 0, 10);
            $images = $random . str_replace(" ", "", $_FILES['about_images']['name']); 

            $move = move_uploaded_file($_FILES['about_images']['tmp_name'],'../images/about/'.$images);  

            if ($move) {  
                $queryUpdate  = mysql_query("UPDATE about SET 
                                    about_name      = '".$_POST['about_name']."',
                                    about_desc      = '".$_POST['about_desc']."',
                                    about_images    = '".$images."'
                                    WHERE about_id     = '".$id."'
                                     ");
                $file = "assets/images/about/".$rowabout['about_images'];
                unlink($file);
                                             
            }

      }else{  
         $queryUpdate=mysql_query("UPDATE about SET 
                                    about_name      = '".$_POST['about_name']."',
                                    about_desc      = '".$_POST['about_desc']."'
                                    WHERE about_id     = '".$id."'
                                     "); 
                                    
      } 
      if ($queryUpdate) {
         echo "<script> alert('Data Berhasil diubah'); location.href='index.php?hal=master/about/list' </script>";exit;
      }
    }
 ?>
        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Edigt about
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                <form class="cmxform form-horizontal adminex-form" id="commentForm" method="POST" enctype="multipart/form-data"  action="">
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-2" style="text-align: left;">Nama</label>
                                        <div class="col-lg-5">
                                            <input class=" form-control" id="cname" name="about_name" minlength="2" type="text" value="<?php echo $rowabout['about_name']  ?>" required/>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-2" style="text-align: left;">Foto</label>
                                        <div class="col-lg-5">
                                            <img src="assets/images/about/<?php echo $rowabout['about_images']; ?>" width="50%">
                                            <input class=" form-control" id="cname" name="about_images" minlength="2" type="file"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-2" style="text-align: left;">Deskripsi</label>
                                        <div class="col-lg-5">
                                            <textarea class="form-control " id="ccomment" name="about_desc" required><?php echo $rowabout['about_desc']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-5">
                                            <button class="btn btn-primary" type="submit" name="ubah">UPDATE</button>
                                            <a href="?hal=master/about/list">
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

