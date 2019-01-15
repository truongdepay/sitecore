<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: TruongNv
 * Date: 1/15/2019
 * Time: 2:59 PM
 */
?>

<?= form_open_multipart('managerPost/index/index?action=edit&id=' . $id); ?>
<div class="form-group">
    <label for="title">Tiêu đề</label>
    <input type="text" class="form-control" id="title" placeholder="" name="title" url-data="/managerPost/index/createSlug?action=edit&id=<?= $item->id ?>" value="<?= keepData('dataPost', 'title', $item->title); ?>">
</div>
<div class="form-group">
    <label for="title">Slugs</label>
    <input type="text" class="form-control" id="slugs" placeholder="" name="slugs" url-data="/managerPost/index/createSlug?action=edit&id=<?= $item->id ?>" value="<?= keepData('dataPost', 'slugs', $item->slugs); ?>">
    <span class="error-slugs text-danger"></span>
</div>
<div class="form-group">
    <label for="desc">Mô tả</label>
    <textarea class="form-control" id="desc" rows="3" name="desc"><?= keepData('dataPost', 'desc', $item->desc); ?></textarea>
</div>
<div class="form-group">
    <label for="content">Nội dung</label>
    <textarea class="form-control" id="content" rows="3" name="content"><?= keepData('dataPost', 'content', $item->content); ?></textarea>
</div>
<div class="form-group">
    <label for="keywords">Từ khóa</label>
    <input type="text" class="form-control" id="keywords" placeholder="" name="keywords" value="<?= keepData('dataPost', 'keywords', $item->keywords); ?>">
</div>
<div class="form-group">
    <label for="keywords">Tags</label>
    <input type="text" class="form-control" id="tags" placeholder="" name="tags" value="<?= keepData('dataPost', 'tags', $item->tags); ?>">
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
    <img src="<?= base_url($item->thumb); ?>" alt="" class="" id="thumb-preview" width="100px">
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