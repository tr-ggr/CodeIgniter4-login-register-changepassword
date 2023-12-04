<?=$this->extend("layout")?>
  
<?=$this->section("content")?>
  
<div class="container">
    <div class="row justify-content-md-center mt-5">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Register</h5>
                    <form action="<?php echo base_url('/register'); ?>" method="post">
                        <div class="mb-3">
                            <label for="fName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="fName" name="fName" value="<?= set_value('fName') ?>">
                            <?php if(isset($validation)):?>
                                <small class="text-danger"><?= $validation->getError('fName') ?></small>
                            <?php endif;?>
                        </div>
                        <div class="mb-3">
                            <label for="mName" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" id="mName" name="mName" value="<?= set_value('mName') ?>">
                            <?php if(isset($validation)):?>
                                <small class="text-danger"><?= $validation->getError('mName') ?></small>
                            <?php endif;?>
                        </div>
                        <div class="mb-3">
                            <label for="lName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lName" name="lName" value="<?= set_value('lName') ?>">
                            <?php if(isset($validation)):?>
                                <small class="text-danger"><?= $validation->getError('lName') ?></small>
                            <?php endif;?>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?= set_value('username') ?>">
                            <?php if(isset($validation)):?>
                                <small class="text-danger"><?= $validation->getError('username') ?></small>
                            <?php endif;?>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <?php if(isset($validation)):?>
                                <small class="text-danger"><?= $validation->getError('password') ?></small>
                            <?php endif;?>
                        </div>
                        <div class="mb-3">
                            <label for="confirm_password" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                            <?php if(isset($validation)):?>
                                <small class="text-danger"><?= $validation->getError('confirm_password') ?></small>
                            <?php endif;?>
                        </div>
                        <div class="mb-3">
                            <label for="birthday" class="form-label">Birthday</label>
                            <input type="text" class="form-control" id="birthday" name="birthday" value="<?= set_value('birthday') ?>">
                            <?php if(isset($validation)):?>
                                <small class="text-danger"><?= $validation->getError('birthday') ?></small>
                            <?php endif;?>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email') ?>">
                            <?php if(isset($validation)):?>
                                <small class="text-danger"><?= $validation->getError('email') ?></small>
                            <?php endif;?>
                        </div>
                        <div class="mb-3">
                            <label for="contactNumber" class="form-label">Contact Number</label>
                            <input type="text" class="form-control" id="contactNumber" name="contactNumber" value="<?= set_value('contactNumber') ?>">
                            <?php if(isset($validation)):?>
                                <small class="text-danger"><?= $validation->getError('contactNumber') ?></small>
                            <?php endif;?>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-block">Register Now</button>
                            <p class="text-center">Have already an account <a href="<?php echo base_url('/login'); ?>">Login here</a><p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
     
</div>
  
<?=$this->endSection()?>