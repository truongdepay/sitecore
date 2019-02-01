<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: TruongNv
 * Date: 12/26/2018
 * Time: 3:16 PM
 */
$config['notifyError'] = [
    'title' => '** Tiêu đề không hợp lệ (tiêu đề phải có lớn hơn 1 ký tự)!',
    'desc' => '** Mô tả không hợp lệ (mô tả phải có lớn hơn 1 ký tự)!',
    'slugs' => '** Slugs không hợp lệ!',
    'dupSlugs' => '** Slugs này đã được sử dụng, vui lòng sửa lại cho hợp lệ',
    'uploadImages' => '** Vui lòng up ảnh nhỏ hơn 5MB'
];

$config['notifyCommon'] = [
    'add' => 'Thêm thành công',
    'edit' => 'Sửa thành công',
    'delete' => 'Xóa thành công'
];