<?php
/**
 * Created by PhpStorm.
 * User: TruongNv
 * Date: 3/21/2019
 * Time: 10:41 AM
 */
?>
<h3>Bạn còn <?= $turn ?> lượt chơi!</h3>
<button class="btn btn-success" onclick="startGame()">Start Games</button>
<?= form_open('appGames/index/index', [
    'id' => 'formStartGame'
]) ?>
<?= form_close() ?>

<script>
    function startGame() {
        var idForm = document.getElementById('formStartGame');
        idForm.submit();
    }
</script>
