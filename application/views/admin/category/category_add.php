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
                    <a href="<?php echo base_url('category_list')?>"><button type="button" class="btn btn-secondary" style="float: right">Back</button></a>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url('category_add_act') ?>" method="POST">
                        <div class="input-group mb-3" style="width: 49%;float: left;margin-right: 2%">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Name</span>
                            </div>
                            <input name="category_name" type="text" class="form-control" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3" style="width: 49%;float: left;">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Link</span>
                            </div>
                            <input name="category_link" type="text" class="form-control" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3" style="width: 49%;float: left;">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">News</span>
                            </div>
                            <input name="category_news" type="text" class="form-control" aria-describedby="basic-addon1">
                        </div>
                        <button type="submit" class="btn btn-success" style="float: right">Save</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
<?php $this->load->view('admin/includes/footer') ?>
<?php $this->load->view('admin/includes/footerStyle') ?>
<script>
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>