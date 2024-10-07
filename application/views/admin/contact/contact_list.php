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
                    <span style="font-weight: bold; font-size: 20px">Ads List</span>
                    <a href="<?php echo base_url('ads_add')?>"><button class="btn btn-success" style="float: right">Add</button></a>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Alt</th>
                            <th>Icon</th>
                            <th>Tools</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($contact_data as $item){ ?>
                            <tr>
                                <td><?php echo $item['contact_name'] ?></td>
                                <td><?php echo $item['contact_alt'] ?></td>
                                <td><?php echo $item['contact_icon'] ?></td>

                                <td>
                                    <a style="color: black" href="<?php echo base_url('contact_edit/'.$item['contact_id']) ?>">
                                        <i class="bi bi-pen" style="font-size: 20px"></i>
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
<?php $this->load->view('admin/includes/footer') ?>
<?php $this->load->view('admin/includes/footerStyle') ?>
<script>
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>