<?php 
error_reporting(0);
$id = $_GET['id'];
$queryRowsupport = mysql_query("SELECT * FROM support where support_id = '".$id."'");
$rowsupport = mysql_fetch_array($queryRowsupport);
    if (isset($_POST['ubah'])) {  
      if (!empty($_FILES) && $_FILES['support_images']['size'] >0 && $_FILES['support_images']['error'] == 0){  
            $random = "vmrmekanikberdasi-supportr-".substr(number_format(time() * rand(), 0, '', ''), 0, 10);
             $images = $random . str_replace(" ", "", $_FILES['support_images']['name']); 
            $move = move_uploaded_file($_FILES['support_images']['tmp_name'],'../images/support/'.$images);  

            if ($move) {  
                $queryUpdate  = mysql_query("UPDATE support SET 
                                    support_images    = '".$images."'
                                    WHERE support_id     = '".$id."'
                                     ");
                $file = "../images/support/".$rowsupport['support_images'];
                unlink($file);
                                             
            }

      }else{  
       /*  $queryUpdate=mysql_query("UPDATE support SET 
                                    support_name      = '".$_POST['support_name']."',
                                    support_desc      = '".$_POST['support_desc']."'
                                    WHERE support_id     = '".$id."'
                                     "); */
                                    
      } 
      if ($queryUpdate) {
         echo "<script> alert('Data Berhasil diubah'); location.href='index.php?hal=master/support/list' </script>";exit;
      }
    }
 ?>
        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Edigt support
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                <form class="cmxform form-horizontal adminex-form" id="commentForm" method="POST" enctype="multipart/form-data"  action="">
                                   
<!-- 
                                   <div class="col-md-5">
                                    <div class="fileupload fileupload-new" data-provides="fileupload"><input
                                                type="hidden">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image"
                                                 alt="">
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail"
                                             style="max-width: 200px; max-height: 150px; line-height: 10px;"></div>
                                        <div>
                                                   <span class="btn btn-default btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i
                                                               class="fa fa-undo"></i> Change</span>
                                                   <input type="file" name="support_images" class="default">
                                                   </span>
                                            <a href="#" class="btn btn-danger fileupload-exists"
                                               data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
                                        </div>
                                    </div>
                                </div>
 -->
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-2" style="text-align: left;">Foto</label>
                                        <div class="col-lg-5">
                                            <img src="../images/support/<?php echo $rowsupport['support_images']; ?>" width="50%">
                                            <input class=" form-control" id="cname" name="support_images" minlength="2" type="file"/>
                                        </div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-5">
                                            <button class="btn btn-primary" type="submit" name="ubah">UPDATE</button>
                                            <a href="?hal=master/support/list">
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

