<?php $directory = base_url('public/user/'); ?>

<style>
    .ads-img{
        width: 100%;
        height: 100%;
        object-fit: cover;
        padding: 0 61px;
    }
</style>

<section class="blog_area single-post-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                    <div class="feature-img">
                        <?php if ($getSingleNews['news_file']){ ?>
                            <img style="width: 100%;height: 500px; object-fit: cover" class="img-fluid" src="<?php echo base_url('uploads/news/'.$getSingleNews['news_file']); ?>" alt="">
                        <?php }else{ ?>
                            <img style="width: 100%;height: 500px; object-fit: cover"  class="img-fluid" src="<?php echo base_url('public/user/assets/img/no-image.png') ?>" alt="">
                        <?php } ?>
                    </div>

                    <div class="blog_details">
                        <h2><?php echo $getSingleNews['news_title']; ?></h2>
                        <ul class="blog-info-link mt-3 mb-4">
                            <li><a href="#"><i class="fas fa-folder"></i><?php echo $getSingleNews['news_category']; ?></a></li>
                            <li><i class="far fa-clock"></i><?php echo $getSingleNews['news_date']; ?></li>
                        </ul>
                        <p class="excert"><?php echo $getSingleNews['news_description']; ?></p>
                    </div>

                    <div class="feature-img">
                        <br>

                        <?php if ($getVideoNews['news_video_link']){ ?>
                            <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <iframe width="100%" height="500px" src="<?php echo $getVideoNews['news_video_link']; ?>"></iframe>
                            </div>
                        <?php } ?>

                        <br>
                    </div>
                </div>
                <div class="navigation-top">
                    <div class="d-sm-flex justify-content-between text-center">
                        <p class="like-info"><span class="align-middle"><i class="fas fa-share"></i></span>Share!</p>
                        <div class="col-sm-4 text-center my-2 my-sm-0">
                            <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                        </div>
                        <ul class="social-icons">
                            <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url('URL');?>&quote=Awesome%20Blog!"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/intent/tweet?text=Awesome%20Blog!&url=<?php echo base_url('URL');?>"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://wa.me/?text=Awesome%20Blog!%5Cn%20<?php echo base_url('URL');?>"><i class="fab fa-whatsapp"></i></a></li>
                            <li><a href="https://t.me/share/url?url=<?php echo base_url('URL');?>&text=Awesome%20blog!"><i class="fab fa-telegram"></i></a></li>
                        </ul>
                    </div>
                    <div class="navigation-area">
                        <div class="row">
                            <div
                                    class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                <div class="thumb">
                                    <a href="<?php echo base_url('single/'.$getRandomNews['news_id'])?>">
                                        <?php if ($getRandomNews['news_file']){ ?>
                                            <img style="width: 60px;height: 60px;object-fit: cover" class="img-fluid" src="<?php echo base_url('uploads/news/'.$getRandomNews['news_file']); ?>" alt="">
                                        <?php }else{ ?>
                                            <img style="width: 60px;height: 60px;object-fit: cover" class="img-fluid" src="<?php echo base_url('public/user/assets/img/no-image.png') ?>" alt="">
                                        <?php } ?>
                                    </a>
                                </div>
                                <div class="arrow">
                                    <a href="<?php echo base_url('single/'.$getRandomNews['news_id'])?>">
                                        <span class="lnr text-white ti-arrow-left"></span>
                                    </a>
                                </div>
                                <div class="detials">
                                    <p>Prev Post</p>
                                    <a href="<?php echo base_url('single/'.$getRandomNews['news_id'])?>">
                                        <h4>
                                            <?php if (strlen($getRandomNews['news_title']) >= 35){
                                                echo substr($getRandomNews['news_title'],0,35).'...';
                                            }else{
                                                echo $getRandomNews['news_title'];
                                            } ?>
                                        </h4>
                                    </a>
                                </div>
                            </div>
                            <div
                                    class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                <div class="detials">
                                    <p>Next Post</p>
                                    <a href="<?php echo base_url('single/'.$getRandomNews2['news_id'])?>">
                                        <h4><?php if (strlen($getRandomNews2['news_title']) >= 35){
                                            echo substr($getRandomNews2['news_title'],0,35).'...';
                                            }else{
                                                echo $getRandomNews2['news_title'];
                                            } ?>
                                        </h4>
                                    </a>
                                </div>
                                <div class="arrow">
                                    <a href="<?php echo base_url('single/'.$getRandomNews2['news_id'])?>">
                                        <span class="lnr text-white ti-arrow-right"></span>
                                    </a>
                                </div>
                                <div class="thumb">
                                    <a href="<?php echo base_url('single/'.$getRandomNews2['news_id'])?>">
                                        <?php if ($getRandomNews2['news_file']){ ?>
                                            <img style="width: 60px;height: 60px;object-fit: cover" class="img-fluid" src="<?php echo base_url('uploads/news/'.$getRandomNews2['news_file']); ?>" alt="">
                                        <?php }else{ ?>
                                            <img style="width: 60px;height: 60px;object-fit: cover" class="img-fluid" src="<?php echo base_url('public/user/assets/img/no-image.png') ?>" alt="">
                                        <?php } ?>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="comments-area" style="margin-top: 0px!important;">
                    <h4>Comments</h4>
                        <?php if ($getComment){ ?>
                            <?php foreach ($getComment as $comment){ ?>
                                <div class="comment-list">
                                    <div class="single-comment justify-content-between d-flex">
                                        <div class="user justify-content-between d-flex">
                                            <div class="thumb">
                                                <?php if ($comment['comment_type'] == 'user'){ ?>
                                                    <img width="70px" height="70px" style="object-fit: cover" src="<?php echo base_url('uploads/user_profile/').$comment['comment_user_img'] ?>">
                                                <?php }else{ ?>
                                                    <img src="<?php echo base_url('uploads/user_profile/comment.png')?>">
                                                <?php } ?>

                                            </div>
                                            <div class="desc">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <h5>
                                                            <a href="#"><?php echo $comment['comment_name'] ?></a>
                                                        </h5>
                                                        <p class="date"><?php echo $comment['comment_date'] ?></p>
                                                    </div>
                                                </div>


                                                <p class="comment">
                                                    <?php echo $comment['comment'] ?>
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        <?php }else{ ?>

                            <h3>0 comments yet</h3>
                            <h5>Be the first to comment</h5>

                        <?php } ?>
                </div>

                <div class="comment-form">
                    <?php if (!isset($_SESSION['user_data'])){ ?>
                        <h4>Leave a Reply</h4>

                        <?php if ($this->session->flashdata('CommentSucc')){ ?>
                            <div class="alert alert-success alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <?php echo $this->session->flashdata('CommentSucc')?>
                            </div>
                        <?php }?>

                        <?php if ($this->session->flashdata('CommentError')){ ?>
                            <div class="alert alert-danger alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <?php echo $this->session->flashdata('CommentError')?>
                            </div>
                        <?php }?>

                        <form class="form-contact comment_form" action="<?php echo base_url('add_comment_act') ?>" id="commentForm" method="POST">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment" required></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" type="text" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="email" id="email" type="email" placeholder="Email" required>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="news_id" type="text" value="<?php echo $this->uri->segment(2)?>" readonly hidden>
                                    </div>
                                </div>


                            </div>
                            <div class="form-group">
                                <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                            </div>

                        </form>
                    <?php }else{ ?>
                        <h4>Leave a Reply</h4>

                        <?php if ($this->session->flashdata('CommentSucc')){ ?>
                            <div class="alert alert-success alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <?php echo $this->session->flashdata('CommentSucc')?>
                            </div>
                        <?php }?>

                        <?php if ($this->session->flashdata('CommentError')){ ?>
                            <div class="alert alert-danger alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <?php echo $this->session->flashdata('CommentError')?>
                            </div>
                        <?php }?>

                        <form class="form-contact comment_form" action="<?php echo base_url('add_user_comment_act') ?>" id="commentForm" method="POST">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>
                                        <input class="form-control" name="news_id" type="text" value="<?php echo $this->uri->segment(2)?>" hidden>
                                    </label>
                                </div>
                            </div>

                        </form>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-4">
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
                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title"  style="margin-bottom: 20px!important;">Same Category Post</h3>

                        <?php foreach ($getSameCategoryNews as $news){ ?>
                            <div class="media post_item">
                                <?php if ($news['news_file']){ ?>
                                    <img style="width: 80px;height: 80px;object-fit: cover" class="img-fluid" src="<?php echo base_url('uploads/news/'.$news['news_file']); ?>" alt="">
                                <?php }else{ ?>
                                    <img style="width: 80px;height: 80px;object-fit: cover" class="img-fluid" src="<?php echo base_url('public/user/assets/img/no-image.png') ?>" alt="">
                                <?php } ?>
                                <div class="media-body">
                                    <a href="<?php echo base_url('single/'. $news['news_id']); ?>">
                                        <h3><?php echo $news['news_title']; ?></h3>
                                    </a>
                                    <p><?php echo $news['news_date']; ?></p>
                                </div>
                            </div>
                        <?php } ?>

                    </aside>

                </div>

                <!-- ADS -->
                <div class="news-poster d-none d-lg-block" style="  width: 370px; height: 625px;">
                    <?php if ($single_ads){ ?>
                        <img class="ads-img" src="<?php echo base_url('uploads/adsFile/'.$single_ads['ads_img']) ?>" alt="<?php echo $single_ads['ads_title']?>">
                    <?php }else{ ?>
                        <img class="ads-img" src="<?php echo base_url('public/all/your_ad_here.jpg')?>" alt="Burda sizin reklaminiz ola biler">
                    <?php } ?>
                </div>
                <!-- ADS -->


            </div>
        </div>
    </div>
</section>