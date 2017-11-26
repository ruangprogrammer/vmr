<?php 
error_reporting(0);
$id = $_GET['id'];
$queryRowslide = mysql_query("SELECT * FROM slide where slide_id = '".$id."'");
$rowslide = mysql_fetch_array($queryRowslide);
    if (isset($_POST['ubah'])) {  
      if (!empty($_FILES) && $_FILES['slide_images']['size'] >0 && $_FILES['slide_images']['error'] == 0){  
             $random = "vmrmekanikberdasi-slider-".substr(number_format(time() * rand(), 0, '', ''), 0, 10);
             $images = $random . str_replace(" ", "", $_FILES['slide_images']['name']); 
            $move = move_uploaded_file($_FILES['slide_images']['tmp_name'],'../images/slide/'.$images);  

            if ($move) {  
                $queryUpdate  = mysql_query("UPDATE slide SET 
                                    slide_name      = '".$_POST['slide_name']."',
                                    slide_desc      = '".$_POST['slide_desc']."',
                                    slide_images    = '".$images."'
                                    WHERE slide_id     = '".$id."'
                                     ");
                $file = "../images/slide/".$rowslide['slide_images'];
                unlink($file);
                                             
            }

      }else{  
         $queryUpdate=mysql_query("UPDATE slide SET 
                                    slide_name      = '".$_POST['slide_name']."',
                                    slide_desc      = '".$_POST['slide_desc']."'
                                    WHERE slide_id     = '".$id."'
                                     "); 
                                    
      } 
      if ($queryUpdate) {
         echo "<script> alert('Data Berhasil diubah'); location.href='index.php?hal=master/slide/list' </script>";exit;
      }
    }
 ?>
        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           EDIT SLIDE
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                <form class="cmxform form-horizontal adminex-form" id="commentForm" method="POST" enctype="multipart/form-data"  action="">
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-2" style="text-align: left;">Nama</label>
                                        <div class="col-lg-5">
                                            <input class=" form-control" id="cname" name="slide_name" minlength="2" type="text" value="<?php echo $rowslide['slide_name']  ?>" required/>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-2" style="text-align: left;">Foto</label>
                                        <div class="col-lg-5">
                                            <img src="../images/slide/<?php echo $rowslide['slide_images']; ?>" width="50%">
                                            <input class=" form-control" id="cname" name="slide_images" minlength="2" type="file"/>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-2" style="text-align: left;">Deskripsi</label>
                                        <div class="col-lg-5">
                                            <textarea class="form-control " id="ccomment" name="slide_desc" required><?php echo $rowslide['slide_desc']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-5">
                                            <button class="btn btn-primary" type="submit" name="ubah">UPDATE</button>
                                            <a href="?hal=master/slide/list">
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

