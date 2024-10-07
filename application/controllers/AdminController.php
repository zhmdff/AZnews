<?php

class AdminController extends CI_Controller{


    public function dashboard(){

        $result['all_users'] = $this->db->get('user_info')->num_rows();
        $result['all_news'] = $this->db->get('news')->num_rows();
        $result['all_admins'] = $this->db->get('admin')->num_rows();
        $result['all_category_num'] = $this->db->get('category')->num_rows();
        $result['recent_contacts'] = $this->db->limit(3)->order_by('message_id','DESC')->get('user_contact')->result_array();
        $result['active_admins'] = $this->db->limit(5)->order_by('admin_id','DESC')->where('admin_status',"Active")->get('admin')->result_array();
        $result['all_comments'] = $this->db->limit(4)->order_by('comment_id', 'DESC')->get('comments')->result_array();
        $result['all_category'] = $this->db->get('category')->result_array();
        $result['latest_news'] = $this->db->limit(3)->get('news')->result_array();


        $this->load->view('admin/admin_profile/dashboard',$result);
    }

///////////////////////////
//    LOGIN & LOGOUT    //
//////////////////////////


    public function index(){
        $this->load->view('admin/admin_profile/login');
    }

    public function login_act(){

        $username = $_POST['username'];
        $password = $_POST['password'];

        if (!empty($username) && !empty($password)){
            $data = [
                'admin_username' => $username,
                'admin_password' => md5($password),
            ];

            $result = $this->db->where($data)->get('admin')->row_array();

            if ($result){

                if ($result['admin_status'] !== 'Active'){
                    $this->session->set_flashdata('ERROR','Your account not active!');
                    redirect($_SERVER['HTTP_REFERER']);
                }

                $_SESSION['admin_data'] = $result;
                redirect(base_url('admin_dashboard'));
            }else{
                $this->session->set_flashdata('ERROR','User not found!');
                redirect($_SERVER['HTTP_REFERER']);
            }

        }else{
            $this->session->set_flashdata('ERROR','Please fill out all fields!');
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    public function log_out(){
        unset($_SESSION['admin_data']);
        redirect(base_url('admin_login'));
    }


///////////////////////////
//    LOGIN & LOGOUT    //
//////////////////////////



///////////////////////////
//    ADMIN PROFILE     //
//////////////////////////

    public function admin_list(){

        $data['select_all_admin'] = $this->db->get('admin')->result_array();
        $this->load->view('admin/admin_profile/admin_list', $data);
    }

    public function admin_profile(){
        $data['all_data'] = $this->db->get('social_media')->result_array();
        $this->load->view('admin/admin_profile/admin_profile',$data);
    }

    public function admin_profile_edit($id){
        $data['edit_admin'] = $this->db->where('admin_id', $id)->get('admin')->row_array();
        $this->load->view('admin/admin_profile/admin_profile_edit',$data);
    }

    public function admin_profile_edit_act($id){

        $fullname       = $_POST['admin_fullname'];
        $username       = $_POST['admin_username'];
        $email          = $_POST['admin_email'];
        $phone          = $_POST['admin_phone'];
        $status         = $_POST['admin_status'];
        $permission     = $_POST['admin_permission'];

        if (!empty($fullname) && !empty($username) && !empty($email) && !empty($phone) && !empty($status) && !empty($permission)){


            $data = [
                'admin_fullname'    => $fullname,
                'admin_username'    => $username,
                'admin_email'       => $email,
                'admin_phone'       => $phone,
                'admin_status'      => $status,
                'admin_permission'  => $permission,
            ];



            $this->db->where('admin_id', $id)->update('admin', $data);
            redirect(base_url('admin_login'));



        }else{
            redirect(base_url('admin_dashboard'));
        }

        redirect(base_url('admin_dashboard'));
    }

    public function admin_profile_social_media_edit_act($id){

        $github      = $_POST['admin_github'];
        $twitter     = $_POST['admin_twitter'];
        $instagram   = $_POST['admin_instagram'];
        $facebook    = $_POST['admin_facebook'];

        if (!empty($github) && !empty($twitter) && !empty($instagram) && !empty($facebook)){


            $data = [
                'admin_github'    => $github,
                'admin_twitter'   => $twitter,
                'admin_instagram' => $instagram,
                'admin_facebook'  => $facebook,
            ];



            $this->db->where('admin_id', $id)->update('admin', $data);
            $this->session->set_flashdata('ERROR','Məlumatlarınızın görmək üçün giriş edin!');
            redirect(base_url('admin_login'));



        }else{
            redirect(base_url('admin_profile_edit'));
        }
    }

    public function change_admin_pfp($id){

        $config['upload_path']          = './uploads/admin_profile';
        $config['allowed_types']        = 'gif|jpg|png';

        $this->upload->initialize($config);

        if ($this->upload->do_upload('admin_pfp')){

            $file_name = $this->upload->data("file_name");

            $data = [
                'admin_img' => $file_name,
            ];

            $this->db->where('admin_id', $id)->update('admin', $data);
            redirect(base_url('admin_login'));


        }
        redirect(base_url('admin_profile'));
    }

    public function admin_profile_delete($id){
        $this->db->where('admin_id', $id)->delete('admin');
        redirect(base_url('admin_login'));
    }



    public function admin_profile_owner($id){
        $data['all_social_media'] = $this->db->get('social_media')->result_array();
        $data['all_data'] = $this->db->where('admin_id',$id)->get('admin')->row_array();
        $this->load->view('admin/admin_profile/admin_profile_owner',$data);
    }

    public function admin_profile_social_media_edit_owner_act($id){

        $github      = $_POST['admin_github'];
        $twitter     = $_POST['admin_twitter'];
        $instagram   = $_POST['admin_instagram'];
        $facebook    = $_POST['admin_facebook'];

        if (!empty($github) && !empty($twitter) && !empty($instagram) && !empty($facebook)){


            $data = [
                'admin_github'    => $github,
                'admin_twitter'   => $twitter,
                'admin_instagram' => $instagram,
                'admin_facebook'  => $facebook,
            ];



            $this->db->where('admin_id', $id)->update('admin', $data);
            $this->session->set_flashdata('ERROR','Məlumatlarınızın görmək üçün giriş edin!');
            redirect(base_url('admin_login'));



        }else{
            redirect(base_url('admin_profile_edit'));
        }
    }

    public function change_admin_pfp_owner($id){

        $config['upload_path']          = './uploads/admin_profile';
        $config['allowed_types']        = 'gif|jpg|png';

        $this->upload->initialize($config);

        if ($this->upload->do_upload('admin_pfp')){

            $file_name = $this->upload->data("file_name");

            $data = [
                'admin_img' => $file_name,
            ];

            $this->db->where('admin_id', $id)->update('admin', $data);
            redirect(base_url('admin_list'));


        }
        redirect(base_url('admin_list'));
    }

    public function admin_profile_edit_owner($id){
        $data['edit_admin'] = $this->db->where('admin_id', $id)->get('admin')->row_array();
        $this->load->view('admin/admin_profile/admin_profile_edit_owner',$data);
    }

    public function admin_profile_edit_owner_act($id){

        $fullname       = $_POST['admin_fullname'];
        $username       = $_POST['admin_username'];
        $email          = $_POST['admin_email'];
        $phone          = $_POST['admin_phone'];
        $status         = $_POST['admin_status'];
        $permission     = $_POST['admin_permission'];

        if (!empty($fullname) && !empty($username) && !empty($email) && !empty($phone) && !empty($status) && !empty($permission)){


            $data = [
                'admin_fullname'    => $fullname,
                'admin_username'    => $username,
                'admin_email'       => $email,
                'admin_phone'       => $phone,
                'admin_status'      => $status,
                'admin_permission'  => $permission,
            ];

            $this->db->where('admin_id', $id)->update('admin', $data);
            redirect(base_url('admin_list'));

        }else{
            redirect(base_url('admin_dashboard'));
        }

        redirect(base_url('admin_dashboard'));
    }

    public function admin_profile_delete_owner($id){
        $this->db->where('admin_id', $id)->delete('admin');
        redirect(base_url('admin_login'));
    }



///////////////////////////
//    ADMIN PROFILE     //
//////////////////////////



///////////////////////////
//         NEWS         //
//////////////////////////


    public function news_list(){

        $data['select_all_news'] = $this->db->order_by('news_id','DESC')->get('news')->result_array();
        $this->load->view('admin/news/news_list', $data);
    }

    public function news_add(){
        $this->load->view('admin/news/news_add');
    }

    public function news_add_act(){

        $title          = $_POST['news_title'];
        $description    = $_POST['news_description'];
        $date           = $_POST['news_date'];
        $category       = $_POST['news_category'];
        $status         = $_POST['news_status'];
        $video          = $_POST['news_video'];
        $video_link     = $_POST['news_video_link'];

        if (!empty($title) && !empty($description) && !empty($date) && !empty($category) && !empty($status)){

            $config['upload_path']          = './uploads/news/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 10000;
            $config['encrypt_name']         = TRUE;

            $this->upload->initialize($config);

            if ($this->upload->do_upload('news_file')){

                $file_name = $this->upload->data("file_name");
                $file_ext = $this->upload->data("file_ext");

                $data = [
                    'news_title'        => $title,
                    'news_description'  => $description,
                    'news_date'         => $date,
                    'news_category'     => $category,
                    'news_status'       => $status,
                    'news_file'         => $file_name,
                    'news_file_ext'     => $file_ext,
                    'news_video'        => $video,
                    'news_video_link'   => $video_link,
                ];

                $this->db->insert('news', $data);
                redirect(base_url('admin_news_list'));



            }else{
                $data = [
                    'news_title'        => $title,
                    'news_description'  => $description,
                    'news_date'         => $date,
                    'news_category'     => $category,
                    'news_status'       => $status,
                    'news_video'        => $video,
                    'news_video_link'   => $video_link,
                ];

                $this->db->insert('news', $data);
                redirect(base_url('admin_news_list'));
            }





        }else{
            redirect(base_url($_SERVER['HTTP_REFERER']));
        }

        redirect(base_url('admin_news_list'));

    }

    public function news_view($id){
        $data['select_single_news'] = $this->db->where('news_id', $id)->get('news')->row_array();
        $this->load->view('admin/news/news_single', $data);
    }

    public function news_edit($id){
        $data['select_single_news'] = $this->db->where('news_id', $id)->get('news')->row_array();
        $this->load->view('admin/news/news_edit', $data);
    }

    public function news_edit_act($id){
        $title          = $_POST['news_title'];
        $description    = $_POST['news_description'];
        $date           = $_POST['news_date'];
        $category       = $_POST['news_category'];
        $status         = $_POST['news_status'];

        if (!empty($title) && !empty($description) && !empty($date) && !empty($category) && !empty($status)){

            $config['upload_path']          = './uploads/news/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 10000;
            $config['encrypt_name']         = TRUE;

            $this->upload->initialize($config);

            if ($this->upload->do_upload('news_file')){

                $file_name = $this->upload->data("file_name");
                $file_ext = $this->upload->data("file_ext");

                $data = [
                    'news_title'        => $title,
                    'news_description'  => $description,
                    'news_date'         => $date,
                    'news_category'     => $category,
                    'news_status'       => $status,
                    'news_file'         => $file_name,
                    'news_file_ext'     => $file_ext,
                ];

                $this->db->where('news_id', $id)->update('news', $data);
                redirect(base_url('admin_news_list'));



            }else{
                $data = [
                    'news_title'        => $title,
                    'news_description'  => $description,
                    'news_date'         => $date,
                    'news_category'     => $category,
                    'news_status'       => $status,
                ];

                $this->db->where('news_id', $id)->update('news', $data);
                redirect(base_url('admin_news_list'));
            }





        }else{
            redirect(base_url($_SERVER['HTTP_REFERER']));
        }

        redirect(base_url('admin_news_list'));
    }

    public function news_delete($id){
        $this->db->where('news_id', $id)->delete('news');
        redirect(base_url('admin_news_list'));
    }


///////////////////////////
//         NEWS         //
//////////////////////////



///////////////////////////
//        CONTACT        //
//////////////////////////


    public function contact_list(){
        $contact['contact_data'] = $this->db->get('contact_data')->result_array();
        $this->load->view('admin/contact/contact_list', $contact);
    }

    public function contact_edit($id){
        $contact['contact_data'] = $this->db->where('contact_id', $id)->get('contact_data')->row_array();
        $this->load->view('admin/contact/contact_edit', $contact);
    }

    public function contact_edit_act($id){

        $name  = $_POST['contact_name'];
        $alt   = $_POST['contact_alt'];
        $icon  = $_POST['contact_icon'];


        if (!empty($name) && !empty($alt) && !empty($icon)){

                $data = [
                    'contact_name'   => $name,
                    'contact_alt'    => $alt,
                    'contact_icon'   => $icon,
                ];

                $this->db->where('contact_id', $id)->update('contact_data', $data);
                redirect(base_url('contact_list'));


        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }

        redirect(base_url('contact_list'));

    }


///////////////////////////
//        CONTACT        //
//////////////////////////



///////////////////////////
//          ADS         //
//////////////////////////


    public function ads_list(){
        $data['select_all_ads'] = $this->db->get('ads')->result_array();
        $this->load->view('admin/ads/ads_list', $data);
    }

    public function ads_add(){
        $this->load->view('admin/ads/ads_add');
    }

    public function ads_add_act(){

        $title          = $_POST['ads_title'];
        $company_name   = $_POST['ads_company_name'];
        $exp_date       = $_POST['ads_exp_date'];
        $moneypm        = $_POST['ads_money_per_month'];
        $status         = $_POST['ads_status'];
        $location       = $_POST['ads_location'];

        if (!empty($title) && !empty($company_name) && !empty($exp_date) && !empty($moneypm) && !empty($location)){

            $config['upload_path']          = './uploads/adsFile/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 10000;
            $config['encrypt_name']         = TRUE;

            $this->upload->initialize($config);

            if ($this->upload->do_upload('ads_file')){

                $ads_img = $this->upload->data("file_name");

                $data = [
                    'ads_title'             => $title,
                    'ads_company_name'      => $company_name,
                    'ads_expiration_date'   => $exp_date,
                    'ads_money'             => $moneypm,
                    'ads_status'            => $status,
                    'ads_location'          => $location,
                    'ads_img'               => $ads_img,
                ];

                $this->db->insert('ads', $data);
                redirect(base_url('ads_list'));



            }else{
                $data = [
                    'ads_title'             => $title,
                    'ads_company_name'      => $company_name,
                    'ads_expiration_date'   => $exp_date,
                    'ads_money'             => $moneypm,
                    'ads_status'            => $status,
                    'ads_location'          => $location,
                ];

                $this->db->insert('ads', $data);
                redirect(base_url('ads_list'));
            }





        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }

        redirect(base_url('ads_list'));

    }

    public function ads_view($id){
        $data['select_single_ads'] = $this->db->where('ads_id', $id)->get('ads')->row_array();
        $this->load->view('admin/ads/ads_single', $data);
    }

    public function ads_edit($id){
        $data['select_single_ads'] = $this->db->where('ads_id', $id)->get('ads')->row_array();
        $this->load->view('admin/ads/ads_edit', $data);
    }

    public function ads_edit_act($id){

        $title          = $_POST['ads_title'];
        $company_name   = $_POST['ads_company_name'];
        $exp_date       = $_POST['ads_exp_date'];
        $moneypm        = $_POST['ads_money_per_month'];
        $status         = $_POST['ads_status'];
        $location       = $_POST['ads_location'];

        if (!empty($title) && !empty($company_name) && !empty($exp_date) && !empty($moneypm) && !empty($location)){

            $config['upload_path']          = './uploads/adsFile/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 10000;
            $config['encrypt_name']         = TRUE;

            $this->upload->initialize($config);

            if ($this->upload->do_upload('ads_file')){

                $ads_img = $this->upload->data("file_name");

                $data = [
                    'ads_title'             => $title,
                    'ads_company_name'      => $company_name,
                    'ads_expiration_date'   => $exp_date,
                    'ads_money'             => $moneypm,
                    'ads_status'            => $status,
                    'ads_location'          => $location,
                    'ads_img'               => $ads_img,
                ];

                $this->db->where('ads_id', $id)->update('ads', $data);
                redirect(base_url('ads_list'));



            }else{
                $data = [
                    'ads_title'             => $title,
                    'ads_company_name'      => $company_name,
                    'ads_expiration_date'   => $exp_date,
                    'ads_money'             => $moneypm,
                    'ads_status'            => $status,
                    'ads_location'          => $location,
                ];

                $this->db->where('ads_id', $id)->update('ads', $data);
                redirect(base_url('ads_list'));
            }





        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }

        redirect(base_url('ads_list'));

    }

    public function ads_delete($id){
        $this->db->where('ads_id', $id)->delete('ads');
        redirect(base_url('ads_list'));
    }


///////////////////////////
//          ADS         //
//////////////////////////



///////////////////////////
//        NAVBAR        //
//////////////////////////


    public function navbar_list(){
        $data['navData'] = $this->db->get('news_nav')->result_array();
        $this->load->view('admin/navbar/navbar_list',$data);
    }

    public function navbar_add(){
        $this->load->view('admin/navbar/navbar_add');
    }

    public function navbar_add_act(){

        $name   = $_POST['name'];
        $link   = $_POST['link'];

        if (!empty($name) && !empty($link)){

            $data = [
                'nav_name'  => $name,
                'nav_link'  => $link,
            ];

            $this->db->insert('news_nav', $data);
            redirect(base_url('navbar_list'));


        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }

        redirect(base_url('navbar_list'));

    }

    public function navbar_edit($id){
        $data['all_data'] = $this->db->where('nav_id', $id)->get('news_nav')->row_array();
        $this->load->view('admin/navbar/navbar_edit', $data);
    }

    public function navbar_edit_act($id){

        $name   = $_POST['name'];
        $link   = $_POST['link'];

        if (!empty($name) && !empty($link)){

            $data = [
                'nav_name'  => $name,
                'nav_link'  => $link,
            ];

            $this->db->where('nav_id', $id)->update('news_nav', $data);
            redirect(base_url('navbar_list'));


        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }

        redirect(base_url('navbar_list'));

    }

    public function navbar_delete($id){
        $this->db->where('nav_id', $id)->delete('news_nav');
        redirect(base_url('navbar_list'));
    }


///////////////////////////
//        NAVBAR        //
//////////////////////////



///////////////////////////
//       CATEGORY       //
//////////////////////////


    public function category_list(){
        $data['categoryData'] = $this->db->get('category')->result_array();
        $this->load->view('admin/category/category_list',$data);
    }

    public function category_add(){
        $this->load->view('admin/category/category_add');
    }

    public function category_add_act(){

        $name   = $_POST['category_name'];
        $link   = $_POST['category_link'];
        $news   = $_POST['category_news'];

        if (!empty($name) && !empty($link) && !empty($news)){

            $data = [
                'category_name'  => $name,
                'category_link'  => $link,
                'category_news'  => $news,
            ];

            $this->db->insert('category', $data);
            redirect(base_url('category_list'));


        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }

        redirect(base_url('category_list'));

    }

    public function category_edit($id){
        $data['category_data'] = $this->db->where('category_id', $id)->get('category')->row_array();
        $this->load->view('admin/category/category_edit', $data);
    }

    public function category_edit_act($id){

        $name   = $_POST['category_name'];
        $link   = $_POST['category_link'];
        $news   = $_POST['category_news'];

        if (!empty($name) && !empty($link) && !empty($news)){

            $data = [
                'category_name'  => $name,
                'category_link'  => $link,
                'category_news'  => $news,
            ];

            $this->db->where('category_id', $id)->update('category', $data);
            redirect(base_url('category_list'));


        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }

        redirect(base_url('category_list'));

    }

    public function category_delete($id){
        $this->db->where('category_id', $id)->delete('category');
        redirect(base_url('category_list'));
    }

    public function category_news_delete($id){
        $data['categoryData'] = $this->db->where('category_id',$id)->get('category')->row_array();
        $this->db->where('category_id', $id)->delete('category');
        $this->db->where('news_category', $data['categoryData']['category_name'])->delete('news');
        redirect(base_url('category_list'));
    }

    public function category_only_news_delete($id){
        $data['categoryData'] = $this->db->where('category_id',$id)->get('category')->row_array();
        $this->db->where('news_category', $data['categoryData']['category_name'])->delete('news');
        redirect(base_url('category_list'));
    }


///////////////////////////
//       CATEGORY       //
//////////////////////////



///////////////////////////
//     SOCIAL MEDIA     //
//////////////////////////


    public function social_media_list(){
        $data['all_data'] = $this->db->get('social_media')->result_array();
        $this->load->view('admin/social_media/social_media_list', $data);
    }

    public function social_media_edit($id){
        $data['all_data'] = $this->db->where('social_media_id', $id)->get('social_media')->row_array();
        $this->load->view('admin/social_media/social_media_edit', $data);
    }

    public function social_media_edit_act($id){

        $platform   = $_POST['platform'];
        $link       = $_POST['link'];
        $icon       = $_POST['icon'];

        if (!empty($platform) && !empty($link) && !empty($icon)){

                $data = [
                    'social_media_platform'  => $platform,
                    'social_media_link'      => $link,
                    'social_media_icon'      => $icon,
                ];

                $this->db->where('social_media_id', $id)->update('social_media', $data);
                redirect(base_url('social_media_list'));


        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }

        redirect(base_url('social_media_list'));

    }

    public function social_media_add(){
        $this->load->view('admin/social_media/social_media_add');
    }

    public function social_media_add_act(){

        $platform   = $_POST['platform'];
        $link       = $_POST['link'];
        $icon       = $_POST['icon'];

        if (!empty($platform) && !empty($link) && !empty($icon)){

                $data = [
                    'social_media_platform'  => $platform,
                    'social_media_link'      => $link,
                    'social_media_icon'      => $icon,
                ];

                $this->db->insert('social_media', $data);
                redirect(base_url('social_media_list'));


        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }

        redirect(base_url('social_media_list'));

    }

    public function social_media_delete($id){
        $this->db->where('social_media_id', $id)->delete('social_media');
        redirect(base_url('social_media_list'));
    }


///////////////////////////
//     SOCIAL MEDIA     //
//////////////////////////


    public function admin_contact(){

        $contact['allcontact'] = $this->db->order_by('message_id','DESC')->get('user_contact')->result_array();

        $this->load->view('admin/contact/contact',$contact);
    }

    public function contact_single($id){
        $contact['contact_data'] = $this->db->where('message_id', $id)->get('user_contact')->row_array();
        $this->load->view('admin/contact/contact_single',$contact);
    }

    public function user_navbar(){
        $this->load->view('admin/user_navbar');
    }

    public function admin_about_view(){
        $about['about'] = $this->db->get('about')->row_array();

        $this->load->view('admin/about/about_view',$about);
    }

    public function admin_about_edit(){
        $about['about'] = $this->db->get('about')->row_array();

        $this->load->view('admin/about/about_edit',$about);
    }

    public function admin_about_edit_act(){
        $about_text   = $_POST['about_text'];

        if (!empty($about_text)){
            $config['upload_path']          = 'public/all/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 10000;

            $this->upload->initialize($config);
            $this->upload->do_upload('about_img');
            $file_name = $this->upload->data("file_name");

            $data = [
                'about_text'  => $about_text,
                'about_img'   => $file_name,
            ];

            $this->db->update('about', $data);
            redirect(base_url('admin_about_view'));


        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }

        redirect(base_url('admin_about_view'));
    }


    public function admin_footer_view(){
        $footer['footer'] = $this->db->get('footer_data')->row_array();

        $this->load->view('admin/footer/footer_view',$footer);
    }

    public function admin_footer_edit(){
        $footer['footer'] = $this->db->get('footer_data')->row_array();

        $this->load->view('admin/footer/footer_edit',$footer);
    }

    public function admin_footer_edit_act(){
        $footer_text   = $_POST['footer_text'];

        if (!empty($footer_text)){
            $config['upload_path']          = 'public/all/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 10000;

            $this->upload->initialize($config);

            if ($this->upload->do_upload('footer_img')){

                $file_name = $this->upload->data("file_name");

                $data = [
                    'footer_text'  => $footer_text,
                    'footer_img'   => $file_name,
                ];

                $this->db->update('footer_data', $data);
                redirect(base_url('admin_footer_view'));


            }

            $data = [
                'footer_text'  => $footer_text,
            ];

            $this->db->update('footer_data', $data);
            redirect(base_url('admin_footer_view'));


        }else{
            redirect($_SERVER['HTTP_REFERER']);
        }

        redirect(base_url('admin_footer_view'));
    }

}