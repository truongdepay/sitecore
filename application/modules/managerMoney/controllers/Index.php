<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: TruongNv
 * Date: 2/19/2019
 * Time: 10:02 AM
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

        $this->load->model('Money_model');
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
        $template = 'create';
        $data = [];
        $data['siteTitle'] = 'Manager Money';

        if (strtolower($this->input->server('REQUEST_METHOD')) == 'post') {
            $date = $this->input->post('date');
            $content = $this->input->post('content');
            $money = $this->input->post('money');

            $error = [];

            if (!checkNull($date)) {
                $error['date'] = 'Not null';
            }

            if (!checkNull($content)) {
                $error['content'] = 'Not null';
            }

            if (!priceCheck($money)) {
                $error['money'] = 'Tiền sai';
            }
            if (empty($error)) {
                $dataSave = [
                    'date' => strtotime($date),
                    'content' => $content,
                    'money' => $money
                ];

                $this->Money_model->add($dataSave);
                redirect('managerMoney/index/index?action=create');
            } else {
                redirect('managerMoney/index/index?action=create');
            }

        }

        $this->loadView($template, $data);
    }

    public function spendToday()
    {
        $data = [];

        $listSpend = $this->Money_model->getResult();
        $data['listSpend'] = $listSpend;

        $template = 'spendToday';
        $this->load->view($template, $data);
    }

    private function loadView($template, $data)
    {
        $this->load->config('config_template');
        $this->load->view(config_item('pathHeaderAdmin'), $data);
        $this->load->view($template, $data);
        $this->load->view(config_item('pathFooter'), $data);
    }
}