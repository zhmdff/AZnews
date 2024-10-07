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
                                        <li class="news-item">Bangladesh dolor sit amet, consectetur adipisicing elit.</li>
                                        <li class="news-item">Spondon IT sit amet, consectetur.......</li>
                                        <li class="news-item">Rem ipsum dolor sit amet, consectetur adipisicing elit.</li>
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
                                    <img src="<?php echo $directory ?>assets/img/trending/trending_top.jpg" alt="">
                                </div>
                                <div class="section-tittle mb-30 pt-30">
                                    <h3><?php echo $news['news_title'] ?></h3>
                                </div>
                                <div class="about-prea">
                                    <p class="about-pera1 mb-25">desc</p>
                                </div>
                                <div class="social-share pt-30">
                                    <div class="section-tittle">
                                        <h3 class="mr-20">Share:</h3>
                                        <ul>
                                            <li><a href="#"><img src="<?php echo $directory ?>assets/img/news/icon-ins.png" alt=""></a></li>
                                            <li><a href="#"><img src="<?php echo $directory ?>assets/img/news/icon-fb.png" alt=""></a></li>
                                            <li><a href="#"><img src="<?php echo $directory ?>assets/img/news/icon-tw.png" alt=""></a></li>
                                            <li><a href="#"><img src="<?php echo $directory ?>assets/img/news/icon-yo.png" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- From -->
                            <div class="row">
                                <div class="col-lg-8">
                                    <form class="form-contact contact_form mb-80" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea class="form-control w-100 error" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Enter Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input class="form-control error" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input class="form-control error" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input class="form-control error" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mt-3">
                                            <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                                        </div>
                                    </form>
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
                           <div class="news-poster d-none d-lg-block">
                               <img style="width: 300px;height: 755px;object-fit: cover;padding: 0px" src="<?php echo base_url('uploads/ads_img/'.$ads['ads_img']) ?>" alt="<?php echo $ads['ads_title']?>">
                           </div>

                           <br><br>
                           <div class="blog_right_sidebar">
                               <aside class="single_sidebar_widget tag_cloud_widget">
                                   <h4 class="widget_title">Categorys</h4>
                                   <ul class="list">
                                       <?php foreach ($getAllCategory as $item) { ?>
                                           <li>
                                               <a href="<?php echo base_url('category/'.$item['category_link'])?>"><?php echo $item['category_name']?></a>
                                           </li>
                                       <?php } ?>
                                   </ul>
                           </div>
                       </div>

                        </div>
                   </div>
            </div>
        </div>