<?php
/**
 * Created by PhpStorm.
 * User: TruongNv
 * Date: 3/21/2019
 * Time: 4:09 PM
 */
?>

<div class="container">
    <div class="row justify-content-lg-center justify-content-md-center">
        <div class="col-12 col-sm-12 col-md-8 col-lg-6">
            <div class="card border-0 rounded shadow">
                <div class="card-header">
                    <h3 class="text-danger">Điền thông tin đăng ký</h3>
                </div>
                <div class="card-body">
                    <?= form_open() ?>
                    <div class="form-group row ">
                        <div class="col-12 ">
                            <input class="form-control form-control-lg" type="text" placeholder="Name" name="fullname">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12 ">
                            <input class="form-control form-control-lg" type="text" placeholder="Username" name="username">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12 ">
                            <input class="form-control form-control-lg" type="email" placeholder="Email" name="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12 ">
                            <input class="form-control form-control-lg" type="password" placeholder="Password" name="password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12 ">
                            <input class="form-control form-control-lg" type="password" placeholder="Confirm Password" name="pass_confirm">
                        </div>
                    </div>
                    <div class="form-group text-center ">
                        <div class="col-xs-12 p-b-20 ">
                            <button class="btn btn-block btn-lg btn-info " type="submit ">Đăng ký</button>
                        </div>
                    </div>
                    <div class="form-group m-b-0 m-t-10 ">
                        <div class="col-sm-12 text-center ">
                            Nếu bạn đã có tài khoản? <a href="authentication-login1.html" class="text-info m-l-5 "><b>Đăng nhập</b></a>
                        </div>
                    </div>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>