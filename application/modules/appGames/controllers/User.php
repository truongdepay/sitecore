<?php
/**
 * Created by PhpStorm.
 * User: TruongNv
 * Date: 3/21/2019
 * Time: 4:05 PM
 */

class User extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper([
            'url',
            'form'
        ]);

        $this->load->library([
            'session',
            'security',
            'form_validation',
        ]);
        $this->load->database();

        $this->method = $this->input->server('REQUEST_METHOD');
    }

    public function register()
    {
        $data = [];
        $data['siteTitle'] = 'Đăng ký';

        if (strtolower($this->method) == 'post') {
            $config = array(
                array(
                    'field' => 'username',
                    'label' => 'Username',
                    'rules' => 'required|alpha_numeric|max_length[32]|min_length[3]|is_unique[user.username]'
                )
            );
            $this->form_validation->set_rules($config);
            if ($this->form_validation->run() == FALSE)
            {

            }
            else
            {
                echo "true";
            }
        }

        $template = 'user_register';
        $this->loadViewGame($template, $data);
    }

    private function loadViewGame($template, $data)
    {
        $this->load->config('config_template');
        $this->load->view(config_item('pathHeaderGame'), $data);
        $this->load->view($template, $data);
        $this->load->view(config_item('pathFooterGame'), $data);
    }
}