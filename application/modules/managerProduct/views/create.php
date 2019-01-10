<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Zenn
 * Date: 12/25/2018
 * Time: 11:20 PM
 */
?>
<h3><?= $siteTitle ?></h3>
<?= form_open('managerProduct/index/index?action=create'); ?>
<div class="form-group">
    <label for="title">Tiêu đề sản phẩm</label>
    <input type="text" class="form-control" id="title" placeholder="" name="title">
</div>
<div class="form-group">
    <label for="title">Slugs</label>
    <input type="text" class="form-control" id="slugs" placeholder="" name="slugs">
</div>
<div class="form-group">
    <label for="desc">Mô tả</label>
    <textarea class="form-control" id="desc" rows="3" name="desc"></textarea>
</div>
<div class="form-group">
    <label for="content">Nội dung</label>
    <textarea class="form-control" id="content" rows="3" name="content"></textarea>
</div>
<div class="form-group">
    <label for="price">Giá</label>
    <input type="number" class="form-control" id="price" placeholder="" name="price">
</div>
<div class="form-group">
    <label for="keywords">Từ khóa</label>
    <input type="text" class="form-control" id="keywords" placeholder="" name="keywords">
</div>
<div class="form-group">
    <label for="tags">Tags</label>
    <input type="text" class="form-control" id="tags" placeholder="" name="tags">
</div>
<div class="form-group">
    <label for="category">Danh mục</label>
    <select class="form-control" id="category">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select>
</div>
<input type="submit" name="save" id="save" class="btn btn-primary" value="Lưu">
<?= form_close(); ?>