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
                    <span style="font-weight: bold; font-size: 20px"><?php echo $select_single_ads['ads_company_name']; ?></span>
                    <a href="<?php echo base_url('ads_list')?>"><button type="button" class="btn btn-secondary" style="float: right">Back</button></a>
                </div>
                <div class="card-body">
                    <?php if ($select_single_ads['ads_img']){ ?>
                        <img src="<?php echo base_url('uploads/adsFile/'.$select_single_ads['ads_img']) ?>"alt="user1" style="max-width: 1000px;">
                    <?php }else{ ?>
                        <img src="<?php echo base_url('public/user/assets/img/no-image.png') ?>"alt="user1" style="max-width: 1000px;">
                    <?php } ?>
                    <br><br>
                    <span style="font-weight: bold; font-size: 20px"><?php echo $select_single_ads['ads_title']; ?></span>
                    <br><br>
                    <div style="float: left" class="col-xs-12 col-sm-2 col-md-2 col-lg-2"><?php echo $select_single_ads['ads_expiration_date']; ?></div>
                    <div style="float: left" class="col-xs-12 col-sm-2 col-md-2 col-lg-2"><?php echo $select_single_ads['ads_money']; ?></div>
                    <div style="float: left" class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                        <?php if ($select_single_ads['ads_status'] == 'Active'){ ?>
                            <span class="badge bg-success"><?php echo $select_single_ads['ads_status'] ?></span>
                        <?php }else{ ?>
                            <span class="badge bg-danger"><?php echo $select_single_ads['ads_status'] ?></span>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php $this->load->view('admin/includes/footer') ?>
<?php $this->load->view('admin/includes/footerStyle') ?>