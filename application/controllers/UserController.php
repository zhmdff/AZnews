<?php

class UserController extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $header = [
            'header_navbar' => $this->db->get('news_nav')->result_array(),
            'header_ads' => $this->db->where('ads_location','Header')->where('ads_status','Active')->limit(1)->order_by('ads_id','DESC')->get('ads')->row_array(),
            'all_category' => $this->db->get('category')->result_array(),
        ];

        $this->load->view('user/includes/headerStyle');
        $this->load->view('user/includes/header',$header);

    }


    public function index(){

//        content
        $index['getNewestData'] = $this->db->where('news_status','Active')->limit(2)->order_by('news_id','DESC')->get('news')->row_array();
        $index['getAllData'] = $this->db->where('news_status','Active')->limit(3,1)->order_by('news_id','DESC')->get('news')->result_array();
        $index['getAllDataDate'] = $this->db->where('news_status','Active')->limit(10)->order_by('news_date','DESC')->get('news')->result_array();
        $index['getAllDataP2'] = $this->db->where('news_status','Active')->limit(5,4)->order_by('news_id','DESC')->get('news')->result_array();
        $index['getAllTitles'] = $this->db->where('news_status','Active')->limit(5)->order_by('news_id','DESC')->get('news')->result_array();

        $index['getAllCategory'] = $this->db->limit(4)->where('news_status','Active')->order_by('news_id','RANDOM')->get('news')->result_array();
        $index['getSportCategory'] = $this->db->limit(4)->where('news_status','Active')->order_by('news_id','DESC')->where('news_category','Sport')->get('news')->result_array();
        $index['getFinanceCategory'] = $this->db->limit(4)->where('news_status','Active')->order_by('news_id','DESC')->where('news_category','Finance')->get('news')->result_array();
        $index['getTechnologyCategory'] = $this->db->limit(4)->where('news_status','Active')->order_by('news_id','DESC')->where('news_category','Technology')->get('news')->result_array();
        $index['getMusicCategory'] = $this->db->limit(4)->where('news_status','Active')->order_by('news_id','DESC')->where('news_category','Music')->get('news')->result_array();
        $index['getEducationCategory'] = $this->db->limit(4)->where('news_status','Active')->order_by('news_id','DESC')->where('news_category','Education')->get('news')->result_array();

        $index['home_ads'] = $this->db->where('ads_location','Home')->where('ads_status','Active')->limit(1)->order_by('ads_id','RANDOM')->get('ads')->row_array();
        $index['social_data'] = $this->db->get('social_media')->result_array();

        $this->load->view('user/index',$index);
        $this->footer();
    }

    public function category($category){

        $categoryData['category_ads'] = $this->db->where('ads_location','Category')->where('ads_status','Active')->limit(1)->order_by('ads_id','RANDOM')->get('ads')->row_array();
        $categoryData['get_category'] = $this->db->order_by('news_id','DESC')->where('news_category',$category)->where('news_status','Active')->get('news')->result_array();
        $categoryData['social_data'] = $this->db->get('social_media')->result_array();
        $categoryData['getAllCategory'] = $this->db->get('category')->result_array();

        $this->load->view('user/category',$categoryData);
        $this->footer();
    }

    public function about(){

        $about['about_ads'] = $this->db->where('ads_location','About')->where('ads_status','Active')->order_by('ads_id','RANDOM')->get('ads')->row_array();
        $about['social_data'] = $this->db->get('social_media')->result_array();
        $about['getAllTitles'] = $this->db->limit(5)->order_by('news_id','DESC')->get('news')->result_array();
        $about['about_data'] = $this->db->get('about')->row_array();

        $this->load->view('user/about',$about);
        $this->footer();
    }

    public function latest_news(){

        $latest_news['social_data'] = $this->db->get('social_media')->result_array();
        $latest_news['getAllCategory'] = $this->db->get('category')->result_array();
        $latest_news['ads'] = $this->db->where('ads_location','Latest_news')->where('ads_status','Active')->limit(1)->order_by('ads_id','RANDOM')->get('ads')->row_array();
        $latest_news['news'] = $this->db->where('news_id','DESC')->where('news_status','Active')->limit(1)->get('news')->row();

        $this->load->view('user/latest_news',$latest_news);
        $this->footer();
    }

    public function contact(){

        $contact['contact_data'] = $this->db->get('contact_data')->result_array();

        $this->load->view('user/contact',$contact);
        $this->footer();
    }

    public function all_news($offset=0){

        $all_news['all_news_ads'] = $this->db->where('ads_location','Home')->where('ads_status','Active')->limit(1)->order_by('ads_id','RANDOM')->get('ads')->row_array();
        $all_news['social_data'] = $this->db->get('social_media')->result_array();
        $all_news['getAllCategory'] = $this->db->get('category')->result_array();
        $all_news['recent_news'] = $this->db->order_by('news_id','DESC')->where('news_status','Active')->limit(4)->get('news')->result_array();




        $this->load->model('news_model');
        $this->load->library('pagination');

        $config['base_url'] = 'http://aznews.rf.gd/all_news' ;
        $config['total_rows'] = $this->news_model->countAll();
        $config['per_page'] = 10;
        $config['full_tag_open'] = '<div class="pagination list-group-horizontal">';
        $config['full_tag_close'] = '</div>';
        $config['first_link'] = false;
        $config['last_link'] = false;

        $config['first_tag_open'] = '<div class="list-group-item">';
        $config['first_tag_close'] = '</div>';

        $config['prev_link'] = '&laquo';

        $config['prev_tag_open'] = '<div class="prev list-group-item">';
        $config['prev_tag_close'] = '</div>';

        $config['next_link'] = '&raquo';

        $config['next_tag_open'] = '<div class="list-group-item">';
        $config['next_tag_close'] = '</div>';

        $config['last_tag_open'] = '<div class="list-group-item">';
        $config['last_tag_close'] = '</div>';

        $config['cur_tag_open'] = '<div class="list-group-item active"><a href="#"><span style="color: white">';
        $config['cur_tag_close'] = '<span style="color: black"></a></div>';

        $config['num_tag_open'] = '<div class="list-group-item ">';
        $config['num_tag_close'] = '</div>';

        $this->pagination->initialize($config);

        $all_news['pag_news'] = $this->news_model->getAll($config['per_page'],$offset);
        $all_news['pag'] = $this->pagination->create_links();

        $this->load->view('user/all_news',$all_news);
        $this->footer();
    }

    public function single($id){

        $all = $this->db->where('news_status','Active')->where('news_id',$id)->get('news')->row_array();


        if ($id == $all['news_id']){

        $single['getSingleNews'] = $this->db->where('news_status','Active')->where('news_id',$id)->get('news')->row_array();
        $single['getRandomNews'] = $this->db->where('news_status','Active')->order_by('admin_id','RANDOM')->get('news')->row_array();
        $single['getRandomNews2'] = $this->db->where('news_status','Active')->order_by('admin_id','RANDOM')->get('news')->row_array();
        $single['getSameCategoryNews'] = $this->db->where('news_status','Active')->where('news_category',$single['getSingleNews']['news_category'])->limit(4)->get('news')->result_array();
        $single['getComment'] = $this->db->where('news_id',$id)->get('comments')->result_array();
        $single['getVideoNews'] = $this->db->where('news_status','Active')->where('news_id',$id)->get('news')->row_array();
        $single['getAllCategory'] = $this->db->get('category')->result_array();
        $single['single_ads'] = $this->db->where('ads_location','Single')->where('ads_status','Active')->order_by('ads_id','RANDOM')->get('ads')->row_array();


        $this->load->view('user/single_news',$single);
        $this->footer();
        }else{
            redirect(base_url('404_error'));
        }
    }

    public function add_comment_act(){

        $comment   = $_POST['comment'];
        $name   = $_POST['name'];
        $email   = $_POST['email'];
        $news_id   = $_POST['news_id'];
        $date = date("F j, Y, H:m");
        $type   = 'guest';
        $img   = 'comment.png';



        if (!empty($comment) && !empty($name) && !empty($email) && !empty($news_id) && !empty($date) && !empty($type) && !empty($img)){

            $data = [
                'comment'  => $comment,
                'comment_name'  => $name,
                'comment_email'  => $email,
                'news_id'  => $news_id,
                'comment_date'  => $date,
                'comment_type'  => $type,
                'comment_user_img'  => $img,
            ];

            $this->session->set_flashdata('CommentSucc','Your comment was sent successfully!');
            $this->db->insert('comments', $data);


        }else{
            $this->session->set_flashdata('CommentError','Please fill out all fields!');
        }

        redirect($_SERVER['HTTP_REFERER']);

    }

    public function add_user_comment_act(){

        $comment   = $_POST['comment'];
        $name = $_SESSION['user_data']['user_username'];
        $email = $_SESSION['user_data']['user_email'];
        $news_id   = $_POST['news_id'];
        $date = date("F j, Y, H:m");
        $type = 'user';
        $img = $_SESSION['user_data']['user_img'];



        if (!empty($comment) && !empty($name) && !empty($email) && !empty($news_id) && !empty($date) && !empty($type)){

            $data = [
                'comment'  => $comment,
                'comment_name'  => $name,
                'comment_email'  => $email,
                'news_id'  => $news_id,
                'comment_date'  => $date,
                'comment_type'  => $type,
                'comment_user_img'  => $img,
            ];

            $this->session->set_flashdata('CommentSucc','Your comment was sent successfully!');
            $this->db->insert('comments', $data);


        }else{
            $this->session->set_flashdata('CommentError','Please fill out all fields!');
        }

        redirect($_SERVER['HTTP_REFERER']);
    }

    public function user_register(){
        $this->load->view('user/user_register');
        $this->footer();
    }

    public function user_register_act(){

        $user_first_name = $_POST['user_first_name'];
        $user_last_name = $_POST['user_last_name'];
        $user_username = $_POST['user_username'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        $user_password_confirm = $_POST['user_password_confirm'];
        $user_birthday = $_POST['user_birthday'];
        $user_gender = $_POST['user_gender'];
        $user_img = 'no_user.jpg';

        if (!empty($user_first_name) && !empty($user_last_name) && !empty($user_username) && !empty($user_email) && !empty($user_password) && !empty($user_password_confirm) && !empty($user_gender) && !empty($user_birthday)){


            if ($user_password !== $user_password_confirm){

                $this->session->set_flashdata('ERROR_3','The password confirmation does not match!');
                redirect($_SERVER['HTTP_REFERER']);

            }else{


                $data = [
                    'user_first_name' => $user_first_name,
                    'user_last_name' => $user_last_name,
                    'user_username' => $user_username,
                    'user_email' => $user_email,
                    'user_password' => md5($user_password),
                    'user_birthday' => $user_birthday,
                    'user_gender' => $user_gender,
                    'user_img' => $user_img,
                ];

                $username = [
                    'user_username' =>$user_username,
                ];

                $email = [
                    'user_email' =>$user_email,
                ];

                $result_username = $this->db->where($username)->get('user_info')->row_array();
                $result_email = $this->db->where($email)->get('user_info')->row_array();

                if ($result_username){

                    $this->session->set_flashdata('ERROR_2','Username or Email exist!');
                    redirect($_SERVER['HTTP_REFERER']);

                }elseif ($result_email){

                    $this->session->set_flashdata('ERROR_2','Username or Email exist!');
                    redirect($_SERVER['HTTP_REFERER']);

                }else{

                    $this->db->insert('user_info',$data);
                    $this->session->set_flashdata('SUCC','Congratulations, your account has been successfully created! Please Log In!');
                    redirect(base_url('user_login'));

                }



            }


        }else{

            $this->session->set_flashdata('ERROR','Please fill in all the required fields!');
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    public function user_login(){
        $this->load->view('user/user_login');
        $this->footer();
    }

    public function user_login_act(){

        $username = $_POST['user_login_username'];
        $password = $_POST['user_login_password'];

        if (!empty($username) && !empty($password)){

            $data = [
                'user_username' => $username,
                'user_password' => md5($password),
            ];

            $result = $this->db->where($data)->get('user_info')->row_array();

            if ($result){
                $_SESSION['user_data'] = $result;
                redirect(base_url('home'));
            }else{
                $this->session->set_flashdata('ERROR','User not found!');
                redirect($_SERVER['HTTP_REFERER']);
            }

        }else{
            $this->session->set_flashdata('ERROR','Please fill in all the required fields!');
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function user_log_out(){
        unset($_SESSION['user_data']);
        redirect(base_url('home'));
    }

    public function user_profile(){

        if (!$_SESSION['user_data']){
            redirect(base_url('home'));
        }else{

//        footer
        $footer['footer_data'] = $this->db->get('social_media')->result_array();
        $footer['footer_item'] = $this->db->get('footer')->result_array();

        $this->load->view('user/user_profile');
        $this->load->view('user/includes/footer',$footer);
        $this->load->view('user/includes/footerStyle');


        }
    }


    public function contact_act(){

        $subject = $_POST['subject'];
        $message   = $_POST['message'];
        $name   = $_POST['name'];
        $email   = $_POST['email'];
        $date = date("F j, Y");
        $type   = 'guest';
        $img   = 'comment.png';



        if (!empty($subject) && !empty($message) && !empty($name) && !empty($email) && !empty($date) && !empty($type) && !empty($img)){

            $data = [
                'message_subject' => $subject,
                'message'  => $message,
                'message_date'  => $date,

                'user_username'  => $name,
                'user_email'  => $email,
                'user_type'  => $type,
                'user_img'  => $img,
            ];

            $this->session->set_flashdata('ContactSucc','Your message was sent successfully!');
            $this->db->insert('user_contact', $data);
            redirect($_SERVER['HTTP_REFERER']);

        }

        $this->session->set_flashdata('ContactError','Please fill out all fields!');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function user_contact_act(){

        $subject = $_POST['subject'];
        $message   = $_POST['message'];
        $name   = $_SESSION['user_data']['user_username'];
        $email   = $_SESSION['user_data']['user_email'];
        $date = date("F j, Y");
        $type   = 'user';
        $img   = $_SESSION['user_data']['user_img'];



        if (!empty($subject) && !empty($message) && !empty($name) && !empty($email) && !empty($date) && !empty($type) && !empty($img)){

            $data = [
                'message_subject' => $subject,
                'message'  => $message,
                'message_date'  => $date,

                'user_username'  => $name,
                'user_email'  => $email,
                'user_type'  => $type,
                'user_img'  => $img,
            ];

            $this->session->set_flashdata('ContactSucc','Your message was sent successfully!');
            $this->db->insert('user_contact', $data);
            redirect($_SERVER['HTTP_REFERER']);

        }

        $this->session->set_flashdata('ContactError','Please fill out all fields!');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function user_add_pfp($id){

        $config['upload_path']          = 'uploads/user_profile';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 10000;
        $config['max_width']            = 1024;
        $config['max_height']           = 1024;
        $config['encrypt_name']         = TRUE;

        $this->upload->initialize($config);

        if ($this->upload->do_upload('user_img')){

            $file_name = $this->upload->data("file_name");

            $data = [
                'user_img' => $file_name,
            ];

            $this->db->where('user_id', $id)->update('user_info', $data);
            redirect(base_url('user_login'));
        }else{
            $this->session->set_flashdata('PFPERR','Something went wrong. Please try again!');
            redirect($_SERVER['HTTP_REFERER']);
        }

    }

    public function footer(){

        $footer['footer_data2'] = $this->db->get('footer_data')->row_array();
        $footer['footer_data'] = $this->db->get('social_media')->result_array();
        $footer['footer_item'] = $this->db->get('footer')->result_array();

        $this->load->view('user/includes/footer',$footer);
        $this->load->view('user/includes/footerStyle');
    }


}