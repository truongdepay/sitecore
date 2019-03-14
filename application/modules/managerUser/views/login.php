<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: TruongNv
 * Date: 1/31/2019
 * Time: 2:18 PM
 */
?>
<div class="login-box">
    <a href="<?= site_url('') ?>" class="logo-name text-lg text-center">EngLish CMS</a>
    <p class="text-center m-t-md">Please login into your account.</p>
    <?= form_open('managerUser/index/index?action=login'); ?>
        <div class="form-group">
            <input type="text" name="username" id="username" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-success btn-block" name="submit">Login</button>
        <p class="text-center m-t-xs text-sm">Do not have an account?</p>
    <?= form_close(); ?>
    <p class="text-center m-t-xs text-sm">2015 &copy; Modern by Steelcoders.</p>
</div>


