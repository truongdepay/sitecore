<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: TruongNv
 * Date: 1/22/2019
 * Time: 9:12 AM
 */
class Index extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper([
            'url',
            'form',
            'elements',
            'validate'
        ]);

        $this->load->library([
            'session'
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

    private function create()
    {
        $data = [];
        $data['siteTitle'] = 'Thêm mới danh mục';



        $template = 'create';
        $this->loadView($template, $data);
    }

    private function loadView($template, $data)
    {
        $this->load->config('config_template');
        $this->load->view(config_item('pathHeader'), $data);
        $this->load->view($template, $data);
        $this->load->view(config_item('pathFooter'), $data);
    }

//    public function createSlug()
//    {
//        $this->load->library([
//            'slugs',
//            'output'
//        ]);
//        $action = $this->input->get('action');
//        $id = $this->input->get('id');
//
//        if ($this->input->server('REQUEST_METHOD') == 'POST') {
//            $title = $this->input->post('title');
//            $slugs = $this->slugs->create($title);
//
//            if ($action == 'edit') {
//                $check = $this->productModel->checkExist('slugs', $slugs, $id);
//            } else {
//                $check = $this->productModel->checkExist('slugs', $slugs);
//            }
//
//            if ($check != 0) {
//                $notify = $this->noError['dupSlugs'];
//            } else {
//                $notify = '';
//            }
//
//            $this->output
//                ->set_content_type('application/json')
//                ->set_output(json_encode([
//                    'slugs' => $slugs,
//                    'notify' => $notify
//                ]));
//        }
//    }

}