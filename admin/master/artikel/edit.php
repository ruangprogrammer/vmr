<?php 
error_reporting(0);
$id = $_GET['id'];
$queryRowartikel = mysql_query("SELECT * FROM artikel where artikel_id = '".$id."'");
$rowartikel = mysql_fetch_array($queryRowartikel);
    if (isset($_POST['ubah'])) {  
      if (!empty($_FILES) && $_FILES['artikel_images']['size'] >0 && $_FILES['artikel_images']['error'] == 0){  
         
          $random = "vmrmekanikberdasi-artikel-".substr(number_format(time() * rand(), 0, '', ''), 0, 10);
            $images = $random . str_replace(" ", "", $_FILES['artikel_images']['name']); 

            $move = move_uploaded_file($_FILES['artikel_images']['tmp_name'],'../images/artikel/'.$images);  

            if ($move) {  
                $queryUpdate  = mysql_query("UPDATE artikel SET 
                                    artikel_name      = '".$_POST['artikel_name']."',
                                    artikel_desc      = '".$_POST['artikel_desc']."',
                                    artikel_images    = '".$images."'
                                    WHERE artikel_id     = '".$id."'
                                     ");
                $file = "../images/artikel/".$rowartikel['artikel_images'];
                unlink($file);
                                             
            }

      }else{  
         $queryUpdate=mysql_query("UPDATE artikel SET 
                                    artikel_name      = '".$_POST['artikel_name']."',
                                    artikel_desc      = '".$_POST['artikel_desc']."'
                                    WHERE artikel_id     = '".$id."'
                                     "); 
                                    
      } 
      if ($queryUpdate) {
         echo "<script> alert('Data Berhasil diubah'); location.href='index.php?hal=master/artikel/list' </script>";exit;
      }
    }
 ?>
        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Edigt artikel
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                <form class="cmxform form-horizontal adminex-form" id="commentForm" method="POST" enctype="multipart/form-data"  action="">

                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-2" style="text-align: left;">Nama</label>
                                        <div class="col-lg-5">
                                            <input class=" form-control" id="cname" name="artikel_name" minlength="2" type="text" value="<?php echo $rowartikel['artikel_name']  ?>" required/>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-2" style="text-align: left;">Foto</label>
                                        <div class="col-lg-5">
                                            <img src="../images/artikel/<?php echo $rowartikel['artikel_images']; ?>" width="50%">
                                            <input class=" form-control" id="cname" name="artikel_images" minlength="2" type="file"/>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-2" style="text-align: left;">Deskripsi</label>
                                        <div class="col-lg-10">
                                            <textarea class="form-control ckeditor" id="ccomment" name="artikel_desc" required><?php echo $rowartikel['artikel_desc']; ?></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-5">
                                            <button class="btn btn-primary" type="submit" name="ubah">UPDATE</button>
                                            <a href="?hal=master/artikel/list">
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

