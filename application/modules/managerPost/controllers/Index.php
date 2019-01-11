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
        $this->load->model('postModel');
        $this->load->config('config_upload');
        $this->configImg = config_item('img');
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
        $data = [];
        $data['siteTitle'] = 'Thêm mới bài viết';

        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $error = [];
            $title = $this->input->post('title');
            $slugs = $this->input->post('slugs');
            $desc = $this->input->post('desc');
            $content = $this->input->post('content');
            $keywords = $this->input->post('keywords');
            $tags = $this->input->post('tags');
            $category = $this->input->post('category');
            if (!titleCheck($title)) {
                $error['title'] = $this->noError['title'];
            }

            if (!descCheck($desc)) {
                $error['desc'] = $this->noError['desc'];
            }

            if (!slugsCheck($slugs)) {
                $error['slugs'] = $this->noError['slugs'];
            }

            $checkExistSlugs = $this->postModel->checkExist('slugs', $slugs);
            if ($checkExistSlugs != 0) {
                $error['dupSlugs'] = $this->noError['dupSlugs'];
            }

            if (empty($error)) {
                $checkUpload = $this->do_upload($slugs);
                if (isset($checkUpload['error'])) {
                    $error['uploadImages'] = $this->noError['uploadImages'];
                }
                if (empty($error)) {
                    $thumb = $this->configImg['upload_path'] . $slugs . '/' . $checkUpload['upload_data']['raw_name'] . $checkUpload['upload_data']['file_ext'];
                    $postData = [
                        'slugs' => $slugs,
//                    'status' => $status,
                        'category' => $category,
                        'title' => $title,
                        'desc' => $desc,
                        'content' => $content,
                        'thumb' => $thumb,
//                    'type' => $type,
//                    'order' => $order,
                        'keywords' => $keywords,
                        'tags' => $tags,
                        'date_create' => time()
                    ];
                    $this->postModel->add($postData);
                } else {
                    var_dump($error);
                }
            } else {
                var_dump($error);
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

    public function createSlug()
    {
        $this->load->library([
            'slugs',
            'output'
        ]);
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $title = $this->input->post('title');
            $slugs = $this->slugs->create($title);
            $check = $this->postModel->checkExist('slugs', $slugs);
            if ($check != 0) {
                $notify = $this->noError['dupSlugs'];
            } else {
                $notify = '';
            }
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode([
                    'slugs' => $slugs,
                    'notify' => $notify
                ]));
        }
    }

    private function loadView($template, $data)
    {
        $this->load->config('config_template');
        $this->load->view(config_item('pathHeader'), $data);
        $this->load->view($template, $data);
        $this->load->view(config_item('pathFooter'), $data);
    }

    private function do_upload($slugs)
    {
        if (!file_exists($this->configImg['upload_path'] . $slugs)) {
            mkdir($this->configImg['upload_path'] . $slugs, 0777, true);
        }

        $config['upload_path'] = $this->configImg['upload_path'] . $slugs . '/';
        $config['allowed_types'] = $this->configImg['allowed_types'];
        $config['max_size'] = $this->configImg['max_size'];
        $config['max_width'] = $this->configImg['max_width'];
        $config['max_height'] = $this->configImg['max_height'];

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('thumb'))
        {
            $error = array('error' => $this->upload->display_errors());
            return $error;
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            return $data;
        }
    }
}