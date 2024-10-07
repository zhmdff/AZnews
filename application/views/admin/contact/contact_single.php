<?php $directory = base_url('public/admin/') ?>
<?php $this->load->view('admin/includes/header') ?>
<link rel="stylesheet" href="<?php echo $directory ?>assets/css/pages/email.css">
<link rel="stylesheet" href="<?php echo $directory?>assets/css/contact_single.css">
<?php $this->load->view('admin/includes/sidebar') ?>
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="page-heading email-application">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Email Application</h3>
                    <p class="text-subtitle text-muted">An application for user to check email inbox</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('admin_dashboard')?>">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Email Application</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section content-area-wrapper">
            <div class="sidebar-left">
                <div class="sidebar">
                    <div class="sidebar-content email-app-sidebar d-flex">
                        <span class="sidebar-close-icon">
                        <i class="bx bx-x"></i>
                        </span>
                        <div class="email-app-menu">
                            <div class="form-group form-group-compose">
                                <button type="button" class="btn btn-secondary btn-block my-4 compose-btn"><a class="text-white" href="<?php echo base_url('admin_contact') ?>">Back</a></button>
                            </div>
                            <div class="sidebar-menu-list ps">
                                <div class="list-group list-group-messages">
                                    <a href="#" class="list-group-item pt-0 active" id="inbox-menu">
                                        <div class="fonticon-wrap d-inline me-3">
                                            <svg class="bi" width="1.5em" height="1.5em" fill="currentColor">
                                                <use xlink:href="<?php echo $directory ?>assets/vendors/bootstrap-icons/bootstrap-icons.svg#envelope" />
                                            </svg>
                                        </div>
                                        Inbox
                                        <span class="badge badge-light-primary badge-pill badge-round float-right mt-50">5</span>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="fonticon-wrap d-inline me-3">
                                            <svg class="bi" width="1.5em" height="1.5em" fill="currentColor">
                                                <use xlink:href="<?php echo $directory ?>assets/vendors/bootstrap-icons/bootstrap-icons.svg#archive" />
                                            </svg>
                                        </div>
                                        Sent
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="fonticon-wrap d-inline me-3">
                                            <svg class="bi" width="1.5em" height="1.5em" fill="currentColor">
                                                <use xlink:href="<?php echo $directory ?>assets/vendors/bootstrap-icons/bootstrap-icons.svg#trash" />
                                            </svg>
                                        </div>
                                        Trash
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-right">
                <div class="content-overlay"></div>
                <div class="content-wrapper" >
                    <div class="content-body">
                        <div class="email-app-area" >
                            <div class="email-app-list-wrapper">
                                <div class="email-app-list">
                                    <div class="email-user-list list-group ps ps--active-y" style="overflow-y: auto !important;">
                                        <div class="preview-respond" style="margin-top: 3%;">
                                            <div class="preview-respond__head">
                                                <div class="profile-head">
                                                    <div class="profile-head__id">
                                                        <?php if ($contact_data['user_type'] == 'user'){ ?>
                                                            <img class="profile-head__avatar" src="<?php echo base_url('uploads/user_profile/').$contact_data['user_img'] ?>">
                                                        <?php }else{ ?>
                                                            <img class="profile-head__avatar" src="<?php echo base_url('uploads/user_profile/comment.png')?>">
                                                        <?php } ?>
                                                        <div>
                                                            <div class="profile-head__name"><?php echo $contact_data['user_username'] ?></div>
                                                            <div class="profile-head__mail"><?php echo $contact_data['user_email'] ?></div>
                                                        </div>
                                                    </div>
                                                    <div class="date"><?php echo $contact_data['message_date'] ?></div>
                                                </div>
                                            </div>
                                            <div class="preview-respond__content">
                                                <p class="paragraph"><?php echo $contact_data['message'] ?></p>
                                            </div>
                                        </div>
                                        <div class="no-results">
                                            <i class="bx bx-error-circle font-large-2"></i>
                                            <h5>No Items Found</h5>
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

<?php $this->load->view('admin/includes/footer') ?>
<?php $this->load->view('admin/includes/footerStyle') ?>
