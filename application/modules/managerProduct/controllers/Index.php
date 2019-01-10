<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Zenn
 * Date: 12/24/2018
 * Time: 11:01 PM
 */

class Index extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper([
            'url',
            'form',
            'validate'
        ]);
        $this->load->config('config_notification');
        $this->noError = config_item('notifyError');
    }

    public function index()
    {
        $action = $this->input->get('action');
        switch ($action) {
            case 'index':
                $this->manager();
                break;
            case 'create':
                $this->create();
                break;
            case 'edit':
                $this->edit();
                break;
            case 'delete':
                $this->delete();
                break;
            case 'category':
                $this->category();
                break;
            default:
                $this->manager();
                break;
        }
    }

    private function manager()
    {
        $data = [];
        $data['siteTitle'] = 'Quản lý sản phẩm';
        $template = 'manager';
        $this->loadView($template, $data);
    }

    private function create()
    {
        $data = [];
        $data['siteTitle'] = 'Thêm mới sản phẩm';

        $error = [];
        if ($this->input->server('REQUEST_METHOD') == 'POST') {

            $title = $this->input->post('title');
            $slugs = $this->input->post('slugs');
            $desc = $this->input->post('desc');
            $content = $this->input->post('content');
            $keywords = $this->input->post('keywords');
            $tags = $this->input->post('tags');
            $price = $this->input->post('price');

            if (empty($error)) {

            } else {

            }
        }
        $template = 'create';
        $this->loadView($template, $data);
    }

    private function edit()
    {

    }

    private function delete()
    {

    }

    private function category()
    {

    }

    private function loadView($template, $data)
    {
        $this->load->config('config_template');
        $this->load->view(config_item('pathHeader'), $data);
        $this->load->view($template, $data);
        $this->load->view(config_item('pathFooter'), $data);
    }

    public function createSlug()
    {
        $this->load->library([
            'slugs',
            'output'
        ]);
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $title = $this->input->post('title');
            $slugs = $this->slugs->create($title);
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('slugs' => $slugs)));
        }
    }
}