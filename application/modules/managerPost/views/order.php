<?php
/**
 * Created by PhpStorm.
 * User: TruongNv
 * Date: 3/28/2019
 * Time: 5:07 PM
 */
?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">

            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Chọn</th>
                        <th scope="col">ID</th>
                        <th></th>
                        <th scope="col">Tiêu đề</th>
                        <th scope="col">Banner Slide</th>
                        <th scope="col">Trang chủ</th>
                        <th scope="col">Hot</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($result as $key => $value) { ?>
                        <tr>
                            <td><div class="form-check form-check-inline">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2-<?= $value->id; ?>" value="<?= $value->id; ?>" onclick="selectRow(this);">
                                        <label class="custom-control-label" for="customCheck2-<?= $value->id; ?>"></label>
                                    </div>
                                </div>
                            <th scope="row"><?= $value->id; ?></th>
                            <th><img src="<?= base_url($value->thumb); ?>" alt="" width="64px"></th>
                            <td><?= $value->title ?></td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="slide-check-<?= $value->id; ?>" value="<?= $value->id; ?>" onclick="setType(this)">
                                        <label class="custom-control-label" for="slide-check-<?= $value->id; ?>"></label>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="home-check-<?= $value->id; ?>" value="<?= $value->id; ?>" onclick="setType(this)">
                                        <label class="custom-control-label" for="home-check-<?= $value->id; ?>"></label>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="hot-check-<?= $value->id; ?>" value="<?= $value->id; ?>" onclick="setType(this)">
                                        <label class="custom-control-label" for="hot-check-<?= $value->id; ?>"></label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<input type="hidden" name="csrf_name" value="<?= $csrf_value ?>">
<script>
    function setType(elm) {
        var id = $(elm).val();
        var action = $(elm).prop('checked');
        var csrf_value = $("input[name=csrf_name]").val();
        var type = 1;
        var url = window.location.origin + '/managerPost/order/index';
        console.log(csrf_value);
        $.ajax({
            url : url,
            type : 'post',
            data : {csrf_name:csrf_value, type:type, id:id, action:action},
            dataType : 'json',
            success : function (result) {

            }
        });
    }
</script>