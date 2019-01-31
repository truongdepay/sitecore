<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: TruongNv
 * Date: 1/31/2019
 * Time: 2:18 PM
 */
?>

<div class="row justify-content-md-center mt-5">
    <div class="col col-lg-5 col-sm-12 col-md-12">
        <h3>Login!!!</h3>
        <?= form_open('managerUser/index/index?action=login'); ?>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Login</button>
        <?= form_close(); ?>
    </div>
</div>