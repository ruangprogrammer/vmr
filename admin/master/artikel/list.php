<?php
if (isset($_GET['hapus'])) {
    $cekGambar = mysql_query("SELECT * FROM artikel WHERE artikel_id='".$_GET['hapus']."'");
    $data = mysql_fetch_array($cekGambar);
    if(!empty($data['artikel_images'])){
        $file = "../images/artikel/".$data['artikel_images'];
        unlink($file);
    }
    $queryHapus = mysql_query("DELETE FROM artikel where artikel_id = '" . $_GET['hapus'] . "'");
    if ($queryHapus) {
        echo "<script> alert('Data Berhasil Dihapus'); location.href='index.php?hal=master/artikel/list' </script>";
        exit;
    }
}
?>
<div class="wrapper">
    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    Data artikel
                    <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                        <a href="javascript:;" class="fa fa-times"></a>
                     </span>
                </header>
                <div class="panel-body">
                    <div class="adv-table editable-table ">
                        <div class="clearfix">

                            <div class="btn-group">
                                <a href="?hal=master/artikel/add">
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
                                <th width="30%">artikel Name</th>
                                <th>Description</th>
                                <th width="20%">Create date</th>
                                <th width="10%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $no = 0;
                            $queryPortofolio = mysql_query("SELECT * FROM artikel ORDER BY artikel_id DESC");
                            while ($rowartikel = mysql_fetch_array($queryPortofolio)) {
                                ?>
                                <tr class="">
                                    <td><img src="../images/artikel/<?php echo $rowartikel['artikel_images']; ?>"
                                             width="100%"></td>
                                    <td><?php echo $rowartikel['artikel_name'] ?></td>
                                    <td><?php echo substr(htmlentities($rowartikel['artikel_desc']),0,150); ?>.....</td>
                                    <td><?php echo $rowartikel['artikel_date']; ?></td>
                                    <td>
                                        <a href="?hal=master/artikel/edit&id=<?php echo $rowartikel['artikel_id']; ?>">
                                            <button class="btn btn-primary" type="submit"><i class="fa fa-edit"
                                                                                             aria-hidden="true"></i>
                                                Edit
                                            </button>
                                        </a>
                                        <a href="?hal=master/artikel/list&hapus=<?php echo $rowartikel['artikel_id']; ?>">
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