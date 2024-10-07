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
        <h3>Profile Statistics</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-9">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon red">
                                            <svg width="35px" id="Icons" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><defs><style>.cls-1{fill:#45413c;opacity:0.15;}.cls-2{fill:#bdbec0;}.cls-2,.cls-5,.cls-6{stroke:#45413c;stroke-linecap:round;stroke-linejoin:round;}.cls-3{fill:#f0f0f0;}.cls-4{fill:#e0e0e0;}.cls-5{fill:none;}.cls-6{fill:#87898c;}</style></defs><title>716-newspaper</title><g id="_Group_" data-name="&lt;Group&gt;"><ellipse id="_Ellipse_" data-name="&lt;Ellipse&gt;" class="cls-1" cx="24" cy="45.22" rx="23.13" ry="1.78"/><path class="cls-2" d="M45,12.57a1.18,1.18,0,0,0-1.19-1.18H10.62V44H42a3,3,0,0,0,3-3Z"/><path id="_Path_" data-name="&lt;Path&gt;" class="cls-3" d="M39.67,41.63A2.37,2.37,0,0,0,42,44H5.87A2.37,2.37,0,0,1,3.5,41.63V6.05A1.18,1.18,0,0,1,4.69,4.87H38.48a1.18,1.18,0,0,1,1.19,1.18Z"/><path id="_Path_2" data-name="&lt;Path&gt;" class="cls-4" d="M42,44a2.37,2.37,0,0,1-2.37-2.37v-.89H5.87A2.37,2.37,0,0,1,3.5,38.37v3.26A2.37,2.37,0,0,0,5.87,44Z"/><path id="_Path_3" data-name="&lt;Path&gt;" class="cls-5" d="M39.67,41.63A2.37,2.37,0,0,0,42,44H5.87A2.37,2.37,0,0,1,3.5,41.63V6.05A1.18,1.18,0,0,1,4.69,4.87H38.48a1.18,1.18,0,0,1,1.19,1.18Z"/><rect id="_Rectangle_" data-name="&lt;Rectangle&gt;" class="cls-6" x="7.06" y="9.02" width="28.46" height="6.52" rx="0.63" ry="0.63"/><rect id="_Rectangle_2" data-name="&lt;Rectangle&gt;" class="cls-6" x="7.65" y="19.1" width="15.42" height="15.42" rx="1.35" ry="1.35"/><line id="_Path_4" data-name="&lt;Path&gt;" class="cls-5" x1="26.63" y1="27.14" x2="35.52" y2="27.14"/><line id="_Path_5" data-name="&lt;Path&gt;" class="cls-5" x1="26.63" y1="23.46" x2="35.52" y2="23.46"/><line id="_Path_6" data-name="&lt;Path&gt;" class="cls-5" x1="26.63" y1="19.77" x2="35.52" y2="19.77"/><line id="_Path_7" data-name="&lt;Path&gt;" class="cls-5" x1="26.63" y1="30.83" x2="35.52" y2="30.83"/><line id="_Path_8" data-name="&lt;Path&gt;" class="cls-5" x1="26.63" y1="34.51" x2="35.52" y2="34.51"/><line id="_Path_9" data-name="&lt;Path&gt;" class="cls-5" x1="7.65" y1="39.26" x2="35.52" y2="39.26"/><path id="_Path_10" data-name="&lt;Path&gt;" class="cls-2" d="M18.82,28a13.43,13.43,0,0,1-1.27-4,.59.59,0,0,0-.59-.56h-2.9a.57.57,0,0,0-.58.49,18.34,18.34,0,0,1-1.23,3.74A13.34,13.34,0,0,1,7.65,33v.18A1.34,1.34,0,0,0,9,34.51H21.72a1.35,1.35,0,0,0,1.35-1.35v-1A9.31,9.31,0,0,1,18.82,28Z"/></g></svg>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">All News</h6>
                                        <h6 class="font-extrabold mb-0"><?php echo $all_news?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon blue">
                                            <i class="iconly-boldProfile"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Users</h6>
                                        <h6 class="font-extrabold mb-0"><?php echo $all_users ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon green">
                                            <i class="iconly-boldAdd-User"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Admins</h6>
                                        <h6 class="font-extrabold mb-0"><?php echo $all_admins ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon purple">
                                            <svg width="35px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" enable-background="new 0 0 48 48">
                                                <path fill="#FFA000" d="M40,12H22l-4-4H8c-2.2,0-4,1.8-4,4v8h40v-4C44,13.8,42.2,12,40,12z"/>
                                                <path fill="#FFCA28" d="M40,12H8c-2.2,0-4,1.8-4,4v20c0,2.2,1.8,4,4,4h32c2.2,0,4-1.8,4-4V16C44,13.8,42.2,12,40,12z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">All Categories</h6>
                                        <h6 class="font-extrabold mb-0"><?php echo $all_category_num ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">

                        <div class="card">
                            <div class="card-header">
                                <h4>Last Added News</h4>
                            </div>
                            <div class="card-body">
                                <div id="carouselExampleFade" class="carousel slide carousel-fade"
                                     data-bs-ride="carouselfade">
                                    <ol class="carousel-indicators">
                                        <li data-bs-target="#carouselExampleFade" data-bs-slide-to="0"
                                            class="active"></li>
                                        <li data-bs-target="#carouselExampleFade" data-bs-slide-to="1"></li>
                                        <li data-bs-target="#carouselExampleFade" data-bs-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <?php $i=0; foreach ($latest_news as $item): ?>
                                        <?php if ($i==0) {$set_ = 'active'; } else {$set_ = ''; } ?>
                                            <div class="carousel-item <?php echo $set_; ?>">
                                                <a href="<?php echo base_url('admin_news_view/'. $item['news_id'] )?>"><img src="<?php echo base_url('uploads/news/'. $item['news_file'] )?>" class="d-block w-100" alt="..."></a>
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5><?php echo $item['news_title'] ?></h5>
                                                    <p>
                                                        <?php if(strlen($item['news_description']) >= 120){ ?>
                                                            <?php echo substr($item['news_description'],0,120)."..."; ?>
                                                        <?php }else{ ?>
                                                            <?php echo $item['news_description']; ?>
                                                        <?php } ?>
                                                    </p>
                                                </div>
                                            </div>
                                        <?php $i++; endforeach ?>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button"
                                       data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleFade" role="button"
                                       data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-xl-8">
                        <div class="card">
                            <div class="card-header">
                                <h4>Latest Comments</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-lg">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Comment</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($all_comments as $item) { ?>
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-md">
                                                            <?php if ($item['comment_type'] == 'user'){ ?>
                                                                <img style="width: 32px; height: 32px; object-fit: cover;" src="<?php echo base_url('uploads/user_profile/'.$item['comment_user_img']) ?>">
                                                            <?php }else{ ?>
                                                                <img style="width: 32px; height: 32px; object-fit: cover;" src="<?php echo base_url('uploads/user_profile/comment.png')?>">
                                                            <?php } ?>
                                                        </div>
                                                        <?php if(strlen($item['comment']) >= 31){ ?>
                                                            <p class="font-bold ms-3 mb-0"><?php echo substr($item['comment_name'],0,31)."..."; ?></p>
                                                        <?php }else{ ?>
                                                            <p class="font-bold ms-3 mb-0"><?php echo $item['comment_name'] ?></p>
                                                        <?php } ?>
                                                    </div>
                                                </td>
                                                <td class="col-auto">
                                                    <?php if(strlen($item['comment']) >= 200){ ?>
                                                        <p class=" mb-0"><?php echo substr($item['comment'],0,200)."..."; ?></p>
                                                    <?php }else{ ?>
                                                        <p class=" mb-0"><?php echo $item['comment'] ?></p>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                        <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4>Active Admins</h4>
                            </div>
                            <div class="card-content pb-4">
                                <?php foreach ($active_admins as $item) { ?>
                                    <div class="recent-message d-flex px-4 py-3">
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
                                        <div class="name ms-4">
                                            <?php if(strlen($item['admin_username']) >= 25){ ?>
                                                <h5 class="mb-1"><?php echo substr($item['admin_username'],0,25)."..."; ?></h5>
                                            <?php }else{ ?>
                                                <h5 class="mb-1"><?php echo $item['admin_username']; ?></h5>
                                            <?php } ?>
                                            <?php if(strlen($item['admin_permission']) >= 25){ ?>
                                                <h6 class="text-muted mb-0"><?php echo substr($item['admin_permission'],0,25)."..."; ?></h6>
                                            <?php }else{ ?>
                                                <h6 class="text-muted mb-0"><?php echo $item['admin_permission']; ?></h6>
                                            <?php } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="card" style="height: 112px">
                    <div class="card-body py-4 px-5">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                <img src="<?php print_r(base_url('uploads/admin_profile/'.$_SESSION['admin_data']['admin_img']))?>" alt="" style="height: 50px!important; width: 50px!important; border-radius: 50%; object-fit: cover">
                            </div>
                            <a href="<?php echo base_url('admin_profile')?>">
                                <div class="ms-3 name">
                                    <h5 class="font-bold"><?php echo print_r($_SESSION['admin_data']['admin_fullname'], TRUE) ; ?></h5>
                                    <h6 class="text-muted mb-0"><?php echo print_r($_SESSION['admin_data']['admin_username'], TRUE) ; ?></h6>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Recent Messages</h4>
                    </div>
                    <div class="card-content pb-4">
                        <?php foreach ($recent_contacts as $item) { ?>

                            <div class="recent-message d-flex px-4 py-3">
                                <div class="avatar avatar-lg">
                                    <?php if ($item['user_type'] == 'user'){ ?>
                                        <img width="48px" height="48px" style="object-fit: cover" src="<?php echo base_url('uploads/user_profile/').$item['user_img'] ?>">
                                    <?php }else{ ?>
                                        <img width="48px" height="48px" style="object-fit: cover" src="<?php echo base_url('uploads/user_profile/comment.png')?>">
                                    <?php } ?>
                                </div>
                                <div class="name ms-4">

                                    <?php if(strlen($item['user_username']) >= 25){ ?>
                                        <h5 class="mb-1"><?php echo substr($item['user_username'],0,25)."..."; ?></h5>
                                    <?php }else{ ?>
                                        <h5 class="mb-1"><?php echo $item['user_username']; ?></h5>
                                    <?php } ?>

                                    <?php if(strlen($item['user_username']) >= 25){ ?>
                                        <h6 class="text-muted mb-0"><?php echo substr($item['user_email'],0,25)."..."; ?></h6>
                                    <?php }else{ ?>
                                        <h6 class="text-muted mb-0"><?php echo $item['user_email']; ?></h6>
                                    <?php } ?>

                                </div>
                            </div>

                        <?php } ?>
                        
                        <div class="px-4">
                            <a href="<?php echo base_url('admin_contact')?>">
                                <button class='btn btn-block btn-xl btn-light-primary font-bold mt-3'>See Messages</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" style="padding-bottom: 0">
                        <a href="<?php echo base_url('category_list') ?>"><h4 class="card-title">All Categories</h4></a>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <ul class="list-group">
                                <?php foreach ($all_category as $item) { ?>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><?php echo $item['category_name']?></span>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php $this->load->view('admin/includes/footer') ?>
<?php $this->load->view('admin/includes/footerStyle') ?>