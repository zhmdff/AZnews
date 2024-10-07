<?php $directory = base_url('public/admin/') ?>
<?php $this->load->view('admin/includes/header') ?>
<?php $this->load->view('admin/includes/sidebar') ?>
<link rel="stylesheet" href="<?php echo $directory?>assets/css/admin_profile.css">

<div id="main">
    <div class="page-heading">
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
                        <span style="font-weight: bold; font-size: 20px">Admin Profile</span>
                        <a href="<?php echo base_url('admin_dashboard')?>"><button type="button" class="btn btn-secondary" style="float: right">Back</button></a>
                    </div>
                    <div class="card-body">
                        <div class="row gutters-sm">
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-column align-items-center text-center">
                                            <?php if ($_SESSION['admin_data']['admin_img']){ ?>
                                                <img style="border-radius: 50%" src="<?php print_r(base_url('uploads/admin_profile/'.$_SESSION['admin_data']['admin_img']))?>" height="150" width="150">
                                            <?php }else{ ?>
                                                <img style="border-radius: 50%" src="<?php print_r(base_url('uploads/user_profile/no_user.jpg'))?>" height="150" width="150">
                                            <?php } ?>
                                            <div class="mt-3">
                                                <h4><?php echo print_r($_SESSION['admin_data']['admin_fullname'], TRUE) ; ?></h4>
                                                <p class="text-secondary mb-1"><?php echo print_r($_SESSION['admin_data']['admin_username'], TRUE) ; ?></p>
                                                <?php if ($_SESSION['admin_data']['admin_status'] == 'Active'){ ?>
                                                    <p class="text-muted font-size-sm">
                                                        <span class="badge bg-success"><?php echo print_r($_SESSION['admin_data']['admin_status'], TRUE) ; ?></span>
                                                    </p>
                                                <?php }else{ ?>
                                                    <p class="text-muted font-size-sm">
                                                        <span class="badge bg-danger"><?php echo print_r($_SESSION['admin_data']['admin_status'], TRUE) ; ?></span>
                                                    </p>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-3">
                                    <ul class="list-group list-group-flush">
                                        <?php foreach ($all_data as $item){ ?>
                                        <ul class="list-group list-group-flush"">
                                        <li style="border-bottom-width: 2px!important;" class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                            <h6 class="mb-0"><?php echo $item['social_media_icon'] ?><?php echo $item['social_media_platform'] ?></h6>
                                            <span class="text-secondary"><a href="<?php echo $item['social_media_link'] ?>" target="_blank">Go</a></span>
                                        </li>
                                    </ul>
                                    <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Full Name</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <?php echo print_r($_SESSION['admin_data']['admin_fullname'], TRUE) ; ?>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Username</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <?php echo print_r($_SESSION['admin_data']['admin_username'], TRUE) ; ?>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Email</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <?php echo print_r($_SESSION['admin_data']['admin_email'], TRUE) ; ?>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Phone</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <?php echo print_r($_SESSION['admin_data']['admin_phone'], TRUE) ; ?>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Status</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <?php echo print_r($_SESSION['admin_data']['admin_status'], TRUE) ; ?>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Permission</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <?php echo print_r($_SESSION['admin_data']['admin_permission'], TRUE) ; ?>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <a class="btn btn-info" href="<?php echo base_url('admin_profile_edit/'.$_SESSION['admin_data']['admin_id']) ?>">Edit</a>
                                                <a style="float: right" class="btn btn-danger" href="<?php echo base_url('admin_profile_delete/'.$_SESSION['admin_data']['admin_id']) ?>">Delete Account</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<?php $this->load->view('admin/includes/footer') ?>
<?php $this->load->view('admin/includes/footerStyle') ?>

<script>
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1;
    var yyyy = today.getFullYear();

    if (dd < 10) {
        dd = '0' + dd;
    }

    if (mm < 10) {
        mm = '0' + mm;
    }

    today = yyyy + '-' + mm + '-' + dd;
    document.getElementById("datefield").setAttribute("max", today);
</script>
