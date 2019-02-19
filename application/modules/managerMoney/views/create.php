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
    <div class="form-group">
        <label for="content">Contents</label>
        <input type="text" class="form-control" id="content" placeholder="contents" name="content">
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
</script>