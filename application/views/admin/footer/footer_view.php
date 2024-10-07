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
                    <div class="card-body">
                        <img style="max-width: 70%" src="<?php echo base_url('public/all/'.$footer['footer_img'])?>" alt="">
                        <br><br>
                        <div class="form-group mb-3">
                            <p><?php echo $footer['footer_text'] ?></p>
                        </div>
                        <a href="<?php echo base_url('admin_footer_edit')?>"><button type="submit" class="btn btn-success" style="float: right; margin-top: 30px";>Edit</button></a>
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
