<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top: 45px;">
            <div class="col-md-4 offset-md-4">
                <h4>Sign Up</h4><br>
                <form action="<?= base_url('/apt/public/auth/save'); ?>" method="POST">
                    <?= csrf_field(); ?>
                    <?php if(!empty(session()->getFlashdata('fail'))) : ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                    <?php endif ?>

                    <?php if(!empty(session()->getFlashdata('success'))) : ?>
                        <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                    <?php endif ?>
                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input type="name" class="form-control" id="name" name="name" placeholder="Enter your full" value="<?= set_value ('name'); ?>">
                        <span class="text danger"><?= isset($validation) ? display_error($validation, 'name') : '' ?></span>
                    </div>
                     <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" value="<?= set_value ('email'); ?>">
                        <span class="text danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>
                    </div>
                    <div class="form-group mb-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" value="<?= set_value ('password'); ?>">
                        <span class="text danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></span>
                    </div>
                     <div class="form-group mb-3">
                        <label for="password">Confirm Password</label>
                        <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm your password" value="<?= set_value ('cpassword'); ?>">
                        <span class="text danger"><?= isset($validation) ? display_error($validation, 'cpassword') : '' ?></span>
                    </div>
                    <div class="form-group mb-3">
                        <button class="btn btn-primary btn-block w-100" type="submit">Sign Up</button>
                    </div>
                    <br>
                    <a href="<?= site_url('/apt/public/auth/login'); ?>">I already have account, login now</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
