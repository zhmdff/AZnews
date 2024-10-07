<?php $directory = base_url('public/user/'); ?>
    <section style="padding: 50px 0px 50px" ">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Get in Touch</h2>
                    </div>
                    <div class="col-lg-8">

                        <?php if ($this->session->flashdata('ContactSucc')){ ?>
                            <div class="alert alert-success alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <?php echo $this->session->flashdata('ContactSucc')?>
                            </div>
                        <?php }?>

                        <?php if ($this->session->flashdata('ContactError')){ ?>
                            <div class="alert alert-danger alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <?php echo $this->session->flashdata('ContactError')?>
                            </div>
                        <?php }?>

                        <?php if (!isset($_SESSION['user_data'])){ ?>
                            <form class="form-contact comment_form" action="<?php echo base_url('contact_act') ?>" id="commentForm" method="POST">
                                <div class="row">

                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject" required>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control w-100" name="message" id="comment" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" cols="30" rows="9" placeholder="Write Message"  required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'" placeholder="Name"  required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email'" placeholder="Email"  required>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                                </div>

                            </form>
                        <?php }else{ ?>
                            <form class="form-contact comment_form" action="<?php echo base_url('user_contact_act') ?>" id="commentForm" method="POST">
                                <div class="row">

                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject" required>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder="Write Comment" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                                </div>

                            </form>
                        <?php } ?>
                    </div>
                    <div class="col-lg-3 offset-lg-1">

                        <?php foreach ($contact_data as $item) { ?>

                            <div class="media contact-info">
                                <span class="contact-info__icon"><i class="<?php echo $item['contact_icon']; ?>"></i></span>
                                <div class="media-body">
                                    <h3><?php echo $item['contact_name']; ?></h3>
                                    <p><?php echo $item['contact_alt']; ?></p>
                                </div>
                            </div>

                        <?php } ?>

                    </div>
                </div>
            </div>
    </section>