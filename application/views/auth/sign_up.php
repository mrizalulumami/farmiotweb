<div class="container mt-5">
        <div class="row login-m">
            <div class="col-md-6">
                <div class="card login-shd">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mt-3 mb-3">
                                    <img src="<?= base_url('assets');?>/assets/image/InOT-2.png" width="100%" alt="login">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4 class="text-login">Register</h4>
                                <?= $this->session->flashData('message'); ?>

                                <form class="mt-4" style="font-size: 12px;" method="post" action="<?= base_url('auth/register'); ?>">
                                    <div class="mb-3">
                                        <label for="fullname" class="form-label"><b>Full Name</b></label>
                                        <input type="text" class="form-control" id="fullname" name="fullname"
                                            placeholder="fullname">
                                        <?= form_error('fullname', '<small class="text-danger pl-3">,</small>'); ?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="username" class="form-label"><b>Username</b></label>
                                        <input type="text" class="form-control" id="username" name="username"
                                            placeholder="username">
                                        <?= form_error('username', '<small class="text-danger pl-3">,</small>'); ?>
                                    </div>
                                    <div class="mb-3" style="font-size: 12px;">
                                        <label for="password" class="form-label"><b>Password</b></label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="password">
                                        <?= form_error('password', '<small class="text-danger pl-3">,</small>'); ?>
                                    </div>
                                    <div class="btn-login">
                                        <button type="submit" class="btn btn-login">Sign Up</button>
                                    </div>
                                </form>
                                <div class="centering log-in mt-3" style="font-size: 12px;">
                                    <span>have account ?</span>
                                    <a href="<?= base_url('auth');?>" class="sign-up-b">Sign In</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>