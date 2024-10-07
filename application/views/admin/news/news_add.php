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
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Add News </h3>
                            <p class="text-subtitle text-muted">For user to check they list</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('admin_dashboard')?>">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add News </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                    <section class="section">
                        <div class="card">
                            <div class="card-header">
                                <span style="font-weight: bold; font-size: 20px">Add News</span>
                                <a href="<?php echo base_url('admin_news_list')?>"><button type="button" class="btn btn-secondary" style="float: right">Back</button></a>
                            </div>
                            <div class="card-body">

                                <form action="<?php echo base_url('admin_news_add_act')?>" method="POST" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" name="news_title" required>
                                    </div>


                                    <div class="form-group mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="news_description" required></textarea>
                                    </div>



                                    <fieldset id="select_box" class="form-group  col-xs-12 col-sm-2 col-md-2 col-lg-2" style="float: left;  margin: 0px 10px 0px 0px;">
                                        <label for="Status">Does News have Video?</label>
                                        <select class="form-select" id="news_video"  name="news_video" required>
                                            <option value="Yes">Yes</option>
                                            <option value="No" selected>No (Default)</option>
                                        </select>
                                    </fieldset>

                                    <div id="Yes" class="form-group col-xs-12 col-sm-5 col-md-5 col-lg-5 hide" style="float: left;  margin: 0px 10px 0px 0px;">
                                        <label for="news_video_link">Link</label>
                                        <input type="text" class="form-control" id="news_video_link" name="news_video_link">
                                    </div>

                                    <br><br><br>

                                    <fieldset class="form-group  col-xs-12 col-sm-2 col-md-2 col-lg-2" style="float: left;  margin: 0px 10px 0px 0px;">
                                        <label for="datefield">Date</label>
                                        <input type="date" name="news_date" id="datefield" class="form-control" required>
                                    </fieldset>

                                    <fieldset class="form-group  col-xs-12 col-sm-2 col-md-2 col-lg-2" style="float: left;  margin: 0px 10px;">
                                        <label for="category">Caregory</label>
                                        <select class="form-select" id="category" name="news_category" required>
                                            <option value="">Choose...</option>
                                            <option value="Sport">Sport</option>
                                            <option value="Education">Education</option>
                                            <option value="Finance">Finance</option>
                                            <option value="Music">Music</option>
                                            <option value="Technology">Technology</option>
                                        </select>
                                    </fieldset>

                                    <fieldset class="form-group  col-xs-12 col-sm-2 col-md-2 col-lg-2" style="float: left;  margin: 0px 10px;">
                                        <label for="Status">Status</label>
                                        <select class="form-select" id="Status"  name="news_status" required>
                                            <option value="">Choose...</option>
                                            <option value="Active">Active</option>
                                            <option value="Deactive">Deactive</option>
                                        </select>
                                    </fieldset>

                                    <fieldset class="form-group  col-xs-12 col-sm-2 col-md-2 col-lg-2" style="float: left;  margin: 0px 10px;">
                                        <label for="img" style=" margin-top: 15px">
                                            <i class="bi bi-image" style="font-size: 45px;cursor: pointer"></i>
                                            <input type="file" id="img" name="news_file" hidden>
                                        </label>
                                    </fieldset>

                                    <button type="submit" class="btn btn-success" style="float: right; margin-top: 30px";>Add</button>


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
