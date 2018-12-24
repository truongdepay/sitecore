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
            'url'
        ]);

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
        $data['siteTitle'] = 'Quản lý bài viết';
        $template = 'manager';
        $this->loadView($template, $data);
    }

    private function create()
    {

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
}