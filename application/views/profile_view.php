<div class="container">

    <h2 class="text-center">User Information Form</h2>

    <pre> <?php #print_r($data);
            ?></pre>
    <?php foreach ($data as $profile) : ?>

        <h3>Welcome <?= $profile->user_fname; ?> <?= $profile->user_mname; ?> <?= $profile->user_lname; ?></h3>

        <h5>Birthday: <?= $profile->user_bday; ?></h5>

        <h5>Contact Details</h5>
        <p> <span class="fw-bold">Email:</span> <?= $profile->user_email; ?> <br>
            <span class="fw-bold">Contact:</span> <?= $profile->user_contact; ?>
        </p>

    <?php endforeach; ?>


    <form class="form-horizontal" method="POST">
        <fieldset>


            <legend>Reset Password</legend>


            <div class="form-group">
                <label class="col-md-4 control-label" for="currentPass">Current Password</label>
                <div class="col-md-4">
                    <input id="currentPass" name="currentPass" type="password" placeholder="Enter current password" class="form-control input-md">
                    <?php echo form_error('currentPass', '<span class="form-text text-danger">| ', '*</span> '); ?>

                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label" for="newPass">New Password</label>
                <div class="col-md-4">
                    <input id="newPass" name="newPass" type="password" placeholder="Enter new password" class="form-control input-md">
                    <?php echo form_error('newPass', '<span class="form-text text-danger">| ', '*</span> '); ?>
                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label" for="confirmPass">Re-Enter New Password</label>
                <div class="col-md-4">
                    <input id="confirmPass" name="confirmPass" type="password" placeholder="Confirm new password" class="form-control input-md">
                    <?php echo form_error('confirmPass', '<span class="form-text text-danger">| ', '*</span> '); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="resetPass"></label>
                <div class="col-md-4">
                    <button id="resetPass" name="resetPass" class="btn btn-warning">Reset Password</button>

                    <a type="a" class="btn btn-danger" href="<?= base_url('home'); ?>"> Home</a>
                </div>
            </div>

        </fieldset>
    </form>



</div>