<?php $directory = base_url('public/admin/') ?>
<?php
    if (!isset($_SESSION['admin_data'])){
        $this->session->set_flashdata('ERROR','Please Log In!');
        redirect(base_url('admin_login'));
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="icon" type="image/x-icon" href="<?php echo $directory ?>assets/images/favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $directory ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $directory?>assets/vendors/simple-datatables/style.css">
    <link rel="stylesheet" href="<?php echo $directory ?>assets/vendors/iconly/bold.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo $directory ?>assets/vendors/toastify/toastify.css">
    <link rel="stylesheet" href="<?php echo $directory ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?php echo $directory ?>assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo $directory ?>assets/css/app.css">
    <link rel="shortcut icon" href="<?php echo $directory ?>assets/images/favicon.svg" type="image/x-icon">
</head>
<body>
<div id="app">
