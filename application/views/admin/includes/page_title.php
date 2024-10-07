<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>
                <?php if ($this->uri->segment(1) == 'admin_list'){
                    echo 'Admin List';
                }elseif ($this->uri->segment(1) == 'admin_profile'){
                    echo 'Admin Profile';
                }elseif ($this->uri->segment(1) == 'admin_profile_edit'){
                    echo 'Admin Profile Edit';
                }elseif ($this->uri->segment(1) == 'ads_add'){
                    echo 'Ads Add';
                }elseif ($this->uri->segment(1) == 'ads_edit'){
                    echo 'Ads Edit';
                }elseif ($this->uri->segment(1) == 'ads_list'){
                    echo 'Ads List';
                }elseif ($this->uri->segment(1) == 'ads_view'){
                    echo 'Ads Single';
                }elseif ($this->uri->segment(1) == 'category_list'){
                    echo 'Category List';
                }elseif ($this->uri->segment(1) == 'category_add'){
                    echo 'Category Add';
                }elseif ($this->uri->segment(1) == 'category_edit'){
                    echo 'Category Edit';
                }elseif ($this->uri->segment(1) == 'admin_contact'){
                    echo 'Contact';
                }elseif ($this->uri->segment(1) == 'admin_about_edit'){
                    echo 'About Edit';
                }elseif ($this->uri->segment(1) == 'admin_about_view'){
                    echo 'About View';
                }elseif ($this->uri->segment(1) == 'navbar_add'){
                    echo 'Navbar Add';
                }elseif ($this->uri->segment(1) == 'navbar_edit'){
                    echo 'Navbar Edit';
                }elseif ($this->uri->segment(1) == 'navbar_list'){
                    echo 'Navbar List';
                }elseif ($this->uri->segment(1) == 'news_add'){
                    echo 'News Add';
                }elseif ($this->uri->segment(1) == 'admin_news_edit'){
                    echo 'News Edit';
                }elseif ($this->uri->segment(1) == 'admin_news_list'){
                    echo 'News List';
                }elseif ($this->uri->segment(1) == 'admin_news_view'){
                    echo 'News View';
                }elseif ($this->uri->segment(1) == 'social_media_add'){
                    echo 'Social Media Add';
                }elseif ($this->uri->segment(1) == 'social_media_edit'){
                    echo 'Social Media Edit';
                }elseif ($this->uri->segment(1) == 'social_media_list'){
                    echo 'Social Media List';
                }elseif ($this->uri->segment(1) == 'user_navbar'){
                    echo 'User Navbar';
                }elseif ($this->uri->segment(1) == 'admin_footer_view'){
                    echo 'Footer View';
                }elseif ($this->uri->segment(1) == 'admin_footer_edit'){
                    echo 'Footer Edit';
                }?>
            </h3>
            <p class="text-subtitle text-muted">For user to check they list</p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('admin_dashboard')?>">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">

                        <?php if ($this->uri->segment(1) == 'admin_list'){
                            echo 'Admin List';
                        }elseif ($this->uri->segment(1) == 'admin_profile'){
                            echo 'Admin Profile';
                        }elseif ($this->uri->segment(1) == 'admin_profile_edit'){
                            echo 'Admin Profile Edit';
                        }elseif ($this->uri->segment(1) == 'ads_add'){
                            echo 'Ads Add';
                        }elseif ($this->uri->segment(1) == 'ads_edit'){
                            echo 'Ads Edit';
                        }elseif ($this->uri->segment(1) == 'ads_list'){
                            echo 'Ads List';
                        }elseif ($this->uri->segment(1) == 'ads_view'){
                            echo 'Ads Single';
                        }elseif ($this->uri->segment(1) == 'category_list'){
                            echo 'Category List';
                        }elseif ($this->uri->segment(1) == 'category_add'){
                            echo 'Category Add';
                        }elseif ($this->uri->segment(1) == 'category_edit'){
                            echo 'Category Edit';
                        }elseif ($this->uri->segment(1) == 'admin_contact'){
                            echo 'Contact';
                        }elseif ($this->uri->segment(1) == 'admin_about_edit'){
                            echo 'About Edit';
                        }elseif ($this->uri->segment(1) == 'admin_about_view'){
                            echo 'About View';
                        }elseif ($this->uri->segment(1) == 'navbar_add'){
                            echo 'Navbar Add';
                        }elseif ($this->uri->segment(1) == 'navbar_edit'){
                            echo 'Navbar Edit';
                        }elseif ($this->uri->segment(1) == 'navbar_list'){
                            echo 'Navbar List';
                        }elseif ($this->uri->segment(1) == 'news_add'){
                            echo 'News Add';
                        }elseif ($this->uri->segment(1) == 'admin_news_edit'){
                            echo 'News Edit';
                        }elseif ($this->uri->segment(1) == 'admin_news_list'){
                            echo 'News List';
                        }elseif ($this->uri->segment(1) == 'admin_news_view'){
                            echo 'News View';
                        }elseif ($this->uri->segment(1) == 'social_media_add'){
                            echo 'Social Media Add';
                        }elseif ($this->uri->segment(1) == 'social_media_edit'){
                            echo 'Social Media Edit';
                        }elseif ($this->uri->segment(1) == 'social_media_list'){
                            echo 'Social Media List';
                        }elseif ($this->uri->segment(1) == 'user_navbar'){
                            echo 'User Navbar';
                        }elseif ($this->uri->segment(1) == 'admin_footer_view'){
                            echo 'Footer View';
                        }elseif ($this->uri->segment(1) == 'admin_footer_edit'){
                            echo 'Footer Edit';
                        }?>

                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>