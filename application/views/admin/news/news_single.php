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
                    <span style="font-weight: bold; font-size: 20px"><?php echo $select_single_news['news_title']; ?></span>
                    <a href="<?php echo base_url('admin_news_list')?>"><button type="button" class="btn btn-secondary" style="float: right">Back</button></a>
                </div>
                <div class="card-body">

                    <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <?php if ($select_single_news['news_file']){ ?>
                            <img src="<?php echo base_url('uploads/news/'.$select_single_news['news_file']) ?>"alt="user1" style="width: 100%;">
                        <?php }else{ ?>
                            <img src="<?php echo base_url('public/user/assets/img/no-image.png') ?>"alt="user1"  style="width: 100%;">
                        <?php } ?>
                    </div>


                    <br><br>

                    <?php if ($select_single_news['news_video_link']){ ?>
                        <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <iframe width="100%" height="500px" src="<?php echo $select_single_news['news_video_link']; ?>"></iframe>
                        </div>
                    <?php } ?>

                    <br><br>

                    <p><?php echo $select_single_news['news_description']; ?></p>

                    <br><br>

                    <div style="float: left" class="col-xs-12 col-sm-2 col-md-2 col-lg-2"><?php echo $select_single_news['news_date']; ?></div>
                    <div style="float: left" class="col-xs-12 col-sm-2 col-md-2 col-lg-2"><?php echo $select_single_news['news_category']; ?></div>
                    <div style="float: left" class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                        <?php if ($select_single_news['news_status'] == 'Active'){ ?>
                            <span class="badge bg-success"><?php echo $select_single_news['news_status'] ?></span>
                        <?php }else{ ?>
                            <span class="badge bg-danger"><?php echo $select_single_news['news_status'] ?></span>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
    </div>




<?php $this->load->view('admin/includes/footer') ?>
<?php $this->load->view('admin/includes/footerStyle') ?>