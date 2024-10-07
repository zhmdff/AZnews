<?php $directory = base_url('public/admin/') ?>
<?php $this->load->view('admin/includes/header') ?>
<?php $this->load->view('admin/includes/sidebar') ?>

<div id="main">
    <div class="page-heading">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>



        <div class="page-heading">
            <?php $this->load->view('admin/includes/page_title')?>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <span style="font-weight: bold; font-size: 20px">Add News</span>
                        <a href="<?php echo base_url('admin_news_list')?>"><button type="button" class="btn btn-secondary" style="float: right">Back</button></a>
                    </div>
                    <div class="card-body">

                        <form action="<?php echo base_url('admin_news_edit_act/'.$select_single_news['news_id'])?>" method="POST" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="news_title" value="<?php echo $select_single_news['news_title']; ?>" required>
                            </div>


                            <div class="form-group mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="news_description" required><?php echo $select_single_news['news_description']; ?></textarea>
                            </div>

                            <fieldset id="select_box" class="form-group  col-xs-12 col-sm-2 col-md-2 col-lg-2" style="float: left;  margin: 0px 10px 0px 0px;">
                                <label for="Status">Does News have Video?</label>
                                <select class="form-select" id="news_video"  name="news_video" required>
                                    <option <?php if ($select_single_news['news_video'] == "Yes"){echo "SELECTED";} ?> value="Yes">Yes</option>
                                    <option <?php if ($select_single_news['news_video'] == "No"){echo "SELECTED";} ?> value="No">No (Default)</option>
                                </select>
                            </fieldset>

                            <div id="Yes" class="form-group col-xs-12 col-sm-5 col-md-5 col-lg-5 hide" style="float: left;  margin: 0px 10px 0px 0px;">
                                <label for="news_video_link">Link</label>
                                <input type="text" class="form-control" id="news_video_link" name="news_video_link" value="<?php echo $select_single_news['news_video_link']; ?>">
                            </div>

                            <br><br><br>


                            <fieldset class="form-group  col-xs-12 col-sm-2 col-md-2 col-lg-2" style="float: left;  margin: 0px 10px 0px 0px;">
                                <label for="datefield">Date</label>
                                <input type="date" name="news_date" id="datefield" class="form-control" value="<?php echo $select_single_news['news_date']; ?>" required>
                            </fieldset>

                            <fieldset class="form-group  col-xs-12 col-sm-2 col-md-2 col-lg-2" style="float: left;  margin: 0px 10px;">
                                <label for="category">Caregory</label>
                                <select class="form-select" id="category" name="news_category" required>
                                    <option <?php if ($select_single_news['news_category'] == ""){echo "SELECTED";} ?> value="">Choose...</option>
                                    <option <?php if ($select_single_news['news_category'] == "Sport"){echo "SELECTED";} ?> value="Sport">Sport</option>
                                    <option <?php if ($select_single_news['news_category'] == "Education"){echo "SELECTED";} ?> value="Education">Education</option>
                                    <option <?php if ($select_single_news['news_category'] == "Finance"){echo "SELECTED";} ?> value="Finance">Finance</option>
                                    <option <?php if ($select_single_news['news_category'] == "Music"){echo "SELECTED";} ?> value="Music">Music</option>
                                    <option <?php if ($select_single_news['news_category'] == "Daily"){echo "SELECTED";} ?> value="Daily">Daily</option>
                                </select>
                            </fieldset>

                            <fieldset class="form-group  col-xs-12 col-sm-2 col-md-2 col-lg-2" style="float: left;  margin: 0px 10px;">
                                <label for="Status">Status</label>
                                <select class="form-select" id="Status"  name="news_status" required>
                                    <option <?php if ($select_single_news['news_status'] == ""){echo "SELECTED";} ?> value="">Choose...</option>
                                    <option <?php if ($select_single_news['news_status'] == "Active"){echo "SELECTED";} ?> value="Active">Active</option>
                                    <option <?php if ($select_single_news['news_status'] == "Deactive"){echo "SELECTED";} ?> value="Deactive">Deactive</option>
                                </select>
                            </fieldset>

                            <fieldset class="form-group  col-xs-12 col-sm-2 col-md-2 col-lg-2" style="float: left;  margin: 0px 10px;">
                                <label for="img" style=" margin-top: 15px">
                                    <i class="bi bi-image" style="font-size: 45px;cursor: pointer"></i>
                                    <input type="file" id="img" name="news_file" hidden>
                                    <?php if ($select_single_news['news_file']){ ?>
                                        <img src="<?php echo base_url('uploads/news/'. $select_single_news['news_file'])?>" alt="" style="width: 45px ;height: 45px ;border-radius: 6px;object-fit: cover; -webkit-filter: drop-shadow(5px 5px 5px #666666);filter: drop-shadow(5px 5px 5px #666666); margin-bottom: 35px; margin-left: 10px">
                                    <?php }else{ ?>
                                        <img width="50px" src="<?php echo base_url('public/user/assets/img/no-image.png') ?>" alt="user1" style="width: 45px ;height: 45px ;border-radius: 6px;object-fit: cover; -webkit-filter: drop-shadow(5px 5px 5px #666666);filter: drop-shadow(5px 5px 5px #666666); margin-bottom: 35px; margin-left: 10px">
                                    <?php } ?>
                                </label>
                            </fieldset>

                            <button type="submit" class="btn btn-success" style="float: right; margin-top: 30px";>Update</button>


                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<?php $this->load->view('admin/includes/footer') ?>
<?php $this->load->view('admin/includes/footerStyle') ?>

<script>
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1; //January is 0!
    var yyyy = today.getFullYear();

    if (dd < 10) {
        dd = '0' + dd;
    }

    if (mm < 10) {
        mm = '0' + mm;
    }

    today = yyyy + '-' + mm + '-' + dd;
    document.getElementById("datefield").setAttribute("max", today);
</script>

<script>

    $('#select_box').change(function () {
        var select=$(this).find(':selected').val();
        $(".hide").hide();
        $('#' + select).show();

    }).change();

</script>
