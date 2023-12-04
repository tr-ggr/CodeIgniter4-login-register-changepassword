<?=$this->extend("layout")?>
  
<?=$this->section("content")?>
  
<div class="container">
    <div class="row justify-content-md-center mt-5">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand">User Information Form</a>
                    <div class="d-flex">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="<?php echo base_url('/logout'); ?>">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <h2 class="text-center mt-5">User Dashboard</h2>

            <p class="text-center mt-5"><b>Welcome </b>            <?php echo $name;?></p>
            <p class="text-center mt-5"><b>Birthday:</b>            <?php echo $birthday;?></p>
            <p class="text-center mt-5"><b>Contact Details</b></p>
            <p class="text-center mt-5"><b>Email: </b>            <?php echo $email;?></p>
            <p class="text-center mt-5"><b>Contact: </b>            <?php echo $contactNumber;?></p>



            <h2 class="text-center mt-5">Reset Password</h2>

            <form action="<?php echo base_url('/dashboard'); ?>" method="post">
                        <div class="mb-3">
                            <label for="newpass" class="form-label">New Password</label>
                            <input type="password" class="form-control" id="newpass" name="newpass">
                            <?php if(isset($validation)):?>
                                <small class="text-danger"><?= $validation->getError('newpass') ?></small>
                            <?php endif;?>
                        </div>

                        <div class="mb-3">
                            <label for="currpass" class="form-label">Current Password</label>
                            <input type="password" class="form-control" id="currpass" name="currpass">
                            <?php if(isset($validation)):?>
                                <small class="text-danger"><?= $validation->getError('currpass') ?></small>
                            <?php endif;?>
                        </div>
                        <div class="mb-3">
                            <label for="confirm" class="form-label">Confirm Current Password</label>
                            <input type="password" class="form-control" id="confirm" name="confirm">
                            <?php if(isset($validation)):?>
                                <small class="text-danger"><?= $validation->getError('confirm') ?></small>
                            <?php endif;?>
                        </div>
                        <div class="d-grid gap-2 mb-3">
                            <button type="submit" class="btn btn-danger btn-block">Reset Password</button>
                        </div>
                    </form>
        </div>
    </div>
     
</div>
  
<?=$this->endSection()?>