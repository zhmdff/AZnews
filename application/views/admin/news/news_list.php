<?php $directory = base_url('public/admin/') ?>
<?php $this->load->view('admin/includes/header') ?>
<?php $this->load->view('admin/includes/sidebar') ?>

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="page-heading">
                <?php $this->load->view('admin/includes/page_title')?>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <span style="font-weight: bold; font-size: 20px">News List</span>
                            <a href="<?php echo base_url('admin_news_add')?>"><button class="btn btn-success" style="float: right">Add News</button></a>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Video</th>
                                        <th>Img</th>
                                        <th>Tools</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php foreach ($select_all_news as $news){ ?>
                                    <tr>
                                        <td><?php echo $news['news_id'] ?></td>
                                        <td><?php echo $news['news_title'] ?></td>
                                        <td><?php echo $news['news_date'] ?></td>
                                        <td><?php echo $news['news_category'] ?></td>

                                        <td>
                                            <?php if ($news['news_status'] == 'Active'){ ?>
                                                <span class="badge bg-success"><?php echo $news['news_status'] ?></span>
                                            <?php }else{ ?>
                                                <span class="badge bg-danger"><?php echo $news['news_status'] ?></span>
                                            <?php } ?>
                                        </td>

                                        <td>
                                            <?php if ($news['news_video'] == 'Yes'){ ?>
                                                <span class="badge bg-success"><?php echo $news['news_video'] ?></span>
                                            <?php }else{ ?>
                                                <span class="badge bg-danger"><?php echo $news['news_video'] ?></span>
                                            <?php } ?>
                                        </td>

                                        <td>
                                            <?php if ($news['news_file']){ ?>
                                                <img src="<?php echo base_url('uploads/news/'.$news['news_file']) ?>" alt="user1" style="width: 60px ;height: 60px ;border-radius: 6px;object-fit: cover; -webkit-filter: drop-shadow(5px 5px 5px #666666);filter: drop-shadow(5px 5px 5px #666666);">
                                            <?php }else{ ?>
                                                <img width="50px" src="<?php echo base_url('public/user/assets/img/no-image.png') ?>" alt="user1" style="width: 60px ;height: 60px ;border-radius: 6px;object-fit: cover; -webkit-filter: drop-shadow(5px 5px 5px #666666);filter: drop-shadow(5px 5px 5px #666666);">
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <a style="color: black" href="<?php echo base_url('admin_news_view/'.$news['news_id']) ?>">
                                                <i class="bi bi-eye" style="font-size: 20px"></i>
                                            </a>
                                            /
                                            <a style="color: black" href="<?php echo base_url('admin_news_edit/'.$news['news_id']) ?>">
                                                <i class="bi bi-pen" style="font-size: 20px"></i>
                                            </a>
                                            /
                                            <a onclick="return confirm('Melumat silinecek! Davam edilsin?')" style="color: black" href="<?php echo base_url('admin_news_delete/'.$news['news_id']) ?>">
                                                <i class="bi bi-trash" style="font-size: 20px"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>

<?php $this->load->view('admin/includes/footer') ?>
<?php $this->load->view('admin/includes/footerStyle') ?>


    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
</body>

</html>