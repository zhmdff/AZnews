<?php $directory = base_url('public/admin_login/') ?>
<?php unset($_SESSION['admin_data']) ?>
<!doctype html>
<html lang="en">
<head>
    <title>Admin Login</title>
    <link rel="icon" type="image/x-icon" href="public/admin/assets/images/favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo $directory?>css/style.css">
</head>
<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Admin Login</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	        <div class="icon d-flex align-items-center justify-content-center">
		      		        <span class="fa fa-user-o"></span>
		      	        </div>
		      	        <h3 class="text-center mb-4">Sign In</h3>
                        <?php if ($this->session->flashdata('ERROR')){ ?>
                            <div class="alert alert-danger alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <?php echo $this->session->flashdata('ERROR')?>
                            </div>
                        <?php }?>
						<form action="<?php echo base_url('admin_login_act')?>" class="login-form" method="POST">

                            <div class="form-group">
                                <input name="username" type="text" class="form-control rounded-left" placeholder="Username">
                            </div>

                            <div class="form-group d-flex">
                                <input name="password" type="password" class="form-control rounded-left" placeholder="Password">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
                            </div>
                        </form>
	                </div>
			    </div>
		    </div>
		</div>
	</section>

<script src="<?php echo $directory?>js/jquery.min.js"></script>
<script src="<?php echo $directory?>js/popper.js"></script>
<script src="<?php echo $directory?>js/bootstrap.min.js"></script>
<script src="<?php echo $directory?>js/main.js"></script>

</body>
</html>

