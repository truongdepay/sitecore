<?php
/**
 * Created by PhpStorm.
 * User: TruongNv
 * Date: 2/19/2019
 * Time: 3:26 PM
 */
?>
<h3 class="mt-5">Spend Today</h3>
<table class="table mt-1">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Content</th>
        <th scope="col">Money</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($listSpend as $value) {
        ?>
        <tr>
            <th scope="row"><?= $value->id; ?></th>
            <td><?= $value->content; ?></td>
            <td><?= number_format($value->money); ?></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
