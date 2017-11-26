<?php
if (isset($_GET['hapus'])) {
    $cekGambar = mysql_query("SELECT * FROM sptools WHERE sptools_id='".$_GET['hapus']."'");
    $data = mysql_fetch_array($cekGambar);
    if(!empty($data['sptools_images'])){
        $file = "../images/special_tools/".$data['sotools_images'];
        unlink($file);
    }
    $queryHapus = mysql_query("DELETE FROM sptools where sptools_id = '" . $_GET['hapus'] . "'");
    if ($queryHapus) {
        echo "<script> alert('Data Berhasil Dihapus'); location.href='index.php?hal=master/special_tools/list' </script>";
        exit;
    }
}
?>
<div class="wrapper">
    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    Special Tools
                    <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                        <a href="javascript:;" class="fa fa-times"></a>
                     </span>
                </header>
                <div class="panel-body">
                    <div class="adv-table editable-table ">
                        <div class="clearfix">

                            <div class="btn-group">
                                <a href="?hal=master/special_tools/add">
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
                                <th width="30%">Images</th>
                                <th width="30%">Special Tools Name</th>
                                <th>Description</th>
                                <th width="20%">Create date</th>
                                <th width="10%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $no = 0;
                            $queryPortofolio = mysql_query("SELECT * FROM sptools ORDER BY sptools_id DESC");
                            while ($rowblog = mysql_fetch_array($queryPortofolio)) {
                                ?>
                                <tr class="">
                                    <td><img src="../images/special_tools/<?php echo $rowblog['sptools_images']; ?>"
                                             width="100%"></td>
                                    <td><?php echo $rowblog['sptools_name'] ?></td>
                                    <td><?php echo substr($rowblog['sptools_desc'],0,150); ?>.....</td>
                                    <td><?php echo $rowblog['sptools_date']; ?></td>
                                    <td>
                                        <a href="?hal=master/special_tools/edit&id=<?php echo $rowblog['blog_id']; ?>">
                                            <button class="btn btn-primary" type="submit"><i class="fa fa-edit"
                                                                                             aria-hidden="true"></i>
                                                Edit
                                            </button>
                                        </a>
                                        <a href="?hal=master/special_tools/list&hapus=<?php echo $rowblog['sptools_id']; ?>">
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