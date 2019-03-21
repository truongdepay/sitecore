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
            'security'
        ]);
    }

    public function register()
    {
        $data = [];
        $data['siteTitle'] = 'Đăng ký';
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