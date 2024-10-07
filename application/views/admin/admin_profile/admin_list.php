<?php $directory = base_url('public/admin/') ?>
<?php $this->load->view('admin/includes/header') ?>
<?php $this->load->view('admin/includes/sidebar') ?>

<?php if ($_SESSION['admin_data']['admin_permission'] !== 'Owner') {
    redirect(base_url('admin_dashboard'));
} ?>


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
                    <span style="font-weight: bold; font-size: 20px">Admin List</span>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Permission</th>
                                <th>Img</th>
                                <th>Tools</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($select_all_admin as $item){ ?>
                                <tr>
                                    <td><?php echo $item['admin_fullname'] ?></td>
                                    <td><?php echo $item['admin_username'] ?></td>
                                    <td><?php echo $item['admin_email'] ?></td>
                                    <td><?php echo $item['admin_phone'] ?></td>

                                    <td>
                                        <?php if ($item['admin_status'] == 'Active'){ ?>
                                            <span class="badge bg-success"><?php echo $item['admin_status'] ?></span>
                                        <?php }else{ ?>
                                            <span class="badge bg-danger"><?php echo $item['admin_status'] ?></span>
                                        <?php } ?>
                                    </td>

                                    <td><?php echo $item['admin_permission'] ?></td>

                                    <td>
                                        <?php if ($item['admin_img']){ ?>

                                                <div class="avatar avatar-lg bg-warning me-3">
                                                    <img src="<?php echo base_url('uploads/admin_profile/'.$item['admin_img']) ?>"  alt="" style="object-fit: cover">
                                                    <span class="avatar-status <?php if ($item['admin_status'] == 'Active'){ echo 'bg-success'; }else{ echo 'bg-danger'; } ?>"></span>
                                                </div>

                                        <?php }else{ ?>
                                                <div class="avatar avatar-lg bg-warning me-3">
                                                    <img src="<?php echo base_url('public/user/assets/img/no-image.png') ?>"  alt="" style="object-fit: cover">
                                                    <span class="avatar-status <?php if ($item['admin_status'] == 'Active'){ echo 'bg-success'; }else{ echo 'bg-danger'; } ?>"></span>
                                                </div>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a style="color: black" href="<?php echo base_url('admin_profile_owner/'.$item['admin_id'])?>">
                                            <i class="bi bi-eye" style="font-size: 20px"></i>
                                        </a>
                                        /
                                        <a style="color: black" href="<?php echo base_url('admin_profile_edit_owner/'.$item['admin_id'])?>">
                                            <i class="bi bi-pen" style="font-size: 20px"></i>
                                        </a>
                                        /
                                        <a onclick="return confirm('Melumat silinecek! Davam edilsin?')" style="color: black" href="<?php echo base_url('admin_profile_delete_owner/'.$item['admin_id'])?>">
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
<?php $this->load->view('admin/includes/footerStyle') ?>
<script>
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>