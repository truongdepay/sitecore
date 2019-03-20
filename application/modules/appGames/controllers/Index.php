<?php
/**
 * Created by PhpStorm.
 * User: TruongNv
 * Date: 3/20/2019
 * Time: 2:47 PM
 */

class Index extends MX_Controller
{
    public function __construct()
    {
        $this->load->helper([
            'url',
            'form'
        ]);
        $this->load->library([
            'output',
            'session',
            'security'
        ]);
    }

    public function index()
    {
        $data = [];
        $data['siteTitle'] = 'Game đoán số';
        $data['keyboard'] = 10;
        $data['csrf_value'] = $this->security->get_csrf_hash();
        $data['csrf_name'] = $this->security->get_csrf_token_name();
        $template = 'index';
        $this->loadViewGame($template, $data);
    }

    public function logic()
    {
        $response = [];
        $number = 56;

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    private function loadViewGame($template, $data)
    {
        $this->load->config('config_template');
        $this->load->view(config_item('pathHeaderGame'), $data);
        $this->load->view($template, $data);
        $this->load->view(config_item('pathFooterGame'), $data);
    }
}