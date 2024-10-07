<?php $directory = base_url('public/admin/') ?>
<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex">
                <div class="logo">
                    <img src="<?php print_r(base_url('uploads/admin_profile/'.$_SESSION['admin_data']['admin_img']))?>" alt="" style="height: 50px!important; width: 50px!important; border-radius: 50%; object-fit: cover">
                    <span style="font-size: 20px"><?php echo print_r($_SESSION['admin_data']['admin_username'], TRUE) ; ?></span>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>
                <li class="sidebar-item <?php if ($this->uri->segment(1) == 'admin_dashboard'){echo 'active';} ?>">
                    <a href="<?php echo base_url('admin_dashboard'); ?>" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item <?php if ($this->uri->segment(1) == 'admin_news_list'){echo 'active';} ?>">
                    <a href="<?php echo base_url('admin_news_list'); ?>" class='sidebar-link'>
                        <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                        <span>News</span>
                    </a>
                </li>
                <li class="sidebar-item <?php if ($this->uri->segment(1) == 'ads_list'){echo 'active';} ?>">
                    <a href="<?php echo base_url('ads_list'); ?>" class='sidebar-link'>
                        <i class="bi bi-badge-ad-fill"></i>
                        <span>Ads</span>
                    </a>
                </li>
                <li class="sidebar-item <?php if ($this->uri->segment(1) == 'navbar_list'){echo 'active';} ?>">
                    <a href="<?php echo base_url('navbar_list'); ?>" class='sidebar-link'>
                        <i class="bi bi-columns"></i>
                        <span>Navbar</span>
                    </a>
                </li>
                <li class="sidebar-item <?php if ($this->uri->segment(1) == 'category_list'){echo 'active';} ?>">
                    <a href="<?php echo base_url('category_list'); ?>" class='sidebar-link'>
                        <i class="bi bi-folder"></i>
                        <span>Category</span>
                    </a>
                </li>
                <li class="sidebar-item <?php if ($this->uri->segment(1) == 'social_media_list'){echo 'active';} ?>">
                    <a href="<?php echo base_url('social_media_list'); ?>" class='sidebar-link'>
                        <i class="bi bi-hash"></i>
                        <span>Social Media</span>
                    </a>
                </li>
                <li class="sidebar-item <?php if ($this->uri->segment(1) == 'admin_about_view'){echo 'active';} ?>">
                    <a href="<?php echo base_url('admin_about_view'); ?>" class='sidebar-link'>
                        <i class="bi bi-blockquote-left"></i>
                        <span>About</span>
                    </a>
                </li>
                <li class="sidebar-item <?php if ($this->uri->segment(1) == 'admin_contact'){echo 'active';} ?>">
                    <a href="<?php echo base_url('admin_contact'); ?>" class='sidebar-link'>
                        <i class="bi bi-envelope"></i>
                        <span>Contact</span>
                    </a>
                </li>
                <li class="sidebar-item <?php if ($this->uri->segment(1) == 'admin_footer_view'){echo 'active';} ?>">
                    <a href="<?php echo base_url('admin_footer_view'); ?>" class='sidebar-link'>
                        <i class="bi bi-layer-backward"></i>
                        <span>Footer</span>
                    </a>
                </li>



                <li class="sidebar-title">Accaunt Settings</li>
                <?php if ($_SESSION['admin_data']['admin_permission'] == 'Owner'){ ?>
                    <li class="sidebar-item <?php if ($this->uri->segment(1) == 'admin_list'){echo 'active';} ?>">
                        <a href="<?php echo base_url('admin_list')?>" class='sidebar-link'>
                            <i class="bi bi-person-lines-fill"></i>
                            <span>Admin List</span>
                        </a>
                    </li>
                <?php } ?>
                <li class="sidebar-item <?php if ($this->uri->segment(1) == 'admin_profile'){echo 'active';} ?>">
                    <a href="<?php echo base_url('admin_profile')?>" class='sidebar-link'>
                        <i class="bi bi-person-fill"></i>
                        <span>Admin Profile</span>
                    </a>
                </li>
                <li class="sidebar-item <?php if ($this->uri->segment(1) == 'admin_ads_add'){echo 'active';} ?>">
                    <a onclick="return confirm('Hesabınızdan çıxış olunacaq! Davam edilsin?')" href="<?php echo base_url('admin_log_out')?>" class='sidebar-link'>
                        <i style="font-size: 20px;position: relative; bottom: 2px" class="bi bi-box-arrow-right"></i>
                        <span>Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>