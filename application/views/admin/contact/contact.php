<?php $directory = base_url('public/admin/') ?>
<?php $this->load->view('admin/includes/header') ?>
<link rel="stylesheet" href="<?php echo $directory ?>assets/css/pages/email.css">
<?php $this->load->view('admin/includes/sidebar') ?>
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="page-heading email-application">
        <?php $this->load->view('admin/includes/page_title')?>
        <section class="section content-area-wrapper">
            <div class="sidebar-left">
                <div class="sidebar">
                    <div class="sidebar-content email-app-sidebar d-flex">
                        <!-- sidebar close icon -->
                        <span class="sidebar-close-icon">
                            <i class="bx bx-x"></i>
                        </span>
                        <!-- sidebar close icon -->
                        <div class="email-app-menu">
                            <div class="form-group form-group-compose">
                                <!-- compose button  -->
                                <a href="<?php echo base_url('contact_list')?>"><button type="button" class="btn btn-primary btn-block my-4 compose-btn">
                                    <i class="bx bx-plus"></i>
                                    Contact List
                                </button></a>
                            </div>
                            <div class="sidebar-menu-list ps">
                                <!-- sidebar menu  -->
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
                                    <!-- sidebar menu  end-->
                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                </div>
                                <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-right">
                <div class="content-overlay"></div>
                <div class="content-wrapper">
                    <div class="content-body">
                        <div class="app-content-overlay"></div>
                        <div class="email-app-area">
                            <div class="email-app-list-wrapper">
                                <div class="email-app-list">
                                    <div class="email-action">
                                        <div class="action-left d-flex align-items-center">
                                            <ul class="list-inline m-0 d-flex">
                                                <li class="list-inline-item mail-delete">
                                                    <button type="button" class="btn btn-icon action-icon" data-toggle="tooltip">
                                                    <span class="fonticon-wrap">
                                                        <svg class="bi" width="1.5em" height="1.5em" fill="currentColor">
                                                            <use xlink:href="<?php echo $directory ?>assets/vendors/bootstrap-icons/bootstrap-icons.svg#trash" />
                                                        </svg>
                                                    </span>
                                                    </button>
                                                </li>
                                                <li class="list-inline-item mail-unread">
                                                    <button type="button" class="btn btn-icon action-icon">
                                                        <span class="fonticon-wrap d-inline">
                                                            <svg class="bi" width="1.5em" height="1.5em" fill="currentColor">
                                                                <use xlink:href="<?php echo $directory ?>assets/vendors/bootstrap-icons/bootstrap-icons.svg#envelope" />
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="dropdown">
                                                        <button type="button" class="dropdown-toggle btn btn-icon action-icon" id="folder" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="fonticon-wrap">
                                                                <svg class="bi" width="1.5em" height="1.5em" fill="currentColor">
                                                                    <use xlink:href="<?php echo $directory ?>assets/vendors/bootstrap-icons/bootstrap-icons.svg#folder" />
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="folder">
                                                            <a class="dropdown-item" href="#"><i class="bx bx-edit"></i>Draft</a>
                                                            <a class="dropdown-item" href="#"><i class="bx bx-info-circle"></i>Spam</a>
                                                            <a class="dropdown-item" href="#"><i class="bx bx-trash"></i>Trash</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-icon dropdown-toggle action-icon" id="tag" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="fonticon-wrap">
                                                                <svg class="bi" width="1.5em" height="1.5em" fill="currentColor">
                                                                    <use xlink:href="<?php echo $directory ?>assets/vendors/bootstrap-icons/bootstrap-icons.svg#tag" />
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="tag">
                                                            <a href="#" class="dropdown-item align-items-center">
                                                                <span class="bullet bullet-success bullet-sm"></span>
                                                                <span>Product</span>
                                                            </a>
                                                            <a href="#" class="dropdown-item align-items-center">
                                                                <span class="bullet bullet-primary bullet-sm"></span>
                                                                <span>Work</span>
                                                            </a>
                                                            <a href="#" class="dropdown-item align-items-center">
                                                                <span class="bullet bullet-warning bullet-sm"></span>
                                                                <span>Misc</span>
                                                            </a>
                                                            <a href="#" class="dropdown-item align-items-center">
                                                                <span class="bullet bullet-danger bullet-sm"></span>
                                                                <span>Family</span>
                                                            </a>
                                                            <a href="#" class="dropdown-item align-items-center">
                                                                <span class="bullet bullet-info bullet-sm"></span>
                                                                <span> Design</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="action-right d-flex flex-grow-1 align-items-center justify-content-around">
                                            <div class="email-fixed-search flex-grow-1">
                                                <div class="sidebar-toggle d-block d-lg-none">
                                                    <i class="bx bx-menu"></i>
                                                </div>
                                                <div class="form-group position-relative  mb-0 has-icon-left">
                                                    <input type="text" class="form-control" placeholder="Search email..">
                                                    <div class="form-control-icon">
                                                        <svg class="bi" width="1.5em" height="1.5em" fill="currentColor">
                                                            <use xlink:href="<?php echo $directory ?>assets/vendors/bootstrap-icons/bootstrap-icons.svg#search" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <span class="d-none d-sm-block">1-10 of 653</span>
                                            <button class="btn btn-icon email-pagination-prev d-none d-sm-block">
                                                <svg class="bi" width="1.5em" height="1.5em" fill="currentColor">
                                                    <use xlink:href="<?php echo $directory ?>assets/vendors/bootstrap-icons/bootstrap-icons.svg#chevron-left" />
                                                </svg>
                                            </button>
                                            <button class="btn btn-icon email-pagination-next d-none d-sm-block">
                                                <svg class="bi" width="1.5em" height="1.5em" fill="currentColor">
                                                    <use xlink:href="<?php echo $directory ?>assets/vendors/bootstrap-icons/bootstrap-icons.svg#chevron-right" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="email-user-list list-group ps ps--active-y"  style="overflow-y: auto !important;">
                                        <ul class="users-list-wrapper media-list">
                                            <?php foreach ($allcontact as $contact){ ?>
                                                <a href="<?php echo base_url('admin_contact_single/'.$contact['message_id'])?>"><li class="media">
                                                    <div class="pr-50">
                                                        <div class="avatar">
                                                            <?php if ($contact['user_type'] == 'user'){ ?>
                                                                <img class="rounded-circle" src="<?php echo base_url('uploads/user_profile/').$contact['user_img'] ?>">
                                                            <?php }else{ ?>
                                                                <img class="rounded-circle" src="<?php echo base_url('uploads/user_profile/comment.png')?>">
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="user-details">
                                                            <div class="mail-items">
                                                                <?php if(strlen($contact['message_subject']) >= 120){ ?>
                                                                    <span class="list-group-item-text text-truncate"><?php echo substr($contact['message_subject'],0,120)."..."; ?></span>
                                                                <?php }else{ ?>
                                                                    <span class="list-group-item-text text-truncate"><?php echo $contact['message_subject']?></span>
                                                                <?php } ?>
                                                            </div>
                                                            <div class="mail-meta-item">
                                                                <span class="float-right">
                                                                    <span class="mail-date"><?php echo $contact['message_date']?></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="mail-message">
                                                            <?php if(strlen($contact['message']) >= 260){ ?>
                                                                <p class="list-group-item-text mb-0 truncate"><?php echo substr($contact['message'],0,260)."..."; ?></p>
                                                            <?php }else{ ?>
                                                                <p class="list-group-item-text mb-0 truncate"><?php echo $contact['message']; ?></p>
                                                            <?php } ?>
                                                            <div class="mail-meta-item">
                                                                <span class="float-right d-flex align-items-center">
                                                                    <i class="bx bx-paperclip me-3"></i>
                                                                    <span class="bullet bullet-success bullet-sm"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li></a>
                                            <?php } ?>
                                            </ul>
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