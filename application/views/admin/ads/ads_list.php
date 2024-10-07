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
                            <th>Title</th>
                            <th>Company Name</th>
                            <th>Expiration Date</th>
                            <th>Money per month ($)</th>
                            <th>Status</th>
                            <th>Location</th>
                            <th>Image</th>
                            <th>Tools</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($select_all_ads as $ads){ ?>
                            <tr>
                                <td><?php echo $ads['ads_title'] ?></td>
                                <td><?php echo $ads['ads_company_name'] ?></td>
                                <td><?php echo $ads['ads_expiration_date'] ?></td>
                                <td><?php echo $ads['ads_money'] ?></td>

                                <td>
                                    <?php if ($ads['ads_status'] == 'Active'){ ?>
                                        <span class="badge bg-success"><?php echo $ads['ads_status'] ?></span>
                                    <?php }else{ ?>
                                        <span class="badge bg-danger"><?php echo $ads['ads_status'] ?></span>
                                    <?php } ?>
                                </td>

                                <td><?php echo $ads['ads_location'] ?></td>

                                <td>
                                    <?php if ($ads['ads_img']){ ?>
                                        <img src="<?php echo base_url('uploads/adsFile/'.$ads['ads_img']) ?>" style="width: 60px ;height: 60px ;border-radius: 6px;object-fit: cover; -webkit-filter: drop-shadow(5px 5px 5px #666666);filter: drop-shadow(5px 5px 5px #666666);">
                                    <?php }else{ ?>
                                        <img width="50px" src="<?php echo base_url('public/user/assets/img/no-image.png') ?>" alt="user1" style="width: 60px ;height: 60px ;border-radius: 6px;object-fit: cover; -webkit-filter: drop-shadow(5px 5px 5px #666666);filter: drop-shadow(5px 5px 5px #666666);">
                                    <?php } ?>
                                </td>

                                <td>
                                    <a style="color: black" href="<?php echo base_url('ads_view/'.$ads['ads_id']) ?>">
                                        <i class="bi bi-eye" style="font-size: 20px"></i>
                                    </a>
                                    /
                                    <a style="color: black" href="<?php echo base_url('ads_edit/'.$ads['ads_id']) ?>">
                                        <i class="bi bi-pen" style="font-size: 20px"></i>
                                    </a>
                                    /
                                    <a onclick="return confirm('Melumat silinecek! Davam edilsin?')" style="color: black" href="<?php echo base_url('ads_delete/'.$ads['ads_id']) ?>">
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
</div>
<?php $this->load->view('admin/includes/footer') ?>
<?php $this->load->view('admin/includes/footerStyle') ?>
<script>
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>