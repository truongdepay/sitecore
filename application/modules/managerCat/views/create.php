<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: TruongNv
 * Date: 1/22/2019
 * Time: 9:30 AM
 */
?>
<h3><?= $siteTitle ?></h3>
<?php
if ($this->session->userdata('error')) {
    echo displayError($this->session->userdata('error'));
}
?>
<?= form_open_multipart('managerProduct/index/index?action=create'); ?>
<div class="form-group">
    <label for="title">Tiêu đề sản phẩm</label>
    <input type="text" class="form-control" id="title" placeholder="" name="title" url-data="/managerProduct/index/createSlug" value="<?= keepData('dataProduct','title') ?>">
</div>
<div class="form-group">
    <label for="title">Slugs</label>
    <input type="text" class="form-control" id="slugs" placeholder="" name="slugs" url-data="/managerProduct/index/createSlug" value="<?= keepData('dataProduct','slugs') ?>">
    <span class="error-slugs text-danger"></span>
</div>
<div class="form-group">
    <label for="category">Danh mục cha</label>
    <select class="form-control" id="category" name="category">
        <option value="0">Không chọn(mặc định là cha)</option>
    </select>
</div>
<div class="form-group">
    <label for="status">Trạng thái</label>
    <select class="form-control" id="status" name="status">
        <option value="">Chọn trạng thái</option>
        <option value="1">Công khai</option>
        <option value="0">Lưu nháp</option>
    </select>
</div>
<input type="submit" name="save" id="save" class="btn btn-primary" value="Lưu">
<?= form_close(); ?>
