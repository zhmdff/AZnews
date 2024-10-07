<?php $directory = base_url('public/user/'); ?>


<style>
    .list-group-item{
        margin: 0px 2.5px;
    }

    .list-group-item a{
        color: black;
    }

    .blog_details a:hover{
        color: white!important;
    }
</style>

<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">




                    <?php foreach ($pag_news as $news){ ?>

                    <article class="blog_item">
                        <div class="blog_item_img">
                            <?php if ($news['news_file']){ ?>
                                <img style="width: 770px;height: 385px;object-fit: cover" class="img-fluid" src="<?php echo base_url('uploads/news/'.$news['news_file']); ?>" alt="">
                            <?php }else{ ?>
                                <img style="width: 770px;height: 385px;object-fit: cover" class="img-fluid" src="<?php echo base_url('public/user/assets/img/no-image.png') ?>" alt="">
                            <?php } ?>
                            <a href="<?php echo base_url('single/'.$news['news_id'])?>" class="blog_item_date">
                                <h3><?php echo $news['news_date']; ?></h3>
                            </a>
                        </div>

                        <div class="blog_details">
                            <a class="d-inline-block" href="<?php echo base_url('single/'.$news['news_id'])?>">
                                <h2><?php echo $news['news_title']?></h2>
                            </a>
                            <p>
                                <?php if(strlen($news['news_description']) >= 320){ ?>
                                    <?php echo substr($news['news_description'],0,320)."..."; ?>
                                <?php }else{ ?>
                                    <?php echo $news['news_description']; ?>
                                <?php } ?>
                            </p>
                            <ul class="blog-info-link">
                                <li><a href="<?php echo base_url('category/'.$news['news_category']) ?>"><i class="fa fa-user"></i> <?php echo $news['news_category']?></a></li>
                                <li style="float: right"><button class="btn btn-primary"><a style="color: white;text-decoration: white" href="<?php echo base_url('single/'.$news['news_id']) ?>">Read More...</a></button></li>
                            </ul>
                        </div>
                    </article>

                    <?php } ?>

                    <?php echo $pag ?>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Category</h4>
                        <ul class="list cat-list">

                            <?php foreach ($getAllCategory as $item) { ?>
                                <li>
                                    <a href="<?php echo base_url('category/'.$item['category_link'])?>" class="d-flex">
                                        <p><?php echo $item['category_name']?></p>
                                    </a>
                                </li>
                            <?php } ?>

                        </ul>
                    </aside>

                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Recent Post</h3>

                        <?php foreach ($recent_news as $item) { ?>

                            <div class="media post_item">
                                <?php if ($item['news_file']){ ?>
                                    <img class="news-img80" src="<?php echo base_url('uploads/news/'.$item['news_file']) ?>" alt="post">
                                <?php }else{ ?>
                                    <img class="news-img80" src="<?php echo base_url('public/user/assets/img/no-image.png') ?>" alt="post">
                                <?php } ?>
                                <div class="media-body">
                                    <a href="<?php echo base_url('single/'.$item['news_id'] )?>">
                                        <h3><?php echo $item['news_title'] ?></h3>
                                    </a>
                                    <p><?php echo $item['news_date'] ?></p>
                                </div>
                            </div>

                        <?php } ?>

                    </aside>

                    <div class="news-poster d-none d-lg-block" style="width: 370px; height: 625px;">
                        <?php if ($all_news_ads){ ?>
                            <img class="all-news-ads-img" src="<?php echo base_url('uploads/adsFile/'.$all_news_ads['ads_img']) ?>" alt="<?php echo $all_news_ads['ads_title']?>">
                        <?php }else{ ?>
                            <img class="all-news-ads-img" src="<?php echo base_url('public/all/your_ad_here.jpg')?>" alt="Burda sizin reklaminiz ola biler">
                        <?php } ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>