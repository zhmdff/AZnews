<?php $directory = base_url('public/admin/') ?>
<?php $this->load->view('admin/includes/header') ?>
<?php $this->load->view('admin/includes/sidebar') ?>

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <?php $this->load->view('admin/includes/page_title')?>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <span style="font-weight: bold; font-size: 20px">News List</span>
                    <a href="<?php echo base_url('social_media_list')?>"><button type="button" class="btn btn-secondary" style="float: right">Back</button></a>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url('social_media_edit_act/'.$all_data['social_media_id']) ?>" method="POST">

                        <div class="input-group mb-3" style="width: 30%;float: left;margin-right: 3%">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Platform</span>
                            </div>
                            <input name="platform" type="text" class="form-control" aria-describedby="basic-addon1" value="<?php echo $all_data['social_media_platform'] ?>">
                        </div>

                        <div class="input-group mb-3" style="width: 30%;float: left;margin-right: 3%">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Link</span>
                            </div>
                            <input name="link" type="text" class="form-control" aria-describedby="basic-addon1" value="<?php echo $all_data['social_media_link'] ?>">
                        </div>

                        <div class="input-group mb-3" style="width: 30%;float: left;margin-right: 3%">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Icon</span>
                            </div>
                            <input name="icon" type="text" class="form-control" aria-describedby="basic-addon1" value='<?php echo $all_data ["social_media_icon"] ?>'>
                        </div>

                        <button type="submit" class="btn btn-success">Save</button>
                    </form>
                </div>



            </div>

        </section>
    </div>

    <?php $this->load->view('admin/includes/footer') ?>

</div>
</div>
<script src="<?php echo $directory ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?php echo $directory ?>assets/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo $directory ?>assets/vendors/simple-datatables/simple-datatables.js"></script>
<script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>

<script src="<?php echo $directory ?>assets/js/main.js"></script>
</body>

</html>