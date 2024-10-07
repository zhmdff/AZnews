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
                    <span style="font-weight: bold; font-size: 20px">Contact Edit</span>
                    <a href="<?php echo base_url('category_list')?>"><button type="button" class="btn btn-secondary" style="float: right">Back</button></a>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url('contact_edit_act/'.$contact_data['contact_id']) ?>" method="POST">
                        <div class="input-group mb-3" style="width: 49%;float: left;margin-right: 2%">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Name</span>
                            </div>
                            <input name="contact_name" type="text" class="form-control" aria-describedby="basic-addon1" value="<?php echo $contact_data['contact_name']?>">
                        </div>
                        <div class="input-group mb-3" style="width: 49%;float: left;">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Alt</span>
                            </div>
                            <input name="contact_alt" type="text" class="form-control" aria-describedby="basic-addon1" value="<?php echo $contact_data['contact_alt']?>">
                        </div>
                        <div class="input-group mb-3" style="width: 49%;float: left;">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Icon</span>
                            </div>
                            <input name="contact_icon" type="text" class="form-control" aria-describedby="basic-addon1" value="<?php echo $contact_data['contact_icon']?>">
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