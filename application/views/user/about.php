<?php $directory = base_url('public/user/'); ?>
        <div class="about-area">
            <div class="container">
                    <!-- Hot Aimated News Tittle-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="trending-tittle">
                                <strong>Trending now</strong>
                                <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
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
                            <!-- Trending Tittle -->
                                    <div class="about-right mb-90">
                                        <div class="about-img">
                                            <img src="<?php echo base_url('public/all/'.$about_data['about_img']);?>" alt="">
                                        </div>
                                        <div class="section-tittle mb-30 pt-30">
                                            <h3>About Us</h3>
                                        </div>
                                        <div class="about-prea">
                                            <p class="about-pera1 mb-25"><?php echo $about_data['about_text'];?></p>
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

                            <!-- ADS -->
                            <div class="news-poster d-none d-lg-block" style="width: 370px; height: 625px;">
                                <?php if ($about_ads){ ?>
                                    <img class="ads-img" src="<?php echo base_url('uploads/adsFile/'.$about_ads['ads_img']) ?>" alt="<?php echo $about_ads['ads_title']?>">
                                <?php }else{ ?>
                                    <img class="ads-img" src="<?php echo base_url('public/all/your_ad_here.jpg')?>" alt="Burda sizin reklaminiz ola biler">
                                <?php } ?>
                            </div>
                            <!-- ADS -->

                            <br><br>

                        </div>
                   </div>
            </div>
        </div>