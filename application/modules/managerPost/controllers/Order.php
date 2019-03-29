<?php
/**
 * Created by PhpStorm.
 * User: TruongNv
 * Date: 3/28/2019
 * Time: 4:59 PM
 */

class Order extends MX_Controller
{
    protected $method;
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

        $this->method = $this->input->server('REQUEST_METHOD');
    }

    public function index()
    {

        if (strtolower($this->method) == 'post') {
            $response = [];



            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($response));
        } else {
            $data = [];
            $data['siteTitle'] = 'Order bài viết';
            $this->load->model('Post_model');
            $result = $this->Post_model->getResult();
            $data['result'] = $result;
            $data['csrf_value'] = $this->security->get_csrf_hash();
            $template = 'order';
            $this->loadView($template, $data);
        }

    }

    private function loadView($template, $data)
    {
        $this->load->config('config_template');
        $this->load->view(config_item('pathHeader'), $data);
        $this->load->view($template, $data);
        $this->load->view(config_item('pathFooter'), $data);
    }
}