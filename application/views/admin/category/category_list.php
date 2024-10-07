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
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <span style="font-weight: bold; font-size: 20px">News List</span>
                    <a href="<?php echo base_url('category_add')?>"><button class="btn btn-success" style="float: right">Add Nav Item</button></a>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Link</th>
                            <th>News</th>
                            <th style="text-align: right">Tools</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($categoryData as $item){ ?>
                            <tr>
                                <td><?php echo $item['category_name'] ?></td>
                                <td><?php echo $item['category_link'] ?></td>
                                <td><?php echo $item['category_news'] ?></td>
                                <td style="text-align: right">
                                    <a style="color: black" href="<?php echo base_url('category_edit/'.$item['category_id'])?>">
                                        <i class="bi bi-pen" style="font-size: 20px"></i>Edit Category  /
                                    </a>

                                    <a onclick="return confirm('Kategoriyada olan xəbərlər silinecek! Davam edilsin?')" style="color: black" href="<?php echo base_url('category_only_news_delete/'.$item['category_id'])?>">
                                        <i class="bi bi-trash" style="font-size: 20px"></i>Delete Category News  /
                                    </a>

                                    <a onclick="return confirm('Kategoriya silinecek! Davam edilsin?')" style="color: black" href="<?php echo base_url('category_delete/'.$item['category_id'])?>">
                                        <i class="bi bi-eraser" style="font-size: 20px"></i>Delete Category  /
                                    </a>

                                    <a onclick="return confirm('Kategoriya və həmin kategoriyadakı xəbərlər silinecek! Davam edilsin?')" style="color: black" href="<?php echo base_url('category_news_delete/'.$item['category_id'])?>">
                                        <i class="bi bi-trash-fill" style="font-size: 20px"></i>Delete Category & News
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
</div>
<?php $this->load->view('admin/includes/footer') ?>
<?php $this->load->view('admin/includes/footerStyle') ?>
<script>
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>