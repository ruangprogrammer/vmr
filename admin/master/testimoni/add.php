<?php
if (isset($_POST['simpan'])) {   //print_r($_FILES); exit();
   if (!empty($_FILES) && $_FILES['testimoni_images']['size'] > 0 && $_FILES['testimoni_images']['error'] == 0) { 
        $random = "vmrmekanikberdasi-testimoni-".substr(number_format(time() * rand(), 0, '', ''), 0, 10);
        $images = $random . str_replace(" ", "", $_FILES['testimoni_images']['name']); 
        $move = move_uploaded_file($_FILES['testimoni_images']['tmp_name'], '../images/testimoni/' . $images);

        if ($move) {
            $queryInsert = mysql_query("INSERT INTO testimoni SET 
                         testimoni_name='" . $_POST['testimoni_name'] . "',
                         testimoni_images ='" . $images . "',
                         testimoni_city='".$_POST['testimoni_city']."',
                         testimoni_desc='".$_POST['testimoni_desc']."',
                         testimoni_date=NOW()");
                      //   echo $sql; exit();
        } else {
            $queryInsert = mysql_query("IINSERT INTO testimoni SET 
                         testimoni_name='" . $_POST['testimoni_name'] . "',
                         testimoni_city='".$_POST['testimoni_city']."',
                         testimoni_desc='".$_POST['testimoni_desc']."',
                         testimoni_date=NOW()");
        }
    }
  //  if ($queryInsert) {
        echo "<script> alert('Data Berhasil Disimpan'); location.href='index.php?hal=master/testimoni/list' </script>";
    //    exit;
    //}
}

?>
<!--body wrapper start-->
<div class="wrapper">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    ADD TESTIMONI
                </header>
                <div class="panel-body">
                    <div class=" form">
                        <form class="cmxform form-horizontal adminex-form" method="POST" enctype="multipart/form-data"
                              action="">
                            
                            <div class="form-group ">
                                <label for="cname" class="control-label col-lg-2" style="text-align: left;">Nama</label>
                                <div class="col-lg-5">
                                    <input class=" form-control" id="cname" name="testimoni_name" minlength="2"
                                           type="text" required/>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="cname" class="control-label col-lg-2" style="text-align: left;">City</label>
                                <div class="col-lg-5">
                                    <input class=" form-control" id="cname" name="testimoni_city" minlength="2"
                                           type="text" required/>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="cname" class="control-label col-lg-2" style="text-align: left;">Foto</label>
                                <!-- master footo startv -->
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
                                                   <input type="file" name="testimoni_images" class="default">
                                                   </span>
                                            <a href="#" class="btn btn-danger fileupload-exists"
                                               data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- master foto end -->
                            </div>

                            <div class="form-group ">
                                <label for="cname" class="control-label col-lg-2" style="text-align: left;">Deskripsi</label>
                                <div class="col-lg-10">
                                    <textarea class=" form-control ckeditor" id="cname" name="testimoni_desc" ></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-primary" type="submit" name="simpan">Save</button>
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
