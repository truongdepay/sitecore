<?php
/**
 * Created by PhpStorm.
 * User: TruongNv
 * Date: 2/19/2019
 * Time: 10:03 AM
 */
?>
<h3 class="mt-5">Create News</h3>
<?= form_open('managerMoney/index/index?action=create'); ?>
    <div class="form-group">
        <label for="date">Date</label>
        <input type="text" class="form-control" id="date" placeholder="date..." name="date">
    </div>
    <div class="form-group position-relative">
        <label for="content">Contents</label>
        <input type="text" class="form-control" id="content" placeholder="contents" name="content">
        <div class="position-absolute bg-secondary shadow  p-3" style="z-index: 100; display: none" id="suggestions">
            <div class="row">
                <div class="col">
                    <div class="td_suggestions">
                        <h5>Gợi ý:</h5>
                        <p class="border rounded p-1">Messi</p>
                        <p class="border rounded p-1">Messi</p>
                        <p class="border rounded p-1">Messi</p>
                        <p class="border rounded p-1">Messi</p>
                        <p class="border rounded p-1">Messi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="money">Money</label>
        <input type="number" class="form-control" id="money" placeholder="money" name="money">
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
<?= form_close(); ?>

<?= modules::run('managerMoney/index/spendToday'); ?>

<script>
    $(function() {
        $( "#date" ).datepicker({
            dateFormat: "yy-mm-dd"
        });
    });

    //
    $("#content").on('input', function () {
        $("#suggestions").show(100);
        console.log(123);
    });
</script>