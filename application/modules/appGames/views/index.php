<?php
/**
 * Created by PhpStorm.
 * User: TruongNv
 * Date: 3/20/2019
 * Time: 3:52 PM
 */
?>
<div class="row justify-content-lg-center">
    <div class="col-lg-6">
        <img src="<?= base_url('assets/img/banner.jpg') ?>" alt="banner" class="w-100">
        <div class="card mt-2">
            <div class="card-header">Số bạn đã chọn</div>
            <div class="card-body">
                <h2 class="g_message" style="text-align: center">Vui lòng chọn số!</h2>
            </div>
        </div>
        <div class="row">
            <div class="col" id="error">

            </div>
        </div>
        <div class="card mt-1">
            <div class="card-body">
                <div class="row">
                    <?php
                    for ($i = 0; $i < $keyboard; $i++) {
                        ?>
                        <div class="col-4 col-sm-3 col-md-3 col-lg-2 p-2">
                            <button class="btn btn-success w-100" onclick="selectNumber(this);"><?= $i ?></button>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="row">
                    <div class="col-6 p-2">
                        <button class="btn btn-danger w-100" onclick="resetNumber();">Reset</button>
                    </div>
                    <div class="col-6 p-2">
                        <button class="btn btn-primary w-100" onclick="sendNumber();">Xác nhận</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="val-select">
<input type="hidden" name="<?= $csrf_name ?>" value="<?= $csrf_value ?>" id="csrf">
<script>
    function selectNumber(elm) {
        var number = $(elm).text();
        var valHidden = $("#val-select").val();
        valHidden += number;
        if (valHidden.length > 2) {
            $("#error").html("<p class='text-danger bg-light'>Chỉ được nhập 2 số, vui lòng Reset để nhập lại!</p>");
            setTimeout(function () {
                $("#error").html("");
            }, 2000);
        } else {
            $("#val-select").val(valHidden);
            $('.g_message').html(valHidden);
        }

    }

    function resetNumber() {
        $("#val-select").val('');
        $('.g_message').html('Vui lòng chọn số!');
    }

    function sendNumber() {
        var number = $("#val-select").val();
        if (number.length > 0 && number.length <= 2) {
            var host = window.location.origin;
            var uri = '/appGames/index/logic';
            var url = host + uri;
            var csrf_name = $("#csrf").attr('name');
            var csrf_value = $("#csrf").val();

            $.ajax({
                url : url,
                type : 'post',
                data : {csrf_name:csrf_value, number:number},
                dataType : 'json',
                success : function (result) {

                }
            });
        } else {
            $("#error").html("<p class='text-danger bg-light'>Bạn chưa nhập số, vui lòng nhập số rồi xác nhận!</p>");
            setTimeout(function () {
                $("#error").html("");
            }, 2000);
        }
    }
</script>