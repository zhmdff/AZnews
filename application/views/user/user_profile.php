<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:900,300);
    .user_profile_container {
        width: 400px;
        margin: 120px auto 120px;
        background-color: #fff;
        padding: 0 20px 20px;
        border-radius: 6px;
        -webkit-border-radius: 6px;
        -moz-border-radius: 6px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.075);
        -webkit-box-shadow: 0 2px 5px rgba(0,0,0,0.075);
        -moz-box-shadow: 0 2px 5px rgba(0,0,0,0.075);
        text-align: center;
    }

    .avatar-flip {
        border-radius: 100px;
        overflow: hidden;
        height: 150px;
        width: 150px;
        position: relative;
        margin: auto;
        top: -60px;
        transition: all 0.3s ease-in-out;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        box-shadow: 0 0 0 13px #f0f0f0;
        -webkit-box-shadow: 0 0 0 13px #f0f0f0;
        -moz-box-shadow: 0 0 0 13px #f0f0f0;
    }
    .avatar-flip img {
        position: absolute;
        left: 0;
        top: 0;
        border-radius: 100px;
        transition: all 0.3s ease-in-out;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
    }

    .user_profile_name {
        font-size: 32px;
        font-weight: 600;
        margin-bottom: 15px;
        color: #333;
    }
    .user_profile_info {
        font-size: 13px;
        color: #00baff;
        letter-spacing: 1px;
        margin-bottom: 25px
    }
    .user_profile_text {
        font-size: 16px;
        line-height: 26px;
        margin-bottom: 20px;
        color: #666;
    }
</style>

<div class="container user_profile_container" style="height: 390px!important;">
    <div class="avatar-flip"><img style="object-fit: cover;" src="<?php print_r(base_url('uploads/user_profile/'.$_SESSION['user_data']['user_img']))?>" height="150" width="150"></div>
    <h2 class="user_profile_name"><?php echo print_r($_SESSION['user_data']['user_first_name']. ' ' .$_SESSION['user_data']['user_last_name'], TRUE) ; ?></h2>
    <h4 class="user_profile_info"><?php echo print_r($_SESSION['user_data']['user_username'], TRUE) ; ?></h4>

    <div class="input-group mb-3" style="padding: 0px 30px">
        <?php if ($this->session->flashdata('PFPERR')){ ?>
            <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <?php echo $this->session->flashdata('PFPERR')?>
            </div>
        <?php }?>
        <div class="custom-file">
            <form action="<?php echo print_r(base_url('user_add_pfp/'.$_SESSION['user_data']['user_id']), TRUE) ?>" enctype="multipart/form-data" method="POST">
                <input type="file" class="custom-file-input" id="inputGroupFile01" name="user_img">
                <label class="custom-file-label" for="inputGroupFile01"><p style="float: left">Upload Profile Picture</p></label>
                <button onclick="return confirm('Please login to see changes! Do you want to continue?')" style="margin-top: 100px" type="submit" class="btn btn-danger">Apply</button>
            </form>
        </div>
    </div>

</div>