<?php $directory = base_url('public/user/'); ?>


    <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="trending-tittle">
                            <strong>Trending now</strong>
                            <div class="trending-animated">
                                <ul id="js-news" class="js-hidden">

                                    <?php foreach ($getAllTitles as $news){ ?>
                                        <li class="news-item"><?php echo $news['news_title']?></li>
                                    <?php } ?>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="trending-top mb-30">
                            <div class="trend-top-img">
                                <?php if ($getNewestData['news_file']){ ?>
                                    <img style="height: 450px;width: 770px; border-radius: 5px;object-fit: cover" src="<?php echo base_url('uploads/news/'.$getNewestData['news_file']) ?>" alt="" >
                                <?php }else{ ?>
                                    <img width="770px" src="<?php echo base_url('public/user/assets/img/no-image.png') ?>" alt="">
                                <?php } ?>
                                <div class="trend-top-cap">
                                    <span><a style="text-decoration: none;color: black" href=""><?php echo $getNewestData['news_category']; ?></a></span>
                                    <h2><a href="<?php echo base_url('single/'.$getNewestData['news_id']) ; ?>"><?php echo $getNewestData['news_title']; ?></a></h2>
                                </div>
                            </div>
                        </div>
                        <div class="trending-bottom">
                            <div class="row">


                                <?php foreach ($getAllData as $news){ ?>
                                    <div class="col-lg-4">
                                        <div class="single-bottom mb-35">
                                            <div class="trend-bottom-img mb-30">
                                                <?php if ($news['news_file']){ ?>
                                                    <a href="<?php echo base_url('single/'.$news['news_id'])?>"><img style="height: 158px;width: 100%; border-radius: 5px;object-fit: cover" src="<?php echo base_url('uploads/news/'.$news['news_file']) ?>" alt="" ></a>
                                                <?php }else{ ?>
                                                    <a href="<?php echo base_url('single/'.$news['news_id'])?>"><img width="100%" src="<?php echo base_url('public/user/assets/img/no-image.png') ?>" alt=""></a>
                                                <?php } ?>
                                            </div>
                                            <div class="trend-bottom-cap">
                                                <span class="color1"><a style="text-decoration: none;color: black" href=""><?php echo $getNewestData['news_category']; ?></a></span>
                                                <h4><a href="<?php echo base_url('single/'.$news['news_id'])?>">
                                                        <?php if (strlen($news['news_title']) >= 65){
                                                            echo substr($news['news_title'],0,65).'...';
                                                        }else{
                                                            echo $news['news_title'];
                                                        } ?>
                                                    </a></h4>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">

                        <?php foreach ($getAllDataP2 as $news){ ?>

                            <div class="trand-right-single d-flex">
                                <div class="trand-right-img">
                                    <?php if ($news['news_file']){ ?>
                                        <a href="<?php echo base_url('single/'.$news['news_id'])?>"><img style="height: 100px; width: 120px; border-radius: 5px;object-fit: cover" src="<?php echo base_url('uploads/news/'.$news['news_file']) ?>" alt="" ></a>
                                    <?php }else{ ?>
                                        <a href="<?php echo base_url('single/'.$news['news_id'])?>"><img style="height: 100px; width: 120px; border-radius: 5px;object-fit: cover" src="<?php echo base_url('public/user/assets/img/no-image.png') ?>" alt=""></a>
                                    <?php } ?>
                                </div>
                                <div class="trand-right-cap">
                                    <span class="color1"><?php echo $news['news_category']; ?></span>
                                    <h4><a href="<?php echo base_url('single/'.$news['news_id'])?>">
                                            <?php if (strlen($news['news_title']) >= 55){
                                                echo substr($news['news_title'],0,55).'...';
                                            }else{
                                                echo $news['news_title'];
                                            } ?>
                                        </a></h4>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="weekly-news-area pt-50">
        <div class="container">
           <div class="weekly-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Weekly Top News</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly-news-active dot-style d-flex dot-style">

                            <?php foreach ($getAllDataDate as $news){ ?>
                                <div class="weekly-single">
                                    <div class="weekly-img">
                                        <?php if ($news['news_file']){ ?>
                                            <a href="<?php echo base_url('single/'.$news['news_id'])?>"><img style="height: 432px; width: 370px; border-radius: 5px;object-fit: cover" src="<?php echo base_url('uploads/news/'.$news['news_file']) ?>" alt="" ></a>
                                        <?php }else{ ?>
                                            <a href="<?php echo base_url('single/'.$news['news_id'])?>"><img style="height: 432px; width: 370px; border-radius: 5px;object-fit: cover" src="<?php echo base_url('public/user/assets/img/no-image.png') ?>" alt=""></a>
                                        <?php } ?>
                                    </div>
                                    <div class="weekly-caption">
                                        <span class="color1"><?php echo $news['news_category']; ?></span>
                                        <h4><a href="<?php echo base_url('single/'.$news['news_id'])?>"><?php echo $news['news_title']; ?></a></h4>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
           </div>

        </div>
    </div>
    <section class="whats-news-area pt-50 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row d-flex justify-content-between">
                        <div class="col-lg-3 col-md-3">
                            <div class="section-tittle mb-30">
                                <h3>Whats New</h3>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="properties__button">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-all-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All</a>
                                        <a class="nav-item nav-link" id="nav-finance-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Finance</a>
                                        <a class="nav-item nav-link" id="nav-music-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Music</a>
                                        <a class="nav-item nav-link" id="nav-education-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Education</a>
                                        <a class="nav-item nav-link" id="nav-sports-tab" data-toggle="tab" href="#nav-nav-Sport" role="tab" aria-controls="nav-contact" aria-selected="false">Sports</a>
                                        <a class="nav-item nav-link" id="nav-technology-tab" data-toggle="tab" href="#nav-techno" role="tab" aria-controls="nav-contact" aria-selected="false">Technology</a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-all-tab">
                                    <div class="whats-news-caption">
                                        <div class="row">
                                            <?php foreach ($getAllCategory as $news){ ?>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <?php if ($news['news_file']){ ?>
                                                                <img style="height: 344px; width: 370px; border-radius: 5px;object-fit: cover" src="<?php echo base_url('uploads/news/'.$news['news_file']) ?>" alt="" >
                                                            <?php }else{ ?>
                                                                <img style="height: 344px; width: 370px; border-radius: 5px;object-fit: cover" src="<?php echo base_url('public/user/assets/img/no-image.png') ?>" alt="">
                                                            <?php } ?>
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1"><?php echo $news['news_category']; ?></span>
                                                            <h4><a href="<?php echo base_url('single/'.$news['news_id'])?>"><?php echo $news['news_title']; ?></a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-finance-tab">
                                    <div class="whats-news-caption">
                                        <div class="row">
                                            <?php foreach ($getFinanceCategory as $news){ ?>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <?php if ($news['news_file']){ ?>
                                                                <img style="height: 344px; width: 370px; border-radius: 5px;object-fit: cover" src="<?php echo base_url('uploads/news/'.$news['news_file']) ?>" alt="" >
                                                            <?php }else{ ?>
                                                                <img style="height: 344px; width: 370px; border-radius: 5px;object-fit: cover" src="<?php echo base_url('public/user/assets/img/no-image.png') ?>" alt="">
                                                            <?php } ?>
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1"><?php echo $news['news_category']; ?></span>
                                                            <h4><a href="<?php echo base_url('single/'.$news['news_id'])?>"><?php echo $news['news_title']; ?></a></h4>
                                                        </div>
                                                    </div>
                                                </div>

                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-music-tab">
                                    <div class="whats-news-caption">
                                        <div class="row">
                                            <?php foreach ($getMusicCategory as $news){ ?>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <?php if ($news['news_file']){ ?>
                                                                <img style="height: 344px; width: 370px; border-radius: 5px;object-fit: cover" src="<?php echo base_url('uploads/news/'.$news['news_file']) ?>" alt="" >
                                                            <?php }else{ ?>
                                                                <img style="height: 344px; width: 370px; border-radius: 5px;object-fit: cover" src="<?php echo base_url('public/user/assets/img/no-image.png') ?>" alt="">
                                                            <?php } ?>
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1"><?php echo $news['news_category']; ?></span>
                                                            <h4><a href="<?php echo base_url('single/'.$news['news_id'])?>"><?php echo $news['news_title']; ?></a></h4>
                                                        </div>
                                                    </div>
                                                </div>

                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-education-tab">
                                    <div class="whats-news-caption">
                                        <div class="row">
                                            <?php foreach ($getEducationCategory as $news){ ?>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <?php if ($news['news_file']){ ?>
                                                                <img style="height: 344px; width: 370px; border-radius: 5px;object-fit: cover" src="<?php echo base_url('uploads/news/'.$news['news_file']) ?>" alt="" >
                                                            <?php }else{ ?>
                                                                <img style="height: 344px; width: 370px; border-radius: 5px;object-fit: cover" src="<?php echo base_url('public/user/assets/img/no-image.png') ?>" alt="">
                                                            <?php } ?>
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1"><?php echo $news['news_category']; ?></span>
                                                            <h4><a href="<?php echo base_url('single/'.$news['news_id'])?>"><?php echo $news['news_title']; ?></a></h4>
                                                        </div>
                                                    </div>
                                                </div>

                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-nav-Sport" role="tabpanel" aria-labelledby="nav-sports-tab">
                                    <div class="whats-news-caption">
                                        <div class="row">
                                            <?php foreach ($getSportCategory as $news){ ?>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <?php if ($news['news_file']){ ?>
                                                                <img style="height: 344px; width: 370px; border-radius: 5px;object-fit: cover" src="<?php echo base_url('uploads/news/'.$news['news_file']) ?>" alt="" >
                                                            <?php }else{ ?>
                                                                <img style="height: 344px; width: 370px; border-radius: 5px;object-fit: cover" src="<?php echo base_url('public/user/assets/img/no-image.png') ?>" alt="">
                                                            <?php } ?>
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1"><?php echo $news['news_category']; ?></span>
                                                            <h4><a href="<?php echo base_url('single/'.$news['news_id'])?>"><?php echo $news['news_title']; ?></a></h4>
                                                        </div>
                                                    </div>
                                                </div>

                                            <?php } ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-techno" role="tabpanel" aria-labelledby="nav-technology-tab">
                                    <div class="whats-news-caption">
                                        <div class="row">
                                            <?php foreach ($getTechnologyCategory as $news){ ?>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <?php if ($news['news_file']){ ?>
                                                                <img style="height: 344px; width: 370px; border-radius: 5px;object-fit: cover" src="<?php echo base_url('uploads/news/'.$news['news_file']) ?>" alt="" >
                                                            <?php }else{ ?>
                                                                <img style="height: 344px; width: 370px; border-radius: 5px;object-fit: cover" src="<?php echo base_url('public/user/assets/img/no-image.png') ?>" alt="">
                                                            <?php } ?>
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1"><?php echo $news['news_category']; ?></span>
                                                            <h4><a href="<?php echo base_url('single/'.$news['news_id'])?>"><?php echo $news['news_title']; ?></a></h4>
                                                        </div>
                                                    </div>
                                                </div>

                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                    <div class="news-poster d-none d-lg-block" style="width: 370px; height: 625px;">
                        <?php if ($home_ads){ ?>
                            <img class="ads-img" src="<?php echo base_url('uploads/adsFile/'.$home_ads['ads_img']) ?>" alt="<?php echo $home_ads['ads_title']?>">
                        <?php }else{ ?>
                            <img class="ads-img" src="<?php echo base_url('public/all/your_ad_here.jpg')?>" alt="Burda sizin reklaminiz ola biler">
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="weekly2-news-area  weekly2-pading gray-bg">
        <div class="container">
            <div class="weekly2-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Weekly Top News</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly2-news-active dot-style d-flex dot-style">

                            <?php foreach ($getAllDataDate as $news){ ?>
                                <div class="weekly2-single">
                                    <div class="weekly2-img">
                                        <?php if ($news['news_file']){ ?>
                                            <a href="<?php echo base_url('single/'.$news['news_id'])?>"><img style="width: 270px; height: 175px; border-radius: 5px;object-fit: cover" src="<?php echo base_url('uploads/news/'.$news['news_file']) ?>" alt="" ></a>
                                        <?php }else{ ?>
                                            <a href="<?php echo base_url('single/'.$news['news_id'])?>"><img style="width: 270px; height: 175px; border-radius: 5px;object-fit: cover" src="<?php echo base_url('public/user/assets/img/no-image.png') ?>" alt=""></a>
                                        <?php } ?>
                                    </div>
                                    <div class="weekly2-caption">
                                        <span class="color1"><?php echo $news['news_category']; ?></span>
                                        <p><?php echo $news['news_date']; ?></p>
                                        <h4><a href="<?php echo base_url('single/'.$news['news_id'])?>"><?php echo $news['news_title']; ?></a></h4>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--    <div class="youtube-area video-padding">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-12">-->
<!--                    <div class="video-items-active">-->
<!--                        <div class="video-items text-center">-->
<!--                            <iframe src="https://www.youtube.com/embed/CicQIuG8hBo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
<!--                        </div>-->
<!--                        <div class="video-items text-center">-->
<!--                            <iframe  src="https://www.youtube.com/embed/rIz00N40bag" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
<!--                        </div>-->
<!--                        <div class="video-items text-center">-->
<!--                            <iframe src="https://www.youtube.com/embed/CONfhrASy44" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
<!---->
<!--                        </div>-->
<!--                        <div class="video-items text-center">-->
<!--                            <iframe src="https://www.youtube.com/embed/lq6fL2ROWf8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
<!---->
<!--                        </div>-->
<!--                        <div class="video-items text-center">-->
<!--                            <iframe src="https://www.youtube.com/embed/0VxlQlacWV4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="video-info">-->
<!--                <div class="row">-->
<!--                    <div class="col-lg-6">-->
<!--                        <div class="video-caption">-->
<!--                            <div class="top-caption">-->
<!--                                <span class="color1">Politics</span>-->
<!--                            </div>-->
<!--                            <div class="bottom-caption">-->
<!--                                <h2>Welcome To The Best Model Winner Contest At Look of the year</h2>-->
<!--                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod ipsum dolor sit. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod ipsum dolor sit. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod ipsum dolor sit lorem ipsum dolor sit.</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-lg-6">-->
<!--                        <div class="testmonial-nav text-center">-->
<!---->
<!--                            --><?php //foreach ($getVideoNews as $news){ ?>
<!--                                <div class="single-video">-->
<!--                                    <iframe  src="--><?php //echo $news['news_video_link']?><!--" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
<!--                                    <div class="video-intro">-->
<!--                                        <h4>--><?php //echo $news['news_title']?><!--</h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            --><?php //} ?>
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="recent-articles">-->
<!--        <div class="container">-->
<!---->
<!--           <div class="recent-wrapper">-->
<!--                <div class="row">-->
<!--                    <div class="col-lg-12">-->
<!--                        <div class="section-tittle mb-30">-->
<!--                            <a href="--><?php //echo base_url('category/Education')?><!--"><h3>Education</h3></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="row">-->
<!--                    <div class="col-12">-->
<!--                        <div class="recent-active dot-style d-flex dot-style">-->
<!--                            --><?php //foreach ($getEducationCategory as $item){ ?>
<!--                                <div class="single-recent mb-100">-->
<!--                                    <div class="what-img">-->
<!---->
<!--                                        --><?php //if ($news['news_file']){ ?>
<!--                                            <img style="object-fit: cover" width="370px" height="230px" src="--><?php //echo base_url('uploads/news/'.$item['news_file']) ?><!--" alt="">-->
<!--                                        --><?php //}else{ ?>
<!--                                            <img style="object-fit: cover" width="370px" height="230px" src="--><?php //echo base_url('public/user/assets/img/no-image.png') ?><!--" alt="">-->
<!--                                        --><?php //} ?>
<!---->
<!---->
<!---->
<!--                                    </div>-->
<!--                                    <div class="what-cap">-->
<!--                                        <span class="color1">--><?php //echo $item['news_category']?><!--</span>-->
<!--                                        <h4><a href="#">--><?php //echo $item['news_title']?><!--</a></h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            --><?php //} ?>
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--           </div>-->
<!---->
<!--            ----------------------------------------------->
<!---->
<!--            <div class="recent-wrapper">-->
<!--                <div class="row">-->
<!--                    <div class="col-lg-12">-->
<!--                        <div class="section-tittle mb-30">-->
<!--                            <a href="--><?php //echo base_url('category/Finance')?><!--"><h3>Finance</h3></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="row">-->
<!--                    <div class="col-12">-->
<!--                        <div class="recent-active dot-style d-flex dot-style">-->
<!--                            --><?php //foreach ($getFinanceCategory as $item){ ?>
<!--                                <div class="single-recent mb-100">-->
<!--                                    <div class="what-img">-->
<!---->
<!--                                        --><?php //if ($news['news_file']){ ?>
<!--                                            <img style="object-fit: cover" width="370px" height="230px" src="--><?php //echo base_url('uploads/news/'.$item['news_file']) ?><!--" alt="">-->
<!--                                        --><?php //}else{ ?>
<!--                                            <img style="object-fit: cover" width="370px" height="230px" src="--><?php //echo base_url('public/user/assets/img/no-image.png') ?><!--" alt="">-->
<!--                                        --><?php //} ?>
<!---->
<!---->
<!---->
<!--                                    </div>-->
<!--                                    <div class="what-cap">-->
<!--                                        <span class="color1">--><?php //echo $item['news_category']?><!--</span>-->
<!--                                        <h4><a href="#">--><?php //echo $item['news_title']?><!--</a></h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            --><?php //} ?>
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--                       ----------------------------------------------->
<!---->
<!--            <div class="recent-wrapper">-->
<!--                <div class="row">-->
<!--                    <div class="col-lg-12">-->
<!--                        <div class="section-tittle mb-30">-->
<!--                            <a href="--><?php //echo base_url('category/Sport')?><!--"><h3>Sport</h3></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="row">-->
<!--                    <div class="col-12">-->
<!--                        <div class="recent-active dot-style d-flex dot-style">-->
<!---->
<!--                            --><?php //foreach ($getSportCategory as $item){ ?>
<!--                            <div class="single-recent mb-100">-->
<!--                                <div class="what-img">-->
<!---->
<!--                                    --><?php //if ($news['news_file']){ ?>
<!--                                        <img style="object-fit: cover" width="370px" height="230px" src="--><?php //echo base_url('uploads/news/'.$item['news_file']) ?><!--" alt="">-->
<!--                                    --><?php //}else{ ?>
<!--                                        <img style="object-fit: cover" width="370px" height="230px" src="--><?php //echo base_url('public/user/assets/img/no-image.png') ?><!--" alt="">-->
<!--                                    --><?php //} ?>
<!---->
<!---->
<!---->
<!--                                </div>-->
<!--                                <div class="what-cap">-->
<!--                                    <span class="color1">--><?php //echo $item['news_category']?><!--</span>-->
<!--                                    <h4><a href="#">--><?php //echo $item['news_title']?><!--</a></h4>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            --><?php //} ?>
<!---->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--                    ----------------------------------------------->
<!---->
<!--            <div class="recent-wrapper">-->
<!--                <div class="row">-->
<!--                    <div class="col-lg-12">-->
<!--                        <div class="section-tittle mb-30">-->
<!--                            <a href="--><?php //echo base_url('category/Technology')?><!--"><h3>Technology</h3></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="row">-->
<!--                    <div class="col-12">-->
<!--                        <div class="recent-active dot-style d-flex dot-style">-->
<!--                            --><?php //foreach ($getTechnologyCategory as $item){ ?>
<!--                                <div class="single-recent mb-100">-->
<!--                                    <div class="what-img">-->
<!---->
<!--                                        --><?php //if ($news['news_file']){ ?>
<!--                                            <img style="object-fit: cover" width="370px" height="230px" src="--><?php //echo base_url('uploads/news/'.$item['news_file']) ?><!--" alt="">-->
<!--                                        --><?php //}else{ ?>
<!--                                            <img style="object-fit: cover" width="370px" height="230px" src="--><?php //echo base_url('public/user/assets/img/no-image.png') ?><!--" alt="">-->
<!--                                        --><?php //} ?>
<!---->
<!---->
<!---->
<!--                                    </div>-->
<!--                                    <div class="what-cap">-->
<!--                                        <span class="color1">--><?php //echo $item['news_category']?><!--</span>-->
<!--                                        <h4><a href="#">--><?php //echo $item['news_title']?><!--</a></h4>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            --><?php //} ?>
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="pagination-area pb-45 text-center">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-xl-12">-->
<!--                    <div class="single-wrap d-flex justify-content-center">-->
<!--                        <nav aria-label="Page navigation example">-->
<!--                            <ul class="pagination justify-content-start">-->
<!--                              <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow roted"></span></a></li>-->
<!--                                <li class="page-item active"><a class="page-link" href="#">01</a></li>-->
<!--                                <li class="page-item"><a class="page-link" href="#">02</a></li>-->
<!--                                <li class="page-item"><a class="page-link" href="#">03</a></li>-->
<!--                              <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow right-arrow"></span></a></li>-->
<!--                            </ul>-->
<!--                          </nav>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->


