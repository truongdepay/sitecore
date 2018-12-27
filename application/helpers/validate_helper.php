<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: TruongNv
 * Date: 12/25/2018
 * Time: 3:41 PM
 */


if (!function_exists('titleCheck')) {
    /**
     * @param string $title
     * @return bool
     */
    function titleCheck($title = '')
    {
        if (preg_match('/[.]{1,}/', $title, $match)) {
            return true;
        } else {
            return false;
        }
    }
}

if (!function_exists('descCheck')) {
    /**
     * @param string $desc
     * @return bool
     */
    function descCheck($desc = '')
    {
        if (preg_match('/[.]{1,}/', $title, $match)) {
            return true;
        } else {
            return false;
        }
    }
}