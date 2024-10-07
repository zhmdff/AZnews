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
                        <span style="font-weight: bold; font-size: 20px">About Edit</span>
                        <a href="<?php echo base_url('admin_about_view')?>"><button type="button" class="btn btn-secondary" style="float: right">Back</button></a>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('admin_about_edit_act')?>" method="POST" enctype="multipart/form-data">
                            <div class="form-group mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">About</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="about_text" required><?php echo $about['about_text'] ?></textarea>
                            </div>
                            <br>
                            <fieldset class="form-group" style="float: left;  margin: 0px 10px;">
                                <label for="img" class="form-label" style="float: left">About Image</label>
                                <br>
                                <label for="img">
                                    <i class="bi bi-image" style="font-size: 45px;cursor: pointer"></i>
                                    <input type="file" id="img" name="about_img" hidden>
                                    <img src="<?php echo base_url('public/all/'. $about['about_img'])?>" alt="" style="width: 45px ;height: 45px ;border-radius: 6px;object-fit: cover; -webkit-filter: drop-shadow(5px 5px 5px #666666);filter: drop-shadow(5px 5px 5px #666666); margin-bottom: 35px; margin-left: 10px">
                                </label>
                            </fieldset>
                            <button type="submit" class="btn btn-success" style="float: right; margin-top: 30px";>Edit</button>
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

    $('#select_box').change(function () {
        var select=$(this).find(':selected').val();
        $(".hide").hide();
        $('#' + select).show();

    }).change();

</script>
