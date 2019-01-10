<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: TruongNv
 * Date: 12/25/2018
 * Time: 1:55 PM
 */
?>

<?= form_open('managerPost/index/index?action=create'); ?>
<div class="form-group">
    <label for="title">Tiêu đề</label>
    <input type="text" class="form-control" id="title" placeholder="" name="title" url-data="/managerPost/index/createSlug">
</div>
<div class="form-group">
    <label for="title">Slugs</label>
    <input type="text" class="form-control" id="slugs" placeholder="" name="slugs" url-data="/managerPost/index/createSlug">
    <span class="error-slugs text-danger"></span>
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
    <label for="keywords">Từ khóa</label>
    <input type="text" class="form-control" id="keywords" placeholder="" name="keywords">
</div>
<div class="form-group">
    <label for="keywords">Tags</label>
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
<div class="form-group">
    <label for="thumb">Ảnh</label>
    <input type="file" class="" name="thumb" id="thumb" onchange="previewFile()">
    <img src="" alt="" class="" id="thumb-preview" width="100px">
</div>
<input type="submit" name="save" id="save" class="btn btn-primary" value="Lưu">
<?= form_close(); ?>
<script>
    function previewFile(){
        var preview = document.getElementById('thumb-preview'); //selects the query named img
        var file    = document.getElementById('thumb').files[0]; //sames as here
        var reader  = new FileReader();

        reader.onloadend = function () {
            preview.src = reader.result;
        }

        if (file) {
            reader.readAsDataURL(file); //reads the data as a URL
        } else {
            preview.src = "";
        }
    }
</script>