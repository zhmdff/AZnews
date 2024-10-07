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
                    <a href="<?php echo base_url('social_media_add')?>"><button class="btn btn-success" style="float: right">Add Social Media</button></a>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Link</th>
                            <th>Icon</th>
                            <th>Tools</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php foreach ($all_data as $item){ ?>
                            <tr>
                                <td><?php echo $item['social_media_platform'] ?></td>
                                <td><?php echo $item['social_media_link'] ?></td>
                                <td style="font-size: 20px"><?php echo $item['social_media_icon'] ?></td>

                                <td>
                                    <a style="color: black" href="<?php echo base_url('social_media_edit/'.$item['social_media_id'])?>">
                                        <i class="bi bi-pen" style="font-size: 20px"></i>
                                    </a>
                                    /
                                    <a onclick="return confirm('Melumat silinecek! Davam edilsin?')" style="color: black" href="<?php echo base_url('social_media_delete/'.$item['social_media_id']) ?>">
                                        <i class="bi bi-trash" style="font-size: 20px"></i>
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