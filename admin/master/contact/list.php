<?php
if (isset($_GET['hapus'])) {
   
    $queryHapus = mysql_query("DELETE FROM contact where contact_id = '" . $_GET['hapus'] . "'");
    if ($queryHapus) {
        echo "<script> alert('Data Berhasil Dihapus'); location.href='index.php?hal=master/contact/list' </script>";
        exit;
    }
}
?>
<div class="wrapper">
    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    Data Contact
                    <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                        <a href="javascript:;" class="fa fa-times"></a>
                     </span>
                </header>
                <div class="panel-body">
                    <div class="adv-table editable-table ">
                        <div class="clearfix">

                            <div class="btn-group">
                                <a href="?hal=master/contact/add">
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
                                <th>No.</th>
                                <th width="30%">Name</th>
                                <th>Description</th>
                                <th>Create date</th>
                                <th width="10%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $no = 0;
                            $querycontact = mysql_query("SELECT * FROM contact ORDER BY contact_id DESC");
                            while ($rowcontact = mysql_fetch_array($querycontact)) {
                            $no++;
                                ?>
                                <tr class="">
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $rowcontact['contact_name']; ?></td>
                                    <td><?php echo $rowcontact['contact_desc']; ?></td>
                                    <td><?php echo $rowcontact['contact_create_date']; ?></td>
                                    <td>
                                        <a href="?hal=master/contact/edit&id=<?php echo $rowcontact['contact_id']; ?>">
                                            <button class="btn btn-primary" type="submit"><i class="fa fa-edit"
                                                                                             aria-hidden="true"></i>
                                                Edit
                                            </button>
                                        </a>
                                        <a href="?hal=master/contact/list&hapus=<?php echo $rowcontact['contact_id']; ?>">
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