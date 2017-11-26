<?php 
error_reporting(0);
$id = $_GET['id'];
$queryRowsptools = mysql_query("SELECT * FROM sptools where sptools_id = '".$id."'");
$rowsptools = mysql_fetch_array($queryRowsptools);
    if (isset($_POST['ubah'])) {  
      if (!empty($_FILES) && $_FILES['sptools_images']['size'] >0 && $_FILES['user_foto']['error'] == 0){  
            $random = "vmrmekanikberdasi-sptools-".substr(number_format(time() * rand(), 0, '', ''), 0, 10);
            $images = $random . str_replace(" ", "", $_FILES['sptools_images']['name']);
            $move = move_uploaded_file($_FILES['sptools_images']['tmp_name'],'../images/sptools/'.$images);  

            if ($move) {  
                $queryUpdate  = mysql_query("UPDATE sptools SET 
                                    sptools_name      = '".$_POST['sptools_name']."',
                                    sptools_desc      = '".$_POST['sptools_desc']."',
                                    sptools_images    = '".$images."'
                                    WHERE sptools_id     = '".$id."'
                                     ");
                $file = "assets/images/special_tools/".$rowsptools['sptools_images'];
                unlink($file);
                                             
            }

      }else{  
         $queryUpdate=mysql_query("UPDATE sptools SET 
                                    sptools_name      = '".$_POST['sptools_name']."',
                                    sptools_desc      = '".$_POST['sptools_desc']."'
                                    WHERE sptools_id     = '".$id."'
                                     "); 
                                    
      } 
      if ($queryUpdate) {
         echo "<script> alert('Data Berhasil diubah'); location.href='index.php?hal=master/special_tools/list' </script>";exit;
      }
    }
 ?>
        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Edigt sptools
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                <form class="cmxform form-horizontal adminex-form" id="commentForm" method="POST" enctype="multipart/form-data"  action="">

                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-2" style="text-align: left;">Nama</label>
                                        <div class="col-lg-5">
                                            <input class=" form-control" id="cname" name="sptools_name" minlength="2" type="text" value="<?php echo $rowsptools['sptools_name']  ?>" required/>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-2" style="text-align: left;">Foto</label>
                                        <div class="col-lg-5">
                                            <img src="assets/images/special_tools/<?php echo $rowsptools['sptools_images']; ?>" width="50%">
                                            <input class=" form-control" id="cname" name="sptools_images" minlength="2" type="file"/>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-2" style="text-align: left;">Deskripsi</label>
                                        <div class="col-lg-5">
                                            <textarea class="form-control " id="ccomment" name="sptools_desc" required><?php echo $rowsptools['sptools_desc']; ?></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-5">
                                            <button class="btn btn-primary" type="submit" name="ubah">UPDATE</button>
                                            <a href="?hal=master/special_tools/list">
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

