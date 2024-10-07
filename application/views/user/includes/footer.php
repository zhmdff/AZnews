<?php $directory = base_url('public/user/'); ?>

</main>
<footer>
    <!-- Footer Start-->
    <div class="footer-area footer-padding fix">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="single-footer-caption">
                        <div class="single-footer-caption">
                            <!-- logo -->
                            <div class="footer-logo">
                                <a href="<?php echo base_url('home')?>">
                                    <img src="<?php echo base_url('public/all/'.$footer_data2['footer_img']) ?>">
                                </a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p><?php echo $footer_data2['footer_text'] ?></p>
                                </div>
                            </div>

                            <!-- social -->
                            <div class="footer-social">
                                <?php foreach ($footer_data as $item){ ?>
                                    <a href="<?php echo $item['social_media_link']?>"><?php echo $item['social_media_icon_fa']?></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="footer-bottom-area">
        <div class="container">
            <div class="footer-border">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div class="footer-copy-right">
                            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> / <a href="https://www.instagram.com/mahmud_hmdf/" target="_blank">Mahmud</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="footer-menu f-right">
                            <ul>
                                <?php foreach ($footer_item as $item) { ?>
                                    <li><a href="<?php echo base_url($item['footer_item_link']) ?>"><?php echo $item['footer_item_name'] ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</footer>