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
                        <span style="font-weight: bold; font-size: 20px">Ads Add</span>
                        <a href="<?php echo base_url('ads_list')?>"><button type="button" class="btn btn-secondary" style="float: right">Back</button></a>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('ads_add_act')?>" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="ads_title" required>
                            </div>
                            <div class="form-group">
                                <label for="company_name">Company Name</label>
                                <input type="text" class="form-control" id="company_name" name="ads_company_name" required>
                            </div>
                            <fieldset class="form-group col-xs-12 col-sm-2 col-md-2 col-lg-2" style="float: left;  margin: 0px 10px 0px 0px;">
                                <div class="input-group">
                                    <label for="m_p_m" style="float: left; margin-right: 40%">Money Per Month</label>
                                    <input type="number" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2" id="m_p_m" name="ads_money_per_month" required>
                                    <span class="input-group-text" id="basic-addon2">$</span>
                                </div>
                            </fieldset>
                            <fieldset class="form-group  col-xs-12 col-sm-2 col-md-2 col-lg-2" style="float: left; margin: 0px 10px;">
                                <label for="datefield">Expired Date</label>
                                <input id="datefield" type="date" name="ads_exp_date" class="form-control" required>
                            </fieldset>
                            <fieldset class="form-group  col-xs-12 col-sm-2 col-md-2 col-lg-2" style="float: left;  margin: 0px 10px;">
                                <label for="Status">Status</label>
                                <select class="form-select" id="Status"  name="ads_status" required>
                                    <option value="">Choose...</option>
                                    <option value="Active">Active</option>
                                    <option value="Deactive">Deactive</option>
                                </select>
                            </fieldset>
                            <fieldset class="form-group  col-xs-12 col-sm-2 col-md-2 col-lg-2" style="float: left;  margin: 0px 10px;">
                                <label for="Location">Location</label>
                                <select class="form-select" id="Location"  name="ads_location" required>
                                    <option value="">Choose...</option>
                                    <option value="Header">Header (690x62)</option>
                                    <option value="Home">Home (370x675)</option>
                                    <option value="Category">Category (370x675)</option>
                                    <option value="Latest_news">Latest News (370x675)</option>
                                    <option value="About">About (370x675)</option>
                                    <option value="Single">Single (370x675)</option>
                                </select>
                            </fieldset>
                            <fieldset class="form-group  col-xs-12 col-sm-2 col-md-2 col-lg-2" style="float: left;  margin: 0px 10px;">
                                <label for="img" style=" margin-top: 15px">
                                    <i class="bi bi-image" style="font-size: 45px;cursor: pointer"></i>
                                    <input type="file" id="img" name="ads_file" hidden>
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
    // Use Javascript
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1;
    var yyyy = today.getFullYear();
    if(dd<10){
        dd='0'+dd
    }
    if(mm<10){
        mm='0'+mm
    }

    today = yyyy+'-'+mm+'-'+dd;
    document.getElementById("datefield").setAttribute("min", today);
</script>
