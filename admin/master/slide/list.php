<?php
if (isset($_GET['hapus'])) {
    $cekGambar = mysql_query("SELECT * FROM slide WHERE slide_id='".$_GET['hapus']."'");
    $data = mysql_fetch_array($cekGambar);
    if(!empty($data['slide_images'])){
        $file = "assets/images/slide/".$data['slide_images'];
        unlink($file);
    }
    $queryHapus = mysql_query("DELETE FROM slide where slide_id = '" . $_GET['hapus'] . "'");
    if ($queryHapus) {
        echo "<script> alert('Data Berhasil Dihapus'); location.href='index.php?hal=master/slide/list' </script>";
        exit;
    }
}
?>
<div class="wrapper">
    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    Data slide
                    <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                        <a href="javascript:;" class="fa fa-times"></a>
                     </span>
                </header>
                <div class="panel-body">
                    <div class="adv-table editable-table ">
                        <div class="clearfix">

                            <div class="btn-group">
                                <a href="?hal=master/slide/add">
                                    <button data-toggle="modal" class="btn btn-primary">
                                        Add New <i class="fa fa-plus"></i>
                                    </button>
                                </a>
                            </div>

                            <div class="btn-group pull-right">
                            </div>
                        </div>
                        <div class="space15"></div>
                        <table class="table table-striped table-hover table-bordered" id="editable-sample">
                            <thead>
                            <tr>
                                <th width="300px">Images</th>
                                <th width="30%">slide Name</th>
                                <th>Description</th>
                                <th width="10%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $no = 0;
                            $queryPortofolio = mysql_query("SELECT * FROM slide ORDER BY slide_id DESC");
                            while ($rowslide = mysql_fetch_array($queryPortofolio)) {
                                ?>
                                <tr class="">
                                    <td><img src="../images/slide/<?php echo $rowslide['slide_images']; ?>"
                                             width="100%"></td>
                                    <td><?php echo $rowslide['slide_name'] ?></td>
                                    <td><?php echo $rowslide['slide_desc']; ?></td>
                                    <td>
                                        <a href="?hal=master/slide/edit&id=<?php echo $rowslide['slide_id']; ?>">
                                            <button class="btn btn-primary" type="submit"><i class="fa fa-edit"
                                                                                             aria-hidden="true"></i>
                                                Edit
                                            </button>
                                        </a>
                                        <a href="?hal=master/slide/list&hapus=<?php echo $rowslide['slide_id']; ?>">
                                        <button class="btn btn-danger" type="submit" name="hapus"><i
                                                        class="fa fa-trash-o"></i> Delete
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>