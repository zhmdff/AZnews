
<section class="whats-news-area pt-50 pb-20" style="padding-top: 30px">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="trending-tittle">
                    <strong style="min-width: 200px">Category:<?php echo $this->uri->segment(2) ?></strong>
                </div>
            </div>

            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    <?php foreach ($get_category as $item){ ?>
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <?php if ($item['news_file']){ ?>
                                <img class="card-img rounded-0" src="<?php echo base_url('uploads/news/'.$item['news_file']) ?>" alt="" >
                            <?php }else{ ?>
                                <img class="card-img rounded-0" src="<?php echo base_url('public/user/assets/img/no-image.png') ?>" alt="">
                            <?php } ?>
                            <a href="<?php echo base_url('single/'.$item['news_id'])?>" class="blog_item_date">
                                <h3><?php echo $item['news_date'] ?></h3>
                            </a>
                        </div>

                        <div class="blog_details">
                            <a class="d-inline-block" href="<?php echo base_url('single/'.$item['news_id'])?>">
                                <h2><?php echo $item['news_title'] ?></h2>
                            </a>
                            <p>
                                <?php if (strlen($item['news_description']) >= 140){
                                    echo substr($item['news_description'],0,140 ).'...';
                                }else{
                                    echo $item['news_description'];
                                } ?>

                            </p>
                            <ul class="blog-info-link">
                                <li><a href="<?php echo base_url('category/'.$item['news_category']) ?>"><i class="fa fa-user"></i><?php echo $item['news_category'] ?></a></li>
                            </ul>
                        </div>
                    </article>

                    <?php } ?>

                </div>
            </div>

            <div class="col-lg-4">
                <div class="section-tittle mb-40">
                    <h3>Follow Us</h3>
                </div>
                <div class="single-follow mb-45">
                    <div class="single-box">
                        <?php foreach ($social_data as $item){ ?>
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="<?php echo $item['social_media_link'] ?>"><span style="font-size: 30px;color: black" ><?php echo $item['social_media_icon_fa'] ?></span></a>
                                </div>
                                <div class="follow-count">
                                    <span>Follow Us</span>
                                    <p><?php echo $item['social_media_platform'] ?></p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget tag_cloud_widget">
                        <h4 class="widget_title">Category</h4>
                        <ul class="list">
                            <?php foreach ($getAllCategory as $item) { ?>
                                <li>
                                    <a href="<?php echo base_url('category/'.$item['category_link'])?>"><?php echo $item['category_name']?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </aside>
                </div>

                <div class="news-poster d-none d-lg-block" style="width: 370px; height: 625px;">
                    <?php if ($category_ads){ ?>
                        <img class="ads-img" src="<?php echo base_url('uploads/adsFile/'.$category_ads['ads_img']) ?>" alt="<?php echo $category_ads['ads_title']?>">
                    <?php }else{ ?>
                        <img class="ads-img" src="<?php echo base_url('public/all/your_ad_here.jpg')?>" alt="Burda sizin reklaminiz ola biler">
                    <?php } ?>
                </div>

            </div>

        </div>
    </div>
</section>
