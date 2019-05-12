<?php
/**
 * Created by PhpStorm.
 * User: TruongNv
 * Date: 2019-05-09
 * Time: 2:39 PM
 */
?>
<div class="row justify-content-center m-3">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3><?= $siteTitle ?></h3>
            </div>
            <div class="card-body">
                <?= form_open('managerMoney/index/index?action=edit&id=' . $item->id); ?>
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="text" class="form-control" id="date" placeholder="date..." name="date" value="<?= date('Y-m-d', $item->date) ?>">
                </div>
                <div class="form-group position-relative">
                    <label for="content">Contents</label>
                    <input type="text" class="form-control input-suggestion" id="content" placeholder="contents" name="content" value="<?= $item->content ?>">
                    <div class="position-absolute bg-light shadow-lg  p-3" style="z-index: 100; display: none" id="suggestions">
                        <div class="row">
                            <div class="col">
                                <div class="td_suggestions">
                                    <h5>Gợi ý:</h5>
                                    <section id="result-suggest">

                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="money">Money</label>
                    <input type="number" class="form-control" id="money" placeholder="money" name="money" value="<?= $item->money ?>">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
        $( "#date" ).datepicker({
            dateFormat: "yy-mm-dd"
        });
    });

    $(".input-suggestion").focus(function () {
        $("#suggestions").slideDown(100);
        var str = '';
        var url = window.location.origin + '/managerMoney/index?action=getSuggest';
        getSuggest(str, url);
    });

    $(".input-suggestion").blur(function () {
        $("#suggestions").slideUp(500);
    });

    //
    $("#content").on('input', function () {
        var str = $(this).val();
        var url = window.location.origin + '/managerMoney/index?action=getSuggest';
        getSuggest(str, url);

    });

    function  getSuggest(key, url) {
        $.ajax({
            url : url,
            type : 'get',
            data : {key:key},
            dataType : 'json',
            success : function(result)
            {
                var html = '';
                if (result.result == 1) {
                    $.each(result.content, function (key, value) {
                        html += `<p class="border rounded p-1" onclick="selectSuggest(this);">${value.content}</p>`;
                    });
                } else {
                    html += `<p class="border rounded p-1 text-danger" >Not result!!</p>`
                }
                $("#result-suggest").html(html);
            }
        });
    }

    function selectSuggest(elm) {
        $("#content").val($(elm).text());
    }
</script>
