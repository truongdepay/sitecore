<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: TruongNv
 * Date: 1/31/2019
 * Time: 3:22 PM
 */

class Users
{
    protected $_CI;

    public function __construct()
    {
        $this->_CI =& get_instance();
        $this->_CI->load->library([
            'session'
        ]);
    }

    public function checkLogin()
    {
        if ($this->_CI->session->userdata('login')) {
            $sessionLogin = $this->_CI->session->userdata('login');
            $check = $sessionLogin['check'];
            if ($check) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }


    public function redirectLogin()
    {
        $check = $this->checkLogin();
        if (!$check) {
            redirect('managerUser/index/index?action=login');
        }
    }

    public function redirectAfterLogin()
    {
        $check = $this->checkLogin();
        if ($check) {
            redirect('');
        }
    }
}