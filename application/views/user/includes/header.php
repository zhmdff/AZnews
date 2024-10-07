<?php $directory = base_url('public/user/'); ?>

<body>
<!--    <div id="preloader-active">-->
<!--        <div class="preloader d-flex align-items-center justify-content-center">-->
<!--            <div class="preloader-inner position-relative">-->
<!--                <div class="preloader-circle"></div>-->
<!--                <div class="preloader-img pere-text">-->
<!--                    <img src="--><?php //echo $directory ?><!--assets/img/logo/logo.png" alt="">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<header>

    <div class="header-area">
        <div class="main-header ">
            <div class="header-mid d-none d-md-block">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-3 col-lg-3 col-md-3">
                            <div class="logo">
                                <a href="<?php echo base_url('home')?>"><img src="<?php echo $directory ?>assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="header-banner f-right">
                                <?php if ($header_ads){ ?>
                                    <img style="width: 690px;height: 62px;object-fit: cover;border-radius: 10px" src="<?php echo base_url('uploads/adsFile/'.$header_ads['ads_img']) ?>" alt="<?php echo $header_ads['ads_title']?>">
                                <?php }else{ ?>
                                    <img style="width: 690px;height: 62px;object-fit: cover;border-radius: 10px" src="<?php echo base_url('public/all/your_ad_here_2.jpg')?>" alt="Burda sizin reklaminiz ola biler">
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12 col-md-12 header-flex">
                            <!-- sticky -->
                            <div class="sticky-logo">
                                <a href="<?php echo base_url('home')?>"><img src="<?php echo $directory ?>assets/img/logo/logo.png" alt=""></a>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-md-block">
                                <nav>
                                    <ul id="navigation">

                                        <?php foreach ($header_navbar as $nav){ ?>
                                        <li>
                                            <a href="<?php print_r(base_url($nav['nav_link'])) ?>">
                                                <?php print_r($nav['nav_name']); ?>
                                            </a>
                                        </li>
                                        <?php } ?>

                                        <?php if (!isset($_SESSION['user_data'])){ ?>

                                            <li style="float: right"><a href="<?php echo base_url('user_login')?>" style="font-size: 15px!important;"><i class="fas fa-user"></i> Login</a></li>

                                            <li style="float: right"><a href="<?php echo base_url('user_register')?>" style="font-size: 16px!important;"><i class="fas fa-user-plus"></i> Register</a></li>

                                        <?php }else{ ?>
                                            <li style="float: right"><a onclick="return confirm('Hesabınızdan çıxış olunacaq! Davam edilsin?')" href="<?php echo base_url('user_log_out')?>" style="font-size: 15px!important;"><i class="fas fa-sign-out-alt"> Sign Out</i></a></li>

                                            <li style="float: right"><a href="<?php echo base_url('user_profile')?>" style="font-size: 15px!important;"><i class="fas fa-user"></i> Profile</a></li>
                                        <?php } ?>

                                        <li><a href="#">Category</a>
                                            <ul class="submenu">
                                                <?php foreach ($all_category as $item){ ?>
                                                    <li><a href="<?php echo base_url('category/'.$item['category_link'])?>"><?php echo $item['category_name']?></a></li>
                                                <?php } ?>
                                            </ul>
                                        </li>



                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-md-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>

<main>